<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function catalog(){

        $categories = Category::all();

        return view('catalog', compact('categories'));
    }

}
