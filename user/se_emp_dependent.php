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
    <link rel="stylesheet" type="text/css" href="../../../css/menu.css"/>
    <style>
        tr:nth-child(even) {background: #DDD}
        tr:nth-child(odd) {background: #FFF}
    </style>

</head>
<body background="../images/icons/header.jpg ">

<?php
require_once 'menu.php';
?>
    <br/>
  <fieldset>
        <legend>Dependant Information</legend>
    <table>
    <form method="post" action="se_emp_dependant.php">
        
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

    $sql="SELECT * 
          FROM tbl_dependant 
          WHERE depen_name like '$search' 
            OR emp_id like '%$search%'
            OR relation_name like '%$search%'
            OR depen_dob like '%$search%'
            OR depen_id like '%$search%'";
    $result=mysqli_query($con,$sql);

    $nor = $result->num_rows;
        if($nor>0){            
    echo "<table border='1' width='100%' contenteditable='false'>
<tr>
        <th><label>Employee ID</label></th>
        <th><label>Dependent Name</label></th>
	<th><label>Relationship</label></th>
	<th><label>Date of Birth</label></th>
        <th><label>Gender</label></th>
</tr>";

    while($row = mysqli_fetch_array($result)) {
       
        $did= $row['depen_id'];
        if($row['depen_gender'] == 0){
            $gen='Male';
        }
            else{
                $gen='Female';
            }
        echo "<tr>";   
        echo "<td>" . $row['emp_id']. "</td>";
        echo "<td>" . $row['depen_name']. "</td>";
        echo "<td>" . $row['relation_name'] . "</td>";
        echo "<td>" . $row['depen_dob'] . "</td>";
        echo "<td>" . $gen . "</td>";
        echo "</tr>";
     }
    echo "</table>";
        }
 //else {
 //    echo'<p align="center">No record found</p>';          
 //       }
    mysqli_close($con);
    ?>
</fieldset>
<footer>
  <p align="center">&copy; All rights reserved by Kandy Municipal Council 2014</p>
</footer>
</body>
</html>    