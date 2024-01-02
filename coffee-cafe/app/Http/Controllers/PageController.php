<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function main(){
        $products = Product::all();
        $new_products = Product::orderBy('id', 'desc')->get();

        return view('main', compact(['products','new_products']));
    }
    public function shake(){
        return view('shake');
    }

}
