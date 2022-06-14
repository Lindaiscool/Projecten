<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ColofonController extends Controller
{
    public function GetColofonPage()
    {
        return view('colofon');
    }
}
