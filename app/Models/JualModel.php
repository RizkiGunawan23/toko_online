<?php

namespace App\Models;

use CodeIgniter\Model;

class JualModel extends Model
{
    protected $table = 'jual';
    protected $primaryKey = ['id_penjualan', 'id_barang'];
    protected $allowedFields = ['id_penjualan', 'id_barang', 'jumlah_jual', 'harga_jual', 'created_at', 'updated_at'];
    protected $useTimestamps = true;
}
