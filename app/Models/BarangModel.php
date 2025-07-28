<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangModel extends Model{
    protected $primaryKey = 'id_barang';
    protected $table = 'barang';

    protected $allowedfields = ['nama_barang', 'stok', 'satuan', 'tanggal_masuk'];
}