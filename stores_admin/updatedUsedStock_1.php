<?php

require_once 'login_session.php';
?>
<script type="text/javascript">
  
  function loadproduct(locid){
  //alert(empId);
    if(locid=="")
    return;
    
    var xmlhttp;
    if (window.XMLHttpRequest)
      {// code for IE7+, Firefox, Chrome, Opera, Safari
      xmlhttp=new XMLHttpRequest();
      }
    else
      {// code for IE6, IE5
      xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
      }
    xmlhttp.onreadystatechange=function()
      {
      if (xmlhttp.readyState==4 && xmlhttp.status==200)
      {
    //    if(type=="1")
        //alert(xmlhttp.responseText);
        document.getElementById("productget").innerHTML = xmlhttp.responseText;
    //    else if(type=="2")
    //    document.getElementById("productget").innerHTML = xmlhttp.responseText;
                        }
      }
   //   if(type=="1")
   console.log(locid);
   console.log("on load location");
      var url = "updatedUsedStock_action.php?locid="+locid;
  //  else if(type=="2")
   //   alert(val);
      
    xmlhttp.open("GET",url,true);
    xmlhttp.send();
  } 
</script>

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
	height: 1005px;
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
	top: 1135px;
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
	width: 632px;
	height: 871px;
	z-index: 1;
	left: 83px;
	top: 116px;
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
	height: 64px;
	z-index: 5;
	left: 149px;
	top: 17px;
}
#apDiv8 {
	position: absolute;
	width: 104px;
	height: 160px;
	z-index: 5;
	left: 486px;
	top: 122px;
}
</style>
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<script type="text/javascript"  src="prodValidation.js"></script>
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
			$status = "New Product is Successfully Added";
			
		echo($status);
    }
   
		?>
    </samp>
  </p>
 <div id="apDiv12" align="right"><a href="logout.php">Logout</a></div>
  <p align="center"><strong><u>පුහුණු වලදී භාවිතා කළ උපකරණ හා ප්‍රමාණ</u></strong><u></u></p>
</div>
  <div id="apDiv6">
  <form action="updatedUsedStock_action.php" onsubmit="return validate()">
    <table width="527" height="106" align="left">
      <tr>
        <td height="33">Date:<font color="#FF0000">*</font></td>
        <td width="300" colspan="2"><input type="date" name="date" id="date" size="20" required="required"/></td>
      </tr>
      <tr>
        <td height="39">Place:</td>
        <td colspan="2"><select name="tra_places" id="tra_places" required onchange="loadproduct(this.value);">
          <option value="">--Select--</option>
          <?php 
	require_once("dbcon.php");
	$dbobj = new dbcon();
	$con = $dbobj->getCon();
	
	$sql7 = "SELECT * FROM training_areas";
	$result7 = mysqli_query($con,$sql7);
	$nor7 = $result7->num_rows;
	
	if($nor7>0){
		while($rec = mysqli_fetch_assoc($result7)){
			$areaname = $rec["tra_area_name"];
			echo("<option value='".$rec["tra_area_id"]."'>".$areaname."</option>");
		}
	}	
	mysqli_close($con); 
	?>
  </select></td>
      </tr>
      <tr>
        <td width="215" height="24">Programme Name:<font color="#FF0000">*</font></td>
        <td colspan="2"><input type="text"  name="pname" id="pname" size="50" required="required"/></td>
      </tr>
    </table>
        <span id="productget" align="center">
          <table name="productinfo" id="productinfo">
            

          </table>
        </span>
    <!--
      <tr>
        <td>A4:<font color="#FF0000">*</font></td>
        <td colspan="2"><input type="text"  name="A4" id="A4" size="20" value="463" readonly="readonly"/></td>
      </tr>
   <tr>
        <td>A3:<font color="#FF0000">*</font></td>
        <td colspan="2"><input type="text"  name="A3" id="A3" size="20"value="10" readonly="readonly"/></td>
      </tr>
      <tr>
        <td>A4 (Colour):<font color="#FF0000">*</font></td>
        <td colspan="2"><input type="text"  name="A4cl" id="A4cl" size="20"value="160" readonly="readonly"/></td>
      </tr>
      <tr>
        <td>File Covers:<font color="#FF0000">*</font></td>
        <td colspan="2"><input type="text"  name="fc" id="fc" size="20" value="25" readonly="readonly"/></td>
      </tr>
      <tr>
        <td>Pen (Blue):<font color="#FF0000">*</font></td>
        <td colspan="2"><input type="text"  name="penBB" id="penBB" size="20" value="10" readonly="readonly"/></td>
      </tr>
      <tr>
        <td>Pen (Red):<font color="#FF0000">*</font></td>
        <td colspan="2"><input type="text"  name="penR" id="penR" size="20"value="01" readonly="readonly"/></td>
      </tr>
      <tr>
        <td>Half Sheets:<font color="#FF0000">*</font></td>
        <td colspan="2"><input type="text"  name="hlsht" id="hlsht" size="20"value="10" readonly="readonly"/></td>
      </tr>
      <tr>
        <td>Letter Covers (6*3):<font color="#FF0000">*</font></td>
        <td colspan="2"><input type="text"  name="lc6x3" id="lc6x3" size="20"value="05" readonly="readonly"/></td>
      </tr>
      <tr>
        <td>Letter Covers (9*4):<font color="#FF0000">*</font></td>
        <td colspan="2"><input type="text"  name="lc9x4" id="lc9x4" size="20"value="95" readonly="readonly"/></td>
      </tr>
      <tr>
        <td>Coconut Oil:<font color="#FF0000">*</font></td>
        <td colspan="2"><input type="text"  name="cooli" id="cooli" size="20"value="0.5" readonly="readonly"/></td>
      </tr>
      <tr>
        <td>Oil Lamp Thira:<font color="#FF0000">*</font></td>
        <td colspan="2"><input type="text"  name="lamp" id="lamp" size="20"value="02" readonly="readonly"/></td>
      </tr>
      <tr>
        <td>Kapuru Packet:<font color="#FF0000">*</font></td>
        <td colspan="2"><input type="text"  name="kapuru" id="kapuru" size="20"value="02" readonly="readonly"/></td>
      </tr>
      <tr>
        <td>Tofee Packet :<font color="#FF0000">*</font></td>
        <td colspan="2"><input type="text"  name="tofee" id="tofee" size="20"value="03" readonly="readonly"/></td>
      </tr>
      <tr>
        <td>Battery AAA:<font color="#FF0000">*</font></td>
        <td colspan="2"><input type="text"  name="bAAA" id="bAAA" size="20"value="06" readonly="readonly"/></td>
      </tr>
      <tr>
        <td>AA:<font color="#FF0000">*</font></td>
        <td colspan="2"><input type="text"  name="AA" id="AA" size="20"value="06" readonly="readonly"/></td>
      </tr>
      <tr>
        <td>9V:<font color="#FF0000">*</font></td>
        <td colspan="2"><input type="text"  name="9V" id="9V" size="20"value="02" readonly="readonly"/></td>
      </tr>
      <tr>
        <td>Dimai Papers:<font color="#FF0000">*</font></td>
        <td colspan="2"><input type="text"  name="diPa" id="diPa" size="20"value="40" readonly="readonly"/></td>
      </tr>
      <tr>
        <td>Platignum:<font color="#FF0000">*</font></td>
        <td colspan="2"><input type="text"  name="plat" id="plat" size="20"value="20" readonly="readonly"/></td>
      </tr>
      <tr>
        <td>Stepller Pin (Packet):<font color="#FF0000">*</font></td>
        <td colspan="2"><input type="text"  name="ste_pin" id="ste_pin" size="20"value="01" readonly="readonly"/></td>
      </tr>
      <tr>
        <td>Marker Pen:<font color="#FF0000">*</font></td>
        <td colspan="2"><input type="text"  name="mar_pen" id="mar_pen" size="20"value="06" readonly="readonly"/></td>
      </tr>
      <tr>
        <td>Alpenethi (Packet) :<font color="#FF0000">*</font></td>
        <td colspan="2"><input type="text"  name="alpe_pin" id="alpe_pin" size="20"value="01" readonly="readonly"/></td>
      </tr>
      <tr>
        <td>Highlight Pen:<font color="#FF0000">*</font></td>
        <td colspan="2"><input type="text"  name="hig_pen" id="hig_pen" size="20"value="02" readonly="readonly"/></td>
      </tr>
      <tr>
        <td>Pencil:<font color="#FF0000">*</font></td>
        <td colspan="2"><input type="text"  name="pencil" id="pencil" size="20"value="10" readonly="readonly"/></td>
      </tr>
      <tr>
        <td>Erasers:<font color="#FF0000">*</font></td>
        <td colspan="2"><input type="text"  name="eraser" id="eraser" size="20"value="05" readonly="readonly"/></td>
      </tr>
      <tr>
        <td>Binder Glue:<font color="#FF0000">*</font></td>
        <td colspan="2"><input type="text"  name="bin_glue" id="bin_glue" size="20"value="0.25" readonly="readonly"/></td>
      </tr>
      <tr>
        <td>Glue Bottles:<font color="#FF0000">*</font></td>
        <td colspan="2"><input type="text"  name="glue" id="glue" size="20"value="0.25" readonly="readonly"/></td>
      </tr>
      <tr>
        <td>Sellotape 1&quot;:<font color="#FF0000">*</font></td>
        <td colspan="2"><input type="text"  name="sellotape_1" id="sellotape_1" size="20"value="01" readonly="readonly"/></td>
      </tr>
      <tr>
        <td>Sellotape 2&quot;:<font color="#FF0000">*</font></td>
        <td colspan="2"><input type="text"  name="sellotape_2" id="sellotape_2" size="20"value="01" readonly="readonly"/></td>
      </tr>
     -->
      <tr>
        <td height="27" ><input type="submit" name="btnsubmit" id="btnsubmit" value="Submit" /></td>
        <td width="57" ><input type="reset" name="btnreset" id="btnreset" value="Cancel" /></td>
        <td width="226" bgcolor="#00CC99" ><a href="viewUsedproduct.php" target="_blank"><font color="#000000">View Product</font></a></td>
      </tr>
  </table>

    <div id="apDiv8">
      <div align="center"><a href="usedStock.php"><img src="images/cute-children-cartoon-R9H31M.jpg" width="111" height="103" /></a><strong>පුද්ගලයන් සඳහා ගන්නා උපකරණ ලැයිස්තුව</strong><strong></strong></div>
    </div>
    </form>
    <?php
    if(isset($_GET["message"]))
	{
    $message = $_GET["message"];
    $type = $_GET["type"];
    if( $type == 1) {
      echo "<div>".$message."</div>";
    } else if($type == 0) {
      echo "<div style='color: red;'>".$message."</div>";
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
