<?php
session_start();

if (!isset($_SESSION['userid'])) {
    header("location:index.php?warn=Login dulu....");
	exit;
}
  include("library/connect.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Administrator Website</title>
<?
	  include"admin/html/menu_atas2.css" ;
	  ?>
<link rel="stylesheet" type="text/css" href="library/style.css" />
<style type="text/css">
<!--
.style3 {font-size: 14px}
.style6 {font-size: 18px}
-->
</style>
</head>
<div align="center">
 <body id="layout">
  <div id="body">
  <div id="layout1">
   <div id="navatas"></div>
   <div id="header"></div>
   <div id="menuatas"><span style="float:right">User :<font color="#FF0000"><b> <?php echo $_SESSION['userid'];?></b></font></span></div>
 <div id="hr"></div>
   <div id="menuall">
    <div id="menukonten">
	      <?
	  include"admin/html/menu_isi3.html" ;
	  ?>
    </div>
   </div>
 
 <div id="kontenall">
  <div id="kontenmiddle">
    <? 
	$page=$_GET['page'];
	$page=str_replace(".html","",$page);
	$file="admin/html/view_$page.php";
	if(!file_exists($file))
	{
	include("admin/html/view_home.php");
	}
	else
	{
	include("admin/html/view_$page.php");
	}
	?>
    </div>
	<div id="kontenfooter"></div>
 </div>
 </div>
 <div id="footer" align="center"><b><span class="style3">.:: Copyright <span class="style6">&copy;</span> SMK Muh Seyegan ::</span>. </b></div>


</div> 
</body>
</div>
</html>
