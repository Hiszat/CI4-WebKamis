<?php

namespace App\Controllers;

class Pages extends BaseController {
    public function index() {
        return view('halaman_page');
    }

    public function about() {
        echo "ini halaman about";
    }
}