<?php

namespace App\Controllers;

class Buku extends BaseController {

    public function index() {
        return view('buku/tampil_buku');
    }


    public function tambah() {
        return view('buku/tambah_buku');
    }

}