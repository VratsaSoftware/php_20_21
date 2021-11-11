<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();



        return view('categories', compact('categories'));
    }

    public function categoryDetails($id)
    {
        $category = Category::find($id);

        return view('single_category', compact('category'));
    }
}
