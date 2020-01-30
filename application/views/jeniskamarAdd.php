<?php include ("header.php"); ?>
<!-- <div class="row">
    <div class="col-md-12">
        <h2 class="page-header">
            Tambah Data Jenis Kamar
        </h2>
    </div>
</div>  -->
                <!-- /. ROW  -->
<!-- 
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <?php echo form_open('jeniskamar/post'); ?>
                                <div class="form-group"> 
                                    <label>Nama Jenis Kamar</label>
                                    <input type="text" name="namajenis" class="form-control" placeholder="Nama Jenis Kamar">
                                </div>
                                <div class="form-group"> 
                                    <label>Harga Kamar</label>
                                    <input type="text" name="hargakamar" class="form-control" placeholder="Harga Kamar">
                                </div>
                                <div class="form-group"> 
                                    <label>Stok Kamar</label>
                                    <input type="text" name="stokkamar" class="form-control" placeholder="Stok Kamar">
                                </div>

                                <button type="submit" name="submit" class="btn btn-primary btn-sm">Simpan</button> | 
                                <?php echo anchor('jeniskamar','Kembali',array('class'=>'btn btn-danger btn-sm'))?>
                                </form>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- /. ROW  -->

<div class="right_col" role="main">
        <div class="">

          <div class="row">
            <div class="col-md-12 col-sm-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Form Tambah Jenis Kamar</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <!-- <form class="" action="" method="post" novalidate> -->
                  <?php echo form_open('jeniskamar/post'); ?>
                    <div class="field item form-group">
                      <label class="col-form-label col-md-1 label-align">Nama<span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6">
                        <input class="form-control" name="namajenis" placeholder="Nama Jenis Kamar" required="required" />
                      </div>
                    </div>
                    <div class="field item form-group">
                      <label class="col-form-label col-md-1 label-align">Harga<span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6">
                        <input class="form-control" name="hargakamar" type="text" placeholder="Harga Jenis Kamar"/></div>
                    </div>
                    <div class="field item form-group">
                      <label class="col-form-label col-md-1  label-align">Stok<span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6">
                        <input class="form-control" name="stokkamar" required="required" type="text" placeholder="Stok Jenis Kamar"/></div>
                      </div>
                    <div class="col-form-label col-md-6  label-align">
                    <!-- <button type='submit' class="btn btn-primary">Submit</button> -->
                    <?php echo anchor('jeniskamar','Kembali',array('class'=>'btn btn-danger btn-sm-4'))?>
                    <button type='reset' class="btn btn-success btn-sm-4">Reset</button>
                    <button type="submit" name="submit" class="btn btn-primary btn-sm-4">Simpan</button> 
                    </div>  
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <?php include ("footer.php"); ?>


      