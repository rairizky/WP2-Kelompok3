<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Transaction;

class AdminTransactionController extends BaseController {

    public function index() {
        $transaction = new Transaction();
        $data['transactions'] = $transaction->findAll();
        echo view('admin/transaction/index', $data);
    }

    public function detail($code) {

        echo view('admin/transaction/detail');
    }
}