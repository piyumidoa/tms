<?php
require 'dbcon.php';
$obj=new dbcon();
$con=$obj->getcon();//db connecion
$id = $_GET["tra_id"]; // get the user enter id to display current details


$sql = "DELETE FROM used_stock WHERE tra_id='$id';"; //Delete record from data base
$result = mysqli_query($con,$sql) or die(mysqli_error());
header("location:usedStock.php?msg=succ");
?>




