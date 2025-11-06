<?php

namespace App\Controllers;

class Pages extends BaseController {
    public function index() {
        return view('halaman_page');
    }

    public function buku() {
        echo view('layouts/header');
        echo view('layouts/buku');
        echo view('layouts/footer');
    }

    public function about() {
        echo "ini halaman about";
    }
}