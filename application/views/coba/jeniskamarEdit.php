<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>SIMPLE CRUD APPLICATION</title>

<link href="<?php echo base_url(); ?>style/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<div class="content">
		<h1><?php echo $title; ?></h1>
		<?php echo $message; ?>
		<?php echo validation_errors(); ?>
<?php echo form_open($action); ?>
		<div class="data">
		<table>
			<tr>
				<td width="30%">Id Jenis</td>
				<td><input type="text" name="idjenis" class="text" value="<?php echo (isset($jeniskamar['idjenis']))?$jeniskamar['idjenis']:''; ?>"/></td>
				<input type="hidden" name="idjenis" value="<?php echo (isset($jeniskamar['idjenis']))?$jeniskamar['idjenis']:''; ?>"/>
			</tr>
			<tr>
				<td valign="top">Nama Jenis Kamar<span style="color:red;">*</span></td>
				<td><input type="text" name="namajenis" class="text" value="<?php echo (set_value('namajenis'))?set_value('namajenis'):$jeniskamar['namajenis']; ?>"/>
				<?php echo form_error('namajenis'); ?></td>
			</tr>
			<tr>
				<td valign="top">Harga Kamar</td>
				<td><input type="text" name="hargakamar" class="text" value="<?php echo set_value('hargakamar')?set_value('hargakamar'):$jeniskamar['hargakamar']; ?>"/>
				<?php echo form_error('hargakamar'); ?></td>
			</tr>
            <tr>
				<td valign="top">Stok Kamar</td>
				<td><input type="text" name="stokkamar" class="text" value="<?php echo set_value('stokkamar')?set_value('stokkamar'):$jeniskamar['stokkamar']; ?>"/>
				<?php echo form_error('stokkamar'); ?></td>
			</tr>
            <tr>
				<td valign="top">Foto Kamar</td>
				<td><input type="file" name="fotokamar" class="text" value="<?php echo set_value('fotokamar')?set_value('fotokamar'):$jeniskamar['fotokamar']; ?>"/>
				
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td><input type="submit" value="Save"/></td>
			</tr>
		</table>
		</div>

	</form>


		<br />
		<?php echo $link_back; ?>
	</div>
</body>
</html>