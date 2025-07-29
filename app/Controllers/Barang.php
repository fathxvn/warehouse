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
        return view('barang/form_tambah');
    }

    public function simpan(){
        $data = [
            'nama_barang' => $this->request->getPost('nama_barang'),
            'stok' => $this->request->getPost('stok'),
            'satuan' => $this->request->getPost('satuan'),
            'tanggal_masuk' => $this->request->getPost('tanggal_masuk')
        ];
        $this->barangModel->insert($data);
        return redirect()->to('/barang');
    }

    
    public function edit($id_barang){

        $data['barang'] = $this->barangModel->find($id_barang);
        
        return view('barang/form_edit', $data);
    }
    
    public function update($id_barang){
        
        $data = [
            'nama_barang' => $this->request->getPost('nama_barang'),
            'stok' => $this->request->getPost('stok'),
            'satuan' => $this->request->getPost('satuan'),
            'tanggal_masuk' => $this->request->getPost('tanggal_masuk')
        ];

        $this->barangModel->update($id_barang, $data);
        return redirect()->to('/barang');
    }

    public function hapus($id_barang){

        $this->barangModel->delete($id_barang);
        return redirect()->to('/barang');
    }


}

