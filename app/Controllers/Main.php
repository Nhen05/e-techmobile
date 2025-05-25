<?php

namespace App\Controllers;

class Main extends BaseController
{
    public function index()
    {
        // Lấy tên trang từ URL (?page=sanpham), mặc định là 'home'
        $page = $this->request->getGet('page') ?? 'home';
        $viewPath = 'frontend/pages/' . $page;

        // Nếu file không tồn tại → dùng trang 404
        if (!is_file(APPPATH . 'Views/' . $viewPath . '.php')) {
            $viewPath = 'frontend/pages/404';
        }

        // Truyền đường dẫn view (không có .php) vào layout chính
        return view('frontend/index', ['content' => $viewPath]);
    }
}
