<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function getTest()
    {
        $FirstName= 'frits';
        return view('test')->with('FirstName', $FirstName);
    }

    public function GetHomePage()
    {
        return view('home');
    }
}
