<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;


class PageController extends Controller
{
    public function index()
    {
        //$productos = Producto::with('categoria')->get();
        //return view('fest-test', compact('productos'));
        return redirect('fest');
    }

    public function fest()
    {
        return view('fest-test');
    }

    public function gracias()
    {
        return view('pages.gracias');
    }
}
