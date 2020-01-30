<H2>Form Tambah Kamar</H2>
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
<div class="form-group">
    <label for="name">Nama Kamar</label>
    <div class="controls">
    <input type="text" name="namakamar">
</div>
 <div class="form-group">
    <label for="name">Foto Kamar</label>
    <div class="controls">
    <input type="input" name="fotokamar">
</div>
</div>
<div class="form-group">
    <label for="name">Deskripsi</label>
    <div class="controls">
    <input type="text" name="deskripsi">
</div>
</div>
<h4>&copy otnaites.blogspot.co.id</h4>