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
<title></title>
<script type="text/javascript">
function prnt(){
	document.getElementById("divpanel").style.display='none';
	window.print();
}
</script>
</head>

<body>
  
<table width="800" border="0">
<tr>
<td><img src="../../images/icons/logo1.jpg"/></td>
</tr>

<?php

//if(isset($_GET["id"])){
//	$id = $_GET["id"];
	   
    $search=$_POST["txtempid"];
    //echo $search;            
    
    require_once("../../lib/connection.php");
    
    $dbobj = new dbConnection();
    $con = $dbobj->getCon();
	
    $sql="SELECT * FROM tbl_salary 
          JOIN tbl_employee ON tbl_salary.emp_id=tbl_salary.emp_id
          WHERE tbl_employee.emp_id = '$search'";
    $result= mysqli_query($con,$sql);
	$nor = $result->num_rows;
	//echo($nor);
    $row = mysqli_fetch_array($result); 
        
        $eid = $row['emp_id'];
        $ename = $row['emp_name'];
        $etitle=$row['emp_title'];
        $scode = $row['salary_code'];        
        $sbasic = $row['salary_basic'];
        $ssalow = $row['salary_spec_allow'];
        $scol = $row['salary_col'];
        $smart = $row['salary_marital'];
        $saoth = $row['salary_alwother'];        
        $sepf = $row['salary_epf_cont'];
        $swaop = $row['salary_waop'];       
        $sagra = $row['salary_agra'];               
        $sdist = $row['salary_loan_dist'];
        $shous = $row['salary_loan_hous'];
        $smith = $row['sal_mith'];
        $slothe = $row['salary_loan_other'];
        $souni= $row['sal_ounion'];  
        $sgrand= $sbasic+$ssalow+$scol+$smart+$saoth;
        $tdeduc=$sepf+$swaop+$sagra+$sdist+$shous+$smith+$slothe+$souni;
        $balsal=$sgrand-$tdeduc;
        
    mysqli_close($con); 
	        ?>
    <table width="80%" align="center">
        <tr>
            <td colspan="3" align="center">
                <h1 style="font-weight: bold;">Employee Salary Details</h1>
            </td>
        <tr>
            <td colspan="3" align="right">                    
                <?php echo date("l jS \of F, Y,  h:i:s A") ; ?>
            </td>
        </tr>
        <tr><td colspan="3"><hr /></td></tr>
        <tr>
            <td>Employee ID: <?php echo $eid;?></td>
            <td>Name: <?php echo $etitle.' '.$ename;?> </td>
            <td>Salary Code: <?php echo $scode;?></td>
        </tr>
        <tr><td colspan="3">&nbsp;</td></tr>    
        <tr><td colspan="3"><br/></td></tr>        

        <tr>
            <td>Basic Salary</td>
            <td> <?php echo $sbasic;?></td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>Special Allowance</td>
            <td> <?php echo $ssalow;?></td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>Marital Allowance</td>
            <td> <?php echo $smart;?></td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>Cost Of Living</td>
            <td> <?php echo $scol;?></td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>Housing Loan</td>
            <td>&nbsp;</td>
            <td> <?php echo $shous;?></td>
        </tr>
        <tr>
            <td>Distress Loan</td>
            <td>&nbsp;</td>
            <td> <?php echo $sdist;?></td>
        </tr>
        <tr>
            <td>Other Loan</td>
            <td>&nbsp;</td>
            <td> <?php echo $slothe;?></td>
        </tr>
        <tr>
            <td>Agrahara Insurance</td>
            <td>&nbsp;</td>
            <td> <?php echo $sagra;?></td>
        </tr>
        <tr>
            <td>EPF Deduction</td>
            <td>&nbsp;</td>
            <td> <?php echo $sepf;?></td>
        </tr>
        <tr>
            <td>W&amp;OP Deduction</td>
            <td>&nbsp;</td>
            <td> <?php echo $swaop;?></td>
        </tr>
        <tr>
            <td>Mithuru Haula Deduction</td>
            <td>&nbsp;</td>
            <td> <?php echo $smith;?></td>
        </tr>
        <tr>
            <td>Other Union</td>
            <td>&nbsp;</td>
            <td> <?php echo $souni;?></td>
        </tr>
        <tr>
            <td colspan="3">&nbsp;</td>            
        </tr>
        <tr>
           <td>Grand Salary </td>
           <td> <?php echo $sgrand;?></td>
           <td>&nbsp;</td>
        </tr>
        <tr>
            <td>Total Deduction</td>
            <td>&nbsp;</td>
            <td> <?php echo $tdeduc;?></td>
        </tr>
        <tr>
            <td><b>Balance Salary</b></td>
            <td><b> <?php echo $balsal;?></b></td>
            <td>&nbsp;</td>
        </tr>
    </table>           
          
<tr><td colspan="3" align="center"><hr /></td></tr>
<tr><td colspan="3" align="center">
    <div id="divpanel" align="center">
<input type="button" value="Print" onclick="prnt();" style="width: 80px; height: 30px" />&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="button" value="Close" onclick="window.close();" style="width: 80px; height: 30px" />
</div>
    </td></tr>
<tr>
<td colspan="3" align="center">
<hr />
<i></i>
</td>
</tr>
</table>
</body>
</html>