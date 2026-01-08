<?php

namespace App\Controllers;

class Anggota extends BaseController {

    public function index() {

        //ambil dari database
        $anggota = model('App\Models\AnggotaModel')->getAnggota();

        return view('anggota/index', ['anggota' => $anggota]);
    }


    public function tambah() {
        return view('anggota/tambah_anggota');
    }
    public function tambah_angg() {
        $nama   = $this->request->getPost('nama_anggota');
        $alamat = $this->request->getPost('alamat');
        $telp   = $this->request->getPost('telp');

        //simpan ke database
        $anggotaModel = model('App\Models\AnggotaModel');
        $anggotaModel->insert([
            'nama'   => $nama,
            'alamat' => $alamat,
            'telp'   => $telp,
        ]);

        return redirect()->to(base_url('anggota'));
    }

}