<header class="app-header app-header-dark">
    <!-- .top-bar -->
    <div class="top-bar">
        <!-- .top-bar-brand -->
        <div class="top-bar-brand">
            <!-- toggle aside menu -->
            <button class="hamburger hamburger-squeeze mr-2" type="button" data-toggle="aside-menu" aria-label="toggle aside menu"><span class="hamburger-box"><span class="hamburger-inner"></span></span></button> <!-- /toggle aside menu -->
            <a href="/">
                <img src="<?= base_url() ?>assets/images/brand.svg" height="32px" alt="">
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
            <div class="top-bar-item top-bar-item-full">
                <!-- .top-bar-search -->
                <div class="top-bar-search">
                    <div class="input-group input-group-search">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <span class="oi oi-magnifying-glass"></span>
                            </span>
                        </div>
                        <input type="text" class="form-control" aria-label="Search" placeholder="Search">
                    </div>
                </div>
                <!-- /.top-bar-search -->
            </div>
            <!-- /.top-bar-item -->

            <!-- .top-bar-item -->
            <div class="top-bar-item top-bar-item-right px-0 d-none d-sm-flex">
                <!-- .nav -->
                <ul class="header-nav nav">
                    <!-- .nav-item -->
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span class="oi oi-grid-three-up"></span>
                        </a>
                    </li>
                    <!-- /.nav-item -->
                </ul>
                <!-- /.nav -->

                <!-- .btn-account -->
                <div class="dropdown">
                    <button class="btn-account d-none d-md-flex" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="user-avatar">
                            <img src="<?= base_url() ?>assets/images/avatars/profile.jpg" alt="">
                        </span>
                        <span class="account-summary pr-lg-4 d-none d-lg-block">
                            <span class="account-name">John Doe</span>
                            <span class="account-description">@johndoe</span>
                        </span>
                    </button>
                    <!-- .dropdown-menu -->
                    <div class="dropdown-menu">
                        <div class="dropdown-arrow"></div>
                        <h6 class="dropdown-header d-none d-md-block d-lg-none">John Doe</h6>
                        <a class="dropdown-item" href="#"><span class="dropdown-icon oi oi-person"></span> Profile</a>
                        <a class="dropdown-item" href="#"><span class="dropdown-icon oi oi-account-logout"></span> Logout</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Help Center</a>
                        <a class="dropdown-item" href="#">Ask Forum</a>
                        <a class="dropdown-item" href="#">Keyboard Shortcuts</a>
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