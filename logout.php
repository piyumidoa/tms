<?php
session_start();
/***
ob_start();
if(isset($_SESSION['username']) || isset($_SESSION['password'])){
$navbar = "1";
$logindisplay = "0";
$username = $_SESSION['id'];
$password = $_SESSION['password'];
$now = time();
$authed = isset($username, $password);
if( $authed == "0" ){
    header('Location:index.php');
}
// Checking the time now when home page starts.
if ($now > $_SESSION['expire']) {
    header('Location:logout.php');
        }
} else {
    header('Location:index.php');
}
require_once("lib/connection.php");
//require_once("lib/log_save.php");
$sql1="SELECT       user_name, user_id
                    FROM tbl_user                   
                    WHERE tbl_user.user_name='$username' ";
$result = mysqli_query($con,$sql1);

while ($row = mysqli_fetch_array($result)) {
$usrid = $rec["user_id"];
$loutime = date("Y/m/d, h:i:s",time());
}
$sql = "UPDATE tbl_loginlogs SET log_out_time=$loutime 
    WHERE emp_id='$usrid' 
    AND log_out_time IS NULL";
 * 
 */
if(session_destroy())
{
header("Location:index.php");
}
?>