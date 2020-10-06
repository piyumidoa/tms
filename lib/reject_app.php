<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

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

   $sql = "UPDATE `tbl_apply_training` SET `emp_approve`=3  WHERE `app_id` = '$app_id'";

   $result= mysqli_query($con,$sql);

   if( $result>0 ){
        header("Location:../modules/employee/select_employee.php?msg=1&emp_id=$emp_id&select=3");
    }
    else {
        header("Location:../modules/employee/select_employee.php?msg=2&emp_id=$emp_id&select=3");
    }

}
   ?>