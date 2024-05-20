<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Faker\Factory;

class VehicleSeeder extends Seeder
{
    public function run()
    {
        $faker = Factory::create();

        $data = [];

        for ($i = 0; $i < 10; $i++) {
            $data[] = [
                'image' => $faker->imageUrl(640, 480, 'transport'),
                'name' => $faker->sentence(3),
                'description' => $faker->paragraph,
                'daily_price' => $faker->numberBetween(50000, 500000),
            ];
        }

        $vehicleModel = new \App\Models\Vehicles();
        $vehicleModel->insertBatch($data);
    }
}
