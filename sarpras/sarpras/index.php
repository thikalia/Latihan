<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Administrator Website</title>
<link rel="stylesheet" type="text/css" href="library/style.css"/>
<style type="text/css">
<!--
.style3 {font-size: medium; }
.style5 {font-size: 18px}
.style6 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #0000FF;
}
.style7 {color: #0033FF}
-->
</style>
</head>
<div align="center">
 <body id="layout">
  <div id="body">
   <div id="header"></div>
<div id="menuatas"><span style="float:right"><font color="#FFFFCC"></b>Login</font></span></div>
 <div id="hr"></div> 
   <div id="admin"><font color="#FF0000"><?php echo $_GET['warn']; ?></font>
<form action="cek_login.php?op=in" method="post">
<div id="lapa">
 <table width="301" border="0">
  <tr bgcolor="#FFFFFF">
    <td width="67" rowspan="5" bgcolor="#ffffff"><img src="images/log2.png" alt="Login " height="80"/></td>
    <td colspan="2" bordercolor="#FFffff" bgcolor="#ffffff"><h3 align="center" class="style3 style6 style7">Inventori Login Menu </h3></td>
   </tr>
     <tr>
  
    <th width="69" height="24"><span class="style3">Nama</span></th>
    <td width="151"><input name="username" type="text" id="username"></td>
  </tr>
  <tr>
  
    <th width="69" height="24"><span class="style3">Username</span></th>
    <td width="151"><input name="username" type="text" id="username"></td>
  </tr>
  <tr>
    <th height="24"><span class="style3">Password</span></th>
    <td><input name="password" type="password" id="password" ></td>
  </tr>
<tr>
    <th height="24">Level</th>
    <td><input name="tipe" type="tipe" id="tipe" ></td>
  </tr>
  <tr bgcolor="#66CC00"><td bordercolor="#FF9900" bgcolor="#FFFFFF"></td>
    <td bordercolor="#FF9900" bgcolor="#FFFFFF"><input name="masuk" type="image" src="images/loginButton_en.jpg" width="60" height="30" ></td>
  </tr>
</table>
</div>
</form></div>
   <div align="center" id="footer"><strong>.:: Copyright <span class="style5">&copy;</span> SMK Muh Seyegan ::. </strong></div>
  </div> 
</body>
</div>
</html>

