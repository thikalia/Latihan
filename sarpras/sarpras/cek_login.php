<?php
session_start();

$userid = $_POST['username'];
$psw = $_POST['password'];
$tipe= $_POST['tipe'];
$op = $_GET['op'];

if($op=="in"){
require_once("library/connect.php");
   $query=mysql_query("SELECT * FROM login WHERE user='$userid' AND pass='$psw' AND tipe='$tipe'");
   $cek=mysql_num_rows($query);
   $data=mysql_fetch_array($query);
   $user=$data['user'];
   $pass=$data['pass'];
   $tipe=$data['tipe'];
      if($cek=='1'){
        $_SESSION['userid'] = $user;
            header("location:index_admin.php");
			exit;
		       }else{
        header("location:index.php?warn=Username atau password salah....");
    }
}else if($op=="out"){
    unset($_SESSION['userid']);
	unset($_SESSION['level']);
    header("location:index.php?warn=Anda telah logout....");
}
?>
