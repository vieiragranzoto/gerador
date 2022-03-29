<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeradorController extends Controller
{
    public function index()
    {
        return view('index.index');
    }
}
