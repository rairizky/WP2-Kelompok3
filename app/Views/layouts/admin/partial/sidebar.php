<style>
    .active-single {
        border-right: 2px solid;
        border-color: #3f87f5;
        background-color: rgba(63,135,245,0.15);
    }

    .active-single > a {
        color: #3f87f5 !important;;
    }
</style>

<div class="side-nav">
    <div class="side-nav-inner">
        <ul class="side-nav-menu scrollable">
            <li class="nav-item dropdown <?php echo check_single(route_to('admin_dashboard').'*') ?>">
                <a href="<?php echo route_to('admin_dashboard') ?>">
                    <span class="icon-holder">
                        <i class="anticon anticon-dashboard"></i>
                    </span>
                    <span class="title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item dropdown <?php echo check_header('admin/room/*') ?>">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="anticon anticon-bank"></i>
                    </span>
                    <span class="title">Rooms</span>
                    <span class="arrow">
                        <i class="arrow-icon"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li class="<?php echo check_child(route_to('admin_room').'*') ?>">
                        <a href="<?php echo route_to('admin_room') ?>">Manage Room</a>
                    </li>
                    <li class="<?php echo check_child(route_to('admin_room_type').'*') ?>">
                        <a href="<?php echo route_to('admin_room_type') ?>">Manage Room Type</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown <?php echo check_single(route_to('admin_transaction').'*') ?>">
                <a href="<?php echo route_to('admin_transaction') ?>">
                    <span class="icon-holder">
                        <i class="anticon anticon-dollar"></i>
                    </span>
                    <span class="title">Transactions</span>
                </a>
            </li>
        </ul>
    </div>
</div>