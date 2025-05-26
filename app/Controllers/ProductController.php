<?php
namespace App\Controllers;
class ProductController extends BaseController
{
    public function product(): string
    {
        $data = [];
        $data = $this->giaodienClient($data);
        //$data = ['header','footer']
        return view('frontend/pages/product', $data);
    }

    public function detail(): string
    {
        $data = [];
        $data = $this->giaodienClient($data);
        //$data = ['header','footer']
        return view('frontend/pages/product_detail', $data);
    }
    public function productByBrands(): string
    {
        $data = [];
        $data = $this->giaodienClient($data);
        //$data = ['header','footer']
        return view('frontend/pages/productByBrands', $data);
    }
}