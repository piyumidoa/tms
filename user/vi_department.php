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
    <style>
        tr:nth-child(even) {background: #DDD}
        tr:nth-child(odd) {background: #FFF}
    </style>
</head>
<body background="../images/icons/header.jpg ">
<?php
    require_once 'menu.php';
?>
<fieldset style="">
<legend>Department Information</legend>
<table width="100%">
        <form method="post" action="vi_department.php">
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

$search=@$_POST["txtdep_search"];

    $sql="SELECT    tbl_department.dep_id,
                    tbl_department.dep_name,
                    tbl_department.dep_head,
                    tbl_department.dep_phone,COUNT(*) AS noe
        FROM tbl_department
        INNER JOIN tbl_employee ON tbl_department.dep_id = tbl_employee.dep_id
        WHERE tbl_department.dep_id like '%$search%' 
            OR tbl_department.dep_name like '%$search%' 
            OR tbl_department.dep_head like '%$search%' 

        GROUP BY tbl_department.dep_id;"; 
            $result= mysqli_query($con,$sql);
    
   // $sql="SELECT dep_id,COUNT(*) FROM tbl_employee GROUP BY dep_id;";

echo "<table border='1' width='100%' id='result_table' contenteditable='false'>
<tr>
	<th><label>Department ID</label></th>
	<th><label>Department Name</label></th>
	<th><label>Department Head</label></th>
	<th><label>Department Phone</label></th>
        <th><label>No. of Employees</label></th>
</tr>";

while($row = mysqli_fetch_array($result)) {
    $depid=$row['dep_id'];
  echo "<tr>";
  echo "<td>" . $row['dep_id']. "</td>";
  echo "<td>" . $row['dep_name'] . "</td>";
  echo "<td>" . $row['dep_head'] . "</td>";
  echo "<td>" . $row['dep_phone'] . "</td>";
  echo "<td>" . $row['noe'] . "</td>";
  echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>
</fieldset>
<br/>
<footer>
  <p align="center">&copy; All rights reserved by Kandy Municipal Council 2014</p>
</footer>
</body>
</html>