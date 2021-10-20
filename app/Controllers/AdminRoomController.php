<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AdminRoomController extends BaseController {

    public function index() {

        echo view('admin/room/index'); 
    }

    public function detail($id) {

        echo view('admin/room/detail');
    }

    public function create() {

        echo view('admin/room/create');
    }

    public function store() {


    }

    public function edit($id) {

        echo view('admin/room/edit');
    }

    public function update($id) {


    }

    public function delete($id) {

    }
}