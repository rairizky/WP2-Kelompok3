<?= $this->extend('layouts/user/auth') ?>

<?= $this->section('content') ?>
    <div class="write-massage-content">
        <div class="write-massage-title">
            <h3 class="title">Register to Coworkind!</h3>
            <p>or already have an account? <a href="<?php echo route_to('user_login') ?>">Login Account</a></p>
        </div>

        <?php if(session()->getFlashData('success')): ?>
            <div class="alert alert-success" role="alert">
                <?= session()->getFlashData('success') ?>
            </div>
        <?php endif; ?>

        <?php if(session()->getFlashData('error')): ?>
            <div class="alert alert-danger" role="alert">
                <?= session()->getFlashData('error') ?>
            </div>
        <?php endif; ?>

        <?php if(session()->getFlashData('error_validation')): ?>
            <div class="alert alert-danger" role="alert">
                <?= session()->getFlashData('error_validation')->listErrors() ?>
            </div>
        <?php endif; ?>

        <div class="write-massage-input">
            <form action="<?php echo route_to('user_store_register') ?>" method="POST">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="input-box mt-10">
                            <input type="text" name="username" placeholder="Username" required autocomplete="off">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="input-box mt-10">
                            <input type="email" name="email" placeholder="mail@coworkind.com" required autocomplete="off">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="input-box mt-10">
                            <input type="password" name="password" placeholder="Password" required autocomplete="off">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="input-box mt-10">
                            <input type="password" name="match_password" placeholder="Re-type Password" required autocomplete="off">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="input-box mt-10 d-flex justify-content-end">
                            <button class="main-btn main-btn-2">Register</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?= $this->endSection() ?>