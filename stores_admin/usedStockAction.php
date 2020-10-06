<?php 

if(isset($_GET["pdate"])){
	$pdate = $_GET["pdate"];
	
	loadplace($pdate);
	
}

if(isset($_GET["prgplace"])){
	$prgplace = $_GET["prgplace"];
	
	loadprog($prgplace);
	
}

	function loadplace($pdate){	

	require 'dbcon.php';
	$obj=new dbcon();
	$con=$obj->getcon();	
										
		$sql = "SELECT * from training_prog 
		INNER JOIN training_areas ON training_prog.prog_place = training_areas.tra_area_id  WHERE prog_date = '$pdate' ;";
		
		$result = mysqli_query($con,$sql) or die("SQL Error : ".mysqli_error($con));
										
		$nor = $result->num_rows;

		echo "<select name='tra_area' id='tra_area' required onchange='loadprog(this.value, \"1\");' >";
		echo("<option value=''>--Select--</option>");
		if($nor>0){

			while($rec = mysqli_fetch_assoc($result)){

                echo("<option value='".$rec["prog_place"]."'>".$rec["tra_area_name"]."</option>");
			}     
		}			
		echo("</select>");
	
	mysqli_close($con);
	}


	function loadprog($prgplace){	

	require 'dbcon.php';
	$obj=new dbcon();
	$con=$obj->getcon();	
										
		$sql = "SELECT * from training_prog  WHERE prog_place = $prgplace ;";
		
		$result = mysqli_query($con,$sql) or die("SQL Error : ".mysqli_error($con));
										
		$nor = $result->num_rows;

		echo "<select name='tra_prog' id='tra_prog' required onchange='loadprog(this.value, \"2\");' >";
		echo("<option value=''>--Select--</option>");
		if($nor>0){

			while($rec = mysqli_fetch_assoc($result)){

                echo("<option value='".$rec["tra_id"]."'>".$rec["prog_Name"]."</option>");
			}     
		}			
		echo("</select>");
	
	mysqli_close($con);
	}


if(isset($_POST["subbtn"])){

	require 'dbcon.php';
	$obj=new dbcon();
	$con=$obj->getcon();	
	
	$nop=$_POST['nop'];
	$traid = $_POST['tra_prog'];
	$fc = $_POST['fc'];
	$pen = $_POST['pen'];
	$hs = $_POST['hs'];

	
$sql="UPDATE training_prog 
		SET nop='$nop'
		WHERE tra_id='$traid'";

$sql1="UPDATE available_stock s1, (
	    SELECT s2.qty
	    FROM available_stock s2
	    WHERE s2.prodId='File Covers') s3
	    SET s1.qty = (s3.qty-'$fc') 
		WHERE s1.prodId='File Covers'"; 

$sql2="UPDATE available_stock s1, (
	    SELECT s2.qty
	    FROM available_stock s2
	    WHERE s2.prodId ='Pen (Blue/Black)') s3
	    SET s1.qty = (s3.qty-'$pen') 
		WHERE s1.prodId ='Pen (Blue/Black)'"; 

$sql3="UPDATE available_stock s1, (
	    SELECT s2.qty
	    FROM available_stock s2
	    WHERE s2.prodId='Half Sheet') s3
	    SET s1.qty = (s3.qty-'$hs') 
		WHERE s1.prodId ='Half Sheet'"; 

$sqlusedStock="UPDATE updatedusedstock s1, (
	    SELECT s2.qty
	    FROM updatedusedstock s2
	    WHERE s2.tra_id='$traid' AND s2.prodId='File Covers') s3
	    SET s1.qty = (s3.qty+'$fc') 
		WHERE s1.tra_id='$traid'";

$sqlusedStock1="UPDATE updatedusedstock s1, (
	    SELECT s2.qty
	    FROM updatedusedstock s2
	    WHERE s2.tra_id='$traid' AND s2.prodId ='Pen (Blue/Black)') s3
	    SET s1.qty = (s3.qty+'$pen') 
		WHERE s1.tra_id='$traid'";

$sqlusedStock2="UPDATE updatedusedstock s1, (
	    SELECT s2.qty
	    FROM updatedusedstock s2
	    WHERE s2.tra_id='$traid' AND s2.prodId='Half Sheet') s3
	    SET s1.qty = (s3.qty+'$hs') 
		WHERE s1.tra_id='$traid'";

	
		/////////////Reduce the stock value/////////////////////////////

$exesql = mysqli_query($con,$sql);
$exesql1 = mysqli_query($con,$sql1); 
$exesql2 = mysqli_query($con,$sql2); 
$exesql3 = mysqli_query($con,$sql3); 
$exesql4 = mysqli_query($con,$sqlusedStock);
$exesql5 = mysqli_query($con,$sqlusedStock1);
$exesql6 = mysqli_query($con,$sqlusedStock2); 
 
mysqli_close($con) ;
	$res='Fail';
	if ($exesql>0 && $exesql1>0 && $exesql2>0 && $exesql3>0 && $exesql4>0 && $exesql5>0 && $exesql6 ) {
		  
	$res='Success'; 
	 // die('Error: ');

		}	
header("Location:usedStock.php?msg=$res");
	}
?>