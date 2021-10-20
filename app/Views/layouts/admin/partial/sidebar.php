<div class="side-nav">
    <div class="side-nav-inner">
        <ul class="side-nav-menu scrollable">
            <li class="nav-item dropdown">
                <a href="<?php echo route_to('admin_dashboard') ?>">
                    <span class="icon-holder">
                        <i class="anticon anticon-dashboard"></i>
                    </span>
                    <span class="title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item dropdown">
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
                    <li>
                        <a href="#">Manage Room</a>
                    </li>
                    <li>
                        <a href="#">Manage Room Type</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="<?php echo route_to('admin_dashboard') ?>">
                    <span class="icon-holder">
                        <i class="anticon anticon-dollar"></i>
                    </span>
                    <span class="title">Transactions</span>
                </a>
            </li>
        </ul>
    </div>
</div>