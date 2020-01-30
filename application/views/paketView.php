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
            
          </div>
        </div>
<!-- /page content -->

<!-- table content -->
<div class="row">
      <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
          <div class="x_title">
          <h2>Form Paket</h2>
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
              <li></li><?php echo anchor('paket/post','Tambah Data Paket',array('class'=>'btn btn-light btn-sm')) ?>
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
            </ul>
            <div class="clearfix"></div>
          </div>
<!-- tabel content -->
<div class="x_content">
<div class="row">
    <div class="col-sm-12">
      <div class="card-box table-responsive">
      <div class="card-box table-responsive">
            <!-- <p class="text-muted font-13 m-b-30">
              The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
            </p> -->
                    <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
        <thead>
          <tr>
          <th>No</th>
          <th>Nama Paket</th>
          <th>Harga Paket</th>
          <th>Foto Paket</th>
          <th>Action</th>
          </tr>
        </thead>
        <tbody>
        <?php $no=1; foreach ($record->result() as $r) { ?>
            <tr class="gradeU">
                <td><?php echo $no ?></td>
                <td><?php echo $r->namapaket ?></td>
                <!-- <td><?php echo $r->hargapaket ?></td> -->
                <td><?php echo number_format ($r->hargapaket,2) ?></td>
                <td><?php echo $r->fotopaket ?></td>
                <!-- <td><img src="<?=base_url()?>upload/<?=$r->fotopaket;?>'>" alt=""></td> -->

                <td class="center">
                    <?php echo anchor('paket/edit/'.$r->idpaket,'Edit'); ?> | 
                    <?php echo anchor('paket/delete/'.$r->idpaket,'Hapus'); ?>
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