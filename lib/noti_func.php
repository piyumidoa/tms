<?php
require_once("connection.php");

if(isset($_GET["empId"])){
	$empId = $_GET["empId"];
	
	loadEmpDetails($empId);
}
	function loadEmpDetails($empId){
		$obj = new dbconnection();
		$con = $obj->getcon();
												
		$sql = "SELECT * from tbl_employee WHERE emp_id = '$empId';";
		
		$result = mysqli_query($con,$sql) or die("SQL Error : ".mysqli_error($con));
										
		$nor = $result->num_rows;
		
		if($nor>0){
			while($rec = mysqli_fetch_assoc($result)){
                            echo($rec["emp_title"]);
                            echo($rec["emp_name"])."<br/>";
                            echo($rec["emp_address"]);
			}
		}
		else{
			echo("Invalid employee number");
		}		
		mysqli_close($con);
	}
?>

<?php
require_once("connection.php");

if(isset($_GET["eId"])){
	$eId = $_GET["eId"];
	
	loadEmpEmail($eId);
}
	function loadEmpEmail($eId){
		$obj = new dbconnection();
		$con = $obj->getcon();
												
		$sql = "SELECT * from tbl_employee WHERE emp_id = '$eId';";
		
		$result = mysqli_query($con,$sql) or die("SQL Error : ".mysqli_error($con));
										
		$nor = $result->num_rows;
		
		if($nor>0){
			while($rec = mysqli_fetch_assoc($result)){
                            $email=$rec["emp_email"];
                            echo $email;
                                  
			}
		}
		else{
			echo("Invalid employee number");
		}		
		mysqli_close($con);
	}
?>

<?php
require_once("connection.php");

if(isset($_GET["employeeId"])){
	$employeeId = $_GET["employeeId"];
	
	loadEmpPhone($employeeId);
}
	function loadEmpPhone($employeeId){
		$obj = new dbconnection();
		$con = $obj->getcon();
												
		$sql = "SELECT * from tbl_employee WHERE emp_id = '$employeeId';";
		
		$result = mysqli_query($con,$sql) or die("SQL Error : ".mysqli_error($con));
										
		$nor = $result->num_rows;
		
		if($nor>0){
			while($rec = mysqli_fetch_assoc($result)){
                            $email=$rec["emp_mobile"];
                            echo $email;
                                  
			}
		}
		else{
			echo("Invalid employee number");
		}		
		mysqli_close($con);
	}
?>