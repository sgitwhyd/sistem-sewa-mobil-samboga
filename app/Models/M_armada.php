<?php

namespace App\Models;

use CodeIgniter\Model;

class M_armada extends Model
{
    protected $table            = 'armada';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['no_register', 'nama_pemilik', 'alamat', 'merk', 'type', 'jenis', 'warna_kb', 'tahun', 'cc', 'no_rangka', 'no_mesin', 'bahan_bakar', 'masa_berlaku'];

    protected $useTimestamps = false;
}
