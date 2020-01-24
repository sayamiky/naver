<?php include ("header.php"); ?>

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
                    <h3>Form Customer</h3>
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
                    <!-- <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-secondary" type="button">Go!</button>
                    </span> -->
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
    <!-- tabel content -->
    <div class="x_content">
        <div class="row">
            <div class="col-sm-12">
              <div class="card-box table-responsive">
							<table id="datatable" class="table table-striped table-bordered" style="width:100%">
                <thead>
                  <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>No Telp</th>
                  <th>Email</th>
                  <th>Alamat</th>
                  <th>Kota</th>
                  <th>Negara</th>
                  <th>No Passpor</th>
                  <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no=1; foreach ($record->result() as $r) { ?>
                    <tr class="gradeU">
                        <td><?php echo $no ?></td>
                        <td><?php echo $r->namacust ?></td>
                        <td><?php echo $r->tlp ?></td>
                        <td><?php echo $r->email ?></td>
                        <td><?php echo $r->alamat ?></td>
                        <td><?php echo $r->kota ?></td>
                        <td><?php echo $r->negara ?></td>
                        <td><?php echo $r->nopasspor ?></td>

                        <td class="center">
                            <?php echo anchor('customer/edit/'.$r->idcust,'Edit'); ?> | 
                            <?php echo anchor('customer/delete/'.$r->idcust,'Hapus'); ?>
                        </td>
                    </tr>
                  <?php $no++; } ?>
                </tbody>
              </table>
            </div>
            </div>
        </div>
      </div>
    <!-- table content -->
    <?php include ("footer.php"); ?>