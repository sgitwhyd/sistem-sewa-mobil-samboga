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

    public function update()
    {
        $userModel = new Users();
        $user_old = $userModel->find($this->request->getPost('id'));
        
        // define validator
        $validation = \Config\Services::validation();

        $rules = [
            'first_name' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'First name tidak boleh kosong!'
                ]
            ],
            'last_name' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Last name tidak boleh kosong!'
                ]
            ],
            'email'    => [
                'rules' => 'required|valid_email',
                'errors' => [
                    'required'    => 'Email tidak boleh kosong!',
                    'valid_email' => 'Email yang dimasukan harus valid.'
                ]
            ],

        ];

        $validation->setRules($rules);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }
        $post_data = $this->request->getPost();
        // jika password diganti
        if ($post_data['password'] != "") {
            $post_data['password'] = password_hash($this->request->getPost('password'), PASSWORD_DEFAULT);
        } else {
            $post_data['password'] = $user_old['password'];
        }

        // handle image request
        $image = $this->request->getFile('ktp_image');
        if ($image->getError() == 4) {
            $post_data['ktp_image'] = $user_old['ktp_image'];
        } else {
            // hapus file lama
            if ($user_old['ktp_image'] != "default.jpg") {
                if (file_exists(WRITEPATH . 'users/' . $user_old['ktp_image'])) {
                    unlink('images/' . $user_old['image']);
                }
            }
            $timestamp = time();
            $randomString = bin2hex(random_bytes(6)); // Generate random string
            $extension = $image->getClientExtension();
            $newName = $timestamp . '_' . $randomString . '.' . $extension;
            $image->move('users', $newName);
            $post_data['ktp_image'] = $newName;
        }

        // update dengan menggunakan model
        $model = new Users();
        $model->update($user_old['id'], $post_data);

        if (session('user')['role'] == 'ADMIN') {
            return redirect()->to(base_url('admin/profile'))->with('success', 'User berhasil diupdate.');
        } else {
            return redirect()->to(base_url('user/profile'))->with('success', 'User berhasil diupdate.');
        }
    }

}
