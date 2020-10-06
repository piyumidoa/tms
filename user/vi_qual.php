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
       <title>View Qualification Information | HRMS for KMC</title>
       <link href="../../css/view_page.css" rel="stylesheet" type="text/css"/>
       <script type="text/javascript">
        var selected = $("input[name='radioid']:checked").val();
    </script>
    <link rel="stylesheet" type="text/css" href="../../css/menu.css"/>

</head>
<body background="../images/icons/header.jpg ">
    <?php
        require_once 'menu.php';
        echo "<br/>";
        ?>
<fieldset style="">
<legend>Qualification Information</legend>
<table width="96%">
    <form method="post" action="vi_qual.php">
    <tr>
        <td colspan="8"><label>Enter Search Keyword</label>
            <input type="text" id="txtqual_search" name="txtqual_search" style="width: 150px; height: 30px"/>
            <input type="submit" value="Search" name="btnsearch" style="width: 80px; height: 30px"/></td>
        <td width="10%" align="right"><a href="add_qual.php">
                <img src="../images/icons/add1.png" style="height:40px;  width:100%;"/></a></td>
    </tr>
    </form>
</table>

<?php
require_once("../lib/connection.php");

$dbobj = new dbConnection();
$con = $dbobj->getCon();

$search=@$_POST["txtqual_search"];
$sql = "SELECT * 
      FROM tbl_qual_type 
      WHERE qual_type_name like '%$search%'";
$result=mysqli_query($con,$sql);

echo "<table border='1' width='100%' contenteditable='false'>
<tr>
	<th><label>Qualification</label></th>
        <th><label>Desscription</label></th>
         <th><label>No.. of Employees</label></th>
</tr>";

while($row = mysqli_fetch_array($result)) { 
  $qid = $row['qual_type_id'];
  echo "<tr>";
  echo "<td>" . $row['qual_type_name']. "</td>";
  echo "<td>" . $row['qual_type_desc']. "</td>";
  echo "<td>" . $row['qual_type_desc']. "</td>";  
  echo "</tr>";
}
echo "</table>";
mysqli_close($con);
        ?>
</div>
</fieldset>
<br/>
<footer>
  <p align="center">&copy; All rights reserved by Kandy Municipal Council 2014</p>
</footer>

</body>
</html>