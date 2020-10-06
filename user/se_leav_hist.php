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
    <script type="text/javascript">

    </script>
    <link rel="stylesheet" type="text/css" href="css/menu.css">

</head>
<body background="../images/icons/header.jpg ">
    <?php
    require_once 'menu.php';
    ?>

<fieldset style="">
    <legend>Approved Leave</legend>
    <table width="100%">
        <form method="post" action="se_leav_hist.php">
    <tr>
        <td colspan="8"><label>Enter Search Keyword</label>
            <input type="text" id="txtemp_search" name="txtemp_search" style="width: 150px; height: 30px"/>
            <input type="text" id="txtemp_search" name="txtemp_search" style="width: 150px; height: 30px"/>
            <input type="text" id="txtemp_search" name="txtemp_search" style="width: 150px; height: 30px"/>
        <input type="submit" value="Search" name="btnsearch" style="width: 80px; height: 30px"/></td>
    </tr>
    </form>
</table>   
    <?php
    require_once("../lib/connection.php");

    $dbobj = new dbConnection();
    $con = $dbobj->getCon();
    
    $search=@$_POST["txtemp_search"];
    
    $result = mysqli_query($con,"SELECT * FROM tbl_apply_leave 
            JOIN tbl_employee ON tbl_apply_leave.emp_id=tbl_employee.emp_id 
            WHERE 
            (emp_name like '%$search%' 
            OR tbl_employee.emp_id like '%$search%' 
            OR emp_nic like '%$search%' OR leave_from like '%$search%' 
            OR leave_to like '%$search%' OR apply_date like '%$search%'
            OR tbl_employee.emp_id like '%$search%')
            AND leave_approve = '1'");

    echo "<table border='1' width='100%' id='result_table' contenteditable='false'>
<tr>

	<th><label>Employee ID</label></th>
	<th><label>Employee Name</label></th>
	<th><label>Department</label></th>
	<th><label>Applied Date</label></th>
	<th><label>Leave Type<label/></td>
        <th><label>From<label/></td>
        <th><label>To<label/></td>
        <th><label>No. of Days<label/></td>
        <th><label>Approved By<label/></td>
</tr>";

    while($row = mysqli_fetch_array($result)) {
        if($row['leave_approve']=="1"){
        $lapprove = "<div style='color: #00ff00; font-size: larger;'>Approved </div>";
    }
        else{
        $lapprove = "";
        }
        echo "<tr>";
        
        echo "<td>" . $row['emp_id']. "</td>";
        echo "<td>" . $row['emp_name']. "</td>";
        echo "<td>" . $row['dep_id'] . "</td>";
        echo "<td>" . $row['apply_date'] . "</td>";
        echo "<td>" . $row['leave_type']. "</td>";
        echo "<td>" . $row['leave_from'] . "</td>";
        echo "<td>" . $row['leave_to'] . "</td>";
        echo "<td>" . $row['leave_days']. "</td>";
        echo "<td>" . $row['leav_approv_by']. "</td>";
          echo "</tr>";
    }

    echo "</table>";

    mysqli_close($con);
    ?>
</fieldset>
<footer>
  <p align="center">&copy; All rights reserved by Kandy Municipal Council 2014</p>
</footer>   
</body>
</html>