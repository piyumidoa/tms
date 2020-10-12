<?php
require_once("connection.php");

if(isset($_GET["dir_divison"])){
	$dirid = $_GET["dir_divison"];
	
	loadSubUnits($dirid);
	
}

	function loadSubUnits($dirid){
		$obj = new dbconnection();
		$con = $obj->getcon();
		
										
		$sql = "SELECT * from tbl_unit WHERE dir_div_id = '$dirid' ;";
		
		$result = mysqli_query($con,$sql) or die("SQL Error : ".mysqli_error($con));
										
		$nor = $result->num_rows;
		echo("<select class='form-control' placeholder='' id='txt_unit' name='txt_unit' required ><option>--Select--</option>");
		if($nor>0){

			while($rec = mysqli_fetch_assoc($result)){

                echo("<option value='".$rec["unit_id"]."'>".$rec["unit_name"]."</option>");
			}     
		}			
		echo("</select>");
	
	mysqli_close($con);
	}


if(isset($_GET["dirid"])){
	$dirid = $_GET["dirid"];
	
	loadUnits($dirid);
	
}

	function loadUnits($dirid){
		$obj = new dbconnection();
		$con = $obj->getcon();
		
										
		$sql = "SELECT * from tbl_unit WHERE dir_div_id = '$dirid' ;";
		
		$result = mysqli_query($con,$sql) or die("SQL Error : ".mysqli_error($con));
										
		$nor = $result->num_rows;
		echo("<select class='form-control' placeholder='' id='txt_unit' name='txt_unit' required onchange='loadUnit(this.value,\"2\");'><option>--Select--</option>");
		if($nor>0){

			while($rec = mysqli_fetch_assoc($result)){

                echo("<option value='".$rec["unit_id"]."'>".$rec["unit_name"]."</option>");
			}     
		}			
		echo("</select>");
	
	mysqli_close($con);
	}

	// load subjects

	if(isset($_GET["training"])){
		$training = $_GET["training"];
		
		loadSubjects($training);
		
	}
	
		function loadSubjects($training) {
			$obj = new dbconnection();
			$con = $obj->getcon();
			
											
			$sql = "SELECT * from tbl_training_subject WHERE training = '$training' ;";
			
			$result = mysqli_query($con,$sql) or die("SQL Error : ".mysqli_error($con));
											
			$nor = $result->num_rows;
			echo("<select class='form-control'  id='txt_subject' name='txt_subject' ><option value=''>--Select--</option>");
			if($nor>0) {
	
				while($rec = mysqli_fetch_assoc($result)) {
	
					echo("<option value='".$rec["id"]."'>".$rec["subject"]."</option>");
				}     
			}			
			echo("</select>");		
			mysqli_close($con);
		}

		//training_requirements_table

	if(isset($_GET["training_requirements_table"])){
		$training = $_GET["training_requirements_table"];
		
		loadTrainingrequirementsTable();
		
	}
	
		function loadTrainingrequirementsTable() {
                                                
                $obj = new dbconnection();
                $con = $obj->getcon();
                $query = "SELECT * FROM `tbl_training_requirements` 
                LEFT JOIN tbl_district on tbl_district.district_id = tbl_training_requirements.district
                LEFT JOIN tbl_unit on tbl_unit.unit_id = tbl_training_requirements.unit
                LEFT JOIN tbl_post on tbl_post.post_id = tbl_training_requirements.post
                LEFT JOIN tbl_training_program on tbl_training_program.id = tbl_training_requirements.training
                LEFT JOIN tbl_training_subject on tbl_training_subject.id = tbl_training_requirements.subject";

                    $sql=$query; 
                    $result= mysqli_query($con,$sql);
                    
                while($row = mysqli_fetch_array($result)) {

              echo "<tr>";
        
              echo "<td>" . $row['district_name']. "</td>";
              echo "<td>" . $row['unit_name'] . "</td>";
              echo "<td>" . $row['post_name'] . "</td>";
              echo "<td>" . $row['training_program'] . "</td>";
              echo "<td>" . $row['subject'] . "</td>";
              echo "<td>" . $row['officer_count'] . "</td>";
              echo "<td>" . $row['time_duration'] . "</td>";
              
              echo "</tr>";
            }
            mysqli_close($con);                                            
		}

		
		if(isset($_GET["subjects_table"])){
		    $training_id = $_GET["subjects_table"];
		    
		    loadSubjectsTable($training_id);
		    
		}
		
		function loadSubjectsTable($training_id) {
		    
		    $obj = new dbconnection();
		    $con = $obj->getcon();
		    $query = "SELECT * FROM `tbl_training_subject` WHERE `training`=".$training_id;
		    
		    $sql=$query;
		    $result= mysqli_query($con,$sql);
		    
		    while($row = mysqli_fetch_array($result)) {
		        
		        echo "<tr>";		        
		        echo "<td>" . $row['id']. "</td>";
		        echo "<td>" . $row['subject'] . "</td>";
		        echo "<td> <a href='edit_training_requirements.php?subject=".$row['id']."'><img src='../../images/icons/edit.png' style='width: 25px; height: 25;'></td>";
		        echo "</tr>";
		    }
		    mysqli_close($con);
		}
		
require_once("connection.php");


if(isset($_GET["qempId"])){
	$qempId = $_GET["qempId"];
	
	loadquartAssigndetails($qempId);
	
}

	function loadquartAssigndetails($qempId){
		$obj = new dbconnection();
		$con = $obj->getcon();
		
										
		$sql = "SELECT * from tbl_qualification WHERE emp_id = '$qempId' AND quart_assigned = 1;";
		
		$result = mysqli_query($con,$sql) or die("SQL Error : ".mysqli_error($con));
										
		$nor = $result->num_rows;
		
		if($nor>0){
			while($rec = mysqli_fetch_assoc($result)){
                         echo "Already Assigned";                            
			}
           //       echo    $rec["emp_name"];  echo("already exist");           
		}			
		mysqli_close($con);
	}

require_once("connection.php");


if(isset($_GET["empId"])){
	$empId = $_GET["empId"];
	
	loadEDetails($empId);
	
}

	function loadEDetails($empId){
		$obj = new dbconnection();
		$con = $obj->getcon();
		
										
		//$sql = "SELECT * from tbl_employee WHERE emp_id = '$empId'; ";
		$sql = "SELECT * FROM tbl_employee, tbl_unit, tbl_post WHERE tbl_employee.emp_post=tbl_post.post_id and tbl_employee.unit_id=tbl_unit.unit_id AND tbl_employee.emp_id='$empId'; ";
		
		$result = mysqli_query($con,$sql) or die("SQL Error : ".mysqli_error($con));
										
		$nor = $result->num_rows;
		
		if($nor>0){
			while($rec = mysqli_fetch_assoc($result)){
                        echo    $rec["emp_title"].". ";
                        echo    $rec["emp_name"],"<br>"; 		  			
						echo    $rec["post_name"],"<br>";
                        echo    $rec["unit_name"],"<br>";
			}
           //             echo("already exist");
		}			
		mysqli_close($con);
	}


	if(isset($_GET["esid"])){
	$esid = $_GET["esid"];
	
	loadDetails($esid);
	
}
	function loadDetails($esid){

		require_once("connection.php");

		$obj = new dbconnection();
		$con = $obj->getcon();
						
		$sql = "SELECT * from tbl_employee WHERE emp_id = '$esid';";
		
		$result = mysqli_query($con,$sql) or die("SQL Error : ".mysqli_error($con));
										
		$nor = $result->num_rows;
		
		if($nor>0){
			                           
			echo("Already Applied for Quarters");
		}else {

		}			
		mysqli_close($con);
	}


if(isset($_GET["ddob"])){
	$DateObirth = $_GET["ddob"];	
	valDate($DateObirth);
}
	function valDate($DateObirth){
            $date = date("Y-m-d",time());

            $dateA = $date; 
            $dateB = $DateObirth; 
                if(strtotime($dateA) < strtotime($dateB)){ 
                    echo("Please enter past date");                               
                }        												
		else{
		}		
	}


require_once("connection.php");

if(isset($_GET["eId"])){
	$eId = $_GET["eId"];
	
	loadEmpDetails($eId);	
}
	function loadEmpDetails($eId){
		$obj = new dbconnection();
		$con = $obj->getcon();
								
		$sql = "SELECT * from tbl_children WHERE emp_id = '$eId';";
		
		$result = mysqli_query($con,$sql) or die("SQL Error : ".mysqli_error($con));
										
		$nor = $result->num_rows;
		
		if($nor>0){
			while($rec = mysqli_fetch_assoc($result)){
                            echo($rec["depen_name"]);
			}
		}
		else{
		}		
		mysqli_close($con);
	}       
        /*
if(isset($_GET["edob"])){
	$edob = $_GET["edob"];	
	valDate($edob);
}
	function valDate($edob){
           // $date = date("Y-m-d",time());

            $empdob = $edob; 
            $retireDate = strtotime($empdob). " + 1year";

                    echo($retireDate);                               
        }
*/
?>