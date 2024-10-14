<?php

namespace App\Controllers;

use App\Models\Vehicles;
use App\Models\Users;
use App\Models\Transactions;
use App\Models\Banks;

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
        $vehicle = new Vehicles();
        $user = new Users();
        $transaction = new Transactions();
        $bank = new Banks();
        
        $data = [
            'total_vehicles' => $vehicle->countAllResults(),
            'total_users' => $user->countAllResults(),
            'total_transactions' => $transaction->countAllResults(),
            'total_banks' => $bank->countAllResults()
        ];
        
        return view('admin/dashboard', $data);
    }

    public function user()
    {
        return view('user/dashboard');
    }
    
}

