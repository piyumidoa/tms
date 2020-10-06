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
header('Location:../../index.php');
}
// Checking the time now when home page starts.
    if ($now > $_SESSION['expire']) {
            header('Location:../../logout.php');
        }
} else {
    header('Location:../../index.php');
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>   
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Employee By Department</title>
<link href="../../css/view_page.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript">
function prnt(){
	document.getElementById("divpanel").style.display='none';
	window.print();
}
</script>
</head>

<body>
<table width="100%" border="0">
<tr>
    <td colspan="2"><img src="../../images/icons/logo1.jpg"/></td>
</tr>
<tr>
    <td colspan="2" align="right"><?php echo date("l jS \of F, Y,  h:i:s A") ; ?></td>
</tr>
<tr>
    <td colspan="2" align="left"></td>
</tr>    
<?php
    require_once("../../lib/connection.php");

    $dbobj = new dbConnection();
    $con = $dbobj->getCon();

    $search_dep=@$_POST["cmbdep_search"];
    $sql1="SELECT * 
          FROM tbl_department
          WHERE dep_id like '%$search_dep%' ";
    $result1=mysqli_query($con,$sql1);
    $row = mysqli_fetch_array($result1);
    $depname= $row['dep_name'];

    $sql="SELECT * 
          FROM tbl_employee 
          WHERE dep_id like '%$search_dep%' ";
    $result=mysqli_query($con,$sql);
    echo"<th colspan='2' align='left'>Department: ".$depname."</th>";

    echo "<table border='2' width='100%' id='result_table' contenteditable='false'>
        
        <th><label>Employee ID</label></th>
	<th><label>Name</label></th>
        <th><label>NIC</label></th>
	<th><label>Post<label/></td>
	<th><label>Grade</label></th>
        <th><label>Permanent Address</label></th>
        <th><label>Date of Birth</label></th>
        <th><label>Age</label></th>
        <th><label>Marital Status</label></th>
        <th><label>Spose's Office Address</label></th>
        <th><label>No. of Children</label></th>
        <th><label>No. of School Attending Children</label></th>
	<th><label>Appoint Date</label></th>
        <th><label>Appointment Date</label></th>
        <th><label>Employee Status</label></th>
        <th><label>Preference 1</label></th>
        <th><label>Preference 2</label></th>
        <th><label>Preference 3</label></th>
       
        
</tr>";

    while($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        $empid= $row['emp_id'];
        $depid= $row['dep_id'];
        $sql5="SELECT       tbl_department.dep_id,
                    tbl_department.dep_name,
                    tbl_employee.dep_id 
                    FROM tbl_department
                    INNER JOIN tbl_employee ON tbl_department.dep_id = tbl_employee.dep_id
                    WHERE tbl_department.dep_id='$depid' ";
        $result5 = mysqli_query($con,$sql5);

        while ($res = mysqli_fetch_array($result5)) {

        $depname=$res['dep_name'];  
        }    
        echo "<td align='center'><a href='search_employee.php?id=$empid'><img src='../../images/icons/document.png' style='width: 25px; height: 25;'></a></td>";

        echo "<td>" . $row['emp_id'] . "</td>";
        echo "<td>" . $row['emp_name'] . "</td>";
        echo "<td>" . $row['emp_nic'] . "</td>";
        echo "<td>" . $row['job_id'] . "</td>";
        echo "<td>" . $row['job_grade'] . "</td>";
        echo "<td>" . $row['emp_address'] . "</td>";
        echo "<td>" . $row['emp_dob'] . "</td>";
        echo "<td>" . $row['job_grade'] . "</td>";
        echo "<td>" . $row['emp_marit_status'] . "</td>";        
        echo "<td>" . $row['emp_appoint_date'] . "</td>";
        echo "<td>" . $row['emp_status'] . "</td>";
        
        
        echo "</tr>";
    }    

    echo "</table>";
    ?>
<tr><td colspan="3" align="center"><hr /></td></tr>   
<tr><td colspan="4" align="center">
    <div id="divpanel" align="center">
<input type="button" value="Print" onclick="prnt();" style="width: 80px; height: 30px" />&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="button" value="Close" onclick="window.close();" style="width: 80px; height: 30px" />
</div></td></tr>
<tr>
<td colspan="2" align="center">
<hr />
<i></i>
</td>
</tr>
</table>
</body>
</html>