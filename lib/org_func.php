<?php
require_once("connection.php");


if(isset($_GET["oPost"])){
	$oPost = $_GET["oPost"];
	
	loadPostDetails($oPost);
	
}
	function loadPostDetails($oPost){
		$obj = new dbconnection();
		$con = $obj->getcon();
		
										
		$sql = "SELECT * from tbl_job WHERE job_title = '$oPost';";
		
		$result = mysqli_query($con,$sql) or die("SQL Error : ".mysqli_error($con));
										
		$nor = $result->num_rows;
		
		if($nor>0){
			while($rec = mysqli_fetch_assoc($result)){
                              $rec["job_title"];                              
			}
                        echo("already exist");
		}
		else{
	//		echo("Invalid employee number");
		}
		
		mysqli_close($con);
	}
?>
<?php
require_once("connection.php");


if(isset($_GET["salId"])){
	$salId = $_GET["salId"];
	
	loadSalaryDetails($salId);
	
}

	function loadSalaryDetails($salId){
		$obj = new dbconnection();
		$con = $obj->getcon();
		
										
		$sql = "SELECT * from tbl_sal_type WHERE sal_type_code = '$salId';";
		
		$result = mysqli_query($con,$sql) or die("SQL Error : ".mysqli_error($con));
										
		$nor = $result->num_rows;
		
		if($nor>0){
			while($rec = mysqli_fetch_assoc($result)){
                              $rec["sal_type_code"];                              
			}
                        echo("already exist");
		}
		else{
		}		
		mysqli_close($con);
	}
?>
<?php
require_once("connection.php");

if(isset($_GET["depId"])){
	$depId = $_GET["depId"];
	
	loadDepDetails($depId);	
}
	function loadDepDetails($depId){
		$obj = new dbconnection();
		$con = $obj->getcon();
												
		$sql = "SELECT * from tbl_department WHERE dep_id = '$depId';";
		
		$result = mysqli_query($con,$sql) or die("SQL Error : ".mysqli_error($con));
										
		$nor = $result->num_rows;
		
		if($nor>0){
			while($rec = mysqli_fetch_assoc($result)){
                              $rec["dep_id"];                              
			}
                        echo("already exist");
		}
		else{
		}		
		mysqli_close($con);
	}
?>
<?php
require_once("connection.php");

if(isset($_GET["oQual"])){
	$oQual = $_GET["oQual"];
	
	loadQualDetails($oQual);	
}
	function loadQualDetails($oQual){
		$obj = new dbconnection();
		$con = $obj->getcon();
												
		$sql = "SELECT * from tbl_qual_type WHERE qual_type_name = '$oQual';";
		
		$result = mysqli_query($con,$sql) or die("SQL Error : ".mysqli_error($con));
										
		$nor = $result->num_rows;
		
		if($nor>0){
			while($rec = mysqli_fetch_assoc($result)){
                              $rec["qual_type_name"];                              
			}
                        echo("already exist");
		}
		else{
		}		
		mysqli_close($con);
	}
?>
<?php
require_once("connection.php");


if(isset($_GET["empId"])){
	$empId = $_GET["empId"];
	
	loadEmpDetails($empId);
	
}

	function loadEmpDetails($empId){
		$obj = new dbconnection();
		$con = $obj->getcon();
		
										
		$sql = "SELECT * from tbl_employee WHERE emp_nic = '$empId';";
		
		$result = mysqli_query($con,$sql) or die("SQL Error : ".mysqli_error($con));
										
		$nor = $result->num_rows;
		
		if($nor>0){
			while($rec = mysqli_fetch_assoc($result)){
                        echo    $rec["emp_title"];
                        echo    $rec["emp_name"];                               
			}
           //             echo("already exist");
		}			
		mysqli_close($con);
	}
?>