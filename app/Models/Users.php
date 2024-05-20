<?php

namespace App\Models;

use CodeIgniter\Model;

class Users extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'email',
        'password',
        'first_name',
        'last_name',
        'address',
        'telp',
        'ktp_image',
        'role',
    ];

    protected $useTimestamps = false;
}
