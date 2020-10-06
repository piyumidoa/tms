<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>   
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title></title>
<script type="text/javascript">
function prnt(){
	document.getElementById("divpanel").style.display='none';
	window.print();
}
</script>
</head>

<body>
    <?php
    $search=$_POST["txt_empid"];
    
    require_once("../../lib/connection.php");    
    $dbobj = new dbConnection();
    $con = $dbobj->getCon();
    
 $sql=" SELECT * , SUM( leave_days)AS used_leav ,Year(leave_to)AS lyear
        FROM  tbl_apply_leave
        INNER JOIN tbl_employee ON tbl_apply_leave.emp_id=tbl_employee.emp_id 
        WHERE tbl_apply_leave.emp_id ='$search'
        AND leave_type =  'Sick'
        AND leave_approve=1
        GROUP BY Year(leave_to)
        LIMIT 0 , 30";

 $result= mysqli_query($con,$sql)or die();
 $nor = $result->num_rows;
 if($nor>0){
 while($row = mysqli_fetch_array($result)) {
 $empid= $row['emp_id'];
 $ename=$row['emp_name'];
 $lyear=$row['lyear'];
 $usedleav = $row['used_leav'] ;  
     }
      
$sql1="SELECT * FROM `tbl_leav_type` WHERE emp_id='$empid'";
$result1= mysqli_query($con,$sql1)or die();
$nor1 = $result1->num_rows;
if($nor1>0){
while($row = mysqli_fetch_array($result1)) {
$tleavdays = $row['leave_type_sick'];
$leavbal= ($tleavdays-$usedleav);              

}

    ?>
    <table width="600" border="0" align="center">
<tr>
<td colspan="4" align="center"><img src="../../images/icons/logo1.jpg"/></td>
</tr>
<tr>
    <td colspan="4" align="center"><h1 style="font-weight: bold;">Leave History</h1></td>
</tr>
<tr><td colspan="4">  <br/></td></tr>        
<tr>  
    <td>Employee ID :<?php echo(' '.$empid);?></td>   
    <td>Employee ID :<?php echo(' '.$ename);?></td>           
    <td colspan="2" align="right"><?php echo date("l jS \of F, Y,  h:i:s A") ; ?></td>
</tr>
<tr><td colspan="4"><hr /></td></tr> 
<tr><td colspan="4"><br/></td></tr>        
<tr>       
    <th><label>Year</label></th>
    <th><label>Total Leave</label></th>
    <th><label>Used Leaves</label></th>
    <th><label>Balance Leave</label></th>
</tr>
       <?php 
  echo "<tr>" ;
  echo "<td align='center'>" . $lyear . "</td>"; 
  echo "<td align='center'>" . $tleavdays . "</td>";
  echo "<td align='center'>" . $usedleav . "</td>";
  echo "<td align='center'>" . $leavbal . "</td>";
  echo "</tr>";

echo "</table>";

mysqli_close($con);
}
 else {
    echo 'No Leaves for the employee';
}
 }
?>
<tr><td colspan="4">  <br/></td></tr>        
<tr><td colspan="4"><hr /></td></tr>
<tr><td colspan="4" align="center">
    <div id="divpanel" align="center">
<input type="button" value="Print" onclick="prnt();" style="width: 80px; height: 30px" />&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="button" value="Close" onclick="window.close();" style="width: 80px; height: 30px" />
</div></td></tr>
</table>
</body>
</html>