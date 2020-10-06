<?php 
require 'dbcon.php';
$obj=new dbcon();
$con=$obj->getcon();


$username=$_POST['uname'];
$pw=$_POST['pw'];
$type=$_POST['Type'];
$status=$_POST['status'];


$sql="INSERT INTO users(uname,psw,type,status) VALUES ('$username','$pw','$type','$status')";
$res='Success';
if (!mysqli_query($con,$sql)) {
  die('Error: '. mysqli_error($con));
$res='Fail'; 
 
}

header("Location:users.php?msg=$res");

mysqli_close($con);
?>


