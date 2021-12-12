<?= $this->extend('layouts/user/dashboard') ?>

<?= $this->section('content') ?>
<h5 class="sidebar__title">Transaction list</h5>

<?php if(session()->getFlashData('success')): ?>
    <div class="alert alert-success">
        <?= session()->getFlashData('success') ?>
    </div>
<?php endif; ?>

<table class="table">
    <thead>
        <tr>
            <th>Transaction Code</th>
            <th>Room</th>
            <th>Date</th>
            <th>Status</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($transactions as $item) : ?>
            <tr>
                <td><?= $item['code_transaction'] ?></td>
                <td><?= $db->query('SELECT * FROM rooms WHERE id = ?', $item['room_id'])->getResult('array')[0]['name'] ?></td>
                <td><?= $item['booking_at'] ?></td>
                <td><?= ($item['status'] == 'settlement') ? 'Paid' : ucwords($item['status']) ?></td>
                <td>
                    <a href="<?= route_to('landing_profile_user_transaction', $item['code_transaction']) ?>">Detail</a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>
<?= $this->endSection() ?>