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
                  <li><a href="#"><i class="fa fa-home"></i> Home </a>
                    <!-- <ul class="nav child_menu">
                      <li><a href="index.html">Dashboard</a></li>
                      <li><a href="index2.html">Dashboard2</a></li>
                      <li><a href="index3.html">Dashboard3</a></li>
                    </ul> -->
                  </li>
                  <li><a href="#"><i class="fa fa-users"></i> Customer </a>
                  <li><a><i class="fa fa-edit"></i> Rooms <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="form.html">Room</a></li>
                      <li><a href="form_advanced.html">Room Category</a></li>
                    </ul>
                  </li>
                  <li><a href="#"><i class="fa fa-folder"></i> Package </a>
                  <li><a><i class="fa fa-calendar"></i> Booking </a></li>
                  <li><a><i class="fa fa-money"></i> Transaction <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="tables.html">Payment</a></li>
                      <li><a href="tables_dynamic.html">Payment Methode</a></li>
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

                <li role="presentation" class="nav-item dropdown open">
                  <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <div class="text-center">
                        <a class="dropdown-item">
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row" style="display: inline-block;" >
          <div class="tile_count">
            <div class="col-md-2 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Users</span>
              <div class="count">2500</div>
              <span class="count_bottom"><i class="green">4% </i> From last Week</span>
            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-clock-o"></i> Average Time</span>
              <div class="count">123.50</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> From last Week</span>
            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Males</span>
              <div class="count green">2,500</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Females</span>
              <div class="count">4,567</div>
              <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> From last Week</span>
            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Collections</span>
              <div class="count">2,315</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Connections</span>
              <div class="count">7,325</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
            </div>
          </div>
        </div>
          <!-- /top tiles -->

          <div class="row">
            <div class="col-md-12 col-sm-12 ">
              <div class="dashboard_graph">

                <div class="row x_title">
                  <div class="col-md-6">
                    <h3>Network Activities <small>Graph title sub-title</small></h3>
                  </div>
                  <div class="col-md-6">
                    <div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                      <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                      <span>December 30, 2014 - January 28, 2015</span> <b class="caret"></b>
                    </div>
                  </div>
                </div>

                <div class="col-md-9 col-sm-9 ">
                  <div id="chart_plot_01" class="demo-placeholder"></div>
                </div>
                <div class="col-md-3 col-sm-3  bg-white">
                  <div class="x_title">
                    <h2>Top Campaign Performance</h2>
                    <div class="clearfix"></div>
                  </div>

                  <div class="col-md-12 col-sm-12 ">
                    <div>
                      <p>Facebook Campaign</p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 76%;">
                          <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="80"></div>
                        </div>
                      </div>
                    </div>
                    <div>
                      <p>Twitter Campaign</p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 76%;">
                          <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="60"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 col-sm-12 ">
                    <div>
                      <p>Conventional Media</p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 76%;">
                          <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="40"></div>
                        </div>
                      </div>
                    </div>
                    <div>
                      <p>Bill boards</p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 76%;">
                          <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="50"></div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>

                <div class="clearfix"></div>
              </div>
          </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Powered by codeigniter 2.4.1
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="<?php echo base_url().'/vendors/jquery/dist/jquery.min.js'?>"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url().'/vendors/bootstrap/dist/js/bootstrap.bundle.min.js'?>"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url().'/vendors/fastclick/lib/fastclick.js'?>"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url().'/vendors/nprogress/nprogress.js'?>"></script>
    <!-- Chart.js -->
    <script src="<?php echo base_url().'/vendors/Chart.js/dist/Chart.min.js'?>"></script>
    <!-- gauge.js -->
    <script src="<?php echo base_url().'/vendors/gauge.js/dist/gauge.min.js'?>"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?php echo base_url().'/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js'?>"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url().'/vendors/iCheck/icheck.min.js'?>"></script>
    <!-- Skycons -->
    <script src="<?php echo base_url().'/vendors/skycons/skycons.js'?>"></script>
    <!-- Flot -->
    <script src="<?php echo base_url().'/vendors/Flot/jquery.flot.js'?>"></script>
    <script src="<?php echo base_url().'/vendors/Flot/jquery.flot.pie.js'?>"></script>
    <script src="<?php echo base_url().'/vendors/Flot/jquery.flot.time.js'?>"></script>
    <script src="<?php echo base_url().'/vendors/Flot/jquery.flot.stack.js'?>"></script>
    <script src="<?php echo base_url().'/vendors/Flot/jquery.flot.resize.js'?>"></script>
    <!-- Flot plugins -->
    <script src="<?php echo base_url().'/vendors/flot.orderbars/js/jquery.flot.orderBars.js'?>"></script>
    <script src="<?php echo base_url().'/vendors/flot-spline/js/jquery.flot.spline.min.js'?>"></script>
    <script src="<?php echo base_url().'/vendors/flot.curvedlines/curvedLines.js'?>"></script>
    <!-- DateJS -->
    <script src="<?php echo base_url().'/vendors/DateJS/build/date.js'?>"></script>
    <!-- JQVMap -->
    <script src="<?php echo base_url().'/vendors/jqvmap/dist/jquery.vmap.js'?>"></script>
    <script src="<?php echo base_url().'/vendors/jqvmap/dist/maps/jquery.vmap.world.js'?>"></script>
    <script src="<?php echo base_url().'/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js'?>"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?php echo base_url().'/vendors/moment/min/moment.min.js'?>"></script>
    <script src="<?php echo base_url().'/vendors/bootstrap-daterangepicker/daterangepicker.js'?>"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url().'/build/js/custom.min.js'?>"></script>
	
  </body>
</html>
