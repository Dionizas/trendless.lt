<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StraipsniaiController extends Controller
{
    public function index()
    {
        return view('straipsniai.index');
    }

    public function show($item)
    {
        return view('straipsniai.items.' . $item);
    }
}
