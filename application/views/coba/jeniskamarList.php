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
	  <!-- code ci -->
		<!-- <div class="content">
				<h1>Contoh Insert Update dan delete</h1>
				<div class="paging"><?php echo $pagination; ?></div>
				<div class="data"><?php echo $table; ?></div>
				<div class="paging"><?php echo $pagination; ?></div>
				
				<br />
				<?php echo anchor('jeniskamar/add/','Tambah jenis kamar baru',array('class'=>'add')); ?>
			</div> -->
	  <!-- code ci -->

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
                  <li><a href="<?php echo site_url('jeniskamar/index') ?>"><i class="fa fa-users"></i> Customer </a>
                  <li><a><i class="fa fa-edit"></i> Rooms <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="form.html">Room</a></li>
                      <li><a href="<?php echo site_url('jeniskamar/index') ?>">Room Category</a></li>
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
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row" style="display: inline-block;" >
          
        </div>
          <!-- /top tiles -->
          <div class="row">
            <div class="col-md-12 col-sm-12 ">
              <div class="dashboard_graph">

                <div class="row x_title">
                  <div class="col-md-6">
                    <h3>Form Jenis Kamar</h3>
                  </div>
                </div>
        <!-- /page content -->

        <!-- table content -->
        <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                  <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-secondary" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Settings 1</a>
                            <a class="dropdown-item" href="#">Settings 2</a>
                          </div>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
							<table id="datatable" class="table table-striped table-bordered" style="width:100%">
							<thead>
								<tr>
								<th>Name</th>
								<th>Position</th>
								<th>Office</th>
								<th>Age</th>
								<th>Start date</th>
								<th>Salary</th>
								</tr>
							</thead>


							<tbody>
								<tr>
								<td>Tiger Nixon</td>
								<td>System Architect</td>
								<td>Edinburgh</td>
								<td>61</td>
								<td>2011/04/25</td>
								<td>$320,800</td>
								</tr>
								<tr>
								<td><?php echo $pagination; ?></td>
								<td><?php echo $table; ?></td>
								<td><?php echo $pagination; ?></td>
								</tr>
							</tbody>
							<!-- <div class="paging"></div>
							<div class="data"></div>
							<div class="paging"></div> -->
						
						<br />
						<?php echo anchor('jeniskamar/add/','Tambah jenis kamar baru',array('class'=>'add')); ?>
                    </table>
                  </div>
                  </div>
              </div>
            </div>
         <!-- table content -->
         
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
