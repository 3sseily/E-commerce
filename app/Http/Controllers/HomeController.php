<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::limit(6)->orderBy('id', 'desc')->get();
        return view('home', ['products' => $products]);
    }

    public function chart()
    {
        $all_users_count = User::count();
        $admin_count = User::whereRole('admin')->count();

        return view('charts', [
            'all_users' => $all_users_count ,
            'admin_count' => $admin_count 
        ]);
    }
}