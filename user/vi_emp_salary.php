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

    <script type="text/javascript">

    </script>
    

</head>
<body background="../images/icons/header.jpg ">
<?php
require_once 'menu.php';
?><br/>
<fieldset style="">
    <legend>Salary Information</legend>
    <table width="100%">
        <form method="post" action="vi_emp_salary.php">
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

    $sql="SELECT * FROM tbl_salary WHERE emp_id like '%$search%' OR salary_code like '%$search%' OR salary_basic like '%$search%' ";
    $result=mysqli_query($con,$sql);

    echo "<table border='1' width='100%' id='result_table' contenteditable='false'>
<tr>    
        <th><label>Employee ID</label></th>
	<th><label>Salary Code</label></th>
	<th><label>Basic Salary</label></th>
        <th><label>Increment<label/></td>
        <th><label>Special Allowance<label/></td>
        <th><label>Marital Allowance<label/></td>
        <th><label>Cost of Living<label/></td>
        <th><label>Other Allowance<label/></td>
	<th><label>EPF<label/></td>
        <th><label>W&amp;OP<label/></td>
        <th><label>Agrahara<label/></td>
        <th><label>Housing Loan<label/></td>
        <th><label>Distress Loan<label/></td>
        <th><label>Mithuru Haula<label/></td>
        <th><label>Other Benifit Association<label/></td>

        </tr>";

    while($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        $empid= $row['emp_id'];
        echo "<td>" . $row['emp_id']. "</td>";
        echo "<td>" . $row['salary_code'] . "</td>";
        echo "<td>" . $row['salary_basic'] . "</td>";
        echo "<td>" . $row['salary_inc'] . "</td>";
        echo "<td>" . $row['salary_marital'] . "</td>";
        echo "<td>" . $row['salary_spec_allow'] . "</td>";
        echo "<td>" . $row['salary_col'] . "</td>";
        echo "<td>" . $row['salary_alwother'] . "</td>";
        echo "<td>" . $row['salary_epf_cont'] . "</td>";
        echo "<td>" . $row['salary_waop'] . "</td>";
        echo "<td>" . $row['salary_agra'] . "</td>";
        echo "<td>" . $row['salary_loan_hous'] . "</td>";
        echo "<td>" . $row['salary_loan_dist'] . "</td>";
        echo "<td>" . $row['sal_mith'] . "</td>";
        echo "<td>" . $row['sal_ounion'] . "</td>";
        
        echo "</tr>";
    }
        
    echo "</table>";
    $nor = $result->num_rows;
        if($nor<=0){
            ?><p align="center"><?php echo 'No record found';?></p>
            <?php
        }

    mysqli_close($con);
    ?>
    </table>
</fieldset>
<footer>
  <p align="center">&copy; All rights reserved by Kandy Municipal Council 2014</p>
</footer>

</body>
</html>