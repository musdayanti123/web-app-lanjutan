<?php

namespace App\Http\Controllers;

class MusdaController extends Controller
{
    public function satu()
    {
        return view("Musda-1");
    }

    public function dua()
    {
        return view("Musda-2");
    }

    public function tiga()
    {
        return view("Musda-3");
    }
}