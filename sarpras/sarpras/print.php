<style type="text/css">
body{
margin:auto;
padding:0px;
font-family:Calibri;
font-size:12px;
background: #A4A4A4; /* old browsers */
background: -moz-linear-gradient(top, #A4A4A4 0%, #A4A4A4 40%, #A4A4A4 100%, #2989D8 100%, #A4A4A4 100%, #7db9e8 100%); /* firefox */

background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#A4A4A4), color-stop(40%,#A4A4A4), color-stop(100%,#A4A4A4), color-stop(100%,#A4A4A4), color-stop(100%,#A4A4A4), color-stop(100%,#A4A4A4)); /* webkit */

filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#A4A4A4', endColorstr='#7db9e8',GradientType=0 ); /* ie */
}
div{

margin:auto;
padding:0px;
background:#FFFFFF;
margin-top:20px;
box-shadow: 5px 5px 7px #222;
-moz-box-shadow: 5px 5px 7px #222;
-webkit-box-shadow: 5px 5px 7px #222
}
h1{
margin:10px 0px 5px 0px;
text-align:center
}
table
{
margin:auto;
border-collapse:collapse;
}
table, td, th
{
border:1px solid black;
}
td{
padding:0px 5px 0px 5px
}
th{
background:#A4A4A4;
padding:1px 5px 1px 5px
}
div img{
margin-top:20px
}
a img{
float:right;
border:0px;
width:180px;
margin:0px 10px auto auto
}
hr{
width:90%;
margin:0px auto 20px auto
}
</style>


<div>
<div style="text-align:center"><BR /><H1>LAPORAN</H1><h2>Data Inventoris</h2>
<?php
include("library/connect.php");
include"fungsi_print.php"; 
 $print=$_GET['print'];
   if ($print=="barang") {
     echo"<h2>Laporan Data Barang</h2><hr/>";
	 show_print_barang();
   } else if ($print=="supplier") {
     echo"<h1>Laporan Data Supplier</h1><hr/>";
	 show_print_supplier();
	 } else if ($print=="masuk") {
     echo"<h1>Laporan Data Masuk Barang</h1><hr/>";
	 show_print_masuk_barang();
	  } else if ($print=="keluar") {
     echo"<h1>Laporan Data Keluar Barang</h1><hr/>";
	 show_print_masuk_barang();
	  } else if ($print=="pinjam") {
     echo"<h1>Laporan Data Masuk Barang</h1><hr/>";
	 show_print_masuk_barang();
	  } else if ($print=="stok") {
     echo"<h1>Laporan Data Stok Barang</h1><hr/>";
	 show_print_masuk_barang();
   } else {
     echo"<h1>lap</h1><hr/>";
	 show_print_();
   }
   
?>
</div>