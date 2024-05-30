<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Banks;
use CodeIgniter\HTTP\ResponseInterface;

use App\Models\Transactions;
use App\Models\Vehicles;
use App\Models\Users;
use CodeIgniter\API\ResponseTrait;
use Exception;

class TransactionController extends BaseController
{
    use ResponseTrait;
    public function index()
    {
        $transModel = new Transactions();
        if (session('user')['role'] == 'ADMIN') {
            // Join with the users table
            $orders = $transModel->select('transactions.*, vehicles.name vehicle_name, vehicles.daily_price, users.first_name, users.last_name')
                ->join('vehicles', 'vehicles.id = transactions.vehicle_id')
                ->join('users', 'users.id = transactions.user_id')
                ->orderby('transactions.id', 'ASC')
                ->findAll();
            $data = [
                'transaction' => $orders
            ];
            return view('admin/transaction', $data);
        } else {
            // Join with the users table
            $user_id = session('user')['id'];
            $orders = $transModel->select('transactions.*, vehicles.name vehicle_name, vehicles.daily_price, users.first_name, users.last_name')
                ->join('vehicles', 'vehicles.id = transactions.vehicle_id')
                ->join('users', 'users.id = transactions.user_id')
                ->orderby('transactions.id', 'ASC')
                ->findAll();

            $data = [
                'transaction' => $orders
            ];

            return view('user/transaction', $data);
        }
    }

    public function create($id_armada)
    {
        $bankModel = new Banks();
        $banks = $bankModel->findAll();
        if (session('user')['role'] == "ADMIN") {
            $vehicleModel = new Vehicles();
            $vehicle = $vehicleModel->findAll();
            $userModel = new Users();
            $user = $userModel->findAll();
            $data = [
                'vehicle' => $vehicle,
                'user' => $user,
                'banks' => $banks
            ];
            return view('admin/add-transaction', $data);
        } else if (session('user')['role'] == "USER") {
            $vehicleModel = new Vehicles();
            $vehicle = $vehicleModel->find($id_armada);
            $userModel = new Users();
            $user = $userModel->find(session('user')['id']);
            $data = [
                'vehicle' => $vehicle,
                'user' => $user,
                'banks' => $banks
            ];
            return view('user/add-transaction', $data);
        }
    }
    public function store()
    {
        $post_data = $this->request->getPost();;
        // definisikan validation library
        $validation = \Config\Services::validation();
        // definisikan validation rules and custom messages
        $rules = [
            'user_id' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'User tidak boleh kosong!'
                ]
            ],
            'vehicle_id' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kendaraan tidak boleh kosong!'
                ]
            ],
            'date_pickup' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tanggal pengambilan tidak boleh kosong!'
                ]
            ],
            'time_pickup' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Jam pengambilan tidak boleh kosong!'
                ]
            ],
            'date_dropoff' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tanggal pengembalian tidak boleh kosong!'
                ]
            ],
            'time_dropoff' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Jam pengembalian tidak boleh kosong!'
                ]
            ],            'pickup_address' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Alamat pengambilan tidak boleh kosong!'
                ]
            ]
        ];

        // set validation rules
        $validation->setRules($rules);

        // Check jika data tidak lolos validasi
        if (!$validation->withRequest(service('request'))->run($post_data)) {
            // jika validasi gagal, kembalikan nilai form dengan error validasi
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }
        // handle total
        $numberString = preg_replace("/[^0-9.,]/", "", $post_data['total']);
        $numberString = str_replace(".", "", $numberString);
        $numericValue = (int)$numberString;
        $post_data['total'] = $numericValue;
        // handle image request
        $image = $this->request->getFile('payment_image');
        if ($image->getError() == 4) {
            $post_data['payment_image'] = 'default.jpg';
        } else {
            $timestamp = time();
            $randomString = bin2hex(random_bytes(6)); // Generate random string
            $extension = $image->getClientExtension();
            $newName = $timestamp . '_' . $randomString . '.' . $extension;
            $image->move('transactions', $newName);
            $post_data['payment_image'] = $newName;
        }

        // Insert data ke database menggunakan model
        $model = new Transactions();
        $model->insert($post_data);

        if (session('user')['role'] == 'ADMIN') {
            return redirect()->to(base_url('admin/transaksi'))->with('success', 'Transaksi berhasil ditambahkan.');
        } else {
            return redirect()->to(base_url('user/transaksi'))->with('success', 'Transaksi berhasil ditambahkan.');
        }
    }

    public function edit($id)
    {
        $transModel = new Transactions();
        $transaction = $transModel->find($id);
        $vehicleModel = new Vehicles();
        $vehicle = $vehicleModel->findAll();
        $userModel = new Users();
        $user = $userModel->findAll();
        $bankModel = new Banks();
        $banks = $bankModel->where('id = ' . $transaction['bank_id'])->first();
        $data = [
            'vehicle' => $vehicle,
            'user' => $user,
            'transaction' => $transaction,
            'banks' => $banks
        ];

        return view('admin/edit-transaction', $data);
    }

    public function update()
    {
        $post_data = $this->request->getPost();
        $transModel = new Transactions();
        $old_transaction = $transModel->find($post_data['id']);
        // definisikan validation library
        $validation = \Config\Services::validation();

        // definisikan validation rules and custom messages
        $rules = [
            'status' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Status Konfirmasi tidak boleh kosong!'
                ]
            ],
        ];

        // set validation rules
        $validation->setRules($rules);
        // Check jika data tidak lolos validasi
        if (!$validation->withRequest(service('request'))->run($post_data)) {
            // jika validasi gagal, kembalikan nilai form dengan error validasi
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }
        $status = [
            'status' => $post_data['status'],
        ];

        // Insert data ke database menggunakan model
        $model = new Transactions();
        $model->update($old_transaction['id'], $status);

        return redirect()->to(base_url('admin/transaksi'))->with('success', 'Transaksi berhasil dikonfirmasi.');
    }

    public function destroy()
    {
        $transModel = new Transactions();
        $id = $this->request->getPost('id');
        $transModel->delete($id);

        return redirect()->to('admin/transaksi')->with('success', 'transaksi berhasil dihapus.');
    }

    public function detail($id)
    {
      $transactionModel = new Transactions();
            // Join with the users table
            $order = $transactionModel->select('transactions.*, vehicles.name vehicle_name, vehicles.daily_price, users.first_name, users.last_name, banks.*')
                ->join('vehicles', 'vehicles.id = transactions.vehicle_id')
                ->join('users', 'users.id = transactions.user_id')
                ->join('banks', 'banks.id = transactions.bank_id')
                ->find($id);


        return view('user/detail-transaction', ['transaction' => $order]);
    }
}
