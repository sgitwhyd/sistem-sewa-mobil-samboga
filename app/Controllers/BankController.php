<?php

namespace App\Controllers;

use App\Models\Banks;
use CodeIgniter\API\ResponseTrait;

class BankController extends BaseController
{
    use ResponseTrait;
    public function index()
    {
        $bankModel = new Banks();
        $bank = $bankModel->findAll();
        $data = [
            'bank' => $bank
        ];

        return view('admin/bank', $data);
    }

    public function create() 
    {
        return view('admin/add-bank');
    }

    public function store()
    {
        $post_data = $this->request->getPost();

        // definisikan validation library
        $validation = \Config\Services::validation();

        // definisikan validation rules and custom messages
        $rules = [
            'bank_name' => [
                'rules' =>'required',
                'errors' => [
                   'required' => 'Nama Bank tidak boleh kosong!'
                ]
            ],
            'bank_number' => [
                'rules' =>'required',
                'errors' => [
                   'required' => 'Nomor Rekening tidak boleh kosong!'
                ]
            ],
            'bank_owner' => [
                'rules' =>'required',
                'errors' => [
                   'required' => 'Nama Pemilik Rekening tidak boleh kosong!'
                ]
            ]
        ];

        // set validation rules
        $validation->setRules($rules);

        // run the validation
        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        } else {
            // Insert data ke database menggunakan model
            $model = new Banks();
            $model->insert($post_data);

            return redirect()->to(base_url('admin/bank'))->with('success', 'Bank berhasil ditambahkan.');
        }
    }

    public function edit($id)
    {
        $bankModel = new Banks();
        $bank = $bankModel->find($id);
        $data = [
            'bank' => $bank,
        ];
        return view('admin/edit-bank', $data);
    }

    public function detail($id)
    {
        $bankModel = new Banks();
        $bank = $bankModel->find($id);
        return $this->respond($bank);
    }

    public function delete()
    {
        $bankModel = new Banks();
        $id = $this->request->getPost('id');
        $bankModel->delete($id);

        return redirect()->to('admin/bank')->with('success', 'Bank berhasil dihapus.');
    }
}
