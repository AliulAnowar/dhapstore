<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //

    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }
    public function blog()
    {
        return view('blog');
    }


    public function demo40product()
    {
        return view('demo40-product');
    }
    public function shop()
    {
        // The view name is 'demo40-shop'
        // So Laravel will look for: resources/views/demo40-shop.blade.php
        return view('demo40-shop');
    }


    public function contact()
    {
        return view('contact');   // Loads resources/views/contact.blade.php
    }

    public function dashboard()
    {
        return view('dashboard'); // Loads resources/views/dashboard.blade.php
    }

    public function checkout()
    {
        return view('checkout');  // Loads resources/views/checkout.blade.php
    }

    public function category()
    {
        return view('category');  // Loads resources/views/category.blade.php
    }

    public function login()
    {
        return view('login');     // Loads resources/views/login.blade.php
    }

    public function registration()
    {
        return view('register');     // Loads resources/views/login.blade.php
    }

    // public function product()
    // {
    //     return view('product');   // Loads resources/views/product.blade.php
    // }

    public function categoryList()
    {
        return view('category-list');
    }

    public function category4col()
    {
        return view('category-4col');
    }

    public function category5col()
    {
        return view('category-5col');
    }

    public function category6col()
    {
        return view('category-6col');
    }

    public function category7col()
    {
        return view('category-7col');
    }

    public function category8col()
    {
        return view('category-8col');
    }

}
