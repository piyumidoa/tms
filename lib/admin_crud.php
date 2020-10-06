<?php
require_once("connection.php");
		$obj = new dbconnection();
		$con = $obj->getcon();
		
										
		$sql = "SELECT * from tbl_unit WHERE dir_div_id = '$dirid' ;";
		
		$result = mysqli_query($con,$sql) or die("SQL Error : ".mysqli_error($con));

?>