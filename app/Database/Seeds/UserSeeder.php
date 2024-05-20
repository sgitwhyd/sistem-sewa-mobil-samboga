<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'email' => 'admin@example.com',
                'password' => password_hash('adminpassword', PASSWORD_BCRYPT),
                'first_name' => 'Admin',
                'last_name' => 'User',
                'address' => '123 Admin St',
                'telp' => '555-0000',
                'ktp_image' => 'path/to/ktp.jpg',
                'role' => 'ADMIN',
            ],
            [
                'email' => 'user@example.com',
                'password' => password_hash('userpassword', PASSWORD_BCRYPT),
                'first_name' => 'Regular',
                'last_name' => 'User',
                'address' => '456 User Ave',
                'telp' => '555-1234',
                'ktp_image' => 'path/to/ktp.jpg',
                'role' => 'USER',
            ],
        ];

        $userModel = new \App\Models\Users();
        $userModel->insertBatch($data);
    }
}
