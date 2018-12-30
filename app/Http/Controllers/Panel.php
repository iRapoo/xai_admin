<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Panel extends Controller
{
    public function index()
    {
        return view('panel', ['content' => 'Статистика']);
    }


    public function news()
    {
        return view('panel', ['content' => 'Новости']);
    }
}
