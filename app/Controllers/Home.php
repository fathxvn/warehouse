<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use Config\Database;


class Home extends BaseController
{
    public function cekDatabase(){
        try {
            // ambil koneksi database default
            $db = Database::connect();
            // Jalankan query uji
            $query = $db->query("SHOW TABLES");

            if ($query){
                echo"Koneksi database berhasil";
            }else {
                echo"Koneksi database gagal";
            }
        } catch (\Exception $e) {
            // tangkap error jika gagal konek
            echo"Gagal konek ke database: ". $e->getMessage();
        }
    }
}
