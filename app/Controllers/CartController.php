<?php
namespace App\Controllers;
class CartController extends BaseController
{
    public function index()
    {
        $data = [];
        $data = $this->giaodienClient($data);
        return view('frontend/pages/cart', $data);
    }

    public function addToCart()
    {
        // Logic to add item to cart
        // Redirect or return response
    }

    public function removeFromCart()
    {
        // Logic to remove item from cart
        // Redirect or return response
    }
}
