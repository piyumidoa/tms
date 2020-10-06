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
    	
	$success = "";
	$error = "";
	$not_enough = "";
	
    foreach($pid as $a => $b)
    {    
		$produt_id= $pid[$a];
        if($produt_id!="") {
	
			$quantity_need = $pqty[$a];
			$sql5 = "SELECT qty FROM `available_stock` WHERE prodId = '$produt_id'";

			$query_result5 = mysqli_query($con,$sql5);
			
			if( $query_result5 ) {
				$row = mysqli_fetch_array($query_result5);
			
				$available_quantity = $row['qty'];	
				
				if($available_quantity < $quantity_need) {
					
					$not_enough = $not_enough . ", ".$produt_id;	
				}
			}	 
		}else
		{}
	}

	if( empty ($not_enough) ) {
		echo "All ";
		foreach($pid as $a => $b)
		{    
			$produt_id= $pid[$a];
			if($produt_id!="") {
		
				$quantity_need = $pqty[$a];
				$sql5 = "SELECT qty FROM `available_stock` WHERE prodId = '$produt_id'";

				$query_result5 = mysqli_query($con,$sql5);
				
				if( $query_result5 ) {
					$row = mysqli_fetch_array($query_result5);
				
					$available_quantity = $row['qty'];	
					
					if($available_quantity >= $quantity_need) {
						
						$new_available_quantity = $available_quantity - $quantity_need;
						$sql4 = "UPDATE available_stock  
						SET qty='$new_available_quantity'
						WHERE prodId='$produt_id'";
						
						$query_result4 = mysqli_query($con,$sql4); 
						if($query_result4) {
							
							$success = $success . ", ".$produt_id;
							$sql3 = "INSERT INTO updatedusedstock (tra_id, prodId, qty) VALUES ('$traid', '$pid[$a]', '$pqty[$a]')";
							$query_result3 = mysqli_query($con,$sql3);
							
						} else {							
							$error = $error . ", ".$produt_id;
						}					
					}
					else {						
						$not_enough = $not_enough . ", ".$produt_id;
					}
				}	 
			}else
			{}
		}  
	}
	$message = "";
	$type = 0;
	if( !empty($error) ) {
		$message = $message . "<br/>Error in updating new available quantity for ".$error." ";
	}
	if( !empty($not_enough) ) {
		$message = $message . "<br/>No enough quantity for  ".$not_enough." ";
	} else {
		$message = $message . "<br/>New available quantity for all products updated successfully. ";
		$type = 1;
	}
	
	header("Location:updatedUsedStock_1.php?message=$message&type=$type");

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

 /*
 if (!mysqli_query($con,$sql1)) {
	
$res='Fail'; 
  die('Error: '. mysqli_error($con));
		}
		mysqli_close($con);

header("Location:updatedUsedStock_1.php?msg=$res");*/
}




?>