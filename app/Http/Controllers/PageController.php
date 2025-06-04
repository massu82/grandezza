<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;


class PageController extends Controller
{
    public function index()
    {
        $productos = Producto::with('categoria')->get();
        return view('pages.inicio', compact('productos'));
    }
    public function evento()
    {
        return view('events.index');
    }
}
