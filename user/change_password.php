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
    <title>Change Password Information | HRMS for KMC</title>
    <link href="../css/activitytitle.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="../css/menu.css"/>
    <link href="../css/table.css" rel="stylesheet" type="text/css"/>
    <script src="../js/confirmPassword.js" type="text/javascript"></script>
    <script src="../js/passwordStrength.js" type="text/javascript"></script>
    <script>
    function validatefrm(){
		var cpass = document.getElementById('txtusr_confpass').innerHTML;
                var confrm = document.getElementById('confirmMessage').innerHTML;
            //    var strnth = document.getElementById('strength').innerHTML;
                //alert(strnth);

                if(confrm !== 'Passwords Match!'){
                        document.getElementById("error").innerHTML = "Password do not match";
                        document.getElementById("txtcon_pass").focus();
                        return false;
                }
		else if(cpass !== 'Passwords Match!'){
			document.getElementById('error').innerHTML = "Please enter the Title";
			document.getElementById('txtemp_title').focus();
			return false;
		}               
            }      
            //loading emp details
	function loaddata(cPass){
	// alert(cPass);
		if(cPass=="")
		return;
		
		var xmlhttp;
		if (window.XMLHttpRequest)
		  {// code for IE7+, Firefox, Chrome, Opera, Safari
		  xmlhttp=new XMLHttpRequest();
		  }
		else
		  {// code for IE6, IE5
		  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		  }
		xmlhttp.onreadystatechange=function()
		  {
		  if (xmlhttp.readyState==4 && xmlhttp.status==200)
			{
				//alert(xmlhttp.responseText);
				document.getElementById("txt_hspass").value = xmlhttp.responseText;
                        }
		  }
		  var url;
			url = "../lib/admin_func.php?cPass="+cPass;
			
		xmlhttp.open("GET",url,true);
		xmlhttp.send();
            }      
    function checkPasss(){
         //Store the password field objects into variables ...
    var pass = document.getElementById('hpass');
    var conpass = document.getElementById('txt_hspass'); 
    var typpass = document.getElementById('txtexist_pass');   
//    alert(conpass.value);

    var message = document.getElementById('txtusr_confpass');
    //Set the colors we will be using ...
    var goodColor = "#66cc66";
    var badColor = "#ff5555";
    //Compare the values in the password field 
    //and the confirmation field
    if(pass.value == conpass.value){
        //The passwords match. 
        //Set the color to the good color and inform
        //the user that they have entered the correct password 
        typpass.style.backgroundColor = goodColor;
        message.style.color = goodColor;
        message.innerHTML = "Passwords Match!"
    }else{
        //The passwords do not match.
        //Set the color to the bad color and
        //notify the user.
        typpass.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = "Password Incorrect"
        conpass.focus();
	return false;
    }
}
    </script>        
</head>
    <a href=""></a>
<body background="../images/icons/header.jpg ">
    <?php
    require_once 'menu.php';
    
    require_once '../lib/connection.php';
    
    $dbobj = new dbConnection();
    $con = $dbobj->getCon();

    if(isset($_GET["id"]))
    $id = $_GET["id"];
    $sql = "SELECT * FROM tbl_user WHERE emp_id='$id'";
    $result = mysqli_query($con,$sql);

while ($row = mysqli_fetch_array($result)) {

$uid = $row["user_id"];
$uname = $row["user_name"];
$upass = $row["user_password"];
$urole = $row{"user_role"};
$ustat = $row["user_status"];
$empid = $row["emp_id"];
}
mysqli_close($con);
    ?><br/>
<fieldset style="margin-left:15%; margin-right: 15%;">
    <legend>User Information</legend>
    
    <form name="frmchange_pass" method="POST" action="change_password.php">
        <table style="width:90%;" align="center" border="0">
            <tr><td class="acttitle" colspan="2">Change Password</td></tr>
        <div id="error" style="color:#C00;" align="center"></div>
        <input type="hidden" name="hid" id="hid" value="<?php echo $id;?>" />
        <input type="hidden" name="hpass" id="hpass" value="<?php echo $upass;?>"/>
<tr>
	<td><label>Employee ID</label></td>
        <td><input type="text" name="txtemp_id" value="<?php echo $empid;?>" id="txtemp_id" readonly/></td>       
</tr>
<tr>
	<td><label>Username</label></td>
        <td><input type="text" name="txtusr_name" value="<?php echo $uname;?>" id="txtusr_name" readonly/></td>
</tr>
<tr>
	<td><label>Current Password</label></td>
        <td><input type="password" name="txtexist_pass" id="txtexist_pass" onmouseout ="loaddata(this.value)" />
            <input type="text" name="txt_hspass" id="txt_hspass" onmousemove ="checkPasss();" style="background: #C4DDFF;color: #C4DDFF; border: none; width: 10px;"  readonly/>
            <span name="txtusr_confpass" id="txtusr_confpass"></span>
        </td>
</tr>  
<tr>
	<td><label>New Password</label></td>
        <td><input type="password" name="txtusr_pass" value="" id="txtusr_pass" onkeyup="CheckPasswordStrength(this.value);" />
        <span id="strength"></span>
        </td>
	</tr>
<tr>
	<td><label>Confirm Password</label></td>
        <td colspan="3"><input type="password" name="txtcon_pass" id="txtconf_pass" onkeyup="checkPass(); return false;"/>
        <span id="confirmMessage" class="confirmMessage"></span>
        </td>
</tr>
        <tr> <td colspan="3">&nbsp;</td></tr>
        <tr>
        <td colspan="3" align="center">
            <a href="vi_sys_user.php">
            <input type="button" value="Cancel" onclick="return confirm('Do you want to leave the page')" style="width: 80px; height: 30px;"/>
            </a>
            <input type="submit" value="Change Password" name="update" onclick="return validatefrm()" style="width: 150px; height: 30px;"/>
            <input type="reset" value="Clear" onclick="return confirm('Do you want to clear all the fields')" style="width: 80px; height: 30px;"/></td>
    </tr>
    </table>
</form>
    </fieldset>   
    <footer>
  <p align="center">&copy; All rights reserved by Kandy Municipal Council 2014</p>
</footer>
</body>
</html>

<?php
if (isset($_POST["update"])){
    
require_once'../lib/connection.php';

$dbobj = new dbConnection();
$con = $dbobj->getCon();

$uid = $_POST["hid"];
$usrpas = $_POST["txtusr_pass"];
$usrpass = md5($usrpas);

$sql2 = "UPDATE tbl_user SET user_password = '$usrpass' WHERE user_id = '$uid'" ;

//Execute SQL Statement and store results as a recordset
$query_result = mysqli_query($con,$sql2);

mysql_close($con);

//Verify that the record is updated

if ($query_result>0) {
        header("Location:../../home.php?msg=1");        
    }
else {
        header("Location:../../home.php?msg=2");                
    }
}
?>