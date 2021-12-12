<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\RoomType;

class AdminRoomTypeController extends BaseController {

    public function index() {
        $room_type = new RoomType();
        $data['room_types'] = $room_type->findAll();
        echo view('admin/room_type/index', $data); 
    }

    public function create() {

        echo view('admin/room_type/create');
    }

    public function store() {
        $session = session();
        $room_type = new RoomType();
        $rules = [
            'name' => 'required'
        ];
        if ($this->validate($rules)) {
            $name = $this->request->getVar('name');
            $new_room_type = [
                'name' => $name
            ];
            $room_type->save($new_room_type);
            $session->setFlashdata('success', 'Create room type successfully');
            return redirect('admin_room_type');
        } else {
            $session->setFlashdata('error_validation', $this->validator);
            return redirect('admin_room_type_create');
        }
    }

    public function edit($id) {
        $room_type = new RoomType();
        $data['room_type'] = $room_type->where('id', $id)->first();

        echo view('admin/room_type/edit', $data);
    }

    public function update($id) {
        $session = session();
        $room_type = new RoomType();
        $rules = [
            'name' => 'required'
        ];
        if ($this->validate($rules)) {
            $name = $this->request->getVar('name');
            $update_room_type = [
                'name' => $name
            ];
            $room_type->update($id, $update_room_type);
            $session->setFlashdata('success', 'Update room type successfully');
            return redirect('admin_room_type');
        } else {
            $session->setFlashdata('error_validation', $this->validator);
            return redirect('admin_room_type_edit', $id);
        }
    }

    public function delete($id) {
        $session = session();
        $room_type = new RoomType();
        $room_type->delete($id);

        $session->setFlashdata('success', 'Delete room type successfully');
        return redirect('admin_room_type');
    }
}