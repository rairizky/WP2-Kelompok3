<?= $this->extend('layouts/admin/auth') ?>

<?= $this->section('content') ?>
    <div class="app">
        <div class="container-fluid p-h-0 p-v-20 bg full-height d-flex" style="background-image: url('<?= base_url() ?>/admin/assets/images/others/login-3.png')">
            <div class="d-flex flex-column justify-content-between w-100">
                <div class="container d-flex h-100">
                    <div class="row align-items-center w-100">
                        <div class="col-md-7 col-lg-5 m-h-auto">
                            <div class="card shadow-lg">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between m-b-30">
                                        <h2 class="m-b-0">Coworkind</h2>
                                        <h2 class="m-b-0">Sign In</h2>
                                    </div>

                                    <?php if(session()->getFlashData('error')): ?>
                                        <div class="alert alert-danger">
                                            <?= session()->getFlashData('error') ?>
                                        </div>
                                    <?php endif; ?>

                                    <form action="<?php echo route_to('admin_store_login') ?>" method="POST" id="form-validation">
                                        <div class="form-group">
                                            <label class="font-weight-semibold" for="username">Username:</label>
                                            <div class="input-affix">
                                                <i class="prefix-icon anticon anticon-user"></i>
                                                <input type="text" class="form-control" id="username" name="username" placeholder="Username" autocomplete="off">
                                            </div>
                                            <div id="error-msg"></div>
                                        </div>
                                        <div class="form-group">
                                            <label class="font-weight-semibold" for="password">Password:</label>
                                            <div class="input-affix">
                                                <i class="prefix-icon anticon anticon-lock"></i>
                                                <input type="password" class="form-control" id="password" name="password" placeholder="Password" autocomplete="off">
                                            </div>
                                            <div id="error-msg"></div>
                                        </div>
                                        <div class="form-group m-t-10">
                                            <div class="d-flex align-items-center justify-content-end">
                                                <button class="btn btn-primary">Sign In</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-none d-md-flex p-h-40 justify-content-between">
                    <span class="">© 2019 ThemeNate</span>
                    <ul class="list-inline">
                       
                    </ul>
                </div>
            </div>
        </div>
    </div>
<?= $this->endSection() ?>

<?= $this->section('script') ?>
    <script>
        $( "#form-validation" ).validate({
            errorPlacement: function(error, element) {
                error.insertAfter(element.closest('div'));
            },
            ignore: ':hidden:not(:checkbox)',
            errorElement: 'label',
            errorClass: 'is-invalid',
            validClass: 'is-valid',
            rules: {
                username: {
                    required: true
                },
                password: {
                    required: true
                }
            }
        });
    </script>
<?= $this->endSection() ?>