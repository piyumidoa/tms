<?php

require_once 'login_session.php';
require 'dbcon.php';
$obj=new dbcon();
$con=$obj->getcon();//

//$sql1="SELECT       *                                           
//                    FROM users                     
//                    WHERE uname='$username' ";
//
//$result = mysqli_query($con,$sql1);
//
//while ($row = mysqli_fetch_array($result)) {
//
//        $empid=$row['id'];                               
//        $usrole=$row['type'];
//        
//}
?>


<style type="text/css">
#apDiv1 {
	position: absolute;
	width: 825px;
	height: 116px;
	z-index: 1;
	left: 196px;
	top: 14px;
	background-color: #99FF99;
}
#apDiv2 {
	position: absolute;
	width: 823px;
	height: 581px;
	z-index: 2;
	left: 196px;
	top: 130px;
	background-color: #00CC99;
}
#apDiv3 {
	position: absolute;
	width: 824px;
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
	width: 108px;
	height: 115px;
	z-index: 4;
	left: 914px;
	top: 14px;
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
	height: 528px;
	z-index: 5;
	left: 144px;
	top: 47px;
}
#apDiv8 {
	position: absolute;
	width: 131px;
	height: 183px;
	z-index: 6;
	left: 200px;
	top: 206px;
}
#apDiv9 {
	position: absolute;
	width: 174px;
	height: 181px;
	z-index: 7;
	left: 368px;
	top: 204px;
}
#apDiv10 {
	position: absolute;
	width: 162px;
	height: 166px;
	z-index: 1;
	left: 21px;
	top: 347px;
}
#apDiv11 {
	position: absolute;
	width: 157px;
	height: 179px;
	z-index: 2;
	left: 409px;
	top: 159px;
}
#apDiv12 {
	position: absolute;
	width: 68px;
	height: 40px;
	z-index: 5;
	left: 910px;
	top: 131px;
}
#apDiv13 {
	position: absolute;
	width: 196px;
	height: 166px;
	z-index: 3;
	left: 197px;
	top: 347px;
}
#apDiv14 {
	position: absolute;
	width: 175px;
	height: 160px;
	z-index: 4;
	left: 401px;
	top: 348px;
}
#apDiv15 {
	position: absolute;
	width: 186px;
	height: 115px;
	z-index: 6;
	left: 89px;
	top: -140px;
	background-color: #00CC99;
}
#apDiv16 {
	position: absolute;
	width: 563px;
	height: 41px;
	z-index: 6;
	left: 337px;
	top: 127px;
}
#apDiv16 div strong {
	font-family: Lucida Console, Monaco, monospace;
}
#apDiv17 {
	position: absolute;
	width: 169px;
	height: 138px;
	z-index: 5;
	left: 214px;
	top: 5px;
}
</style>
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<div id="apDiv16">
  <div align="center">
    <h2><strong><font color="#0000FF">පුහුණු සඳහා වන ගබඩා කළමනාකරණ පද්ධතිය</font></strong></h2>
  </div>
</div>
<div id="apDiv12"><a href="logout.php">Logout</a></div>

<div id="apDiv1">
  <div id="apDiv4"><img src="images/Emblem_of_Sri_Lanka.svg.png" width="78" height="113" /></div>
  <h1 align="center">කෘෂිකර්ම දෙපාර්තමේන්තුව - පේරාදෙණිය</h1>
  <div align="center">
    <h2>&nbsp;</h2>
  </div>
</div>
<div id="apDiv2">
<div id="apDiv7">

  <div id="apDiv10">
    <div align="center">
      <p><strong></strong><strong>ගබඩාවේ ඇති උපකරණ ප්‍රමාණය සෙවීම</strong></p>
      <p><a href="search.php"><img src="images/istockphoto-522749096-170x170.jpg" width="135" height="121" /></a></p>
    </div>
  </div>
  <div id="apDiv13">
    <div align="center">
      <p><strong>උපකරණ ප්‍රමාණය ගබඩාවට ඇතුලත් කිරීම</strong></p>
      <p><a href="newQty.php"><img src="images/inventory_icon (1).jpg" width="135" height="117" /></a></p>
    </div>
  </div>
  <div id="apDiv11">
    <div align="center">
      <p><strong>පුහුණු ස්ථාන ඇතුලත් කිරීම</strong></p>
      <p><strong><a href="training_areas.php"><img src="images/iStock_000004490817Small(3).jpg" width="131" height="128" /></a></strong></p>
    </div>
</div>
  <div id="apDiv14">
    <div align="center">
      <p><strong>වාර්තා(Reports)</strong><strong> ලබා ගැනීම</strong></p>
      <p><a href="reports.php"><img src="images/attend.jpg" width="121" height="116" /></a></p>
    </div>
  </div>
  <div id="apDiv17">
    <div align="center">
      <p><strong>උපස්ථිතිය ලබාගැනීම (Backup)</strong></p>
      <p><a href="backup.php"><img src="images/Backore-Backup-Restore.png" width="118" height="86" /></a></p>
    </div>
  </div>
  <p>&nbsp;</p>

  </div>
<div id="apDiv8">
  <p align="center"><strong>නව ගබඩා උපකරණ ඇතුලත් කිරීම</strong></p>
  <p><a href="productAdd.php"><img src="images/Office-Stationery-and-Supply.jpg" width="137" height="128"></a></p>
</div>
<div id="apDiv9">
  <p align="center"><strong>පුහුණු වලදී භාවිතා කළ උපකරණ හා</strong> <strong>ප්‍රමාණ</strong></p>
  <p><a href="usedStockHome.php"><img src="images/839-8397245_warehouse-free-vector-icons-designed-by-freepik-warehouse.png" width="142" height="129"></a></p>
</div>


<div id="apDiv10">
    <div align="center">
     <!-- <p><strong></strong><strong>ගබඩාවේ ඇති උපකරණ ප්‍රමාණය සෙවීම</strong></p>
      <p><a href="search.php"><img src="images/istockphoto-522749096-170x170.jpg" width="135" height="121" /></a></p>-->
    </div>
  </div>
  <div id="apDiv13">
    <div align="center">
  <!--    <p><strong>උපකරණ ප්‍රමාණය ගබඩාවට ඇතුලත් කිරීම</strong></p>
      <p><a href="newQty.php"><img src="images/inventory_icon (1).jpg" width="135" height="117" /></a></p>-->
    </div>
  </div>
  <div id="apDiv11">
    <div align="center">
      <!--<p><strong>පුහුණු ස්ථාන ඇතුලත් කිරීම</strong></p>
      <p><strong><a href="training_areas.php"><img src="images/iStock_000004490817Small(3).jpg" width="131" height="128" /></a></strong></p>-->
    </div>
</div>
  <div id="apDiv14">
    <div align="center">
    <!--  <p><strong>වාර්තා(Reports)</strong><strong> ලබා ගැනීම</strong></p>
      <p><a href="reports.php"><img src="images/attend.jpg" width="121" height="116" /></a></p>-->
    </div>
  </div>
  <p>&nbsp;</p>

  </div>
<div id="apDiv8">
<ul id="MenuBar1" class="MenuBarVertical">
    <li><a href="../modules/employee/index.php">Home</a>    </li>
    <li><a href="contactUs.php">Contact Us</a></li>
</ul>
  <!--<p align="center"><strong>නව ගබඩා උපකරණ ඇතුලත් කිරීම</strong></p>
  <p><a href="productAdd.php"><img src="images/Office-Stationery-and-Supply.jpg" width="137" height="128"></a></p>-->
</div>
</div>
<div id="apDiv3">	
  <div align="center">Copyright Department of Agriculture</div>
</div>
<div id="apDiv5"><img src="images/20259350_300x300.jpg" width="105" height="114" /></div>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
