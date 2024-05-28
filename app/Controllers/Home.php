<?php

namespace App\Controllers;

use App\Models\Vehicles;

class Home extends BaseController
{
    public function index()
    {
        $vehicle = new Vehicles();
        $vehicles = $vehicle->findAll();

        
        return view('landing', [
            'vehicles' => $vehicles
        ]);
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
        return view('user/dashboard');
    }
    
}

