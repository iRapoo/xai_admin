<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeviceController extends Controller
{
    public function registration(Request $request)
    {
        return true;
    }

    public function check_md5(Request $request)
    {
        return '123123';
    }
}
