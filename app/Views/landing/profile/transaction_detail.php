<?= $this->extend('layouts/user/dashboard') ?>

<?= $this->section('content') ?>
<h5 class="sidebar__title">Transaction #<?= $transaction['code_transaction'] ?></h5>

<?php if(session()->getFlashData('success')): ?>
    <div class="alert alert-success">
        <?= session()->getFlashData('success') ?>
    </div>
<?php endif; ?>

<div class="d-flex justify-content-between">
    <div>
        <table class="table table-borderless">
            <tr>
                <td>Room Name</td>
                <td>:</td>
                <td><?= $db->query('SELECT * FROM rooms WHERE id = ?', $transaction['room_id'])->getResult('array')[0]['name'] ?></td>
            </tr>
            <tr>
                <td>Status</td>
                <td>:</td>
                <td><?= ($transaction['status'] == 'settlement') ? 'Paid' : ucwords($transaction['status']) ?></td>
            </tr>
            <tr>
                <td>Price</td>
                <td>:</td>
                <td>Rp. <?= number_format($transaction['total']) ?></td>
            </tr>
            <tr>
                <td>Date</td>
                <td>:</td>
                <td><?= $transaction['booking_at'] ?></td>
            </tr>
        </table>
    </div>

    <div>
        <?php if($transaction['status'] == 'pending'): ?>
            <button id="pay-button" class="main-btn main-btn-2 btn-block">Pay Now</button>
            <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key='SB-Mid-client-gFEYedMYKfPebqYk'></script>
            <script type="text/javascript">
                document.getElementById('pay-button').onclick = function(){
                    // SnapToken acquired from previous step
                    snap.pay('<?= $snap_token->token ?>', {
                        // Optional
                        onSuccess: function(result){
                            /* You may add your own js here, this is just example */ document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                        },
                        // Optional
                        onPending: function(result){
                            /* You may add your own js here, this is just example */ document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                        },
                        // Optional
                        onError: function(result){
                            /* You may add your own js here, this is just example */ document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                        }
                    });
                };
            </script>
        <?php endif; ?>
    </div>
</div>

<?= $this->endSection() ?>