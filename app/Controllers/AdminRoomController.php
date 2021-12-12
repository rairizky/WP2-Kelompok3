<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Room;
use App\Models\RoomType;

class AdminRoomController extends BaseController {

    public function index() {
        $room = new Room();
        $data['rooms'] = $room->findAll();
        echo view('admin/room/index', $data); 
    }

    public function detail($id) {

        echo view('admin/room/detail');
    }

    public function create() {
        $room_type = new RoomType();
        $data['room_types'] = $room_type->findAll();

        echo view('admin/room/create', $data);
    }

    public function store() {
        $session = session();
        $room = new Room();
        $rules = [
            'name' => 'required',
            'photo' => 'uploaded[photo]',
            'total' => 'required',
            'room_type' => 'required',
            'price' => 'required',
            'description' => 'required'
        ];
        if ($this->validate($rules)) {
            $name = $this->request->getVar('name');
            $photo = $this->request->getFile('photo');
            $total = $this->request->getVar('total');
            $room_type_id = $this->request->getVar('room_type');
            $price = $this->request->getVar('price');
            $description = $this->request->getVar('description');
            $new_room = [
                'name' => $name,
                'room_photo' => $photo->getName(),
                'total' => $total,
                'room_type_id' => $room_type_id,
                'price' => $price,
                'description' => $description
            ];
            $room->save($new_room);
            $photo->move(WRITEPATH . '../public/assets/images/room/');
            $session->setFlashdata('success', 'Create room successfully');
            return redirect('admin_room');
        } else {
            $session->setFlashdata('error_validation', $this->validator);
            return redirect('admin_room_create');
        }
    }

    public function edit($id) {
        $room = new Room();
        $room_type = new RoomType();
        $data['room'] = $room->where('id', $id)->first();
        $data['room_types'] = $room_type->findAll();

        echo view('admin/room/edit', $data);
    }

    public function update($id) {
        $session = session();
        $room = new Room();
        $room_data = $room->where('id', $id)->first();
        $rules = [
            'name' => 'required',
            'total' => 'required',
            'room_type' => 'required',
            'price' => 'required',
            'description' => 'required'
        ];
        if ($this->validate($rules)) {
            $name = $this->request->getVar('name');
            $total = $this->request->getVar('total');
            $room_type_id = $this->request->getVar('room_type');
            $price = $this->request->getVar('price');
            $description = $this->request->getVar('description');

            // return var_dump(is_uploaded_file($this->request->getFile('photo')));

            $photo_file = $room_data['room_photo'];
            if (is_uploaded_file($this->request->getFile('photo'))) {
                $photo = $this->request->getFile('photo');
                $photo_file = $this->request->getFile('photo')->getName();
            }

            $edit_room = [
                'name' => $name,
                'room_photo' => $photo_file,
                'total' => $total,
                'room_type_id' => $room_type_id,
                'price' => $price,
                'description' => $description
            ];
            $room->update($id, $edit_room);

            if (is_uploaded_file($this->request->getFile('photo'))) {
                $photo->move(WRITEPATH . '../public/assets/images/room/');
            }
            
            $session->setFlashdata('success', 'Update room successfully');
            return redirect('admin_room');
        } else {
            $session->setFlashdata('error_validation', $this->validator);
            return redirect('admin_room_edit');
        }
    }

    public function delete($id) {
        $session = session();
        $room = new Room();
        $room->delete($id);

        $session->setFlashdata('success', 'Delete room successfully');
        return redirect('admin_room');
    }
}