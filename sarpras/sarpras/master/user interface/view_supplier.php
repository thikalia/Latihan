<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="library/style.css" />
<style type="text/css">
<!--
.style4 {font-size: 14px}
.style5 {
	font-size: large;
	font-weight: bold;
	font-family: "Lucida Calligraphy";
}
.style7 {font-family: "Comic Sans MS"; font-size: medium; }
.style8 {font-family: "Comic Sans MS"}
.style9 {font-size: small}
.style10 {font-family: "Comic Sans MS"; font-size: small; }
-->
</style>
</head>

<body>
<div id="submenu">
<img src="images/tambah.png" />
<div><a href="?page=insupplier.html" class="style7">Tambah Data Supplier </a></div>
 
<div>|</div> 
<img src="images/lihat1.ico" /><a href="?page=supplier.html"><div class="style7">Lihat Data Supplier</div>
</a> 
<div>| </div>
<img src="images/cetak.png" /><a href="print.php?print=supplier" target="_blank"><div class="style7">Cetak Data Supplier</div>
</a></div>
<div id="lap">
<table width="666" border="0" cellpadding="1" cellspacing="1" align="left">
  <tr>
    <td colspan="6" bgcolor="#FFFFFF"><div align="center"><span class="style5">Data Supplier </span></div></td>
  </tr>
  <tr>
    
	<td width="36" bgcolor="#FF6600"><div align="center" class="style8 style9">
	  Kode Supplier </div></td>
    <td width="100" bgcolor="#FF6600"><div align="center" class="style10">Nama Supplier</div></td>
	<td width="100" bgcolor="#FF6600"><div align="center" class="style10">Alamat Supplier</div></td>
	<td width="100" bgcolor="#FF6600"><div align="center" class="style10">Telepon Supplier</div></td>
	<td width="100" bgcolor="#FF6600"><div align="center" class="style10">Kota Supplier</div></td>
    <td width="89" bgcolor="#FF6600"><div align="center" class="style10">Olah data </div></td>
  </tr>
    <?
  	$warna1="#FF9900";
	$warna2="#FFFF00";
	$warna=$warna1;
   include "library/connect.php";
   $eksekusi=mysql_query("SELECT * FROM supplier") or die ("Permintaan Gagal");
    $no="1";
   while($hasil=mysql_fetch_array($eksekusi))
   {
  ?>
  <? if($warna==$warna1){
  $warna=$warna2;}
  else{$warna=$warna1;} ?>
  <? echo"<tr bgcolor=$warna>"; ?>
    <td><div align="center" class="style4"><? echo $no++;?>
    </div></td>
    <td><span class="style4"><?php echo "$hasil[nama_supplier]"; ?></span></td>
	<td><span class="style4"><?php echo "$hasil[alamat_supplier]"; ?></span></td>
	<td><span class="style4"><?php echo "$hasil[telp_supplier]"; ?></span></td>
	<td><span class="style4"><?php echo "$hasil[kota_supplier]"; ?></span></td>
    <td><div align="center" class="style4"><a href="?page=edsupplier.html&kode_supplier=<?php echo "$hasil[kode_supplier]"; ?>" title="Ubah"><img src="images/edit.png" height="15" width="15" />Ubah</a> <a href="?page=delsupplier.html&kode_supplier=<?php echo "$hasil[kode_supplier]"; ?>" title="Hapus"><img src="images/dellete.png" height="15" width="15" />Hapus</a></div></td>
  </tr>
  <? } ?>
</table>
</div>
</body>
</html>
