<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Panel extends Controller
{
    public function index()
    {
        return view('panel');
    }
}
