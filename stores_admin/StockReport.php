<?php

require_once 'login_session.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Used Stock Report</title>
<script type="text/javascript">
function printme()
{
	document.getElementById("btnpanel").style.display = "none";
	window.print();
}
</script>
</head>
<body>
<table width="53%" height="160" align="center" bgcolor="#CCFF66">
<tr>
<td width="24%" height="142" bgcolor="#FFFFFF"><img src="images/20259350_300x300.jpg" width="177" height="133" /></td>
<td width="76%" valign="top" bgcolor="#FFFFFF">
  <h2><strong>Department of Agriculture , Peradiniya</strong></h2>
  <h4>Tel : 081 2388042</h4>
  <h4>Email : doa@gmail.com</h4>
  <h4>Date:<?php echo $date = date("Y.m.d");?></h4>
</td>
</tr>

<tr bgcolor="#EDEDED"><td height="4" colspan="2"><hr /></td></tr>
</table>
<table width="53%" height="215" border="0" align="center"> <!--creating table to display data-->
  <td  align="center" colspan="11"><b>Stock Details to <?php echo $date = date("Y.m.d");?></b></td></tr>
<tr><td colspan="11"><hr  /></td></tr>
<tr bgcolor="#CCFFFF">
<th width="14%" align="left"> Product ID</th>
<th width="13%" align="left">Qty</th>

  
    
  
</tr>
<?php
require 'dbcon.php';
$obj=new dbcon();
$con=$obj->getcon();
$col="";

$sql = "SELECT * FROM stock";

$result1 = mysqli_query($con,$sql) or die(mysqli_error());
while($rec2 = mysqli_fetch_assoc($result1)) //retrieve product id
	{
		//if($i%2==0)
//			$col="FFFFFF";
//		else
//			$col="FFFFAB";
		echo('<tr id="'.$rec2["prodId"].'"style="background-color:#'.$col.'">');
		echo("<td>".$rec2["prodId"]."</td>");
		echo("<td>".$rec2["qty"]."</td>");
}
?>


<tr><td  colspan="11" bgcolor="#CCFFFF" align="left"></td></tr>
<tr><td colspan="11"></td></tr>

<td align="center" colspan="11" bgcolor="#00CCFF"><strong>Copyright © 2019 Department of Agriculture,Peradeniya.All rights Reserved.</strong></td></tr>

<tr>
<td height="68" colspan="11" align="center">
<span id="btnpanel">
<input type="button" value="Print" onclick="printme();" />
<input type="button" value="Close" onclick="window.close();" />
</span>
</td>
</tr>
</table>
</body>
</html>