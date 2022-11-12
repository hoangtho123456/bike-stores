<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //
    public function index() {
        // return Product::all();
        $products = Product::all();
        $product_sum = Product::all()->count();

        $product_arr = json_decode($products);

        array_unshift($product_arr , $product_sum);

        // $json_product_list = json_encode($product_arr);

        return $product_arr;
    }

    public function store(Request $request) {
        $request->validate([
            'product_name'=> 'required',
            'slug'=>'required',
            'brand_id'=>'required',
            'category_id'=>'required',
            'model_year'=>'required',
            'list_price'=>'required',
        ]);

        return Product::create($request->all());
    }
}
