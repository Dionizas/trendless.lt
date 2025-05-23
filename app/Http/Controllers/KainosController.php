<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KainosController extends Controller
{
    public function index()
    {
        return view('kainos.index');
    }

    public function show($item)
    {
        return view('kainos.items.'.$item);
    }
}
