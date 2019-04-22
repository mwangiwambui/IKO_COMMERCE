<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('users.home');
    }

    public function products()
    {
        return view('users.products');
    }
    public function productdetails()
    {
        return view('users.productdetails');
    }
}