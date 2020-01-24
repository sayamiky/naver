<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Naver</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url().'/vendors/bootstrap/dist/css/bootstrap.min.css'?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url().'/vendors/font-awesome/css/font-awesome.min.css'?>">
    <!-- NProgress -->
    <link rel="stylesheet" href="<?php echo base_url().'/vendors/nprogress/nprogress.css'?>">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url().'/vendors/iCheck/skins/flat/green.css'?>">
	
    <!-- bootstrap-progressbar -->
    <link rel="stylesheet" href="<?php echo base_url().'/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css'?>">
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?php echo base_url().'/vendors/jqvmap/dist/jqvmap.min.css'?>">
    <!-- bootstrap-daterangepicker -->
    <link rel="stylesheet" href="<?php echo base_url().'/vendors/bootstrap-daterangepicker/daterangepicker.css'?>">

    <!-- Custom Theme Style -->
    <link rel="stylesheet" href="<?php echo base_url().'/build/css/custom.min.css'?>">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
            <a href="#" class="site_title"><i class="fa fa-paw"></i> <span>Naver Blue</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <!-- <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/user.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>Admin</h2>
              </div>
            </div> -->
            <!-- /menu profile quick info -->

           

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <!-- <h3>General</h3> -->
                <ul class="nav side-menu">
                  <li><a href="<?php echo site_url('index/index') ?>"><i class="fa fa-home"></i> Home </a>
                  </li>
                  <li><a href="<?php echo site_url('customer/index') ?>"><i class="fa fa-users"></i> Customer </a>
                  <li><a><i class="fa fa-edit"></i> Rooms <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo site_url('kamar/index') ?>">Room</a></li>
                      <li><a href="<?php echo site_url('jeniskamar/index') ?>">Room Category</a></li>
                    </ul>
                  </li>
                  <li><a href="<?php echo site_url('paket/index') ?>"><i class="fa fa-folder"></i> Package </a>
                  <li><a href="<?php echo site_url('reservasi/index') ?>"><i class="fa fa-calendar"></i> Booking </a></li>
                  <li><a href="<?php echo site_url('transaksi/index') ?>"><i class="fa fa-money"></i> Transaction <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo site_url('pembayaran/index') ?>">Payment</a></li>
                      <li><a href="<?php echo site_url('jenispembayaran/index') ?>">Payment Methode</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <nav class="nav navbar-nav">
              <ul class=" navbar-right">
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                  <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/user.png" alt="">Admin
                  </a>
                  <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item"  href="javascript:;"> Profile</a>
                    <a class="dropdown-item"  href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                  </div>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->