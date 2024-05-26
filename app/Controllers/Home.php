<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        // return view('landing');
        if(session()->isLogin){
            if(session('user')['role'] == 'ADMIN'){
                return redirect()->to('admin/dashboard');
            }else{
                return redirect()->to('user/dashboard');
            }
        }
        return redirect()->to('/login');
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

