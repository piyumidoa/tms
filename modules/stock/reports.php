<?php

require_once 'login_session.php';
?>

<html>
<head></head>
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
	border-top-right-radius: 15px 15px;
	border-top-left-radius: 15px 15px;
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
	width: 813px;
	height: 68px;
	z-index: 3;
	left: 164px;
	top: 1109px;
	background-color: #006600;
	border-bottom-right-radius: 15px 15px;
	border-bottom-left-radius: 15px 15px;
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

</style>
<link href="SpryAssets/SpryMenuBarVertical.css" rel="stylesheet" type="text/css" />
<style type="text/css">
#apDiv7 {
	position: absolute;
	width: 577px;
	height: 506px;
	z-index: 5;
	left: 163px;
	top: 124px;
}
#apDiv8 {
	position: absolute;
	width: 164px;
	height: 189px;
	z-index: 6;
	left: 144px;
	top: 96px;
}
#apDiv9 {
	position: absolute;
	width: 162px;
	height: 181px;
	z-index: 7;
	left: 329px;
	top: 97px;
}
#apDiv10 {
	position: absolute;
	width: 162px;
	height: 166px;
	z-index: 1;
	left: 24px;
	top: 348px;
}
#apDiv11 {
	position: absolute;
	width: 157px;
	height: 189px;
	z-index: 2;
	left: 386px;
	top: 55px;
}
#apDiv12 {
	position: absolute;
	width: 87px;
	height: 40px;
	z-index: 5;
	left: 778px;
	top: 131px;
}
#apDiv13 {
	position: absolute;
	width: 179px;
	height: 166px;
	z-index: 3;
	left: 204px;
	top: 330px;
}
#apDiv14 {
	position: absolute;
	width: 175px;
	height: 170px;
	z-index: 4;
	left: 408px;
	top: 348px;
}
#apDiv15 {
	position: absolute;
	width: 126px;
	height: 115px;
	z-index: 6;
	left: 32px;
	top: 123px;
}
</style>
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<div id="apDiv12"><a href="logout.php">Logout</a></div>
<div id="apDiv1">
  <div id="apDiv4"><img src="images/Emblem_of_Sri_Lanka.svg.png" width="78" height="113" /></div>
  <h1 align="center">කෘෂිකර්ම දෙපාර්තමේන්තුව - පේරාදෙණිය</h1>
  <div align="center">
    <h2>&nbsp;</h2>
  </div>
</div>
<div id="apDiv2">
<div id="apDiv7">  <form id="form1" name="form1" method="post" action="usedStockReport.php" target="_blank">
    <fieldset>
    <legend >Generate Reports For</legend>
    <b>Used stock  Details</b>
    <p>From:
      <input type="date" name="txtfrom" id="calendar"  max="<?php $x=date("Y"); $y=date("d"); $z=date("m"); echo ($x. "-".$z."-".$y); ?>" min="1980-01-01" required/>
      To:
      <input type="date" name="txtto" id="calendar1" max="<?php $x=date("Y"); $y=date("d"); $z=date("m"); echo ($x. "-".$z."-".$y); ?>" min="1980-01-01" required/>
    </p>
    <p>
      <input type="submit" name="but1" id="butsave" value="Create" />
      <input type="reset" name="but2" id="butsave" value="Cancel" />
    </p>
</form>
  <form id="form1" name="form1" method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
  </form>
  </fieldset>
  <form id="form1" name="form1" method="post" action="StockReport.php" target="_blank">
    <fieldset>
    <legend >Generate Reports For</legend>
    <b>Stock Details</b>
    <input type="submit" name="butsave" id="butsave2" value="Create" />
    <input type="reset" name="butsave2" id="butsave3" value="Cancel" />
    <p>&nbsp;</p>
    <p>&nbsp;</p>
</form>
  <form id="form1" name="form1" method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
  </form>
  </fieldset>
 </div>
  <div>

</div>
  <div id="apDiv15"><ul id="MenuBar1" class="MenuBarVertical">
    <li><a href="home.php">Home</a>    </li>
    <li><a href="contactUs.php">Contact Us</a></li>

</ul></div>

<div id="apDiv5"><img src="images/20259350_300x300.jpg" width="105" height="114" /></div>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</body>
</html>