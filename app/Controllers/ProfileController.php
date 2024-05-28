<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

use App\Models\Users;

class ProfileController extends BaseController
{
    public function index()
    {
        $userModel = new Users();
        $user = $userModel->find(session('user')['id']);
        $data = [
            'user' => $user,
        ];
        if(session('user')['role'] == 'ADMIN'){
            return view('admin/profile', $data);
        } else {
            return view('user/profile', $data);
        }
    }
}
