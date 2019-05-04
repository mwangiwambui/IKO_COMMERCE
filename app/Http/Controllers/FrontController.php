<?php

namespace App\Http\Controllers;

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
        return view('users.home');
    }

    public function products()
    {
        $products = Products::all();
        return view('users.products', compact('products'));
    }
    public function productdetails()
    {
        return view('users.productdetails');
    }
}
