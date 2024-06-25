<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('query');
        if ($query) {
            $categories = Category::whereRaw('LOWER(name) LIKE ?', ['%' . strtolower($query) . '%'])->get();
        } else {
            $categories = Category::all();
        }

        return view('categories.index', compact('categories', 'query'));
    } 

    public function show(Category $category)
    {
        return view('categories.show', compact('category'));
    }

}