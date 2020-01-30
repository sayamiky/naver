<div class="right_col" role="main">
        <div class="">

          <div class="row">
            <div class="col-md-12 col-sm-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Form Tambah Kamar</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <!-- <form class="" action="" method="post" novalidate> -->
                  <?php echo form_open('kamar/post'); ?>
                  <div class="form-group">
                        <label for="name">Nama Jenis Kamar</label>
                        <div class="controls">
                            <select required name="kode_gejala">
                                <option value="" disabled diselected>-- Pilih Jenis --</option>
                            <?php                                
                            foreach ($dd_namajenis as $row) {  
                            echo "<option value='".$row->idjenis."'>".$row->namajenis."</option>";
                            }
                            echo"
                            </select>"
                            ?>
                        </div>
                    </div>
                    <div class="field item form-group">
                      <label class="col-form-label col-md-1 label-align">Nama Kamar<span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6">
                        <input class="form-control" name="namakamar" placeholder="Nama Kamar" required="required" />
                      </div>
                    </div>
                    <div class="field item form-group">
                      <label class="col-form-label col-md-1 label-align">Harga Kamar<span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6">
                        <input class="form-control" name="hargakamar" type="text" placeholder="Harga Kamar"/></div>
                    </div>
                    <div class="field item form-group">
                      <label class="col-form-label col-md-1  label-align">Foto Kamar<span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6">
                        <input class="form-control" name="fotokamar" required="required" type="file" placeholder="Foto Kamar"/></div>
                      </div>
                      <div class="field item form-group">
                      <label class="col-form-label col-md-1  label-align">Deskripsi<span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6">
                        <input class="form-control" name="deskripsi" required="required" type="text" placeholder="Deskripsi Kamar"/></div>
                      </div>
                    <div class="col-form-label col-md-6  label-align">
                    <!-- <button type='submit' class="btn btn-primary">Submit</button> -->
                    <?php echo anchor('kamar','Kembali',array('class'=>'btn btn-danger btn-sm-4'))?>
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


      