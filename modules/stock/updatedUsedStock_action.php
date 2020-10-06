<?php 
//error_reporting==0;
if(isset($_GET["locid"])){
	$locid = $_GET["locid"];
	
	loadproducts($locid);
	}

	function loadproducts($locid){
		require 'dbcon.php';
		$obj=new dbcon();
		$con=$obj->getcon();
										
		$sql = "SELECT * from  refe_used_stock WHERE location_id = '$locid' ;";
		
		$result = mysqli_query($con,$sql) or die("SQL Error : ".mysqli_error($con));
										
		$nor = $result->num_rows;
	
		echo "<table name='productinfo' id='productinfo' onchange='loadproduct(this.value,\"2\");'>";
		if($nor>0){

			while($rec = mysqli_fetch_assoc($result)){

				echo "<tr><td><input type='text' name='txt_prod_id[]' value='".$rec["proId"]."'/></td><td><input type='text' name='txt_prod_qty[]' value='".$rec["qty"]."'/></td></tr>";
			}     
		}			
	}


if(isset($_GET["btnsubmit"])){

	require 'dbcon.php';
	$obj=new dbcon();
	$con=$obj->getcon();

	$prodate=$_GET['date'];
	$place=$_GET['tra_places'];
	$pro_Name=$_GET['pname'];
	$pid=$_GET['txt_prod_id'];
	$pqty = $_GET['txt_prod_qty'];

	$sql1 = "INSERT INTO training_prog (prog_Name, prog_place, prog_date) VALUES ('$pro_Name','$place','$prodate')";
  	$query_result1 = mysqli_query($con,$sql1);  

  	$sql2 = "SELECT MAX(tra_id) AS tra_id FROM training_prog ";
  	$query_result2 = mysqli_query($con,$sql2);  

  	while($rec = mysqli_fetch_assoc($query_result2)){
    $traid=$rec['tra_id'];  
 	}
    //echo $traid;
    
    foreach($pid as $a => $b)
    {    
        if($pid[$a]!=""){

        	
  	$sql3 = "INSERT INTO updatedusedstock (tra_id, prodId, qty) VALUES ('$traid', '$pid[$a]', '$pqty[$a]')";
  	$query_result3 = mysqli_query($con,$sql3);  
	}else
	{}
    }  

    foreach($pid as $a => $b)
    {    
        if($pid[$a]!=""){

        	
  	$sql4 = "UPDATE available_stock s1, (
    SELECT s2.qty
    FROM available_stock s2
    WHERE s2.prodId='$pid[$a]') s3
	SET s1.qty=(s3.qty-'$pqty[$a]')
	WHERE s1.prodId='$pid[$a]'";
  	$query_result4 = mysqli_query($con,$sql4);  
	}else
	{}
    }  
/*
INSERT INTO `training_prog_areas`(`tra_id`, `prog_Name`, `prog_place`, `prog_date`, `nop`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5])

INSERT INTO `updatedusedstock`(`tra_prod_id`, `tra_id`, `prodId`, `qty`) VALUES ([value-1],[value-2],[value-3],[value-4])
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
 */ 
 if (!mysqli_query($con,$sql1)) {
	
$res='Fail'; 
  die('Error: '. mysqli_error($con));
		}
		mysqli_close($con);

header("Location:newQty.php?msg=$res");
}




?>