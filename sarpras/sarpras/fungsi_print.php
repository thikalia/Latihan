<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Cetak Laporan</title>
<link rel="stylesheet" type="text/css" href="library/style.css" />
</head>

<body>
<?php
//Fungsi_print.php

//Print barang
function show_print_barang() { ?>

<table width="581" border="0" cellpadding="1" cellspacing="1">
  <tr>
    <th width="38">No</th>
    <th width="65">Nama Barang</th>
	<th width="79">Spesifikasi</th>
	<th width="66">Lokasi Barang</th>
	<th width="70">Kategori</th>
	<th width="68">Jumlah Barang</th>
	<th width="66">Kondisi</th>
	<th width="65">Jenis Barang</th>
	<th width="70">Sumber Dana</th>
  </tr>
    <?
  	$warna1="#FF9900";
	$warna2="#FFFF00";
	$warna=$warna1;
   include "library/connect.php";
   $eksekusi=mysql_query("SELECT * FROM barang") or die ("Permintaan Gagal");
    $no="1";
   while($hasil=mysql_fetch_array($eksekusi))
   {
  ?>
  <? if($warna==$warna1){
  $warna=$warna2;}
  else{$warna=$warna1;} ?>
  <? echo"<tr bgcolor=$warna>"; ?>
    <td><center><? echo $no++;?></center></td>
    <td><?php echo "$hasil[nama_barang]"; ?></td>
    <td><?php echo "$hasil[spesifikasi]"; ?></td>
	<td><?php echo "$hasil[lokasi_barang]"; ?></td>
	<td><?php echo "$hasil[kategori]"; ?></td>
	<td><?php echo "$hasil[jml_barang]"; ?></td>
	<td><?php echo "$hasil[kondisi]"; ?></td>
	<td><?php echo "$hasil[jenis_barang]"; ?></td>
	<td><?php echo "$hasil[sumber_dana]"; ?></td>
   
   </tr>
  <? } ?>
</table>


<?php }

//Print supplier
function show_print_supplier() { ?>

<table width="581" border="0" cellpadding="1" cellspacing="1">
  <tr>
    <th width="38">No</th>
    <th width="65">Nama Supplier</th>
	<th width="79">Alamat Supplier</th>
	<th width="66">Telepon Supplier</th>
	<th width="70">Kota Supplier</th>
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
    <td><center><? echo $no++;?></center></td>
    <td><?php echo "$hasil[nama_supplier]"; ?></td>
    <td><?php echo "$hasil[alamat_supplier]"; ?></td>
	<td><?php echo "$hasil[telp_supplier]"; ?></td>
	<td><?php echo "$hasil[kota_supplier]"; ?></td> 
   </tr>
  <? } ?>
</table>


<?php }
//Print masuk_barang
function show_print_masuk_barang() { ?>

<table width="581" border="0" cellpadding="1" cellspacing="1">
  <tr>
    <th width="38">No</th>
    <th width="65">Nama Barang</th>
	<th width="79">Tanggal Masuk</th>
	<th width="66">Jumlah Masuk Barang</th>
	<th width="70">Nama Supplier</th>
  </tr>
    <?
  	$warna1="#FF9900";
	$warna2="#FFFF00";
	$warna=$warna1;
   include "library/connect.php";
   $eksekusi=mysql_query("SELECT masuk_barang.*,barang.*,supplier.* FROM masuk_barang,barang, 
   supplier where masuk_barang.kode_barang=barang.kode_barang and 
   masuk_barang.kode_supplier=supplier.kode_supplier") or die ("Permintaan Gagal");
    $no="1";
   while($hasil=mysql_fetch_array($eksekusi))
   { $tgl=$hasil[tgl_masuk];
   $t=substr("$tgl",-2,2);
   $b=substr("$tgl",-5,2);
   $th=substr("$tgl",-10,4);
  ?>
  <? if($warna==$warna1){
  $warna=$warna2;}
  else{$warna=$warna1;} ?>
  <? echo"<tr bgcolor=$warna>"; ?>
    <td><center><? echo $no++;?></center></td>
    <td><?php echo "$hasil[nama_barang]"; ?></td>
   <td><?php echo "$t"; echo "-"; echo "$b"; echo "-"; echo "$th"; ?></td>
	<td><?php echo "$hasil[jml_masuk]"; ?></td>
	<td><?php echo "$hasil[nama_supplier]"; ?></td> 
   </tr>
  <? } ?>
</table>


<?php }

//Print keluar_barang
function show_print_keluar_barang() { ?>

<table width="581" border="0" cellpadding="1" cellspacing="1">
  <tr>
    <th width="38">No</th>
    <th width="65">Nama Barang</th>
	<th width="70">Tanggal Keluar</th>
	<th width="66">Penerima</th>
	<th width="66">Jumlah Keluar Barang</th>
	<th width="70">Keperluan</th>
  </tr>
    <?
  	$warna1="#FF9900";
	$warna2="#FFFF00";
	$warna=$warna1;
   include "library/connect.php";
   $eksekusi=mysql_query("SELECT keluar_barang.*,barang.* FROM keluar_barang,barang where keluar_barang.kode_barang=barang.kode_barang") or die ("Permintaan Gagal");
    $no="1";
   while($hasil=mysql_fetch_array($eksekusi))
   { $tgl=$hasil[tgl_masuk];
   $t=substr("$tgl",-2,2);
   $b=substr("$tgl",-5,2);
   $th=substr("$tgl",-10,4);
  ?>
  <? if($warna==$warna1){
  $warna=$warna2;}
  else{$warna=$warna1;} ?>
  <? echo"<tr bgcolor=$warna>"; ?>
    <td><center><? echo $no++;?></center></td>
    <td><?php echo "$hasil[nama_barang]"; ?></td>
   <td><?php echo "$t"; echo "-"; echo "$b"; echo "-"; echo "$th"; ?></td>
	<td><?php echo "$hasil[penerima]"; ?></td>
	<td><?php echo "$hasil[jml_brg_keluar]"; ?></td> 
	<td><?php echo "$hasil[keperluan]"; ?></td>
   </tr>
  <? } ?>
</table>


<?php }

//Print pinjam_barang
function show_print_pinjam_barang() { ?>

<table width="581" border="0" cellpadding="1" cellspacing="1">
  <tr>
    <th width="38">No</th>
    <th width="65">Tanggal Pinjam Barang</th>
	<th width="70">Nama Barang</th>
	<th width="66">Jumlah Pinjam Barang</th>
	<th width="66">Peminjam</th>
	<th width="70">Tanggal Kembali</th>
	<th width="66">Keterangan</th>
  </tr>
    <?
  	$warna1="#FF9900";
	$warna2="#FFFF00";
	$warna=$warna1;
   include "library/connect.php";
   $eksekusi=mysql_query("SELECT SELECT pinjam_barang.*,barang.* FROM pinjam_barang,barang where pinjam_barang.kode_barang=barang.kode_barang") or die ("Permintaan Gagal");
    $no="1";
   while($hasil=mysql_fetch_array($eksekusi))
   {$tgl=$hasil[tgl_pinjam];
   $t=substr("$tgl",-2,2);
   $b=substr("$tgl",-5,2);
   $th=substr("$tgl",-10,4);
   $tgl1=$hasil[tgl_kembali];
   $t1=substr("$tgl1",-2,2);
   $b1=substr("$tgl1",-5,2);
   $th1=substr("$tgl1",-10,4);
  ?>
  <? if($warna==$warna1){
  $warna=$warna2;}
  else{$warna=$warna1;} ?>
  <? echo"<tr bgcolor=$warna>"; ?>
    <td><center><? echo $no++;?></center></td>
   <td><?php echo "$t"; echo "-"; echo "$b"; echo "-"; echo "$th"; ?></td>
	<td><?php echo "$hasil[nama_barang]"; echo " $hasil[spesifikasi]";?></td>
	<td><?php echo "$hasil[jml_pinjam]"; ?></td>
	<td><?php echo "$hasil[peminjam]"; ?></td>
	<td><?php echo "$t1"; echo "-"; echo "$b1"; echo "-"; echo "$th1"; ?></td>
	<td><?php echo "$hasil[keterangan]"; ?></td>
   </tr>
  <? } ?>
</table>


<?php }

 
  ?>




</body>
</html>


