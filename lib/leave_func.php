<?php
require_once("connection.php");


if(isset($_GET["empId"])){
	$empId = $_GET["empId"];
	
	loadEmpDetails($empId);
	
}

	function loadEmpDetails($empId){
		$obj = new dbconnection();
		$con = $obj->getcon();
		
		//								
		$sql = "SELECT * from tbl_employee WHERE emp_id = '$empId' AND emp_status='Employed';";
		
		$result = mysqli_query($con,$sql) or die("SQL Error : ".mysqli_error($con));
										
		$nor = $result->num_rows;
		
		if($nor>0){
			while($rec = mysqli_fetch_assoc($result)){
                            echo($rec["emp_title"]);
                            echo($rec["emp_name"]);                               
			}
		}
		else{
			echo("Invalid employee ID");
		}		
		mysqli_close($con);
	}
?>
<?php
if(isset($_GET["leavDate"])){
	$leavDate = $_GET["leavDate"];	
	valDate($leavDate);
}
	function valDate($leavDate){
            $date = date("Y-m-d",time());

            $dateA = $date; 
            $dateB = $leavDate; 
                if(strtotime($dateA) > strtotime($dateB)){ 
                    echo("Please enter future date");                               
                }        												
		else{
                  //  echo("correct");
		}		
	}
?>