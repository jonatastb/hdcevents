<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $busca = request('search');

        return view('products', ['busca' => $busca]);    
    }

    public function productId()
    {
        return view('product', ['id' => $id]);
    }

}
