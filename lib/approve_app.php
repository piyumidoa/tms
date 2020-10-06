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
} 
else {
    header('Location:../../index.php');
}


require_once("./connection.php");

$dbobj = new dbConnection();
$con = $dbobj->getCon();

if(isset($_GET["id"])) {
   $app_id = $_GET["id"];
   $emp_id = $_GET["emp_id"];

   $sql = "UPDATE `tbl_apply_training` SET `emp_approve`=2  WHERE `app_id` = '$app_id'";

   $result= mysqli_query($con,$sql);

    if( $result>0 ){
        header("Location:../modules/employee/select_employee.php?msg=1&emp_id=$emp_id&select=2");
    }
    else {
        header("Location:../modules/employee/select_employee.php?msg=2&emp_id=$emp_id&select=2");
    }

}

/* 
$sql1=  "SELECT     tbl_user.user_name,  
                    tbl_user.emp_id,  
                    tbl_employee.emp_title,
                    tbl_employee.emp_name
        FROM tbl_user 
        INNER JOIN tbl_employee ON tbl_user.emp_id=tbl_employee.emp_id 
        WHERE tbl_user.user_name='$username' ";

$result1 = mysqli_query($con,$sql1);

while ($row = mysqli_fetch_array($result1)) {

        $empid=$row['emp_id']; 
        $etit = $row['emp_title'];
        $ename = $row['emp_name'];
         }
         
$sql2=  "SELECT     tbl_apply_leave.leave_from,  
                    tbl_apply_leave.leave_to,  
                    tbl_employee.emp_mobile,
                    tbl_employee.emp_email
        FROM tbl_apply_leave 
        INNER JOIN tbl_employee ON tbl_apply_leave.emp_id=tbl_employee.emp_id 
        WHERE tbl_apply_leave.apply_leav_id='$id' ";

$result2 = mysqli_query($con,$sql2);

while ($rec = mysqli_fetch_array($result2)) {        
        
        $levfrm = $rec['leave_from'];
        $levto = $rec['leave_to'];
        $emob = $rec['emp_mobile'];  
        $eemail = $rec['emp_email'];  
        }
        
        $msg="Your leave appllication has aproved from ".$levfrm ." to".$levto;
        
        $leapprovby=$etit." ".$ename;
        $approva='1';
        
//Update table        
    $sql = "UPDATE tbl_apply_leave SET
                  leav_approv_by = '$leapprovby', 
                  leave_approve  = '$approva'                                   
            WHERE apply_leav_id = '$id' ";
    $query_result = mysqli_query($con,$sql);
        
mysqli_close($con);

    /*
//Send  sms
$gatewayURL = "http://localhost:9333/ozeki?";
$request = "login=admin";
$request .="&password=abc123";
$request .="&action=sendMessage";
$request .="&messagetype=SMS:TEXT";
$request .="&recepient=".urlencode("+94.$emob");
$request .="&messageData=".urlencode($msg);

$url = $gatewayURL.$request;
//echo($url);
file($url);
//echo("Sent");

//Send  email
$header = "From : <admin@kmc.gov.lk>";
$res = mail($eemail,"Account activation",$msg);
if($res)
	echo("Sent".$res);
else
	echo("Error");
*/
/*
if($query_result>0){
    header("Location:leav_mgt.php?msg=1");
}
 else {
    header("Location:leav_mgt.php?msg=2");
}
 */
    ?>