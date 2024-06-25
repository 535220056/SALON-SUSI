<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('query');
        $sort = $request->input('sort', 'asc'); // default sorting to ascending

        $menus = Menu::query();

        if ($query) {
            $menus->whereRaw('LOWER(name) LIKE ?', ['%' . strtolower($query) . '%']);
        }

        if ($sort == 'asc') {
            $menus->orderBy('price', 'asc');
        } elseif ($sort == 'desc') {
            $menus->orderBy('price', 'desc');
        }

        $menus = $menus->get();

        return view('menus.index', compact('menus', 'query', 'sort'));
    }
}
