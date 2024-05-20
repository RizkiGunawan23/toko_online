<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangModel extends Model
{
    protected $table = 'barang';
    protected $primaryKey = 'id_barang';

    public function getAllBarang()
    {
        try {
            $sql = "SELECT * FROM $this->table";
            $query = $this->db->query($sql);
            $result['barang'] = $query->getResultArray();

            // Truncate descriptions
            foreach ($result['barang'] as &$barang) {
                $barang['short_deskripsi_barang'] = $this->truncateDescription($barang['deskripsi_barang']);
            }

            return $result;
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    private function truncateDescription($description, $maxLength = 100)
    {
        if (strlen($description) > $maxLength) {
            return substr($description, 0, $maxLength) . '...';
        }
        return $description;
    }

    public function getBarangById($id)
    {
        try {
            $sql = "SELECT * FROM $this->table WHERE $this->primaryKey = ?";
            $query = $this->db->query($sql, [$id]);
            $result = $query->getRowArray();

            return $result;
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function updateStok($id, $quantity)
    {
        try {
            $sql = "UPDATE $this->table SET  stok_barang = stok_barang - ? WHERE $this->primaryKey = ?";
            $this->db->query($sql, [$quantity, $id]);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
