<?php

namespace App\Models;

use CodeIgniter\Model;

class PenjualanModel extends Model
{
    protected $table = 'penjualan';
    protected $primaryKey = 'id_penjualan';
    protected $allowedFields = ['nama_pembeli', 'nomor_handphone', 'alamat', 'total_harga_jual', 'created_at', 'updated_at'];
    protected $useTimestamps = true;
}
