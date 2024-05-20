<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class BarangSeeder extends Seeder
{
    public function run()
    {
        $deskripsi = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa optio eum ut praesentium cum culpa quia voluptate repellendus exercitationem cumque, asperiores dolorem eaque error, nemo, porro architecto maxime quod sit.';

        $currentTimestamp = Time::now();

        $data = [
            [
                'nama_barang'       => 'Pena',
                'deskripsi_barang'  => $deskripsi,
                'harga_barang'      => 5_000,
                'stok_barang'       => 50,
                'gambar'            => 'pena.jpg',
                'created_at'        => $currentTimestamp,
                'updated_at'        => $currentTimestamp,
            ],
            [
                'nama_barang'       => 'Penggaris',
                'deskripsi_barang'  => $deskripsi,
                'harga_barang'      => 6_000,
                'stok_barang'       => 60,
                'gambar'            => 'penggaris.jpg',
                'created_at'        => $currentTimestamp,
                'updated_at'        => $currentTimestamp,
            ],
            [
                'nama_barang'       => 'Penghapus',
                'deskripsi_barang'  => $deskripsi,
                'harga_barang'      => 3_000,
                'stok_barang'       => 30,
                'gambar'            => 'penghapus.jpg',
                'created_at'        => $currentTimestamp,
                'updated_at'        => $currentTimestamp,
            ],
            [
                'nama_barang'       => 'Pensil',
                'deskripsi_barang'  => $deskripsi,
                'harga_barang'      => 4_000,
                'stok_barang'       => 40,
                'gambar'            => 'pensil.jpg',
                'created_at'        => $currentTimestamp,
                'updated_at'        => $currentTimestamp,
            ],
            [
                'nama_barang'       => 'Tipex',
                'deskripsi_barang'  => $deskripsi,
                'harga_barang'      => 5_500,
                'stok_barang'       => 55,
                'gambar'            => 'tipex.jpeg',
                'created_at'        => $currentTimestamp,
                'updated_at'        => $currentTimestamp,
            ],
            [
                'nama_barang'       => 'Stabilo',
                'deskripsi_barang'  => $deskripsi,
                'harga_barang'      => 13_500,
                'stok_barang'       => 135,
                'gambar'            => 'stabilo.jpg',
                'created_at'        => $currentTimestamp,
                'updated_at'        => $currentTimestamp,
            ],
            [
                'nama_barang'       => 'Jangka',
                'deskripsi_barang'  => $deskripsi,
                'harga_barang'      => 16_500,
                'stok_barang'       => 165,
                'gambar'            => 'jangka.jpg',
                'created_at'        => $currentTimestamp,
                'updated_at'        => $currentTimestamp,
            ],
            [
                'nama_barang'       => 'Sticky Notes',
                'deskripsi_barang'  => $deskripsi,
                'harga_barang'      => 7000,
                'stok_barang'       => 70,
                'gambar'            => 'sticky notes.jpeg',
                'created_at'        => $currentTimestamp,
                'updated_at'        => $currentTimestamp,
            ],
            [
                'nama_barang'       => 'Spidol',
                'deskripsi_barang'  => $deskripsi,
                'harga_barang'      => 11_500,
                'stok_barang'       => 115,
                'gambar'            => 'spidol.jpg',
                'created_at'        => $currentTimestamp,
                'updated_at'        => $currentTimestamp,
            ],
            [
                'nama_barang'       => 'Pengserut',
                'deskripsi_barang'  => $deskripsi,
                'harga_barang'      => 6_500,
                'stok_barang'       => 65,
                'gambar'            => 'pengserut.jpeg',
                'created_at'        => $currentTimestamp,
                'updated_at'        => $currentTimestamp,
            ],
        ];

        $this->db->table('barang')->insertBatch($data);
    }
}
