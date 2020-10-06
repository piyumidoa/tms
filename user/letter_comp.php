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
    header('Location:../index.php');
}
// Checking the time now when home page starts.
if ($now > $_SESSION['expire']) {
    header('Location:../logout.php');
        }
} 
else {
    header('Location:../index.php');
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Compose Letter | HRMS for KMC</title> 
<link href="../../css/table.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript">
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
			url = "../../lib/noti_func.php?empId="+empId;
			
		xmlhttp.open("GET",url,true);
		xmlhttp.send();
	}
</script>
</head>
 <body background="../images/icons/header.jpg ">
        <?php
        require_once 'menu.php';
        
        if(isset($_GET ["msg"])){
            if($_GET ["msg"]==1){
                echo "<p style='color: #00ff00;' align='center'>Successfully Composed The Letter!</p>";
            }                                   
            if ($_GET ["msg"]==2){
                 
                echo"<p style='color: #ff0000;' align='center'>Error Occured.Letter Compose Failed!</p>";
            }
        }
                $cdate = date("Y-m-d",time());
            ?>
<fieldset style="margin-left:20%; margin-right: 20%">
<legend>Compose Letter</legend>
<form id="smsend" name="smsend" method="POST" action="letter_print.php" target="_blank">
        <table  style="width:90%;" border="0" align="center">
    <tr>
	<td><label>Employee ID</label></td>
        <td><input type="text" name="txtemp_id" id="txtemp_id" onblur="loaddata(this.value);"/> 
    </tr>   
    <tr>
        <td><label>Name and Address</label></td>
        <td><textarea name="txtemp_name" id="txtemp_name" cols="20" rows="6"></textarea></td>
    </tr>
    <tr>
        <td><label>Date</label></td>
        <td><input name="txt_date" id="txt_date" value="<?php echo $cdate;?>"/></td>
    </tr>        
    <tr>
        <td><label>Topic</label></td>
        <td><input name="txt_topic" id="txt_topic" style="width: 500px; height: 20px;"/></td>
    </tr>        
    <tr>
        <td><label>Message</label></td>
        <td><textarea cols="100" rows="50" name="txtmsg" id="txtmsg"></textarea></td>
    </tr>
    <tr>   
        <td colspan="2" align="center">            
            <input type="submit" value="Compose" name="btnsend" onclick="return confirm('Do you want to Compose the Letter')" style="width: 80px; height: 30px;"/>
            <input type="reset" value="Clear" onclick="return confirm('Do you want to clear all the fields')" style="width: 80px; height: 30px;"/>
        </td>
    </tr>
    </table>
    </form>    
    </fieldset>
<footer>
  <p align="center">&copy; All rights reserved by Kandy Municipal Council 2014</p>
</footer>
</body>
</html>