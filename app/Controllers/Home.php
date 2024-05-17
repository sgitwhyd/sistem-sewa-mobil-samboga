<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        // cek role
        if(session()->has('user')) {
            if(session()->user['role'] == 'ADMIN') {
                return view('admin/dashboard');
            }
            return view('dashboard');
        }
        return redirect()->to('login');
    }
    
}

