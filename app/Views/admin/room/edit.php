<?= $this->extend('layouts/admin/index') ?>

<?= $this->section('content') ?>
<div class="card">
    <div class="card-body">
        <div class="d-flex justify-content-between">
            <h4>Create Room</h4>
        </div>

        <div class="m-t-25">
            <?php if(session()->getFlashData('error_validation')): ?>
                <div class="alert alert-danger">
                    <?= session()->getFlashData('error_validation')->listErrors() ?>
                </div>
            <?php endif; ?>
            
            <form action="<?php echo route_to('admin_room_update', $room['id']) ?>" method="POST" enctype="multipart/form-data">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="input-name">Name Room</label>
                        <input type="text" name="name" value="<?= $room['name'] ?>" class="form-control" id="input-name" placeholder="name room" required autocomplete="off">
                    </div>
                    <div class="form-group col-md-3">
                        <label>Photo</label>
                        <div class="custom-file">
                            <input name="photo" type="file" class="custom-file-input" accept="image/*" id="customFile">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="input-capacity">Capacity Room</label>
                        <input type="number" name="total" value="<?= $room['total'] ?>" class="form-control" id="input-capacity" placeholder="capacity room" required autocomplete="off">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="input-room-type">Room Type</label>
                        <select name="room_type" id="input-room-type" class="form-control" required>
                            <option value="" disabled selected>-- Choose Room Type --</option>
                            <?php foreach ($room_types as $item) : ?>
                                <option value="<?= $item['id'] ?>" <?php echo ($room['room_type_id'] == $item['id']) ? 'selected' : '' ?>><?= $item['name'] ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="input-price">Price Room</label>
                        <input type="number" name="price" value="<?= $room['price'] ?>" class="form-control" id="input-price" placeholder="price room" required autocomplete="off">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="input-description">Description</label>
                        <textarea name="description" class="form-control" id="input-description" cols="30" rows="10" placeholder="description room" required><?= $room['description'] ?></textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>