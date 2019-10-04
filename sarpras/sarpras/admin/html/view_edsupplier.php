<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="library/style.css" />
<style type="text/css">
<!--
.style1 {font-size: medium}
.style2 {font-size: large}
.style4 {font-family: "Comic Sans MS"; font-size: medium; }
.style6 {font-family: "Comic Sans MS"}
.style8 {font-size: small}
.style10 {font-family: "Comic Sans MS"; font-size: 12px; }
-->
</style>
</head>

<body>
<div id="submenu">
<img src="images/tambah.png" />
<div><a href="?page=insupplier.html" class="style4">Tambah Data Supplier </a></div>
 
<div>|</div> 
<img src="images/lihat1.ico" /><a href="?page=supplier.html"><div class="style4">Lihat Data Supplier</div>
</a> 
<div>| </div>
<img src="images/cetak.png" /><a href="print.php?print=supplier" target="_blank"><div class="style4">Cetak Data Supplier</div>
</a></div>

<div id="lap">
<form action="?page=edsupplier-act.html" method="POST">
<table width="481" border="0" cellpadding="1" cellspacing="1" align="left">
  <tr>
    <td colspan="3" bgcolor="#FF6600"><div align="center"><span class="style2">Ubah Data Supplier </span></div></td>
  </tr>
   <?
   include "library/connect.php";
   $eksekusi=mysql_query("SELECT * FROM supplier WHERE kode_supplier='$_GET[kode_supplier]'") or die ("Permintaan Gagal");
   while($hasil=mysql_fetch_array($eksekusi))
   {
  ?>
  <tr bgcolor="#FF6600">
    <td width="162" class="style8"></td>
    <td width="218"><input name="kode_supplier" type="hidden" value="<? echo"$hasil[kode_supplier]"; ?>" /></td>
    <td width="91"></td>
  </tr>
  <tr bgcolor="#FFFF00">
    <td class="style10"><div align="left" class="style8"><span class="style10">Nama Supplier</span></div></td>
    <td><input name="nama_supplier" type="text" value="<? echo"$hasil[nama_supplier]"; ?>" size="30" maxlength="50"/></td>
    <td><div class="style1" style="color:red"><?php echo isset($error['nama_supplier']) ? $error['nama_supplier'] : '';?></div></td>
  </tr>
   <tr bgcolor="#FF9900"><td class="style10"><div align="left" class="style8"><span class="style10">Alamat Supplier</span></div></td>
    <td><textarea name="alamat_supplier" cols="30" rows="2"><? echo"$hasil[alamat_supplier]"; ?></textarea></td>
    <td><div class="style1" style="color:red"><?php echo isset($error['alamat_supplier']) ? $error['alamat_supplier'] : '';?></div></td>
  </tr>
   <tr bgcolor="#FFFF00"><td class="style10"><div align="left" class="style8"><span class="style10">Telepon Supplier</span></div></td>
    <td><input name="telp_supplier" type="text" value="<? echo"$hasil[telp_supplier]"; ?>" size="20" maxlength="50"/></td>
    <td><div class="style1" style="color:red"><?php echo isset($error['telp_supplier']) ? $error['telp_supplier'] : '';?></div></td>
  </tr>
   <tr bgcolor="#FF9900"><td class="style1"><div align="left" class="style8"><span class="style10">Kota Supplier</span></div></td>
    <td><input name="kota_supplier" type="text" value="<? echo"$hasil[kota_supplier]"; ?>" size="30" maxlength="50"/></td>
    <td><div class="style1" style="color:red"><?php echo isset($error['kota_supplier']) ? $error['kota_supplier'] : '';?></div></td>
  </tr>
  
  <? } ?>
  <tr bgcolor="#FF6600">
    <td colspan="3"><div align="center"><span class="style1">
      <input type="submit" value="Simpan perubahan" name="update" class="button" />
      &nbsp;
      <input type="button" value="Batal" onclick="self.history.back();" class="button" />	
    </span></div></td>
    </tr>
</table>
</form>
</div>
</body>
</html>
