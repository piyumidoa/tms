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
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Compose Letter | HRMS for KMC</title> 
<script type="text/javascript">
    function prnt(){
	document.getElementById("divpanel").style.display='none';
	window.print();
}
</script>
</head>
 <body>
     <?php
        $eid = $_POST['txtemp_id'];
        $ename = $_POST['txtemp_name'];
        $cdate = $_POST['txt_date'];
        $etopic = $_POST['txt_topic'];
        $emsg = $_POST['txtmsg'];      
     ?>
        <table  style="width:90%;" border="0" align="center">
    <tr>
        <td><label><img src="../images/icons/logo1.jpg"</label></td>
    </tr> 
    <tr>
        <td><label><?php echo $eid;?></label></td>
    </tr>   
    <tr>
        <td><label><?php echo $ename;?></label></td>
    </tr>
    <tr>
        <td><label><?php echo $cdate;?></label></td>
    </tr>   
    <tr>
        <td align="center"><br/></td>
    </tr>        
    <tr>
        <td align="center"><label><h2><u><?php echo $etopic;?></u></h2></label></td>
    </tr>        
    <tr>
        <td><label><p align="justify"><?php echo $emsg;?></p></label></td>
    </tr>
    <tr>   
        <td colspan="2" align="center"><div id="divpanel" align="center">
<input type="button" value="Print" onclick="prnt();" style="width: 80px; height: 30px" />&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="button" value="Close" onclick="window.close();" style="width: 80px; height: 30px" />
</div></td>
    </tr>
    </table>
</body>
</html>