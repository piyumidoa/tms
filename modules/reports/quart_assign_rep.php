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
<title>Employees By Quarters Type | QMS for DOA</title>
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
    <td colspan="2"><img src="../../images/icons/logo1.jpg" alt=""/></td>
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

//    $search_type =@$_POST["cmbquart_type"];
    $sql="SELECT * FROM tbl_employee 
    INNER JOIN tbl_quarters_assigned ON tbl_employee.emp_id = tbl_quarters_assigned.emp_id 
    INNER JOIN tbl_dir_div ON tbl_employee.dir_div_id=tbl_dir_div.dir_div_id 
    INNER JOIN tbl_unit ON tbl_employee.unit_id=tbl_unit.unit_id 
    INNER JOIN tbl_quarters ON tbl_quarters_assigned.quarter_id=tbl_quarters.quarter_id
    INNER JOIN tbl_qualification ON tbl_employee.emp_id=tbl_qualification.emp_id
    WHERE quart_assigned =1 
    ORDER BY tbl_quarters_assigned.quart_assin_from DESC";
    $result=mysqli_query($con,$sql);
    
    echo"<th colspan='2' align='left'></th>";

    echo "<table border='2' width='100%' id='result_table' contenteditable='false'>
        
        <th><label>Employee ID</label></th>
	<th><label>Name</label></th>       
	<th><label>Post<label/></td>
	<th><label>Directorial Division</label></th>
        <th><label>Unit</label></th>
        <th><label>Quarters Assigned From</label></th>
        <th><label>Quarters Assigned To</label></th>
        
</tr>";

    while($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        
        echo "<td>" . $row['emp_id'] . "</td>";
        echo "<td>" . $row['emp_name'] . "</td>";
        echo "<td>" . $row['emp_post'] . "</td>";
        echo "<td>" . $row['dir_div_name'] . "</td>";
        echo "<td>" . $row['unit_name'] . "</td>";
        echo "<td>" . $row['quarter_address'] . "</td>";
        echo "<td>" . $row['quart_assin_from'] . "</td>";
        echo "<td>" . $row['quart_assin_to'] . "</td>";
        
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