<?php

require_once 'login_session.php';

if(isset($_GET["msg"]))
{
	$msg = $_GET["msg"];
	if($msg=="succ")
		$status = "Record Successfully Deleted";
	else if($msg=="fail")
		$status = "Error";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>View Used Product</title>
<style type="text/css">
.datarows:hover{
	background-color:#09F;	
}
.mzg{
	color:#F00;
	font-family:Arial, Helvetica, sans-serif;
	font-size:14px;
	font-weight:bold;
}
.heading {
	color: #600;
}
</style>
<script type="text/javascript" language="javascript">

function delete_used(tra_id)
{
	var res = confirm("Do you really want to delete this record?");
	if(res)
		window.location.href="remove_used_item.php?tra_id="+tra_id;
}
</script>
</head>

<body> 
<h1 class="heading">Used Product Details on Trainings</h1>
<samp class="mzg">
<?php
		if(isset($status))
			echo($status);
		?></samp>

<?php
require 'dbcon.php';
$obj = new dbcon();
$con = $obj->getcon();
$sql = "SELECT * FROM used_stock ORDER BY tra_area_name, date;";
$result = mysqli_query($con,$sql) or die(mysqli_error());
$nor = mysqli_num_rows($result);
if($nor>0)
{

?>
<table width="100%" align="center" border="0">
<tr bgcolor="#99FFFF">
	
    <th>Programme Name</th>
    <th>Training Area</th>
    <th>Product ID</th>
 	<th>Product Name</th>
  	<th>Date</th>
	<th>Used Qty</th>
    <th>No. of Participants</th>
     <th>Other</th>



</tr>
<?php
	$i=0;
	$stime = time();
	while($rec = mysqli_fetch_assoc($result))
	{
		if($i%2==0)
			$col="FFFFFF";
		else
			$col="FFFFAB";
			echo("<tr>");
				echo("<td>".$rec["proName"]."</td>");
				echo("<td>".$rec["tra_area_name"]."</td>");
				echo("<td>".$rec["prodId"]."</td>");
				echo("<td>".$rec["name"]."</td>");
				echo("<td>".$rec["date"]."</td>");
				echo("<td>".$rec["used_qty"]."</td>");
				echo("<td>".$rec["noPart"]."</td>");
				echo("<td>".$rec["other"]."</td>");
				
				//echo("<td><a onclick='delete(\"".$rec["tra_id"]."\");' href='javascript:void(0)'><img src='images/edit-icon.png'/></a></td>");
						echo("<td><a onclick='delete_used(\"".$rec["tra_id"]."\");' href='javascript:void(0)'><img src='images/remove.png'/></a></td>");
				echo("</tr>");	
		$i++;
	}
	$etime = time();
?>
</table>    
<?php
}
else
{
	echo("No records found");
}

?>
</body>
</html>