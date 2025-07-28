<?php

namespace App\Controllers;

use App\Models\BarangModel;

class Barang extends BaseController{
    
    protected $barangModel;

    public function __construct(){
        $this->barangModel = new BarangModel();
    }

    public function index(){
        $data['barang'] = $this->barangModel->findAll();
        return view('barang/v_tabeldata', $data);
    }

    public function tambah(){
        return view('/barang/form_tambah');
    }

    public function simpan(){
        $data = [
            'nama_barang' => $this->request->getPost('nama_barang'),
            'stock' => $this->request->getPost('stock'),
            'satuan' => $this->request->getPost('satuan'),
            'tanggal_masuk' => $this->request->getPost('tanggal_masuk')
        ];
        $this->barangModel->insert($data);
        return redirect()->to('/barang');
    }

}

