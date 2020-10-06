<?php

require_once 'login_session.php';
?>
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

</style>
<link href="SpryAssets/SpryMenuBarVertical.css" rel="stylesheet" type="text/css" />
<style type="text/css">
#apDiv7 {
	position: absolute;
	width: 588px;
	height: 506px;
	z-index: 5;
	left: 128px;
	top: 43px;
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
	width: 200px;
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
	left: 403px;
	top: 354px;
}
</style>
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<div id="apDiv12"><a href="logout.php">Loggout</a></div>
<div id="apDiv1">
  <div id="apDiv4"><img src="images/Emblem_of_Sri_Lanka.svg.png" width="78" height="113" /></div>
  <h1 align="center">කෘෂිකර්ම දෙපාර්තමේන්තුව - පේරාදෙණිය</h1>
  <div align="center">
    <h2>&nbsp;</h2>
  </div>
</div>
<div id="apDiv2">
<div id="apDiv7"><form id="form1" name="form1" method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
<fieldset id="f1">

          <p id="td1" >
          <p>Search Stock Items</p>
            <input type="text" name="txtsearch" id="txtsearch" size="30" />
            <input type="submit" name="btnsub" id="butsave" value="Search &gt;&gt;" /> 
            <input type="reset" name="sebut1" id="butsave1" value="Clear" />
          </p>
          <?php require_once("dbcon.php");

if(isset($_POST["btnsub"]))
{

 	$value = $_POST["txtsearch"];
 
	$obj = new dbcon();
	$con = $obj->getcon();

		$sql="SELECT * FROM  stock WHERE prodId like '%$value%' ";

$result = mysqli_query($con,$sql) or die(mysqli_error());
$nor = mysqli_num_rows($result);

 echo(" No. of records:");
 echo $nor;
if($nor>0)
{
?>
<table id="reg1"  width="85%" align="center" border="0" cellspacing="4" cellpadding="3">
<?php 
	$i=0;
	$stime = time();
	while($rec = mysqli_fetch_assoc($result))
	{
		if($i%2==0)
			$col="FFFF00";
		else
			$col="FFFFAB";
			echo("<tr>"."<td bgcolor='FFFFAB' width='500' >"." Product ID:"."</td>"."<td  bgcolor='FFFFAB' width='900' >".$rec["prodId"]."</td>"."</tr>");
			
			echo("<tr>"."<td bgcolor='FFFFAB' width='500' >"." Quantity:"."</td>"."<td  bgcolor='FFFFAB' width='900' >".$rec["qty"]."</td>"."</tr>");
				

			
	$i++;
	}
	$etime = time();
?>
</table>    
<?php
}
else
{

}

	} 
?>
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
