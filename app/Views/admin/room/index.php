<?= $this->extend('layouts/admin/index') ?>

<?= $this->section('content') ?>

<div class="card">
    <div class="card-body">
        <div class="d-flex justify-content-between">
            <h4>Manage Room</h4>
            <a class="btn btn-sm btn-primary mt-1" href="<?php echo route_to('admin_room_create') ?>">Add New Data</a>
        </div>

        <div class="m-t-25">
            <?php if(session()->getFlashData('success')): ?>
                <div class="alert alert-success">
                    <?= session()->getFlashData('success') ?>
                </div>
            <?php endif; ?>
            <table id="data-table" class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Capacity</th>
                        <th>Price/day</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($rooms as $item) : ?>
                        <tr>
                            <td><?= $item['name'] ?></td>
                            <td><?= $item['total'] ?></td>
                            <td>Rp. <?= number_format($item['price']) ?></td>
                            <td>
                                <div class="d-flex flex-row">
                                    <a href="<?= route_to('admin_room_edit', $item['id']) ?>">
                                        <button type="button" class="btn btn-icon btn-primary btn-rounded btn-tone mr-2">
                                            <i class="anticon anticon-edit"></i>
                                        </button>
                                    </a>
                                    <a href="<?= route_to('admin_room_delete', $item['id']) ?>">
                                        <button type="button" class="btn btn-icon btn-danger btn-rounded btn-tone" onclick="return confirm('Are you sure want to delete this data?')">
                                            <i class="anticon anticon-delete"></i>
                                        </button>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection() ?>