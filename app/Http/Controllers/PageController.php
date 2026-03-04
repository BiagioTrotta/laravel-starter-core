<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function index()
    {
        $title = 'Homepage';
        return view('homepage', compact('title'));
    }
}
