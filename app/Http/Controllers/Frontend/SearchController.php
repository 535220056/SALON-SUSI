<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Menu;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');
        $categories = Category::whereRaw('LOWER(name) LIKE ?', ['%' . strtolower($query) . '%'])->get();
        $menus = Menu::whereRaw('LOWER(name) LIKE ?', ['%' . strtolower($query) . '%'])->get();

        return view('search.index', compact('categories', 'menus', 'query'));
    }
}
