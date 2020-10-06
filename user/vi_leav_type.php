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
    
    <style type="text/css">
        tr:nth-child(even) {background: #DDD}
        tr:nth-child(odd) {background: #FFF}

    </style>

</head>
    <body background="../images/icons/header.jpg">
          <?php
          require_once ('menu.php');
          ?><br/>
<fieldset style="">
    <legend>Leave Rule</legend>
    <table width="100%">
        <form method="post" action="vi_leav_type.php">
    <tr>
        <td colspan="8"><label>Enter Search Keyword</label>
            <input type="text" id="txtdep_search" name="txtdep_search" style="width: 150px; height: 30px"/>
        <input type="submit" value="Search" name="btnsearch" style="width: 80px; height: 30px"/></td>
           </tr>
        </form>
</table>
   
    <?php
    require_once("../lib/connection.php");

    $dbobj = new dbConnection();
    $con = $dbobj->getCon();

    $search=@$_POST["txtemp_search"];
    
    $sql="SELECT * 
        FROM tbl_leav_type
        JOIN tbl_employee ON tbl_leav_type.emp_id = tbl_employee.emp_id
WHERE tbl_employee.emp_initials like '%$search%' OR tbl_employee.emp_name like '%$search%' OR tbl_employee.emp_id like '%$search%' OR tbl_employee.emp_nic like '%$search%' ";
    $result=mysqli_query($con,$sql);

    echo "<table border='1' width='100%' id='result_table' contenteditable='false'>
<tr>
	<th><label>Employee ID</label></th>
	<th><label>Name</label></th>
	<th><label>Casual</label></th>
	<th><label>Sick</label></th>
	<th><label>Maternity<label/></td>
        <th><label>Other<label/></td>
</tr>";    
    while($row = mysqli_fetch_array($result)) {
        $empid = $row['emp_id'];
        echo "<tr>";
        echo "<td>" . $row['emp_id']. "</td>";
        echo "<td>" . $row['emp_name'] . "</td>";
        echo "<td>" . $row['leave_type_casual'] . "</td>";
        echo "<td>" . $row['leave_type_sick'] . "</td>";    
        echo "<td>" . $row['leave_type_maternity'] . "</td>";
        echo "<td>" . $row['leave_type_other'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";

    mysqli_close($con);
    ?>
</table>
</fieldset>
    <a href=""></a>
    <a href=""></a>
<footer>
  <p align="center">&copy; All rights reserved by Kandy Municipal Council 2014</p>
</footer>

    </body>
</html>