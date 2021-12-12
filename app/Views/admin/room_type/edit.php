<?= $this->extend('layouts/admin/index') ?>

<?= $this->section('content') ?>
<div class="card">
    <div class="card-body">
        <div class="d-flex justify-content-between">
            <h4>Edit Room Type</h4>
        </div>

        <div class="m-t-25">
            <?php if(session()->getFlashData('error_validation')): ?>
                <div class="alert alert-danger">
                    <?= session()->getFlashData('error_validation')->listErrors() ?>
                </div>
            <?php endif; ?>
            
            <form action="<?php echo route_to('admin_room_type_update', $room_type['id']) ?>" method="POST">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="input-name">Name Type</label>
                        <input type="text" name="name" value="<?= $room_type['name'] ?>" class="form-control" id="input-name" placeholder="name type" required autocomplete="off">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>