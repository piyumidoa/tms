<?php 
require 'dbcon.php';
$obj=new dbcon();
$con=$obj->getcon();


$trArea=$_GET['trArea'];
$loca=$_GET['loca'];


$sql="INSERT INTO training_areas(tra_area_name,location) VALUES ('$trArea','$loca')";
$res='Success';
if (!mysqli_query($con,$sql)) {
  die('Error: '. mysqli_error($con));
$res='Fail'; 
 
}

header("Location:training_areas.php?msg=$res");

mysqli_close($con);
?>