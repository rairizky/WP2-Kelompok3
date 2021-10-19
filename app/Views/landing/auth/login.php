<?= $this->extend('layouts/user/auth') ?>

<?= $this->section('content') ?>
    <div class="write-massage-content">
        <div class="write-massage-title">
            <h3 class="title">Login to Coworkind!</h3>
            <p>or don't have an account? <a href="<?php echo route_to('user_register') ?>">Register Account</a></p>
        </div>

        <?php if(session()->getFlashData('error')): ?>
            <div class="alert alert-danger" role="alert">
                <?= session()->getFlashData('error') ?>
            </div>
        <?php endif; ?>
        
        <div class="write-massage-input">
            <form action="<?php echo route_to('user_store_login') ?>" method="POST">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="input-box mt-10">
                            <input type="text" name="username" placeholder="Username" required autocomplete="off">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="input-box mt-10">
                            <input type="password" name="password" placeholder="Password" required autocomplete="off">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="input-box mt-10 d-flex justify-content-end">
                            <button class="main-btn main-btn-2">Login</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?= $this->endSection() ?>