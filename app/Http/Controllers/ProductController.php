<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            ['title' => 'The Hobbit', 'author' => 'J.R.R. Tolkien', 'price' => 15.99],
            ['title' => 'The Maze Runner', 'author' => 'James Dashner', 'price' => 12.99],
            ['title' => 'The Inheritance Games', 'author' => 'Jennifer Lynn Barnes', 'price' => 14.99],
            ['title' => 'To Kill a Mockingbird', 'author' => 'Harper Lee', 'price' => 10.99],
            ['title' => 'Sherlock Holmes', 'author' => 'Arthur Conan Doyle', 'price' => 13.50]
        ];

        return view('products', ['products' => $products]);
    }
}
