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
     <title>Apply Leave | HRMS for KMC</title>
    <link rel="stylesheet" type="text/css" href="../../css/menu.css"/>
    <link href="../js/dhtmlxcalendar_full/dhtmlxCalendar/codebase/dhtmlxcalendar.css" rel="stylesheet" type="text/css"/>
    <link href="../js/dhtmlxcalendar_full/dhtmlxCalendar/codebase/skins/dhtmlxcalendar_dhx_skyblue.css" rel="stylesheet" type="text/css"/>
    <script src="../js/dhtmlxcalendar_full/dhtmlxCalendar/codebase/dhtmlxcalendar.js" type="text/javascript"></script>
    <link href="../css/table.css" rel="stylesheet" type="text/css"/>
    <script>   
var myCalendar;
function doOnLoad() {
    myCalendar = new dhtmlXCalendarObject(["txtleav_date", "txtleav_apply_from","txtleav_apply_to",]);
}
    
    function disableDays(d) {
    myCalendar.disableDays("week", d);
    }
    function nodays_single(){
        document.getElementById("no_days").value=1;
    }    
    function nodays_half()
    {
        document.getElementById("no_days").value = 1/2;
    }
	
	function validatefrm(){
		var id = document.getElementById('txtleav_emp_id').value;
		var name = document.getElementById('txtleav_emp_name').value;
		//var dept = document.getElementById('cmbdep').value;
		var type = document.getElementById('seleav_apply_type').value;
		var datefrm= document.getElementById('txtleav_apply_from').value;
		var dateto = document.getElementById('txtleav_apply_to').value;
		var nod = document.getElementById('no_days').value;
		var appdate = document.getElementById('txtleav_apply_date').value;
		
		if(id == ''){
			document.getElementById('error').innerHTML = "Please enter the ID";
			document.getElementById('txtleav_emp_id').focus();
			return false;
		}
		else if(name == ''){
			document.getElementById('error').innerHTML = "Please enter the Name";
			document.getElementById('txtleav_emp_name').focus();
			return false;
		}
		//else if(dept == ''){
		//	document.getElementById('error').innerHTML = "Please select the department";
		//	document.getElementById('cmbdep').focus();
		//	return false;
		//}
		else if(type == ''){
			document.getElementById('error').innerHTML = "Please select the type";
			document.getElementById('seleav_apply_type').focus();
			return false;
		}
		else if(datefrm == ''){
			document.getElementById('error').innerHTML = "Please Select the date";
			document.getElementById('txtleav_apply_from').focus();
			return false;
		}
		else if(dateto == ''){
			document.getElementById('error').innerHTML = "Please Select the date";
			document.getElementById('txtleav_apply_to').focus();
			return false;
		}
		else if(nod == ''){
			document.getElementById('error').innerHTML = "Please enter the number of days";
			document.getElementById('no_days').focus();
			return false;
		}
		else if(appdate == ''){
			document.getElementById('error').innerHTML = "Please enter the date";
			document.getElementById('txtleav_apply_date').focus();
			return false;
		}
		else{
			document.getElementById('frmleave').submit();	
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
				document.getElementById("txtleav_emp_name").value = xmlhttp.responseText;
			}
		  }
		  var url;
			url = "../lib/leave_func.php?empId="+empId;
			
		xmlhttp.open("GET",url,true);
		xmlhttp.send();
	}
		
    </script>
</head>
    <body background="../images/icons/header.jpg " onload="doOnLoad();">

<?php
$date = date("Y-m-d",time());

require_once 'menu.php';
echo "<br/>";
        if(isset($_GET ["msg"])){
        if ($_GET ["msg"]==1){
            echo "<p style='color: #00ff00;' align='center'>Successfully appliedd!</p>";
        }
        else if ($_GET ["msg"]==2){
            echo "<p style='color: #ff0000;' align='center'>Error occured!</p>";
        }       
        }
    ?><br/>
<form action="leav_apply.php" method="post" id="frmleave" name="frmleave">
<fieldset style="margin-left:15%; margin-right: 15%;">
<legend>Apply Leave</legend>
<table style="width:96%;" border="0" align="center">
    <div id="error" style="color:#C00;" align="center"></div>
    <tr> 
        <td colspan="6" style="background-color:#6699CC;"><label>Employee Details</label></td>
    </tr> 
    <tr>
        <td><label>Employee ID</label></td>
        <td><input type="text" id="txtleav_emp_id" name="txtleav_emp_id" style="width:100px;" onblur="loaddata(this.value);"/></td>
        <td><label>Employee Name</label></td>
        <td colspan="2">
        <input type="text" id="txtleav_emp_name" name="txtleav_emp_name" style="width:300px;"/></td>
    </tr>
    <tr>
        <td colspan="6">&nbsp;</td>    
    </tr>
    
    <tr> 
        <td  colspan="6" style="background-color:#6699CC;"><label>Leave Details</label></td>
    <tr>
        <td><label>Leave Type</label></td>
        <td><select name="seleav_apply_type" id="seleav_apply_type">
                <option value="">--Select--</option>
                <option value="Duty">Duty</option>
                <option value="Casual">Casual</option>
                <option value="Sick">Sick</option>
                <option value="Maternity">Maternity</option>
                <option value="Half Pay">Half Pay</option>
                <option value="No Pay">No Pay</option>
        </select></td>
    <td>
        <input type="radio" name="spp_days" id="radleav_apply_single" onclick="nodays_single();"/>
        <label>Single Day</label>
    </td>
    <td>
        <input type="radio" name="spp_days" id="radleav_apply_half" onclick="nodays_half();"/>
        <label>Half Day</label>
    </td>
        <td><input type="radio" name="spp_days" id="radleav_apply_multi"/>
        <label>Multiple date</label>
    </td>
    </tr>
    <tr>
        <td colspan="6">&nbsp;</td>    
    </tr>
    <tr><td><label for='txtleav_apply_from'>From</label></td>
        <td><input type="text" id="txtleav_apply_from" name="txtleav_apply_from" onclick="disableDays([6,7]);" readonly/></td>
        <td align="right"><label for="txtleav_apply_to">To</label></td>
        <td><input type="text" name="txtleav_apply_to" id="txtleav_apply_to" onclick="disableDays([6,7]);" readonly/></td>
    </tr>
    <tr>
    <td><label>No.of days</label></td>
    <td><label><input type="text" name="no_days" id="no_days" style="width:50px;"/> </label></td>
        <td><label>Applied date</label></td>
        <td><input type="text" name="txtleav_apply_date" id="txtleav_apply_date" value="<?php echo $date;?>" /></td>
    </tr>
    </tr>
        <tr><td colspan="6" align="center">
                <a href="vi_leav_type.php">  
                    <input type="button" value="Cancel" onclick="return confirm('Do you want to leave the page')" style="width: 80px; height: 30px;;"/> 
                </a>
                <input type="submit" value="Apply" name="add" onclick="validatefrm()" style="width: 80px; height: 30px;;" />
            <input type="reset" value="Clear" onclick="return confirm('Do you want to clear all the fields')" style="width: 80px; height: 30px;;" />
    </tr>
    
    
</table>
</fieldset>
</form>
 <footer>
  <p align="center">&copy; All rights reserved by Kandy Municipal Council 2014</p>
</footer>                    
</body>
</html>

<?php
if (isset($_POST["add"])){
require_once '../lib/connection.php';

$dbobj = new dbConnection();
$con = $dbobj->getCon();

$eid = $_POST["txtleav_emp_id"];
$leatype = $_POST{"seleav_apply_type"};
$leafrom = $_POST["txtleav_apply_from"];
$leato = $_POST["txtleav_apply_to"];
$nodays = $_POST["no_days"];
$appdate = $_POST["txtleav_apply_date"];
$stat = 0;

$sql1 = "INSERT INTO tbl_apply_leave(emp_id, apply_date, leave_from, leave_to, leave_type, leave_days, leave_approve)
                                values('$eid', '$appdate', '$leafrom', '$leato', '$leatype', '$nodays', '$stat')";

$query_result = mysqli_query($con,$sql1);
                
        
        mysqli_close($con);

if($query_result>0){
    header("Location:leav_apply.php?msg=1");
}
else {
    header("Location:leav_apply.php?msg=2");
}
}
?>