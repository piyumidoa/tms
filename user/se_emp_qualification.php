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
</head>
<body background="../images/icons/header.jpg ">
    <?php
    require_once 'menu.php';
    ?>
    <br/>
    <fieldset>
        <legend>Qualification Information</legend>
    <table>
        <form method="post" action="se_emp_qualification.php">
        
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
    
 //   if(isset($_POST["btnsearch"])){
        $search=@$_POST["txtemp_search"];
    
    $sql="SELECT * 
           FROM tbl_qualification 
            WHERE emp_id like '$search'
              OR qual_name like '%$search%'
              OR qual_lang like '%$search%'
              OR qual_date like '%$search%'
              OR qual_desc like '%$search%'";
    $result=mysqli_query($con,$sql);

    $nor = $result->num_rows;
        if($nor>0){
            
    echo "<table border='1' width='100%' contenteditable='false'>
<tr>
        <th><label>Employee ID</label></th>
        <th><label>Qualification</label></th>
	<th><label>Language</label></th>
	<th><label>Date</label></th>
        <th><label>Description</label></th>
</tr>";

    while($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        $qid= $row['qual_id'];
        echo "<td>" . $row['emp_id']. "</td>";
        echo "<td>" . $row['qual_name']. "</td>";
        echo "<td>" . $row['qual_lang'] . "</td>";
        echo "<td>" . $row['qual_date'] . "</td>";
        echo "<td>" . $row['qual_desc'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
        }
// else {
  //   echo'<p align="center">No record found</p>';
// }     
 //      }
    mysqli_close($con);
    ?>
</fieldset>
<footer>
  <p align="center">&copy; All rights reserved by Kandy Municipal Council 2014</p>
</footer>
</body>
</html>    