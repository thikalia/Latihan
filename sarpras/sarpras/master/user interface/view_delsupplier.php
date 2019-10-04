<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="library/style.css" />
</head>

<body>
<? if($_POST['hapus']){  
   include_once "library/connect.php";
    mysql_query("DELETE FROM supplier WHERE kode_supplier='$_GET[kode_supplier]'");
	?> 
	<strong>Data berhasil dihapus...</strong><br/>
	<form><a href="?page=html/supplier.html"><input type="submit" name="back" value="Kembali ke menu" /></a></form>
	<? }   
   ?>
<div id="lap" align="center">
<form action="<? $_SERVER['PHP_SELF'];?>" method="POST">
<table width="348" border="0" cellpadding="1" cellspacing="1">
    <?
   include "library/connect.php";
   $eksekusi=mysql_query("SELECT * FROM supplier WHERE kode_supplier='$_GET[kode_supplier]'") or die ("Permintaan Gagal");
   while($hasil=mysql_fetch_array($eksekusi))
   {
  ?>
  <tr>
    <th height="71" colspan="4">
	<p><font color="#FF0000" size="+2">Warning </font>&nbsp; <img src="images/no.gif" /></p>
	<font color="#FF0000">Apakah Anda ingin menghapus <b><?php echo "$hasil[nama_supplier]"; ?></b>? </font></th>
  </tr>
  <tr>
    <td width="70"></td>
    <td width="59"><input type="submit" value="Hapus" name="hapus" class="button" /></td>
	
	<td width="62"></td>
	<td width="129"><input type="button" value="Batal" onclick="self.history.back();" class="button" /></td>  </tr>
	  <? } ?>
</table>
</form>
</div>
</body>
</html>

