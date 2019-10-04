<?
$host="localhost";
$user="root";
$pas="";
$database="dbinventori";
mysql_connect($host,$user,$pas)or die("Tidak connect");
mysql_select_db($database)or die("Data base tidak ada");
?>
