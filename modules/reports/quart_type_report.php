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

    $search_type =@$_POST["cmbquart_type"];

    if ($search_type==1){

        $stype="Staff Grade";
    }
    else if ($search_type == 2){
        $stype="Clerical";
    }
    else {
        $stype="Primary";
    }

    $sql="SELECT * 
          FROM tbl_employee 
          INNER JOIN tbl_qualification ON tbl_employee.emp_id = tbl_qualification.emp_id
          WHERE quart_type = '$search_type' 
          AND quart_assigned =0 
          ORDER BY tbl_qualification.total_marks DESC ";
    $result=mysqli_query($con,$sql);
    
    echo"<th colspan='2' align='left'>Type of Quarters: ".$stype."</th>";

    echo "<table border='2' width='100%' id='result_table' contenteditable='false'>
        
        <th><label>Employee ID</label></th>
	<th><label>Name</label></th>       
	<th><label>Listed Date<label/></td>
	<th><label>Distance</label></th>
        <th><label>Points for Distance</label></th>
        <th><label>No. of Children</label></th>
        <th><label>Points for Children</label></th>
        <th><label>No. of Differently Abled Children</label></th>
        <th><label>Points for Differently Abled Children</label></th>
        <th><label>Points for residing for Rent</label></th>
        <th><label>Points for Diofficult to walk</label></th>
        <th><label>Points for No residence for spouse</label></th>
        <th><label>Points for Service Requirement</label></th>
        <th><label>Points for Listed Period<label><th>
        <th><label>Total Marks</label></th>
</tr>";

    while($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        
        $cdate = date('Y-m-d', time());
        
        $adate=($row['added_date']); 

        $diff = abs(strtotime($cdate) - strtotime($adate));

        $years = floor($diff / (365*60*60*24));
        $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));

        $ymonths = $years*12;
        $pmonths = $ymonths+$months;
        
        $periodmarks = $pmonths*5;

        $total_marks=$row['total_marks'];
        $ctotal= $total_marks+$periodmarks;
        
        echo "<td>" . $row['emp_id'] . "</td>";
        echo "<td>" . $row['emp_name'] . "</td>";
        echo "<td>" . $row['added_date'] . "</td>";
        echo "<td>" . $row['distance_km'] . "</td>";
        echo "<td>" . $row['distance_marks'] . "</td>";
        echo "<td>" . $row['no_child'] . "</td>";
        echo "<td>" . $row['no_child_marks'] . "</td>";
        echo "<td>" . $row['no_dischild'] . "</td>";
        echo "<td>" . $row['no_dischild_marks'] . "</td>";
        echo "<td>" . $row['rent_resi_marks'] . "</td>";
        echo "<td>" . $row['dif_walk'] . "</td>";  
        echo "<td>" . $row['no_work_spouse'] . "</td>";  
        echo "<td>" . $row['serv_req'] . "</td>";  
        echo "<td>" .$periodmarks. "</td>";
        echo "<td>" .$ctotal. "</td>";  
        
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