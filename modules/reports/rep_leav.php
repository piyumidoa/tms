<?php
session_start();
ob_start();
if(isset($_SESSION['username']) || isset($_SESSION['password'])){
$navbar = "1";
$logindisplay = "0";
$username = $_SESSION['id'];
$password = $_SESSION['password'];
$now = time();
$authed = isset($username, $password);
if( $authed == "0" ){
header('Location:../../index.php');
}
// Checking the time now when home page starts.
    if ($now > $_SESSION['expire']) {
            header('Location:../../logout.php');
        }
} else {
    header('Location:../../index.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Reports | HRMS For KMC</title>
        <link href="../../css/table.css" rel="stylesheet" type="text/css"/>
        <script type="text/javascript">
<script type="text/javascript">
function viewrep(type){
	if(type==3){
                document.getElementById('frmleav_sum').submit();
	}
        else if(type==4){
		document.getElementById('frmleav_hist').submit();
	}
    }
       //loading emp details
	function loaddata(empId){
	//alert(empId);
		if(empId=="")
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
				//alert(xmlhttp.responseText);
				document.getElementById("txtemp_name").value = xmlhttp.responseText;
                        }
		  }
		  var url;
			url = "../../lib/admin_func.php?empId="+empId;
			
		xmlhttp.open("GET",url,true);
		xmlhttp.send();
	}
</script>

    </head>
    <body background="../../images/icons/header.jpg">
        <?php
        require_once 'rep_menu.php';
        ?>
        <fieldset style="margin-left:15%; margin-right: 15%">
            
            <legend>Employee Leave Reports</legend>
            <table width="90%" align="center">
                <tr><td>Leave Summary Report</td></tr> 
                <form action="leav_sum_rep.php" method="POST" name="frmleav_sum" id="frmleav_sum" target="_blank">
                    <td><label>Employee ID</label>
                        <input type="text" id="txt_empid" name="txt_empid" onkeyup ="loaddata(this.value);"/></td>
                    <td><label>Year</label>
                        <input type="text" id="txt_year" name="txt_year"/></td>
                    <td><input type="submit" value="Generate" onclick="viewrep(3);" style="width: 80px; height: 30px;"/>
                    </td>
                    </form></tr>                
                <tr><td>Leave History Report</td></tr>
                <form action="leav_hist_rep.php" method="post" name="frmleav_hist" id="frmleav_hist" target="_blank">
                    <td><label>Employee ID</label>
                        <input type="text" id="txtempid" name="txt_empid" onkeyup ="loaddata(this.value);"/></td>
                    <td><input type="submit" value="Generate" onclick="viewrep(4);" style="width: 80px; height: 30px;"/>
                    </td>
                    </form></tr>                
            </table>
    </fieldset>
        <br/>
<footer>
  <p align="center">&copy; All rights reserved by Kandy Municipal Council 2014</p>
</footer>

    </body>
</html>
