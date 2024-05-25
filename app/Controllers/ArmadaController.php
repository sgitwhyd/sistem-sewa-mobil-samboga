<?php

namespace App\Controllers;

use App\Models\Vehicles;
use CodeIgniter\API\ResponseTrait;

class ArmadaController extends BaseController
{
    use ResponseTrait;
    public function index()
    {
        $VehicleModel = new Vehicles();
        $armada = $VehicleModel->findAll();
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
            'name' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Kendaraan tidak boleh kosong!'
                ]
            ],
            'daily_price'    => [
                'rules' => 'required',
                'errors' => [
                    'required'    => 'Harga Sewa tidak boleh kosong!',
                ]
            ],
            // validate image
        ];

        // Set validation rules and messages
        $validation->setRules($rules);

        // Check jika data tidak lolos validasi
        if (!$validation->withRequest(service('request'))->run($post_data)) {
            // jika validasi gagal, kembalikan nilai form dengan error validasi
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        // handle image request
        $image = $this->request->getFile('image');
        if ($image->getError() == 4) {
            $post_data['image'] = 'default.jpg';
        } else {
            $timestamp = time();
            $randomString = bin2hex(random_bytes(6)); // Generate random string
            $extension = $image->getClientExtension();
            $newName = $timestamp . '_' . $randomString . '.' . $extension;
            $image->move('images', $newName);
            $post_data['image'] = $newName;
        }

        // Insert data ke database menggunakan model
        $model = new Vehicles();
        $model->insert($post_data);

        return redirect()->to(base_url('admin/armada'))->with('success', 'Armada berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $Vehicles = new Vehicles();
        $armada = $Vehicles->find($id);
        $data = [
            'armada' => $armada
        ];

        return view('admin/edit-armada', $data);
    }

    public function update()
    {
        $Vehicles = new Vehicles();
        $armada = $Vehicles->find($this->request->getPost('id'));
        if (!$armada) return redirect()->back()->withInput()->with('errors', 'Armada tidak ditemukan!');
        // define validator
        $validation = \Config\Services::validation();

        $rules = [
            'name' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Kendaraan tidak boleh kosong!'
                ]
            ],
            'daily_price'    => [
                'rules' => 'required',
                'errors' => [
                    'required'    => 'Harga Sewa tidak boleh kosong!',
                ]
            ],
            // validate image
        ];

        $validation->setRules($rules);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        $post_data = $this->request->getPost();

        // handle image request
        $image = $this->request->getFile('image');
        if ($image->getError() == 4) {
            $post_data['image'] = $armada['image'];
        } else {
            // hapus file lama
            if (file_exists(WRITEPATH . 'images/' . $armada['image'])) {
                unlink('images/' . $armada['image']);
            }
            $timestamp = time();
            $randomString = bin2hex(random_bytes(6)); // Generate random string
            $extension = $image->getClientExtension();
            $newName = $timestamp . '_' . $randomString . '.' . $extension;
            $image->move('images', $newName);
            $post_data['image'] = $newName;
        }

        // update dengan menggunakan model
        $model = new Vehicles();
        $model->update($armada['id'], $post_data);

        return redirect()->to(base_url('admin/armada'))->with('success', 'Armada berhasil diupdate.');
    }

    public function detail($id)
    {
        $Vehicles = new Vehicles();
        $armada = $Vehicles->find($id);
        return $this->respond($armada);
    }

    public function delete()
    {
        $Vehicles = new Vehicles();
        $id = $this->request->getPost('id');
        $Vehicles->delete($id);

        return redirect()->to('admin/armada')->with('success', 'Armada berhasil dihapus.');
    }

    public function showCarList()
    {
        $vehicles = new Vehicles();
        $armadas = $vehicles->findAll();
        return view('show-list-car', [
            'armadas' => $armadas
        ]);
    }
}
