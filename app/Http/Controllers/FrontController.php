<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Products;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    public function index()
    {
        $category = Categories::all();
        $products = Products::all();
        return view('users.home', compact('products','category'));
    }

    public function products()
    {
        $category = Categories::all();
        $products = Products::all();

        return view('users.products', compact('products','category'));

    }
    public function productdetails(Products $product)
    {

        $categories= Categories::where('id',$product->category_id)->pluck('name');

        return view('users.productdetails', compact('product','categories'));
    }
}
