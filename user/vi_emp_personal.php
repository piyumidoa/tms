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
    <body background="images/icons/header.jpg" onload="ajaxFunction('fw','0')";>
          <?php
          require_once ('menu.php');
          ?>

<fieldset>
    <legend>Personal Information</legend>
    <table width="100%">
    <form method="post" action="vi_emp_personal.php">
    <tr>
        <td colspan="8"><label>Enter Search Keyword</label>
            <input type="text" id="txtemp_search" name="txtemp_search" style="width: 150px; height: 30px"/>
        <input type="submit" value="Search" name="btnsearch" style="width: 80px; height: 40px; background-image:'../../..../images/icons/document.png' ; "/></td>
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


    echo "<table border='1' width='100%' id='result_table' contenteditable='false'>
    <tr>
	<th><label>Employee ID</label></th>
	<th><label>Title</label></th>
	<th><label>Employee Name</label></th>
        <th><label>Full Name</label></th>
	<th><label>Gender<label/></td>
	<th><label>Date of Birth</label></th>
	<th><label>NIC No.</label></th>
	<th><label>Marital Status</label></th>
        
    </tr>";

    while($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        $empid= $row['emp_id'];
        if($row['emp_gender'] == 0){
            $gen='Male';
        }
            else{
                $gen='Female';
            }
        if($row['emp_marit_status'] == 0){
            $mstat = 'Single';
        }
 else {
     $mstat = 'Married';
 }
        echo "<td>" . $row['emp_id'] . "</td>";
        echo "<td>" . $row['emp_title'] . "</td>";
        echo "<td>" . $row['emp_name'] . "</td>";
        echo "<td>" . $row['emp_initials'] . "</td>";
        echo "<td>" . $gen . "</td>";
        echo "<td>" . $row['emp_dob'] . "</td>";
        echo "<td>" . $row['emp_nic'] . "</td>";
        echo "<td>" . $mstat . "</td>";
        
        echo "</tr>";
    }
    echo "</table>";

    mysqli_close($con);
    ?>
</fieldset>
    <footer>
  <p align="center">&copy; All rights reserved by Kandy Municipal Council 2014</p>
</footer>
    <a href=""></a>
</body>
</html>  