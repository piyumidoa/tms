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
       <title>View Contact Information of Employee | HRMS for KMC</title>
    <style type="text/css">
        tr:nth-child(even) {background: #DDD}
        tr:nth-child(odd) {background: #FFF}

    </style>
    <link rel="stylesheet" type="text/css" href="../css/menu.css"/>

</head>
<body background="../images/icons/header.jpg ">
    <?php
    require_once 'menu.php';
    ?>

<fieldset style="" >
    <legend>Contact Information</legend>
    <table>
        <form method="post" action="vi_emp_contact.php">
    <tr>
        <td colspan="8"><label>Enter Search Keyword</label>
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

    $sql="SELECT * FROM tbl_employee where emp_initials like '%$search%' OR emp_name like '%$search%' OR emp_id like '%$search%' OR emp_nic like '%$search%' ";
    $result=mysqli_query($con,$sql);


    echo "<table border='1' id='result_table' width='100%' contenteditable='false'>
<tr>
	<th><label>Employee ID</label></th>
        <th><label>Employee Name</label></th>
	<th><label>Address</label></th>
	<th><label>Home Phone</label></th>
	<th><label>Mobile</label></th>
	<th><label>Email<label/></td>
</tr>";

    while($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        $empid= $row['emp_id'];
        echo "<td>" . $row['emp_id']. "</td>";
        echo "<td>" . $row['emp_name']. "</td>";
        echo "<td>" . $row['emp_address'] . "</td>";
        echo "<td>" . $row['emp_home_phone'] . "</td>";
        echo "<td>" . $row['emp_mobile'] . "</td>";
        echo "<td>" . $row['emp_email'] . "</td>";
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