<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AdminTransactionController extends BaseController {

    public function index() {

        echo view('admin/transaction/index');
    }

    public function detail($code) {

        echo view('admin/transaction/detail');
    }
}