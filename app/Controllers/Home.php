<?php

namespace App\Controllers;

class Home extends BaseController {
    public function index() {
        echo view('layouts/header');
        echo view('layouts/body');
        echo view('layouts/footer');
    }

}