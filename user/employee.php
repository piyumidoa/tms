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

require_once 'lib/connection.php';
    
$dbobj = new dbConnection();
$con = $dbobj->getCon();

$sql1="SELECT       tbl_user.user_name,
                    tbl_user.emp_id,
                    tbl_employee.emp_title,
                    tbl_employee.emp_initials,
                    tbl_employee.emp_dob,
                    tbl_employee.emp_gender,
                    tbl_employee.emp_nic,
                    tbl_employee.emp_email,
                    tbl_employee.emp_home_phone,
                    tbl_employee.emp_mobile,
                    tbl_employee.job_id,
                    tbl_employee.dep_id,
                    tbl_employee.emp_address 
                    FROM tbl_user 
                    INNER JOIN tbl_employee ON tbl_user.emp_id=tbl_employee.emp_id 
                    WHERE tbl_user.user_name='$username' ";

$result = mysqli_query($con,$sql1);

while ($row = mysqli_fetch_array($result)) {

        $empid=$row['emp_id'];   
        $etit= $row['emp_title'] ;
        $einitial=$row['emp_initials'];                
        $ename= $row['user_name'] ; 
        $egen=$row['emp_gender'];        
        $edob= $row['emp_dob'] ;
        $enic = $row['emp_nic'] ;      
        $ejid= $row['job_id'] ;  
        $depid=$row['dep_id'];        
        $eresi = $row['emp_home_phone'] ;      
        $eadd= $row['emp_address'] ;  
        $emob= $row['emp_mobile'] ;        
        $emai= $row['emp_email'] ;       
        
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>HRMS For KMC | Employee Home Page</title>
        <link href="js/dhtmlxcalendar_full/dhtmlxCalendar/codebase/dhtmlxcalendar.css" rel="stylesheet" type="text/css"/>
        <link href="js/dhtmlxcalendar_full/dhtmlxCalendar/codebase/skins/dhtmlxcalendar_dhx_skyblue.css" rel="stylesheet" type="text/css"/>
        <script src="js/dhtmlxcalendar_full/dhtmlxCalendar/codebase/dhtmlxcalendar.js" type="text/javascript"></script>
        <script>
var myCalendar;
function doOnLoad() {
    myCalendar = new dhtmlXCalendarObject("calendarHere");
    myCalendar.setDate(new Date());
    myCalendar.show();
}
</script>   </head>
    <body background="images\icons\header.jpg " onload="doOnLoad();">
        <?php
        require_once 'amenu.php';   
        ?>
        <br/>
        <table align="center" border="" width="90%">
            <tr><td><div style="color: #ddaaaa; background: #aaccaa;"> 
                    <h1 align="center">Welcome to the <br/>Human Resource Management System</h1></div></td></tr>
        </table>
        <table align="center" border="1" width="60%" style="background-color: #ddaaaa;">
            <tr>
	<td><label>Employee ID</label></td>
        <td><?php echo $empid ;?></td>       
</tr>
<tr>
	<td><label>Employee Name</label></td>
	<td><?php echo $etit.''.$einitial ;?></td>   
</tr>       
<tr>
	<td><label>User Name</label></td>
	<td><?php echo $ename ;?></td>
</tr>      
<tr>
	<td><label>User Name</label></td>
	<td><?php echo $egen ;?></td>
</tr>      
    <tr>
	<td><label>User Name</label></td>
	<td><?php echo $edob ;?></td>
</tr> 
 <tr>
	<td><label>User Name</label></td>
	<td><?php echo $enic ;?></td>
</tr>      
<tr>
	<td><label>User Name</label></td>
	<td><?php echo $ejid ;?></td>
</tr>    
 <tr>
	<td><label>Employee Name</label></td>
	<td><?php echo $depid ;?></td>   
</tr>       
<tr>
	<td><label>User Name</label></td>
	<td><?php echo $eresi ;?></td>
</tr>      
<tr>
	<td><label>User Name</label></td>
	<td><?php echo $eadd ;?></td>
</tr>      
    <tr>
	<td><label>User Name</label></td>
	<td><?php echo $emob ;?></td>
</tr> 
 <tr>
	<td><label>User Name</label></td>
	<td><?php echo $emai ;?></td>
</tr>      
<tr>
	<td><label>User Name</label></td>
	<td><?php echo $username ;?></td>
</tr>               
            <div id="calendarHere" align="right"  style="margin-left:80%; position:relative; height:150px; "></div>
</table>       
<br/><br/><br/><br/>
<footer>
  <p align="center">&copy; All rights reserved by Kandy Municipal Council 2014</p>
</footer>
</body>
</html>