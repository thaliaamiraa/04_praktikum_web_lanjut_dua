<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
    //
    public function __construct()
    {
        $this->Product = new Product();
    }
    public function products(){
        $data = [
            'products' => $this->Product->allData(),
        ];
        return view ('products', $data);
    }
}
