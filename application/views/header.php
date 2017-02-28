<!--Double navigation-->
<header class="header_admin">
    <!-- Sidebar navigation -->
    <ul id="slide-out" class="side-nav fixed custom-scrollbar">

        <!-- Logo -->
        <li>
            <div class="logo-wrapper sn-ad-avatar-wrapper">
                <img src="http://mdbootstrap.com/images/avatars/img%20(9)" class="img-fluid rounded-circle">
                <div class="rgba-stylish-strong">
                    <p class="user white-text">Kasir<br><?= $this->session->userdata('nama'); ?></p>
                </div>
            </div>
        </li>
        <!--/. Logo -->

        <!-- Side navigation links -->
        <li>
            <ul class="collapsible collapsible-accordion">
                <li>
                  <a class="collapsible-header waves-effect arrow-r">
                    <i class="fa fa-th-list"></i> Transaksi
                  </a>
                </li>

                <li>
                  <a class="collapsible-header waves-effect arrow-r">
                    <i class="fa fa-users"></i> Data Kasir
                  </a>
                </li>

                <li>
                  <a class="collapsible-header waves-effect arrow-r">
                    <i class="fa fa-user-circle"></i> Data Pelanggan
                  </a>
                </li>

                <li>
                  <a class="collapsible-header waves-effect arrow-r">
                    <i class="fa fa-shopping-bag"></i> Barang
                  </a>
                </li>

                <!-- <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-diamond"></i> Accessories<i class="fa fa-angle-down rotate-icon"></i></a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="#" class="waves-effect">Jewelry</a>
                            </li>
                            <li><a href="#" class="waves-effect">Wallets & Purses</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-gitlab"></i> For kids<i class="fa fa-angle-down rotate-icon"></i></a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="#" class="waves-effect">Girls</a>
                            </li>
                            <li><a href="#" class="waves-effect">Boys</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-sun-o"></i> Summer<i class="fa fa-angle-down rotate-icon"></i></a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="#" class="waves-effect">Swimsuits</a>
                            </li>
                            <li><a href="#" class="waves-effect">Sandals</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-briefcase"></i> Fall / Winter<i class="fa fa-angle-down rotate-icon"></i></a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="#" class="waves-effect">Coats</a>
                            </li>
                            <li><a href="#" class="waves-effect">Boots</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-coffee "></i> Spring<i class="fa fa-angle-down rotate-icon"></i></a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="#" class="waves-effect">Denim jackets</a>
                            </li>
                            <li><a href="#" class="waves-effect">Sneakers</a>
                            </li>
                        </ul>
                    </div>
                </li> -->
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
            <p>BrandFlow Home Page</p>
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
