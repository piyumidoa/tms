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
<legend>Holiday Information</legend>
<table width="96%">
    <form method="post" action="vi_leav_holy.php">
    <tr>
        <td colspan="8"><label>Enter Search Keyword</label>
            <input type="text" id="txtsearch" name="txtsearch" style="width: 150px; height: 30px"/>
            <input type="submit" value="Search" name="btnsearch" style="width: 80px; height: 30px"/></td>
 </tr>
    </form>
</table>
<?php
require_once("../lib/connection.php");

$dbobj = new dbConnection();
$con = $dbobj->getCon();

$search=@$_POST["txtsearch"];

$sql="SELECT * FROM tbl_holiday WHERE holy_date like '%$search%'
       OR holy_desc like '%$search%' ";
$result=mysqli_query($con,$sql);

//$result = mysqli_query($con,"SELECT * FROM tbl_user WHERE emp_id = %$search% OR user_name = $search OR user_id = $search");

echo "<table border='1' width='100%' contenteditable='false'>
<tr>
	<th><label>Date</label></th>
	<th><label>Holiday Description</label></th>
</tr>";

while($row = mysqli_fetch_array($result)) {
  $hid = $row['holy_id'];
  echo "<tr>";
  echo "<td>" . $row['holy_date']. "</td>";
  echo "<td>" . $row['holy_desc'] . "</td>";
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