<aside class="app-aside app-aside-light app-aside-expand-md">
    <!-- .aside-content -->
    <div class="aside-content">
        <!-- .aside-header -->
        <header class="aside-header d-block d-md-none">
            <!-- .btn-account -->
            <button class="btn-account" type="button" data-toggle="collapse" data-target="#dropdown-aside">
                <span class="user-avatar user-avatar-lg">
                    <img src="<?= base_url() ?>assets/images/avatars/profile.jpg" alt="">
                </span>
                <span class="account-icon">
                    <span class="fa fa-caret-down fa-lg"></span>
                </span>
                <span class="account-summary">
                    <span class="account-name"><?= ucfirst($session['name']) ?></span>
                    <span class="account-description"><?= $session['level_id'] == 1 ? 'Superadmin' : 'Admin' ?></span>
                </span>
            </button>
            <!-- /.btn-account -->

            <!-- .dropdown-aside -->
            <div id="dropdown-aside" class="dropdown-aside collapse">
                <!-- dropdown-items -->
                <div class="pb-3">
                    <a class="dropdown-item" href="#"><span class="dropdown-icon oi oi-person"></span> Profile</a>
                    <!-- <div class="dropdown-divider"></div> -->
                    <a class="dropdown-item" href="<?= base_url('logout') ?>"><span class="dropdown-icon oi oi-account-logout"></span> Logout</a>
                </div>
                <!-- /dropdown-items -->
            </div>
            <!-- /.dropdown-aside -->
        </header>
        <!-- /.aside-header -->

        <!-- .aside-menu -->
        <section class="aside-menu perfect-scrollbar">
            <!-- .stacked-menu -->
            <nav id="stacked-menu" class="stacked-menu">
                <!-- .menu -->
                <ul class="menu">
                    <!-- <li class="menu-header">Menus</li> -->
                    <!-- .menu-item -->
                    <li class="menu-item has-active">
                        <a href="#" class="menu-link"><span class="menu-icon fas fa-home"></span> <span class="menu-text">Dashboard</span></a>
                    </li><!-- /.menu-item -->
                </ul>
                <!-- /.menu -->
            </nav>
            <!-- /.stacked-menu -->
        </section>
        <!-- /.aside-menu -->
        <!-- Skin changer -->
        <footer class="aside-footer border-top p-2">
            <!-- <button class="btn btn-light btn-block text-primary" data-toggle="skin"><span class="d-compact-menu-none">Night mode</span> <i class="fas fa-moon ml-1"></i></button> -->
            <span class="d-compact-menu-none"><?= appVersion() ?></span>
        </footer><!-- /Skin changer -->
    </div>
    <!-- /.aside-content -->
</aside>