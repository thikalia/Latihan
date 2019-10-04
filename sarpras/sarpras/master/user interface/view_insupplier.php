<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="library/style.css" />
<style type="text/css">
<!--
.style4 {font-size: 14px}
.style7 {
	font-size: large;
	font-family: "Lucida Calligraphy";
}
.style8 {
	font-family: "Comic Sans MS";
	font-size: medium;
}
.style10 {font-size: small; font-family: "Comic Sans MS"; }
-->
</style>
</head>
<body>
<div id="submenu">
<img src="images/tambah.png" /><a href="?page=insupplier.html">
<div class="style8">Tambah Data Supplier </div>
</a> 
<div>|</div> 
<img src="images/lihat1.ico" /><a href="?page=supplier.html"><div class="style8">Lihat Data Supplier</div>
</a> 
<div>| </div>
<img src="images/cetak.png" /><a href="print.php?print=supplier" target="_blank"><div class="style8">Cetak Data Supplier</div>
</a></div>
<div id="lap">
<?
   $sql=mysql_query("SELECT kode_supplier from supplier order by kode_supplier desc limit 1");
  $dataakhir=mysql_fetch_array($sql);
   $hsl=$dataakhir['kode_supplier'];
   $cek=mysql_num_rows($sql);
  ?>

<form action="?page=insupplier-act.html" method="POST">
<table width="570" border="0" cellpadding="1" cellspacing="1" align="left">
  <tr bgcolor="#FF6600">
    <td colspan="3"><div align="center"><span class="style7">Tambah Data Supplier</span></div></td>
  </tr>
   <tr bgcolor="#FFFF00">
    <td width="185"><div align="left" class="style10">Kode Supplier</div></td>
    <td width="225"><input name="kode_supplier" type="text" value="<?php echo isset($_POST['kode_supplier']) ? $_POST['kode_supplier'] : '';?>" size="10" /></td>
    <td width="150"><div class="style4" style="color:red"><?php echo isset($error['kode_supplier']) ? $error['kode_supplier'] : '';?></div>
	<? if ($cek=='1') 
	{ echo "Data kode supplier terakhir adalah $hsl"; } 
	else {echo "Data masih kosong.";} ?></td>
  </tr>
  <tr bgcolor="#FF9900">
    <td><div align="left" class="style10">Nama Supplier</div></td>
    <td><input name="nama_supplier" type="text" value="<?php echo isset($_POST['nama_supplier']) ? $_POST['nama_supplier'] : '';?>" size="35" /></td>
    <td><div class="style4" style="color:red"><?php echo isset($error['nama_supplier']) ? $error['nama_supplier'] : '';?></div></td>
  </tr>
   <tr bgcolor="#FFFF00">
    <td><div align="left" class="style10">Alamat Supplier</div></td>
    <td><textarea name="alamat_supplier" cols="30"><?php echo isset($_POST['alamat_supplier']) ? $_POST['alamat_supplier'] : '';?></textarea></td>
    <td><div class="style4" style="color:red"><?php echo isset($error['alamat_supplier']) ? $error['alamat_supplier'] : '';?></div></td>
  </tr>
   <tr bgcolor="#FF9900">
    <td><div align="left" class="style10">Telepon Supplier</div></td>
    <td><input name="telp_supplier" type="text" value="<?php echo isset($_POST['telp_supplier']) ? $_POST['telp_supplier'] : '';?>" size="15" /></td>
    <td><div class="style4" style="color:red"><?php echo isset($error['telp_supplier']) ? $error['telp_supplier'] : '';?></div></td>
  </tr>
   <tr bgcolor="#FFFF00">
    <td><div align="left" class="style10">Kota Supplier</div></td>
    <td><input name="kota_supplier" type="text" value="<?php echo isset($_POST['kota_supplier']) ? $_POST['kota_supplier'] : '';?>" size="30" /></td>
    <td><div class="style4" style="color:red"><?php echo isset($error['kota_supplier']) ? $error['kota_supplier'] : '';?></div></td>
  </tr>
 
  <tr bgcolor="#FF6600">
    <td colspan="3"><div align="center"><span class="style4">
      <input type="submit" value="Simpan" name="simpan" class="button" />
      &nbsp;
      <input type="button" value="Batal" onclick="self.history.back();" class="button" />	
    </span></div></td>
    </tr>
</table>
</form>
</div>
</body>
</html>
