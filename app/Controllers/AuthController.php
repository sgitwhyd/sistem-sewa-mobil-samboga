<?php

namespace App\Controllers;

use App\Models\Users;

class AuthController extends BaseController
{
   public function login()
   {
      return view('auth/login');
   }

   public function register()
   {
      return view('auth/registrasi');
   }

   public function logout()
   {
      // hapus session
      session()->destroy();
      // redirect ke halaman login
      return redirect()->to(base_url('login'));
   }

   public function verifyLogin()
   {
      // definisikan validation library
      $validation = \Config\Services::validation();

      // definisikan validation rules and custom messages
      $rules = [
         'email' => [
            'rules' => 'required',
            'errors' => [
               'required' => 'Email tidak boleh kosong!'
            ]
         ],
         'password' => [
            'rules' => 'required',
            'errors' => [
               'required' => 'Password tidak boleh kosong!'
            ]
         ]
      ];

      // Set validation rules and messages
      $validation->setRules($rules);

      // Check jika data tidak lolos validasi
      if (!$validation->withRequest($this->request)->run()) {
         // jika validasi gagal, kembalikan nilai form dengan error validasi
         return redirect()->back()->withInput()->with('errors', $validation->getErrors());
      }

      // check email | password
      $userModel = new Users();
      $user = $userModel->where('email', $this->request->getPost('email'))->first();
      // jika user tidak ditemukan
      if (!$user) {
         return redirect()->back()->withInput()->with('errors', ['Email' => 'Email atau password salah!']);
      }
      // cek password
      if (!password_verify($this->request->getPost('password'), $user['password'])) {
         return redirect()->back()->withInput()->with('errors', ['password' => 'Email atau password salah!']);
      }

      // buat session login
      $session = session();
      $session->set([
         'isLogin' => true,
         'user' => $user,
      ]);

      if ($user['role'] == 'ADMIN') {
         return redirect()->to(base_url('admin/dashboard'));
      } else if ($user['role'] == 'USER') {
         return redirect()->to(base_url('user/profile'));
      }
   }

   public function verifyRegister()
   {
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
         'conf_password' => [
            'rules' => 'required|min_length[8]|matches[password]',
            'errors' => [
               'required'    => 'Konfirmasi password tidak boleh kosong!',
               'min_length'  => 'Konfimasi password minimal {param} karakter yang valid.',
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
      $data = [
         'first_name' => $this->request->getPost('first_name'),
         'last_name' => $this->request->getPost('last_name'),
         'email' => $this->request->getPost('email'),
         'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
         'role' => 'USER',
      ];

      // Insert data ke database menggunakan model
      $model = new Users();
      $model->insert($data);

      // Redirect kehalamam login dengan success message
      return redirect()->to(base_url('login'))->with('success', 'Registrasi berhasil silahkan login');
   }
}
