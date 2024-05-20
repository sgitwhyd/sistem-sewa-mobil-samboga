<?php

namespace App\Models;

use CodeIgniter\Model;

class Vehicles extends Model
{
    protected $table = 'vehicles';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'image',
        'name',
        'description',
        'daily_price',
    ];

    protected $useTimestamps = false;
}
