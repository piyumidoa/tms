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
} 
else {
    header('Location:../../index.php');
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Backup The Database | TDSS for DOA</title>
        <link href="../../css/table.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" type="text/css" href="../../css/back_ground.css"/>
    </head>
    <body background="../../images/icons/header.jpg ">
        <?php
        require_once '../../lib/header.php';
        echo '<br/>';
        if(isset($_GET ["msg"])){
        if($_GET ["msg"]==1){
            echo "<p style='color: #00ff00;' align='center'>Successfully Backuped the Database!</p>"; 
        }
        else if ($_GET ["msg"]==2){
            echo "<p style='color: #ff0000;' align='center'>Error Occured.Database Backup Failed!</p>";
        }
        }
        $bdate = date("Y-m-d",time());

        ?>
        <fieldset style="margin-left: 20%; margin-right: 20%;">
            
            <legend>Backup The Database</legend>
            <form method="post" action="bkp_func.php">
<table align="center" style="width:80%;" border="0">
<tr>
	<td><label>Date</label></td>
        <td><input type="text" name="txtemp_id" value="<?php echo $bdate;?>" id="txtemp_id"/></td>
        
</tr>
<tr> <td colspan="2">&nbsp;</td></tr>
        <tr>
        <td colspan="2" align="center">
            <input type="submit" value="Backup" name="btnbackup" style="width: 80px; height: 30px;"/>
            <input type="reset" value="Clear" onclick="confirm('Do you want to clear the fields');" style="width: 80px; height: 30px;"/></td>
    </tr>
</table>
            </form>
        </fieldset>
       <div align="center">
    <a href="../../home.php"><img src="../../images/icons/images (9).jpg" width="50px" height="50px" /></a>
</div>
        <br/>
<footer>
  <p align="center">&copy; All rights reserved by Department of Agriculture</p>
</footer>
    </body>
</html>