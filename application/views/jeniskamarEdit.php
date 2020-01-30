<h3>Edit Data Jenis Kamar</h3>
<?php
echo form_open('jeniskamar/edit');
?>
<input type="hidden" value="<?php echo $record['idjenis']?>" name="idjenis">
<table class="table table-bordered">
  <tr><td width="130">Nama Jenis</td>
        <td>
        <div>
       <input type="text" name="namajenis" placeholder="Nama Jenis" class="form-control" value="<?php echo $record['namajenis']?>">
        </div>
       </td>
  </tr>
  <tr><td width="130">Harga Kamar</td>
        <td>
        <div>
       <input type="text" name="hargakamar" placeholder="Herga Kamar" class="form-control" value="<?php echo $record['hargakamar']?>">
        </div>
       </td>
  </tr>
  <tr><td width="130">Stok Kamar</td>
        <td>
        <div>
       <input type="text" name="stokkamar" placeholder="stokkamar" class="form-control" value="<?php echo $record['stokkamar']?>">
        </div>
       </td>
  </tr>
    <tr><td colspan="2"><button type="submit" class="btn btn-primary btn-sm" name="submit">Simpan</button> 
        <?php echo anchor('jeniskamar','Kembali',array('class'=>'btn btn-primary btn-sm'))?></td></tr>
</table>
</form>