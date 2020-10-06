

<?php 

//error_reporting==0;
require 'dbcon.php';
$obj=new dbcon();
$con=$obj->getcon();


$prodId=$_POST['pid'];
$Quantity=$_POST['Quantity'];



 	$sql="SELECT prodId
    FROM stock 
    WHERE prodId=('$prodId')" ;
	$result= mysqli_query($con,$sql);
	$nor=mysqli_num_rows($result);

	if ($nor>0)
{
$sqlStock="UPDATE stock s1, (
    SELECT s2.qty
    FROM stock s2
    WHERE s2.prodId='$prodId') s3
	SET s1.qty=(s3.qty+'$Quantity')
	WHERE s1.prodId='$prodId'";
$res='Success';
if (!mysqli_query($con,$sqlStock)) {
	  
$res='Fail'; 
  die('Error: '. mysqli_error($con));
	}
}
	else{
	
	
 $sql1= "INSERT INTO stock(prodId,qty) VALUES ('$prodId','$Quantity')";
 if (!mysqli_query($con,$sql1)) {
	  
$res='Fail'; 
  die('Error: '. mysqli_error($con));
	}	
}






header("Location:newQty.php?msg=$res");

mysqli_close($con);

?>
