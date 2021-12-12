<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Transaction;
use App\Models\User;

class UserProfileController extends BaseController {

    //render property
    protected $render;

    //midtrans property
    protected $midtrans;

    //config property
    protected $config;

    public function __construct()
    {
        $this->render = \Config\Services::renderer();
        $this->midtrans = service('Midtrans');
        $this->config = config('Midtrans');
    }

    public function transcation() {
        $user_m = new User();
        $transaction_m = new Transaction();
        $user_id = session()->get('user_id');
        $data['db'] = db_connect();
        $data['user'] = $user_m->where('id', $user_id)->first();
        $data['transactions'] = db_connect()->query('SELECT * FROM transactions WHERE customer_id = ?', $user_id)->getResult('array');

        echo view('landing/profile/transaction', $data);
    }

    public function transaction_detail($code) {
        $user_m = new User();
        $transaction_m = new Transaction();
        $user_id = session()->get('user_id');

        $data['db'] = db_connect();
        $data['user'] = $user_m->where('id', $user_id)->first();
        $data['transaction'] = $transaction_m->where('code_transaction', $code)->first();

        $transaction_data = array(
            'transaction_details' => array(
                'order_id' => $transaction_m->where('code_transaction', $code)->first()['code_transaction'],
                'gross_amount' => $transaction_m->where('code_transaction', $code)->first()['total'],
            )
        );
        
        if ($transaction_m->where('code_transaction', $code)->first()['status'] == 'pending') {
            $data['snap_token'] = $this->midtrans->getSnapToken($transaction_data);
        }

        echo view('landing/profile/transaction_detail', $data);
    }

    public function updateStatusTransaction()
    {
        $transaction_m = new Transaction();
        $decode_json = json_decode($this->request->getBody(), true);
        $transaction_code = $decode_json['order_id'];
        $order_status = $decode_json['transaction_status'];
        $transaction_data = $transaction_m->where('code_transaction', $transaction_code)->first();

        $transaction_m->update($transaction_data['id'], ['status' => $order_status]);
        return true;
    }
}