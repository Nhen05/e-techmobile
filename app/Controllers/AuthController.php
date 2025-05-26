<?php

namespace App\Controllers;
use App\Services\AuthService; // Import the AuthService class
class AuthController extends BaseController
{    private $serviceAuth;
    public function __construct(){
        $this->serviceAuth = new AuthService();
    }
    public function register(): string
    {
        $data = [];
        $data = $this -> giaodienClient($data);
        //$data = ['header','footer']
        return view('frontend/pages/register', $data);
    }
    public function login(): string
    {
        $data = [];
        $data = $this -> giaodienClient($data);
        //$data = ['header','footer']
        return view('frontend/pages/login', $data);
    }
public function registerAccount()
{
    $result = $this->serviceAuth->addUsers($this->request);

    if ($result['status'] === 'SUCCESS') {
        // Gọi lại xử lý đăng nhập bằng request hiện tại
        $loginResult = $this->processLogin($this->request);
        if ($loginResult['status'] === 'SUCCESS') {
            return redirect()->to('/')->with('toast_success', 'Tạo tài khoản & đăng nhập thành công!');
        } else {
            // Tạo thành công nhưng không đăng nhập được
            return redirect()->to('/login')->with('toast_warning', 'Tạo tài khoản thành công, vui lòng đăng nhập!');
        }
    } else {
        return redirect()->back()
            ->withInput()
            ->with('toast_errors', $result['messages']);
    }
}

public function handleLogin()
{
    $result = $this->processLogin($this->request);

    if ($result['status'] === 'SUCCESS') {
        return redirect()->to('/')->with('toast_success', $result['messages']['MESSAGE_LOGIN_SUCCESS']);
    } else {
        return redirect()->back()
            ->withInput()
            ->with('toast_errors', $result['messages']);
    }
}
// Hàm dùng chung cho xử lý đăng nhập
private function processLogin($request)
{
    return $this->serviceAuth->login($request);
}


}
