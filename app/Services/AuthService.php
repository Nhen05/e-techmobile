<?php

namespace App\Services;
use App\Models\UserModel;//Gọi đến file AdminModel
use Exception;
class AuthService extends BaseService
{
    private $users; //Biến cục bộ
    function __construct(){
        parent::__construct();
        $this -> users = new UserModel();//Khởi tạo đối tượng và gán vào users
        $this -> users -> protect(false); //Bảo vệ bảng
    }
    private function validationAddUser($requestData) {
    $rule = [
        'name'      => 'required|max_length[50]|min_length[3]',
        'email'     => 'required|valid_email',
        'phone'     => 'required|regex_match[/^[0-9]{10,11}$/]',
        'address'   => 'required|max_length[255]',
        'password'  => 'required|max_length[255]|min_length[6]',
        'repassword'=> 'required|matches[password]',
    ];

    $message = [
        'name' => [
            'required'    => 'Họ tên không được để trống',
            'max_length'  => 'Họ tên tối đa {param} ký tự',
            'min_length'  => 'Họ tên ít nhất {param} ký tự'
        ],
        'email' => [
            'required'    => 'Địa chỉ email không được để trống',
            'valid_email' => 'Email nhập sai định dạng'
        ],
        'phone' => [
            'required'     => 'Số điện thoại không được để trống',
            'regex_match'  => 'Số điện thoại phải có 10–11 chữ số'
        ],
        'address' => [
            'required'    => 'Địa chỉ không được để trống',
            'max_length'  => 'Địa chỉ tối đa {param} ký tự'
        ],
        'password' => [
            'required'    => 'Mật khẩu không được để trống',
            'max_length'  => 'Mật khẩu tối đa {param} ký tự',
            'min_length'  => 'Mật khẩu ít nhất {param} ký tự'
        ],
        'repassword' => [
            'required' => 'Nhập lại mật khẩu không được để trống',
            'matches'  => 'Mật khẩu nhập lại không khớp',
        ]
    ];

    $this->validation->setRules($rule, $message);
    $this->validation->withRequest($requestData)->run();

    return $this->validation;
}
  private function validationLogin($requestData) {
    $rule = [
        'phone'     => 'required|regex_match[/^[0-9]{10,11}$/]',
        'password'  => 'required|max_length[255]|min_length[6]'
    ];

    $message = [
       
        'phone' => [
            'required'     => 'Số điện thoại không được để trống',
            'regex_match'  => 'Số điện thoại phải có 10–11 chữ số'
        ],
        'password' => [
            'required'    => 'Mật khẩu không được để trống',
            'max_length'  => 'Mật khẩu tối đa {param} ký tự',
            'min_length'  => 'Mật khẩu ít nhất {param} ký tự'
        ]
    ];

    $this->validation->setRules($rule, $message);
    $this->validation->withRequest($requestData)->run();

    return $this->validation;
}
 public function addUsers($requestData)
{
    $validate = $this->validationAddUser($requestData);
    
    if ($validate->getErrors()) {
        return [
            'status' => 'ERROR',
            'messageCode' => 'MESSAGE_CREATEACCOUNT_ERROR',
            'messages' => $validate->getErrors()
        ];
    } else {
        try {
            $dataSave = $requestData->getPost();
            // DEFAULT VALUES
            unset($dataSave['repassword']);
            $dataSave['password'] = password_hash($dataSave['password'], PASSWORD_BCRYPT);
            $dataSave['is_verified'] = 0;
            $dataSave['verification_token'] = bin2hex(random_bytes(32)); // Generate a random token for email verification
            $dataSave['role_id'] = 2; //EXAMPLE: 2 for user role
            $dataSave['created_at'] = date('Y-m-d H:i:s');

            $this->users->save($dataSave);

            return [
                'status' => 'SUCCESS',
                'messageCode' => 'MESSAGE_CREATEACCOUNT_SUCCESS',
                'messages' => ['MESSAGE_CREATEACCOUNT_SUCCESS' => 'Đăng ký thành công']
            ];
        } catch (Exception $e) {
            return [
                'status' => 'ERROR',
                'messageCode' => 'MESSAGE_CREATEACCOUNT_ERROR',
                'messages' => ['MESSAGE_CREATEACCOUNT_ERROR' => $e->getMessage()]
            ];
        }
    }
}
public function login($requestData)
{
    $validate = $this->validationLogin($requestData);
    
    if ($validate->getErrors()) {
        return [
            'status' => 'ERROR',
            'messageCode' => 'MESSAGE_LOGIN_ERROR',
            'messages' => $validate->getErrors()
        ];
    } else {
        try {
            $data = $requestData->getPost();
            $user = $this->users->where('phone', $data['phone'])->first();

            if ($user && password_verify($data['password'], $user['password'])) {
                // Set session data
                session()->set('user_id', $user['id']);
                session()->set('user_name', $user['name']);
                session()->set('role_id', $user['role_id']);
                
                return [
                    'status' => 'SUCCESS',
                    'messageCode' => 'MESSAGE_LOGIN_SUCCESS',
                    'messages' => ['MESSAGE_LOGIN_SUCCESS' => 'Đăng nhập thành công']
                ];
            } else {
                return [
                    'status' => 'ERROR',
                    'messageCode' => 'MESSAGE_LOGIN_ERROR',
                    'messages' => ['MESSAGE_LOGIN_ERROR' => 'Số điện thoại hoặc mật khẩu không đúng']
                ];
            }
        } catch (Exception $e) {
            return [
                'status' => 'ERROR',
                'messageCode' => 'MESSAGE_LOGIN_ERROR',
                'messages' => ['MESSAGE_LOGIN_ERROR' => $e->getMessage()]
            ];
        }
    }
}
}