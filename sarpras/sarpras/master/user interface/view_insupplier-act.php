<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php  
include "library/connect.php";
	    if($_POST['simpan']){  
	        $kode_supplier= $_POST['kode_supplier'];  
	        $nama_supplier = $_POST['nama_supplier'];
			$alamat_supplier = $_POST['alamat_supplier']; 
			$telp_supplier = $_POST['telp_supplier']; 
			$kota_supplier = $_POST['kota_supplier'];   
	           
	if($kode_supplier==''||$nama_supplier==''|| $alamat_supplier==''|| $telp_supplier==''|| $kota_supplier=='')
{  
echo"Tidak dapat melakukan penyimpanan...!Masih ada data yang kosong...";
?><br>
<a href="?page=insupplier.html">Tambah data supplier </a><?	   
 }  
  else
{ 
  //prosess data 
	   include"library/connect.php";
       $hasil=mysql_query("INSERT INTO supplier         
      VALUES('$kode_supplier','$nama_supplier','$alamat_supplier','$telp_supplier','$kota_supplier')");
      if($hasil){ echo"<p><img src=images/yes.gif height=20 width=20 />&nbsp; &nbsp;Data supplier berhasil  disimpan 
<a href=?page=supplier.html>Lihat data supplier</a> "; }
        }  
    }  
	?>  
</body>
</html>
