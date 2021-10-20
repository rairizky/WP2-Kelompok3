<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AdminRoomTypeController extends BaseController {

    public function index() {

        echo view('admin/room_type/index'); 
    }

    public function create() {

        echo view('admin/room_type/create');
    }

    public function store() {


    }

    public function edit($id) {

        echo view('admin/room_type/edit');
    }

    public function update($id) {


    }

    public function delete($id) {

    }
}