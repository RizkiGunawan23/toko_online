<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call('BarangSeeder');
        $this->call('PenjualanSeeder');
        $this->call('JualSeeder');
    }
}
