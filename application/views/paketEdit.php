<h3>Edit Data paket paket</h3>
<?php
echo form_open('paket/edit');
?>
<input type="hidden" value="<?php echo $record['idpaket']?>" name="idpaket">
<table class="table table-bordered">
  <tr><td width="130">Nama Paket</td>
        <td>
        <div>
       <input type="text" name="namapaket" placeholder="Nama paket" class="form-control" value="<?php echo $record['namapaket']?>">
        </div>
       </td>
  </tr>
  <tr><td width="130">Harga paket</td>
        <td>
        <div>
       <input type="text" name="hargapaket" placeholder="Herga paket" class="form-control" value="<?php echo $record['hargapaket']?>">
        </div>
       </td>
  </tr>
  <tr><td width="130">Foto paket</td>
        <td>
        <div>
       <input type="file" name="fotopaket" placeholder="fotopaket" class="form-control" value="<?php echo $record['fotopaket']?>">
        </div>
       </td>
  </tr>
    <tr><td colspan="2"><button type="submit" class="btn btn-primary btn-sm" name="submit">Simpan</button> 
        <?php echo anchor('paket','Kembali',array('class'=>'btn btn-primary btn-sm'))?></td></tr>
</table>
</form>