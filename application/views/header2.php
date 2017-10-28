<!--Double navigation-->
<header class="header_admin">
    <!-- Sidebar navigation -->
    <ul id="slide-out" class="side-nav fixed custom-scrollbar">

        <!-- Logo -->
        <li>
            <div class="logo-wrapper sn-ad-avatar-wrapper">
                <img src="<?= base_url('ass/img/Female.png') ?>" class="img-fluid rounded-circle">
                <div class="rgba-stylish-strong">
                    <p class="user white-text">Pengelola 
                        <br>
                        <?= $this->session->userdata('nama'); ?>
                    </p>
                </div>
            </div>
        </li>
        <!--/. Logo -->

        <!-- Side navigation links -->
        <li>
            <ul class="collapsible collapsible-accordion">
                <li>
                  <a href="<?= base_url('Transaksi') ?>" class="collapsible-header waves-effect arrow-r">
                    <i class="fa fa-th-list"></i> Data Barang
                  </a>
                </li>

                <li>
                  <a href="<?= base_url('kasir') ?>" class="collapsible-header waves-effect arrow-r">
                    <i class="fa fa-users"></i> Data Pengelola
                  </a>
                </li>
            </ul>
        </li>
        <!--/. Side navigation links -->

    </ul>
    <!--/. Sidebar navigation -->

    <!--Navbar-->
    <nav class="navbar navbar-fixed-top scrolling-navbar double-nav">

        <!-- SideNav slide-out button -->
        <div class="float-xs-left">
            <a href="#" data-activates="slide-out" class="button-collapse"><i class="fa fa-bars"></i></a>
        </div>

        <!-- Breadcrumb-->
        <div class="breadcrumb-dn">
            <p>S2mart Gudang</p>
        </div>


        <ul class="nav navbar-nav float-xs-right">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i> <span class="hidden-sm-down">Profile</span></a>
                <div class="dropdown-menu dropdown-primary dd-right" aria-labelledby="dropdownMenu1" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                    <a class="dropdown-item" href="#">Logout</a>
                    <a class="dropdown-item" href="#">My account</a>
                </div>
            </li>
        </ul>

    </nav>
    <!--/.Navbar-->
</header>
<!--/Double navigation-->
