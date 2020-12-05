<?php

namespace App\Http\Controllers;

class MusdayantiController extends Controller
{
    public function one()
    {
        return view("musdayanti-1");
    }

    public function two()
    {
        return view("musdayanti-2");
    }

    public function three()
    {
        return view("musdayanti-3");
    }

    public function index()
    {
        return view("test-tema"); // view dengan template
    }
}

