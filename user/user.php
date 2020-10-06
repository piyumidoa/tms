<?php
session_start();
ob_start();
if(isset($_SESSION['username']) || isset($_SESSION['password'])){
$navbar = "1";
$logindisplay = "0";
$username = $_SESSION['id'];
$password = $_SESSION['password'];
$now = time();
$inactive = 1;
$_SESSION['timestamp']= time();
//$_SESSION['expire'] = time()+1*60;
$_SESSION['loginTime'] = time();
$authed = isset($username, $password);
if( $authed == "0" ){
    header('Location:../index.php');
}
// Checking the time now when home page starts.
if ($now > $_SESSION['expire']) {
    header('Location:../logout.php');
        }
} else {
      //  else { //Starting this else one [else1]
    header('Location:../index.php');
//}
}
require_once '../lib/connection.php';
    
$dbobj = new dbConnection();
$con = $dbobj->getCon();

$sql1="SELECT       tbl_user.user_name,
                    tbl_user.user_role,
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
        
        if($row['user_role']=="1"){
        $usrole = "Adminisrative Officer";
    }
    else if ($row['user_role']=="2"){
        $usrole = "Chief Officer";
    }
    else{
        $usrole = "Clerk";
    }
}
 
$sql2 = "  SELECT tbl_emp_img.emp_id, tbl_emp_img.emp_img_path, tbl_user.user_name
            FROM tbl_emp_img
            INNER JOIN tbl_user ON tbl_emp_img.emp_id = tbl_user.emp_id
            WHERE tbl_user.user_name='$username' ";
$result2 = mysqli_query($con,$sql2);
	
while($rec = mysqli_fetch_assoc($result2)){
		$path = $rec["emp_img_path"];
                $img = "<img src='../uploads/".$path."' width='200px' height='200px'/>";
                  } 
$sql3 = "  SELECT MAX(login_time)AS logintime
            FROM tbl_usrlog
            WHERE user_id = '$empid' ";
$result3 = mysqli_query($con,$sql3);
 
 while($recd = mysqli_fetch_assoc($result3)){
     $lgtime=$recd['logintime'];  
     $dateObject = new DateTime($lgtime);
 }
 
$sql4="SELECT       tbl_department.dep_id,
                    tbl_department.dep_name,
                    tbl_employee.dep_id 
                    FROM tbl_department
                    INNER JOIN tbl_employee ON tbl_department.dep_id = tbl_employee.dep_id
                    WHERE tbl_department.dep_id='$depid' ";

$result4 = mysqli_query($con,$sql4);

while ($res = mysqli_fetch_array($result4)) {

        $depname=$res['dep_name'];  
        }                   
mysqli_close($con);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><!--
    <meta http-equiv="refresh" content="60;url=index.php" /> -->
    
        <title>Home | HRMS for KMC</title>
    <style type="text/css">
        label{
            font-size: 14px;
            font-synthesis: weight;
     //       background-color: #C4DDFF;
            font-family: arial;
     //       font-weight: bold;
	//font-size: 24pt;
}
#tblwel{
    padding-top: 20px;
    padding-right: 50px;
    padding-bottom: 20px;
    padding-left: 50px;
    background-color: #BBCCFF;
    margin-top: -60px;
}
#transbox
  {
  width:1200px;
  height:200px;  
  margin-top: -150px; 
  margin-left: 5%;
  border-radius:50px;
  background-color:#A1ECFF;
  //border:2px dashed black;
  opacity:0.8;
  filter:alpha(opacity=80); /* For IE8 and earlier */
//  background-color: #ddaaaa; 
  }
    </style>
        <link href="../js/dhtmlxcalendar_full/dhtmlxCalendar/codebase/dhtmlxcalendar.css" rel="stylesheet" type="text/css"/>
        <link href="../js/dhtmlxcalendar_full/dhtmlxCalendar/codebase/skins/dhtmlxcalendar_dhx_skyblue.css" rel="stylesheet" type="text/css"/>
        <script src="../js/dhtmlxcalendar_full/dhtmlxCalendar/codebase/dhtmlxcalendar.js" type="text/javascript"></script>        
        <script>
var myCalendar;
function doOnLoad() {
    myCalendar = new dhtmlXCalendarObject("calendarHere");
    myCalendar.setDate(new Date());
    myCalendar.show();
}
</script>   </head>
    <body background="../images/icons/header.jpg " onload="doOnLoad();">
        <?php
        require_once 'menu.php';   
        ?>
        <br/><br/>
        <table align="center" width="90%" id="tblwel">
            <tr><td><div style="color: #000000; background: #bbbbbb;"> 
                    <h1 align="center">Welcome to the <br/>Human Resource Management System</h1></div></td></tr>
        </table>
        <div >
        <table  border="0" id="transbox" width="75%" style="">
            <tr><td colspan="4"><br/></td></tr>
            <tr>
        <td align="right"><label>Employee ID <b>:</b></label></td>
        <td><label><?php echo $empid ;?></label></td> 
        <?php echo "<td align=''><a href='change_password.php?id=$empid'>"?>Change Password</a></td>
        <td></td> 
</tr>
<tr>
	<td align="right"><label>Employee Name <b>:</b></label></td>
	<td><label><?php echo $etit.' '.$einitial ;?></label></td> 
        <td rowspan="6"><?php echo $img ; ?></td> 
        <td rowspan="5"> </td>            
</tr>       
<tr>
	<td align="right"><label>User Name <b>:</b></label></td>
	<td><label><?php echo $ename ;?></label></td>
</tr>
 <tr>
	<td align="right"><label>User Role <b>:</b></label></td>
	<td><label><?php echo $usrole ;?></label></td>
</tr>                
<tr>
	<td align="right"><label>NIC No. <b>:</b></label></td>
	<td><label><?php echo $enic ;?></label></td>
</tr>      
<tr>
	<td align="right"><label>Designation <b>:</b></label></td>
	<td><label><?php echo $ejid ;?></label></td>
</tr>    
 <tr>
	<td align="right"><label>Department <b>:</b></label></td>
	<td><label><?php echo $depname ;?></label></td> 
        <td><label>Last Login <b>: </b></td>
        <td align="left"><label><?php echo $dateObject->format("l jS \of F, Y,  h:i:s A"); ;?></label></td>  

</tr>                      
            <tr><td colspan="4"><br/></td></tr>
            <div id="calendarHere" align="right"  style="margin-left:70%; position:relative; height:150px; margin-top: -00px; "></div>
</table>   
           
        </div>
<footer>
  <p align="center">&copy; All rights reserved by Kandy Municipal Council 2014</p>
</footer>
</body>
</html>