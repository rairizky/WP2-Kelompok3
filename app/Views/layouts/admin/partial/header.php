<div class="header">
    <div class="logo logo-dark">
        <a href="<?php echo route_to('admin_dashboard') ?>" style="margin-top: 17px;">
            <h2>Coworkind</h2>
        </a>
    </div>
    <div class="logo logo-white">
        <a href="index.html">
            <img src="<?= base_url() ?>/admin/assets/images/logo/logo-white.png" alt="Logo">
            <img class="logo-fold" src="<?= base_url() ?>/admin/assets/images/logo/logo-fold-white.png" alt="Logo">
        </a>
    </div>
    <div class="nav-wrap">
        <ul class="nav-left">
            <li class="desktop-toggle">
                <a href="javascript:void(0);">
                    <i class="anticon"></i>
                </a>
            </li>
            <li class="mobile-toggle">
                <a href="javascript:void(0);">
                    <i class="anticon"></i>
                </a>
            </li>
        </ul>
        <ul class="nav-right">
            <li class="dropdown dropdown-animated scale-left">
                <div class="pointer" data-toggle="dropdown">
                    <div class="avatar avatar-image  m-h-10 m-r-15">
                        <img src="<?= base_url() ?>/admin/assets/images/avatars/thumb-3.jpg"  alt="">
                    </div>
                </div>
                <div class="p-b-15 p-t-20 dropdown-menu pop-profile">
                    <div class="p-h-20 p-b-15 m-b-10 border-bottom">
                        <div class="d-flex m-r-50">
                            <div class="m-l-10">
                                <p class="m-b-0 text-dark font-weight-semibold"><?php echo session()->get('admin_username') ?></p>
                                <p class="m-b-0 opacity-07"><?php echo session()->get('admin_email') ?></p>
                            </div>
                        </div>
                    </div>
                    <a href="<?php echo route_to('admin_logout') ?>" class="dropdown-item d-block p-h-15 p-v-10">
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <i class="anticon opacity-04 font-size-16 anticon-logout"></i>
                                <span class="m-l-10">Logout</span>
                            </div>
                            <i class="anticon font-size-10 anticon-right"></i>
                        </div>
                    </a>
                </div>
            </li>
        </ul>
    </div>
</div>