<?php

namespace App\Controllers;

use App\Models\JualModel;
use CodeIgniter\I18n\Time;
use App\Models\BarangModel;
use CodeIgniter\Controller;
use App\Models\PenjualanModel;

class CartController extends Controller
{
    public function add($id_barang)
    {
        $session = session();
        $model = new BarangModel();
        $barang = $model->getBarangById($id_barang);

        if ($barang) {
            $cart = $session->get('cart') ?? [];

            if (isset($cart[$id_barang])) {
                $cart[$id_barang]['quantity']++;
            } else {
                $cart[$id_barang] = [
                    'id_barang' => $barang['id_barang'],
                    'nama_barang' => $barang['nama_barang'],
                    'harga_barang' => $barang['harga_barang'],
                    'quantity' => 1
                ];
            }

            $session->set('cart', $cart);
        }

        return redirect()->to('/');
    }

    public function view()
    {
        $session = session();
        $cart = $session->get('cart') ?? [];

        return view('v_cart', ['cart' => $cart]);
    }

    public function update()
    {
        $session = session();
        $cart = $session->get('cart') ?? [];
        $quantities = $this->request->getPost('quantity');

        foreach ($quantities as $id_barang => $quantity) {
            if ($quantity == 0) {
                unset($cart[$id_barang]);
            } else {
                $cart[$id_barang]['quantity'] = $quantity;
            }
        }

        $session->set('cart', $cart);
        return redirect()->to('/cart');
    }

    public function checkout()
    {
        return view('v_checkout');
    }

    public function submit()
    {
        $currentTimestamp = Time::now();
        $session = session();
        $cart = $session->get('cart');

        if (!$cart) {
            return redirect()->to('/');
        }

        $nama = $this->request->getPost('nama_pembeli');
        $nomor_handphone = $this->request->getPost('nomor_handphone');
        $alamat = $this->request->getPost('alamat');

        // dd($nama);
        // dd($nomor_handphone);
        // dd($alamat);

        $penjualanModel = new PenjualanModel();
        $jualModel = new JualModel();
        $barangModel = new BarangModel();

        $total_harga_jual = 0;
        foreach ($cart as $item) {
            // dd($item['harga_barang'] . ' dan ' . $item['quantity']);
            $total_harga_jual += $item['harga_barang'] * $item['quantity'];
            // dd($total_harga_jual);
        }

        $penjualanData = [
            'nama_pembeli' => $nama,
            'nomor_handphone' => $nomor_handphone,
            'alamat' => $alamat,
            'total_harga_jual' => $total_harga_jual,
            'created_at' => $currentTimestamp,
            'updated_at' => $currentTimestamp,
        ];

        // dd($penjualanData);

        $penjualanId = $penjualanModel->insert($penjualanData);

        foreach ($cart as $item) {
            $jualData = [
                'id_penjualan' => $penjualanId,
                'id_barang' => $item['id_barang'],
                'jumlah_jual' => $item['quantity'],
                'harga_jual' => $item['harga_barang'],
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp,
            ];

            $jualModel->insert($jualData);

            // Update stok barang
            $barangModel->updateStok($item['id_barang'], $item['quantity']);
        }

        $session->remove('cart');
        return redirect()->to('/')->with('message', 'Pesanan berhasil diproses.');
    }
}
