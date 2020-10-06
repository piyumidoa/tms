<?php
require 'dbcon.php';
$obj=new dbcon();
$con=$obj->getcon();//db connecion
$id = $_GET["prodId"]; // get the user enter id to display current details


$sql = "DELETE FROM product WHERE prodId='$id';"; //Delete record from data base
$result = mysqli_query($con,$sql) or die(mysqli_error());
header("location:viewproduct.php?msg=succ");
?>




