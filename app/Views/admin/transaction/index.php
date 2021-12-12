<?= $this->extend('layouts/admin/index') ?>

<?= $this->section('content') ?>
<div class="card">
    <div class="card-body">
        <div class="d-flex justify-content-between">
            <h4>Transaction Lists</h4>
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
                        <th>Transaction Number</th>
                        <th>Amount</th>
                        <th>Status</th>
                        <th>Booking At</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($transactions as $item) : ?>
                        <tr>
                            <td><?= $item['code_transaction'] ?></td>
                            <td><?= $item['total'] ?></td>
                            <td><?= ($item['status'] == 'settlement') ? 'Paid' : ucwords($item['status']) ?></td>
                            <td><?= $item['booking_at'] ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection() ?>