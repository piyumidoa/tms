<?php 
require 'dbcon.php';
$obj=new dbcon();
$con=$obj->getcon();


$pID=$_GET['pID'];
$name=$_GET['name'];
$description=$_GET['description'];
//$qty=$_GET['qty'];

$sql="INSERT INTO product(prodId,name,description) VALUES ('$pID','$name','$description')";
$res='Success';
if (!mysqli_query($con,$sql)) {
  die('Error: '. mysqli_error($con));
$res='Fail'; 
 
}
///////// insert initial record into stock table//////////////////////
/*
$sqlstock="INSERT INTO stock(prodId,name,description,qty) VALUES ('$pID','$name','$description','$qty')";
$res='Success';
if (!mysqli_query($con,$sqlstock)) {
  die('Error: '. mysqli_error($con));
$res='Fail';  
}
*/

header("Location:productAdd.php?msg=$res");

mysqli_close($con);
?>


