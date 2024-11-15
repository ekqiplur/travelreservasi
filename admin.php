<?php 
include 'views/layout/admin/header.php';
?>
    <!--*******************
        Preloader start
    ********************-->
    <!-- <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div> -->
    <!--*******************
        Preloader end
    ********************-->

    
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <div class="brand-logo">
                <a href="index.html">
                    <b class="logo-abbr"><img src="assets/images/logo.png" alt=""> </b>
                    <span class="logo-compact"><img src="./assets/images/logo-compact.png" alt=""></span>
                    <span class="brand-title">
                        <img src="assets/images/logo-text.png" alt="">
                    </span>
                </a>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">    
            <div class="header-content clearfix">
                
                <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon"><i class="icon-menu"></i></span>
                    </div>
                </div>
                <div class="header-left">
                    <div class="input-group icons">
                        <div class="input-group-prepend">
                        </div>
                        <div class="drop-down animated flipInX d-md-none">
                            <form action="#">
                                <input type="text" class="form-control" placeholder="Search">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="header-right">
                    <ul class="clearfix">
                        <li class="icons dropdown"><a href="javascript:void(0)" data-toggle="dropdown">
                                <i class="mdi mdi-email-outline"></i>
                                <span class="badge badge-pill gradient-1">#</span>
                            </a>
                            <div class="drop-down animated fadeIn dropdown-menu">
                                <div class="dropdown-content-heading d-flex justify-content-between">
                                    <span class="">mm</span>  
                                    <a href="javascript:void()" class="d-inline-block">
                                        <span class="badge badge-pill gradient-1">3</span>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="icons dropdown">
                            <div class="user-img c-pointer position-relative"   data-toggle="dropdown">
                                <span class="activity active"></span>
                                <img src="assets/images/user/undraw_profile.svg" height="40" width="40" alt="">
                            </div>
                            <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li><a href="page-login.html"><i class="icon-key"></i> <span>Logout</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="nk-sidebar">           
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label">Dashboard</li>
                    <li>
                        <a href="?action=dashboard" aria-expanded="false">
                            <i class="icon-speedometer menu-icon"></i><span class="nav-text">Dashboard</span>
                        </a>
                        
                    </li>
                    <li>
                        <a href="?action=supir" aria-expanded="false">
                            <i class="icon-people menu-icon"></i><span class="nav-text">Supir</span>
                        </a>
                        
                    </li>
                    <li>
                        <a href="?action=bus" aria-expanded="false">
                            <i class="fa fa-bus"></i><span class="nav-text">Bus</span>
                        </a>
                        
                    </li>
                    <li>
                        <a href="?action=jadwal" aria-expanded="false">
                            <i class="icon-book-open menu-icon"></i><span class="nav-text">Jadwal</span>
                        </a>
                        
                    </li>
                    <li>
                        <a href="?action=transaksi" aria-expanded="false">
                            <i class="icon-note menu-icon"></i><span class="nav-text">Transaksi</span>
                        </a>
                        
                    </li>
                    <li>
                        <a href="?action=konfirmasi" aria-expanded="false">
                            <i class="icon-speech menu-icon"></i><span class="nav-text">Konfirmasi Pesanan</span>
                        </a>
                        
                    </li>
                    <li>
                        <a href="?action=laporan" aria-expanded="false">
                            <i class="fa fa-book"></i><span class="nav-text">Laporan</span>
                        </a>
                        
                    </li>
                    <li>
                        <a href="?action=rekening" aria-expanded="false">
                            <i class="fa fa-credit-card"></i><span class="nav-text">Rekening</span>
                        </a>
                        
                    </li>
                    <li>
                        <a href="?action=users" aria-expanded="false">
                            <i class="icon-user menu-icon"></i><span class="nav-text">Users</span>
                        </a>
                        
                    </li>
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

        <?php 
            include 'route.php';
         ?>

            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
        


<?php 
include 'views/layout/admin/footer.php';
?>        
