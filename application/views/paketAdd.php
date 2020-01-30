<?php include ("header.php"); ?>

<div class="right_col" role="main">
        <div class="">

          <div class="row">
            <div class="col-md-12 col-sm-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Form Tambah Paket</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <!-- <form class="" action="" method="post" novalidate> -->
                  <?php echo form_open('paket/post'); ?>
                    <div class="field item form-group">
                      <label class="col-form-label col-md-1 label-align">Nama<span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6">
                        <input class="form-control" name="namapaket" placeholder="Nama Paket" required="required" />
                      </div>
                    </div>
                    <div class="field item form-group">
                      <label class="col-form-label col-md-1 label-align">Harga<span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6">
                        <input class="form-control" name="hargapaket" type="text" placeholder="Harga Paket"/></div>
                    </div>
                    <div class="field item form-group">
                      <label class="col-form-label col-md-1  label-align">Foto<span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6">
                        <input class="form-control" name="fotopaket" required="required" type="file" /></div>
                      </div>
                    <div class="col-form-label col-md-6  label-align">
                    <!-- <button type='submit' class="btn btn-primary">Submit</button> -->
                    <?php echo anchor('paket','Kembali',array('class'=>'btn btn-danger btn-sm-4'))?>
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


      