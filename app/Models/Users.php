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

    public function hasPermission($userID, $access) {
        $user = $this->find($userID);
        switch ($access) {
            case 'manage_admin':
                return $user['role'] == 'ADMIN';
                break;
            case 'manage_user':
                return $user['role'] == 'USER';
                break;
            default:
                // return false;
                break;
        }
    }
}
