<?php

namespace App\Controllers;

use App\Models\Users;
use CodeIgniter\API\ResponseTrait;

class UserController extends BaseController
{
    use ResponseTrait;
    public function index()
    {
        $userModel = new Users();
        $user = $userModel->findAll();
        $data = [
            'user' => $user
        ];

        return view('admin/user', $data);
    }

    public function create()
    {
        return view('admin/add-user');
    }

    public function store()
    {
        $post_data = $this->request->getPost();
        // definisikan validation library
        $validation = \Config\Services::validation();

        // definisikan validation rules and custom messages
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
            'password' => [
                'rules' => 'required|min_length[8]',
                'errors' => [
                    'required'    => 'Password tidak boleh kosong!',
                    'min_length'  => 'Password minimal {param} karakter yang valid.'
                ]
            ],
        ];

        // Set validation rules and messages
        $validation->setRules($rules);

        // Check jika data tidak lolos validasi
        if (!$validation->withRequest($this->request)->run()) {
            // jika validasi gagal, kembalikan nilai form dengan error validasi
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        // jika validasi berhasil, proses data
        $post_data['password'] = password_hash($this->request->getPost('password'), PASSWORD_DEFAULT);

        // handle image request
        $image = $this->request->getFile('ktp_image');
        if ($image->getError() == 4) {
            $post_data['ktp_image'] = 'default.jpg';
        } else {
            $timestamp = time();
            $randomString = bin2hex(random_bytes(6)); // Generate random string
            $extension = $image->getClientExtension();
            $newName = $timestamp . '_' . $randomString . '.' . $extension;
            $image->move('users', $newName);
            $post_data['ktp_image'] = $newName;
        }

        // Insert data ke database menggunakan model
        $model = new Users();
        $model->insert($post_data);

        // Redirect kehalamam login dengan success message
        return redirect()->to(base_url('admin/user'))->with('success', 'User berhasil ditambahkan');
    }

    public function edit($id)
    {
        $userModel = new Users();
        $user = $userModel->find($id);
        $data = [
            'user' => $user
        ];

        return view('admin/edit-user', $data);
    }

    public function update()
    {
        $userModel = new Users();
        $user_old = $userModel->find($this->request->getPost('id'));
        // pengecekan apakah aramada ditemukan (jika diperlukan)
        // 

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
            $post_data['ktp_image'] = 'default.jpg';
        } else {
            // hapus file lama
            if (file_exists(WRITEPATH . 'users/' . $user_old['ktp_image'])) {
                unlink('images/' . $user_old['image']);
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

        return redirect()->to(base_url('admin/user'))->with('success', 'User berhasil diupdate.');
    }

    public function detail($id)
    {
        $userModel = new Users();
        $user = $userModel->find($id);
        return $this->respond($user);
    }

    public function delete()
    {
        $userModel = new Users();
        $id = $this->request->getPost('id');
        $userModel->delete($id);

        return redirect()->to('admin/user')->with('success', 'User berhasil dihapus.');
    }
}
