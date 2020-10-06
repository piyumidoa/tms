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
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Employee Reports | </title>
        <link rel="stylesheet" type="text/css" href="../../css/back_ground.css"/>
        <link href="../../css/table.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript">
function viewrep(type){
	if(type==1){
                document.getElementById('frmemp_det').submit();
	}
        else if(type==2){
		document.getElementById('frmemp_quart_type').submit();
	}
        else if(type==3){
		document.getElementById('frmemp_quart_assign').submit();
	}
    }
</script>
    </head>   
    <body background="../../images/icons/header.jpg">
        <?php
        require_once '../../lib/header.php';
        ?>
        <fieldset style="margin-left: 15%; margin-right: 15%;">
            <legend>Employee Reports</legend>
            <table width="100%" align="center">
                <tr>
                <form method="post" action="emp_det_rep.php" name="frmemp_det" id="frmemp_det" target="_blank">
                    <td>Employee Detail Report</td>
                    <td><label>Employee ID</label>
                        <input type="text" id="txtempid" name="txtempid"/>
                        <input type="submit" value="Generate" onclick="viewrep(1);" style="width: 80px; height: 30px;"/>
                    </td>
                </form>
                </tr>
                <tr>                   
                        <td>Employee Listed By Type</td>
                        <td>
                            <form method="post" action="quart_type_report.php" name="frmemp_quart_type" id="frmemp_quart_type" target="_blank">
        <select name="cmbquart_type" id="cmbquart_type" style="height: 30px;" placeholder="--Select--">
	
        <option value="1">Staff Grade</option>
        <option value="2">Clerical</option>
        <option value="3">Primary</option>
    </select>       <input type="button" value="Generate" style="width: 80px; height: 30px;" onclick="viewrep(2);"/>
                        </td>
                        </form>
                    </tr>  
                    <tr>                   
                        <td>Assigned Quarters</td>
                        <td>
                            <form method="post" action="quart_assign_rep.php" name="frmemp_quart_assign" id="frmemp_quart_assign" target="_blank">      
                                <input type="button" value="Generate" style="width: 80px; height: 30px;" onclick="viewrep(3);"/>
                        </td>
                        </form>
                    </tr>  
                    
            </table>
        </fieldset> 
        <div align="center">
    <a href="../../home.php"><img src="../../images/icons/images (9).jpg" width="50px" height="50px" /></a>
</div>
    <footer>
      <p align="center">&copy; All rights reserved by Department of Agriculture</p>
    </footer>

    </body>
</html>