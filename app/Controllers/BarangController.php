<?php

namespace App\Controllers;

use App\Models\BarangModel;
use CodeIgniter\Controller;

class BarangController extends Controller
{
    public function index()
    {
        $model = new BarangModel();
        $data = $model->getAllBarang();
        return view('v_home', $data);
    }

    public function detail($id_barang)
    {
        $model = new BarangModel();
        $data['barang'] = $model->getBarangById($id_barang);
        return view('v_detail_barang', $data);
    }
}
