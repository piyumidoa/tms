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
	width: 173px;
	height: 80px;
	z-index: 1;
	left: 406px;
	top: 4px;
	background-color: #00CCCC;
}

</style>
<link href="SpryAssets/SpryMenuBarVertical.css" rel="stylesheet" type="text/css" />
<style type="text/css">
#apDiv7 {
	position: absolute;
	width: 588px;
	height: 528px;
	z-index: 5;
	left: 128px;
	top: 48px;
}
#apDiv8 {
	position: absolute;
	width: 164px;
	height: 78px;
	z-index: 6;
	left: 156px;
	top: 168px;
	background-color: #00CCCC;
}
#apDiv9 {
	position: absolute;
	width: 168px;
	height: 80px;
	z-index: 7;
	left: 341px;
	top: 167px;
	background-color: #00CCCC;
}
#apDiv10 {
	position: absolute;
	width: 162px;
	height: 79px;
	z-index: 1;
	left: 30px;
	top: 230px;
	background-color: #00CCCC;
}
#apDiv11 {
	position: absolute;
	width: 176px;
	height: 84px;
	z-index: 2;
	left: 404px;
	top: 121px;
	background-color: #00CCCC;
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
	width: 173px;
	height: 81px;
	z-index: 3;
	left: 214px;
	top: 231px;
	background-color: #00CCCC;
}
#apDiv14 {
	position: absolute;
	width: 175px;
	height: 80px;
	z-index: 4;
	left: 404px;
	top: 231px;
	background-color: #00CCCC;
}
#apDiv15 {
	position: absolute;
	width: 166px;
	height: 78px;
	z-index: 6;
	left: 2px;
	top: -113px;
	background-color: #00CCCC;
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
	height: 79px;
	z-index: 5;
	left: 213px;
	top: 5px;
	background-color: #00CCCC;
}
#apDiv18 {
	position: absolute;
	width: 169px;
	height: 79px;
	z-index: 5;
	left: 31px;
	top: 344px;
	background-color: #00CCCC;
}
#apDiv19 {	position: absolute;
	width: 162px;
	height: 79px;
	z-index: 1;
	left: 27px;
	top: 250px;
}
#apDiv20 {
	position: absolute;
	width: 176px;
	height: 77px;
	z-index: 7;
	left: 217px;
	top: 345px;
	background-color: #00CCCC;
}
#apDiv21 {
	position: absolute;
	width: 170px;
	height: 78px;
	z-index: 8;
	left: 408px;
	top: 345px;
	background-color: #00CCCC;
}
#apDiv22 {
	position: absolute;
	width: 163px;
	height: 76px;
	z-index: 9;
	left: 118px;
	top: 434px;
	background-color: #00CCCC;
}
#apDiv23 {
	position: absolute;
	width: 162px;
	height: 77px;
	z-index: 10;
	left: 321px;
	top: 433px;
	background-color: #00CCCC;
}
#apDiv2 #apDiv8 #apDiv15 {
	font-family: Lucida Console, Monaco, monospace;
}
body,td,th {
	font-size: 14px;
}
#apDiv2 #apDiv7 #apDiv17 strong {
	font-family: Lucida Console, Monaco, monospace;
}
#apDiv2 #apDiv7 #apDiv6 div p strong {
	font-family: Lucida Console, Monaco, monospace;
}
#apDiv2 #apDiv8 p {
	font-family: Lucida Console, Monaco, monospace;
}
#apDiv2 #apDiv9 p strong {
	font-family: Lucida Console, Monaco, monospace;
}
#apDiv2 #apDiv7 #apDiv11 div p strong {
	font-family: Lucida Console, Monaco, monospace;
}
#apDiv2 #apDiv7 #apDiv10 div p strong {
	font-family: Lucida Console, Monaco, monospace;
}
#apDiv2 #apDiv7 #apDiv13 div {
	font-family: Lucida Console, Monaco, monospace;
}
#apDiv2 #apDiv7 #apDiv14 div p strong {
	font-family: Lucida Console, Monaco, monospace;
}
#apDiv2 #apDiv7 #apDiv18 div p strong {
	font-family: Lucida Console, Monaco, monospace;
}
#apDiv2 #apDiv7 #apDiv20 p strong {
	font-family: Lucida Console, Monaco, monospace;
}
#apDiv2 #apDiv7 #apDiv21 div p strong {
	font-family: Lucida Console, Monaco, monospace;
}
#apDiv2 #apDiv7 #apDiv22 div p strong {
	font-family: Lucida Console, Monaco, monospace;
}
#apDiv2 #apDiv7 #apDiv23 div p strong {
	font-family: Lucida Console, Monaco, monospace;
}
</style>
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<div id="apDiv16">
  <div align="center">
    <h2><strong><font color="#0000FF">සේවාස්ථ  පුහුණු සඳහා වන ගබඩා කළමනාකරණ පද්ධතිය</font></strong></h2>
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
      <p>&nbsp;</p>
      <p><strong>Kilinochchi</strong></p>
    </div>
  </div>
  <div id="apDiv13">
    <div align="center">
      <p>&nbsp;</p>
      <p><strong>Ampara</strong></p>
    </div>
  </div>
  <div id="apDiv11">
    <div align="center">
      <p>&nbsp;</p>
      <p><strong>Agunakolapalassa All Island</strong></p>
    </div>
  </div>
  <div id="apDiv14">
    <div align="center">
      <p>&nbsp;</p>
      <p><strong>Bandarawela</strong></p>
    </div>
  </div>
  <div id="apDiv17">
    <p>&nbsp;</p>
    <p align="center"><strong>Anuradhapura</strong></p>
  </div>
  <div id="apDiv6">
    <div align="center">
      <p>&nbsp;</p>
      <p><strong>Bathalagoda District</strong></p>
    </div>
  </div>
  <div id="apDiv18">
    <div align="center">
      <p>&nbsp;</p>
      <p><strong>Gannoruwa</strong></p>
    </div>
  </div>
  <p>&nbsp;</p>
  <div id="apDiv20">
    <p>&nbsp;</p>
    <p align="center"><strong>Gannoruwa Productivity</strong></p>
  </div>
  <div id="apDiv22">
    <div align="center">
      <p>&nbsp;</p>
      <p><strong>Other</strong> <strong>100</strong></p>
    </div>
  </div>
  <div id="apDiv23">
    <div align="center">
      <p>&nbsp;</p>
      <p><strong>Other</strong> <strong>50</strong></p>
    </div>
  </div>
  <div id="apDiv21">
    <div align="center">
      <p>&nbsp;</p>
      <p><strong>Gannoruwa Productivity One Day</strong></p>
    </div>
  </div>

  </div>
<div id="apDiv8">
  <p align="center">&nbsp;</p>
  <p align="center"><strong>Bathalagoda All Island</strong></p>
  <p>&nbsp;</p>
  <div id="apDiv15">
    <div align="center">
      <p>&nbsp;</p>
      <p><strong>Homagama</strong></p>
    </div>
  </div>
</div>
<div id="apDiv9">
  <p align="center">&nbsp;</p>
  <p align="center"><strong>Agunakolapalassa District</strong></p>
  <p>&nbsp;</p>
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
