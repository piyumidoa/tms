<?php
require 'dbcon.php';
$obj=new dbcon();
$con=$obj->getcon();//db connecion
$id = $_GET["id"]; // get the user enter id to display current details


$sql = "DELETE FROM training_areas WHERE id='$id';"; //Delete record from data base
$result = mysqli_query($con,$sql) or die(mysqli_error());
header("location:viewTranAreas.php?msg=succ");
?>




