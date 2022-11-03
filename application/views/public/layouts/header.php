<header class="app-header app-header-dark bg-dark">
    <!-- .top-bar -->
    <div class="top-bar">
        <!-- .top-bar-brand -->
        <div class="top-bar-brand">
            <!-- toggle aside menu -->
            <button class="hamburger hamburger-squeeze mr-2" type="button" data-toggle="aside-menu" aria-label="toggle aside menu"><span class="hamburger-box"><span class="hamburger-inner"></span></span></button> <!-- /toggle aside menu -->
            <a href="/">
                <img src="<?= base_url() ?>assets/icons/rival/rival-02.png" height="60px" alt="">
            </a>
        </div>
        <!-- /.top-bar-brand -->

        <!-- .top-bar-list -->
        <div class="top-bar-list">
            <!-- .top-bar-item -->
            <div class="top-bar-item px-2 d-md-none d-lg-none d-xl-none">
                <!-- toggle menu -->
                <button class="hamburger hamburger-squeeze" type="button" data-toggle="aside" aria-label="Menu" aria-controls="navigation">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
                <!-- /toggle menu -->
            </div>
            <!-- /.top-bar-item -->

            <!-- .top-bar-item -->
            <div class="top-bar-item top-bar-item-right px-0 d-none d-sm-flex">

                <!-- .btn-account -->
                <div class="dropdown">
                    <button class="btn-account d-none d-md-flex" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="user-avatar">
                            <img src="<?= base_url() ?>assets/images/avatars/profile.jpg" alt="">
                        </span>
                        <span class="account-summary pr-lg-4 d-none d-lg-block">
                            <span class="account-name"><?= ucfirst($session['name']) ?></span>
                            <span class="account-description"><?= $session['level_id'] == 1 ? 'Superadmin' : 'Admin' ?></span>
                        </span>
                    </button>
                    <!-- .dropdown-menu -->
                    <div class="dropdown-menu">
                        <div class="dropdown-arrow"></div>
                        <!--  <h6 class="dropdown-header d-none d-md-block d-lg-none">John Doe</h6> -->
                        <a class="dropdown-item" href="#"><span class="dropdown-icon oi oi-person"></span> Profile</a>
                        <!-- <div class="dropdown-divider"></div> -->
                        <a class="dropdown-item" href="<?= base_url('logout') ?>"><span class="dropdown-icon oi oi-account-logout"></span> Logout</a>
                    </div>
                    <!-- /.dropdown-menu -->
                </div>
                <!-- /.btn-account -->
            </div>
            <!-- /.top-bar-item -->
        </div>
        <!-- /.top-bar-list -->
    </div>
    <!-- /.top-bar -->
</header>