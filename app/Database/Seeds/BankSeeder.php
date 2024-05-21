<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Faker\Factory;

class BankSeeder extends Seeder
{
    public function run()
    {
        $faker = Factory::create();

        $data = [];

        for ($i = 0; $i < 10; $i++) {
            $data[] = [
                'bank_name' => $faker->company,
                'bank_number' => $faker->bankAccountNumber,
                'bank_owner' => $faker->name,
            ];
        }

        $bankModel = new \App\Models\Banks();
        $bankModel->insertBatch($data);
    }
}
