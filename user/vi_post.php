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
    <title>View Post Information | HRMS for KMC</title>
    <style>
        tr:nth-child(even) {background: #DDD}
        tr:nth-child(odd) {background: #FFF}
    </style>
    <link rel="stylesheet" type="text/css" href="../../css/menu.css"/>

</head>
<body background="../images/icons/header.jpg ">
    <?php
        require_once 'menu.php';
        echo '<br/>';
        if(isset($_GET ["msg"])){
        if($_GET ["msg"]==1){
            echo "<p style='color: #ff0000;' align='center'>Error Occured. Record update failed</p>";
        }
        else if ($_GET ["msg"]==2){
            echo "<p style='color: #00ff00;' align='center'>Record successfully Updated</p>";
        }
        else if ($_GET ["msg"]==3){
            echo "<p style='color: #00ff00;' align='center'>Record successfully Deleted</p>";
        }
        else if ($_GET ["msg"]==4){
            echo "<p style='color: #ff0000;' align='center'>Error Occured. Record delete failed</p>";
        }
        else if ($_GET ["msg"]==5){
            echo "<p style='color: #00ff00;' align='center'>Record successfully added</p>";
        }
        else if ($_GET ["msg"]==6){
            echo "<p style='color: #ff0000;' align='center'>Error Occured. Record not added</p>";
        }
        }
        ?>
    <fieldset style="">
<legend>Post Information</legend>
<table width="100%">
    <form method="post" action="vi_post.php">
    <tr>
        <td colspan="8"><label>Enter Search Keyword</label>
            <input type="text" id="txtjob_search" name="txtjob_search" style="width: 150px; height: 30px"/>
        <input type="submit" value="Search" name="btnsearch" style="width: 80px; height: 30px"/></td>
</tr>
        </form>
</table>
<?php
require_once("../lib/connection.php");

$dbobj = new dbConnection();
$con = $dbobj->getCon();

$search=@$_POST["txtjob_search"];

    $sql="SELECT tbl_job.job_id, tbl_job.job_title, tbl_job.job_desc, tbl_job.job_no_emp,
            COUNT( * ) AS noe
            FROM tbl_job
            INNER JOIN tbl_employee ON tbl_job.job_title = tbl_employee.job_id
            WHERE tbl_job.job_title LIKE  '%$search%'
                OR tbl_job.job_desc LIKE  '%$search%'
            GROUP BY tbl_job.job_title, tbl_job.job_desc;"; 

    $result= mysqli_query($con,$sql);
            
echo "<table border='1' width='100%' id='result_table' contenteditable='false'>
<tr>
	<th><label>Post Title</label></th>
	<th><label>Description</label></th>
        <th><label>No. of Employees Need</label></th>
        <th><label>No. of Employees</label></th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    $id=$row['job_id'];
  echo "<tr>";
  echo "<td>" . $row['job_title'] . "</td>";
  echo "<td>" . $row['job_desc'] . "</td>";
  echo "<td>" . $row['job_no_emp'] . "</td>";
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