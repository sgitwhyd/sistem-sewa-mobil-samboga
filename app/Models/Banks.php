<?php

namespace App\Models;

use CodeIgniter\Model;

class Banks extends Model
{
    protected $table = 'banks';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'bank_number',
        'bank_owner',
    ];

    protected $useTimestamps = false;
}
