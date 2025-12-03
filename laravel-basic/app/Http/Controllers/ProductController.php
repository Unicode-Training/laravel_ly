<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        //Lấy dữ liệu từ DB --> Lưu vào các biến
        $products = "Sản phẩm A";
        return view("products.index", compact('products'));
    }

    public function show($id)
    {
        return view("products.show", [
            'productId' => $id
        ]);
    }

    public function bestSeller()
    {
        return 'Sản phẩm bán chạy';
    }
}
