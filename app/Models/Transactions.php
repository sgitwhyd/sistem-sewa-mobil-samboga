<?php

namespace App\Models;

use CodeIgniter\Model;

class Transactions extends Model
{
   protected $table = 'transactions';
   protected $primaryKey = 'id';

   protected $allowedFields = [
       'user_id',
       'vehicle_id',
       'bank_id',
       'date_pickup',
       'date_dropoff',
       'time_pickup',
       'time_dropoff',
       'pickup_address',
       'total',
       'status',
       'payment_image',
   ];

   protected $useTimestamps = false;
}
