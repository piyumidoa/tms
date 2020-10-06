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
	height: 463px;
	z-index: 1;
	left: 150px;
	top: 107px;
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
	height: 82px;
	z-index: 5;
	left: 151px;
	top: 8px;
}
#apDiv8 {
	position: absolute;
	width: 108px;
	height: 147px;
	z-index: 5;
	left: 215px;
	top: 288px;
}
</style>

<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<script type="text/javascript"  src="actualQty.js"></script>


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
			$status = "Used Products are updated Successfully ";
			
		echo($status);
		}
		?>
  </samp></p>
 <div id="apDiv12" align="right"><a href="logout.php">Logout</a></div>
  <p align="center"><strong><u>පුද්ගලයන් සඳහා ගන්නා උපකරණ ලැයිස්තුව</u></strong><u></u></p>
      </div>
  <div id="apDiv6">
  <form action="usedStockAction.php" method="post">
    <table width="540" height="287" align="center">
    	<tr>
        <td>දිනය:<font color="#FF0000">*</font></td>
        <td colspan="2">
        	<input type="date" name="pdate" id="pdate" size="20" required onchange="loadplace(this.value, '1');" /></td>
      </tr>
      <tr>
        <td>ස්ථානය:</td>
        <td colspan="2">
        	<span id="showplace">
        		<select name="tra_area" id="tra_area" required onchange="loadprog(this.value, '1');">
        			<option value="">--Select--</option>
        		</select>
        	</span>       	
</td>
 </tr>
      <tr>
        <td>වැඩසටහන් නම:</td>
        <td width="300" colspan="2"><label for="pname"></label>

          <span id="showprog">
          		<select name="tra_prog" id="tra_prog" required>
        			<option value="">--Select--</option>
        		</select>
          </span>

      </td>
      </tr>
      
      
      <tr>
        <td width="228">සහභාගිවන්නන් සංඛ්‍යාව:<font color="#FF0000">*</font></td>
        <td width="300" colspan="2"><label for="pname"></label>
          <input type="text" name="nop" id="nop" size="20" required onchange="loadparticipant(this.value);" /></td>
      </tr>
      <tr>
      </tr>
      <tr>
        <td width="228">ෆයිල් කවර:<font color="#FF0000">*</font></td>
        <td width="300" colspan="2"><label for="pname"></label>
          <input type="text" name="fc" id="fc" size="20" required/></td>
      </tr>
      <tr>
        </tr>
      <tr>
        <td width="228">පෑන් (නිල් / කලු):<font color="#FF0000">*</font></td>
        <td width="300" colspan="2"><label for="pname"></label>
          <input type="text" name="pen" id="pen" size="20" required/></td>
      </tr>
      <tr>
        </tr>
      <tr>
        <td width="228">යතුරු ලියන කඩදාසි:<font color="#FF0000">*</font></td>
        <td width="300" colspan="2"><label for="pname"></label>
          <input type="text" name="hs" id="hs" size="20" required/></td>
      </tr>
     
        <td height="27" ><input type="submit" name="subbtn" id="subbtn" value="Submit" /></td>
        <td width="155" ><input type="reset" name="button2" id="button2" value="Cancel" /></td>
        <td width="128" bgcolor="#000000" ><a href="viewUsedproduct.php" target="_blank"><font color="#00CC33">View used stock</font></a></td>
      </tr>
      <?php

	  ?>
    </table>
    <div id="apDiv8">
      <div align="center"><a href="updatedUsedStock_1.php"><img src="images/inventory_icon (1).jpg" width="128" height="128" /></a><strong>පොදුවේ ගන්නා උපකරණ ලැයිස්තුව</strong></div>
    </div>
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
