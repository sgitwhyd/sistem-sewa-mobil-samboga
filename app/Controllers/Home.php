<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('landing');
    }

    public function error()
    {
        return view('error_403');
    }

    public function admin() 
    {
        return view('admin/dashboard');
    }

    public function user()
    {
        return view('dashboard');
    }
    
}

