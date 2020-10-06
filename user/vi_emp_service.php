<?php
session_start();
ob_start();
if(isset($_SESSION['username']) || isset($_SESSION['password'])){
$navbar = "1";
$logindisplay = "0";
$username = $_SESSION['id'];
$password = $_SESSION['password'];
$now = time();
$authed = isset($username, $password);
if( $authed == "0" ){
    header('Location:../index.php');
}
// Checking the time now when home page starts.
if ($now > $_SESSION['expire']) {
    header('Location:../logout.php');
        }
} 
else {
    header('Location:../index.php');
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <link rel="stylesheet" type="text/css" href="css/menu.css"/>
    <style type="text/css">
        tr:nth-child(even) {background: #DDD}
        tr:nth-child(odd) {background: #FFF}
    </style>

</head>
    <body background="../images/icons/header.jpg">
          <?php
          require_once 'menu.php';
          ?>
    <fieldset style="">
    <legend>Service Information</legend>
    <table width="100%">
        <form method="post" action="vi_emp_service.php">
            <tr><td><label style="">View By</label></td>
        <td><input type="text" id="txtdep_search" name="txtdep_search" style="width: 150px; height: 30px"/>
            <label>Department</label></td>
        <td><input type="text" id="txtemp_stat_search" name="txtemp_stat_search" style="width: 150px; height: 30px"/>
            <label>Employee Status</label>
            <input type="submit" value="Search" name="btnsearch" style="width: 80px; height: 30px"/>
        </td>
   </tr>
    </form>
</table>
    <?php
    require_once("../lib/connection.php");

    $dbobj = new dbConnection();
    $con = $dbobj->getCon();

    $search_dep=@$_POST["txtdep_search"];
    $search_stat=@$_POST["txtemp_stat_search"];

    $sql="SELECT * FROM tbl_employee where dep_id like '%$search_dep%' AND emp_status like '%$search_stat%'";
    $result=mysqli_query($con,$sql);

    echo "<table border='2' width='100%' id='result_table' contenteditable='false'>
<tr>
        <th><label>Employee ID</label></th>
	<th><label>Name</label></th>
	<th><label>Post<label/></td>
	<th><label>Department</label></th>
	<th><label>Grade</label></th>
	<th><label>Appoint Status</label></th>
        <th><label>Appointment Date</label></th>
        <th><label>Employee Status</label></th>
        <th><label>Status Date</label></th>
        <th><label>Increment Date</label></th>
        <th><label>EPF No.</label></th>
        <th><label>WAOP No.</label></th>
        <th><label>Personal File No.</label></th>
        
</tr>";

    while($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        $empid= $row['emp_id'];
        echo "<td>" . $row['emp_id'] . "</td>";
        echo "<td>" . $row['emp_name'] . "</td>";
        echo "<td>" . $row['job_id'] . "</td>";
        echo "<td>" . $row['dep_id'] . "</td>";
        echo "<td>" . $row['job_grade'] . "</td>";
        echo "<td>" . $row['emp_appoint_status'] . "</td>";
        echo "<td>" . $row['emp_appoint_date'] . "</td>";
        echo "<td>" . $row['emp_status'] . "</td>";
        echo "<td>" . $row['emp_status_date'] . "</td>";
        echo "<td>" . $row['emp_inc_date'] . "</td>";
        echo "<td>" . $row['emp_epf_no'] . "</td>";
        echo "<td>" . $row['emp_waop_no'] . "</td>";
        echo "<td>" . $row['emp_pfno'] . "</td>";
        
        echo "</tr>";
    }    

    echo "</table>";
    $nor = $result->num_rows;
        if($nor<=0){
            ?><p align="center"><?php echo 'No record found';?></p>
            <?php
        }
    

    mysqli_close($con);
    ?>
</fieldset>
<br/>
<footer>
  <p align="center">&copy; All rights reserved by Kandy Municipal Council 2014</p>
</footer>
</body>
</html>