<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // public function home()
    // {
    //     return view('home');
    // }

    public function about()
    {
        return view('about');
    }

    public function admin()
    {
        return view('admin.admin');
    }

    // public function register()
    // {
    //     return view('register');
    // }

    public function pages1()
    {
        return view('pages.pages1');
    }

    public function pages2()
    {
        return view('pages.pages2');
    }

    public function pages3()
    {
        return view('pages.pages3');
    }

    public function pages4()
    {
        return view('pages.pages4');
    }
}