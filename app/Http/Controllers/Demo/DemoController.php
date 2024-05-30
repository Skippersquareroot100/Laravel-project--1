<?php

namespace App\Http\Controllers\Demo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function Index()
    {
        return view('about');
    }
    public function CIndex()
    {
        return view('contact');
    }
    public function RIndex()
    {
        echo "Make some noise for desi bois";
    }
}
