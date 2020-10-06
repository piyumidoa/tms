<?php

require_once 'login_session.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>users</title>
<style type="text/css">
#apDiv8 {
	position: absolute;
	width: 63px;
	height: 68px;
	z-index: 1;
	left: 360px;
	top: 4px;
}
</style>
</head>

<body>
<style type="text/css">
#apDiv1 {
	position: absolute;
	width: 781px;
	height: 116px;
	z-index: 1;
	left: 196px;
	top: 14px;
	background-color: #99FF99;
}
#apDiv2 {
	position: absolute;
	width: 782px;
	height: 581px;
	z-index: 2;
	left: 196px;
	top: 130px;
	background-color: #00CC99;
}
#apDiv3 {
	position: absolute;
	width: 783px;
	height: 68px;
	z-index: 3;
	left: 196px;
	top: 711px;
	background-color: #006600;
}
#apDiv4 {
	position: absolute;
	width: 95px;
	height: 115px;
	z-index: 4;
}
#apDiv5 {
	position: absolute;
	width: 98px;
	height: 115px;
	z-index: 4;
	left: 871px;
	top: 15px;
}
#apDiv6 {
	position: absolute;
	width: 587px;
	height: 401px;
	z-index: 1;
	left: 150px;
	top: 113px;
}
.mzg {
	color: #060;
	font-family:Arial, Helvetica, sans-serif;
	font-size:14px;
	font-weight:bold;
	text-align:center;
}
</style>
<link href="SpryAssets/SpryMenuBarVertical.css" rel="stylesheet" type="text/css" />
<style type="text/css">
#apDiv7 {
	position: absolute;
	width: 588px;
	height: 85px;
	z-index: 5;
	left: 149px;
	top: 17px;
}
</style>
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>



<div id="apDiv1">
  <div id="apDiv4"><img src="images/Emblem_of_Sri_Lanka.svg.png" width="90" height="113" /></div>
  <h1 align="center">කෘෂිකර්ම දෙපාර්තමේන්තුව - පේරාදෙණිය</h1>
  <div align="center">
    <h2>&nbsp;</h2>
  </div>
</div>
<div id="apDiv2">
<div id="apDiv7">
  <p><samp class="mzg">
    <?php
	if(isset($_GET["msg"]))
	{
		$msg = $_GET["msg"];
		$status = "Error";
		if($msg=="Success")
			$status = "New user is Successfully Added";
			
		echo($status);
		}
		?>
    </samp>
 <div id="apDiv12" align="right"><a href="logout.php">Logout</a></div>


  </p>
    <p align="center"><strong>Create user logins</strong></p>
  <p align="center">&nbsp;</p>
  <p align="center">&nbsp;</p>
  <p align="center">&nbsp;</p>
  <p align="center">&nbsp;</p>
  <p align="center">&nbsp;</p>
  <p align="center">&nbsp;</p>
  <p align="center">&nbsp;</p>
  <p align="center">&nbsp;</p>
  <p align="center">&nbsp;</p>
  <p align="center">&nbsp;</p>
  <p align="center">&nbsp;</p>
  <div id="apDiv8"><strong><img src="images/login.png" width="64" height="64" /></strong></div>
  <p align="center">&nbsp;</p>
</div>
  <div id="apDiv6">
  <form action="userAction.php" method="post">
    <table width="507" height="169" align="center">
      <tr>
        <td width="208">Usename:<font color="#FF0000">*</font></td>
        <td colspan="2"><input type="text"  name="uname" id="uname" required="required"/></td>
      </tr>
      <tr>
        <td>Password:<font color="#FF0000">*</font></td>
        <td colspan="2"><label for="pw"></label>
          <input type="password" name="pw" id="pw" required="required"/></td>
      </tr>
      <tr>
        <td height="27" >Type:<font color="#FF0000">*</font></td>
        <td colspan="2" ><label for="type"></label>
          <label for="type"></label>
          <label>
            <input type="radio" name="Type" value="Admin" id="Type_2" checked="checked"/>
            Admin</label>
          <br />
          <label>
            <input type="radio" name="Type" value="Staff" id="Type_3" />
          Staff</label></td>
      </tr>
      <tr>
        <td height="32">Status:<font color="#FF0000">*</font></td>
        <td colspan="2"><p>
          <label>
            <input type="radio" name="status" value="Active" id="status_0" checked="checked"/>
            Active</label>
          <br />
          <label>
            <input type="radio" name="status" value="Inactive" id="status_1" />
            Inactive</label>
          <br />
          </p></td>
      </tr>
      <tr>
        <td height="27" ><input type="submit" name="button" id="button" value="Submit" /></td>
        <td width="155" ><input type="reset" name="button2" id="button2" value="Cancel" /></td>
        <td width="128" bgcolor="#FFFFFF" ><a href="viewusers.php" target="_blank"><font color="#00CC33">View Users</font></a></td>
      </tr>
    </table>
    </form>
  </div>
  <ul id="MenuBar1" class="MenuBarVertical">
    <li><a href="home.php">Home</a>    </li>
    <li><a href="contactUs.php">Contact Us</a></li>
</ul>
</div>
<div id="apDiv3">	
  <div align="center">Copyright Department of Agriculture</div>
</div>
<div id="apDiv5"><img src="images/20259350_300x300.jpg" width="105" height="114" /></div>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>




</body>
</html>