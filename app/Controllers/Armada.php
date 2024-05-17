<?php

namespace App\Controllers;

use App\Models\M_armada;
use CodeIgniter\API\ResponseTrait;

class Armada extends BaseController
{
    use ResponseTrait;
    public function index()
    {
        $m_armada = new M_armada();
        $armada = $m_armada->findAll();
        $data = [
            'armada' => $armada
        ];

        return view('admin/armada', $data);
    }

    public function create()
    {
        return view('admin/add-armada');
    }

    public function store()
    {
        $post_data = $this->request->getPost();
        // definisikan validation library
        $validation = \Config\Services::validation();

        // definisikan validation rules and custom messages
        $rules = [
            'no_register' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nomor Registrasi tidak boleh kosong!'
                ]
            ],
            'nama_pemilik'    => [
                'rules' => 'required',
                'errors' => [
                    'required'    => 'Nama Pemilik tidak boleh kosong!',
                ]
            ],
        ];

        // Set validation rules and messages
        $validation->setRules($rules);

        // Check jika data tidak lolos validasi
        if (!$validation->withRequest(service('request'))->run($post_data)) {
            // jika validasi gagal, kembalikan nilai form dengan error validasi
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        // Insert data ke database menggunakan model
        $model = new M_armada();
        $model->insert($post_data);

        return redirect()->to(base_url('admin/armada'))->with('success', 'Armada berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $m_armada = new M_armada();
        $armada = $m_armada->find($id);
        $data = [
            'armada' => $armada
        ];

        return view('admin/edit-armada', $data);
    }

    public function update()
    {
        $m_armada = new M_armada();
        $armada = $m_armada->find($this->request->getPost('id'));
        // pengecekan apakah aramada ditemukan (jika diperlukan)
        // 

        // define validator
        $validation = \Config\Services::validation();

        $rules = [
            'no_register' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nomor Registrasi tidak boleh kosong!'
                ]
            ],
            'nama_pemilik'    => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Pemilik tidak boleh kosong!',
                ]
            ],
            // tambahkan rules lain untuk field yang dibutuhka
        ];

        $validation->setRules($rules);

        if (!$validation->withRequest($this->request)->run()) {

            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        $id = $this->request->getPost('id');
        $post_data = $this->request->getPost();

        // update dengan menggunakan model
        $model = new M_armada();
        $model->update($id, $post_data);

        return redirect()->to(base_url('admin/armada'))->with('success', 'Armada berhasil diupdate.');
    }

    public function detail($id)
    {
        $m_armada = new M_armada();
        $armada = $m_armada->find($id);
        return $this->respond($armada);
    }

    public function delete()
    {
        $m_armada = new M_armada();
        $id = $this->request->getPost('id');
        $m_armada->delete($id);

        return redirect()->to('admin/armada')->with('success', 'Armada berhasil dihapus.');
    }

    public function showCarList()
    {
        return view('show-list-car');
    }
}
