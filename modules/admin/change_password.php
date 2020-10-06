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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Change Password Information | QMS for DOA</title>
    <?php 
     
    require_once '../../lib/connection.php';
    
    $dbobj = new dbConnection();
    $con = $dbobj->getCon();

      if (count($_POST) > 0) {
    $result = mysqli_query($con, "SELECT * FROM tbl_user WHERE user_name='" . $_SESSION['id'] . "'");
    $row = mysqli_fetch_array($result);
    if (md5($_POST["currentPassword"]) == $row["user_password"]) {
        mysqli_query($con, "UPDATE tbl_user SET user_password='" . md5($_POST["newPassword"]) . "' WHERE user_name='" .$_SESSION['id']  . "'");
        $message = "<p style='color: #00ff00;''>Password Changed</p>";
    } else
        $message = "<p style='color: #ff0000;'>Current Password is not correct</p>";
    }

   // if ($message ==1)
    ?>
    <link href="../../css/activitytitle.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="../../css/menu.css"/>
    <link href="../../css/table.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="../../css/back_ground.css"/>
    <script src="../../js/confirmPassword.js" type="text/javascript"></script>
    <script src="../../js/passwordStrength.js" type="text/javascript"></script>
    <script>
    function validatePassword() {
var currentPassword,newPassword,confirmPassword,output = true;

currentPassword = document.frmChange.currentPassword;
newPassword = document.frmChange.newPassword;
confirmPassword = document.frmChange.confirmPassword;

if(!currentPassword.value) {
    currentPassword.focus();
    document.getElementById("error_password").innerHTML = "Please Type the Current Password";
    output = false;
}
else if(!newPassword.value) {
    newPassword.focus();
    document.getElementById("error_password").innerHTML = "Please Type the New Password";
    output = false;
}
else if(!confirmPassword.value) {
    confirmPassword.focus();
    document.getElementById("error_password").innerHTML = "Please Type the New Password";
    output = false;
}
else if(newPassword.value != confirmPassword.value) {
    newPassword.value="";
    confirmPassword.value="";
    newPassword.focus();
    document.getElementById("error_password").innerHTML = "New Password Not Matching";
    output = false;
}   
return output;
}
    </script>        
</head>
    <a href=""></a>
<body background="../../images/icons/header.jpg ">
    <?php
    require_once '../../lib/header.php';
    
    require_once '../../lib/connection.php';
    
    $dbobj = new dbConnection();
    $con = $dbobj->getCon();

    if(isset($_GET["id"]))
    $id = $_GET["id"];
    $sql = "SELECT * FROM tbl_user WHERE user_id='$id'";
    $result = mysqli_query($con,$sql);

while ($row = mysqli_fetch_array($result)) {

$uid = $row["user_id"];
$uname = $row["user_name"];
$upass = $row["user_password"];
$urole = $row{"user_role"};
$ustat = $row["user_status"];

}

mysqli_close($con);
    ?>
    <br/>
<fieldset style="align-content: center; width: 500px; margin-left: 25%; margin-right: 25%;">
    <legend>User Information</legend>
    
    <form name="frmChange" method="post" action="" onSubmit="return validatePassword()">
        <div style="width: 600px;">
            <span id="error_password" class="required" style="color: #ff0000;"></span><br/>
            
            <div class="message" ><?php if(isset($message)) { echo $message; } ?></div>
            <table border="0" cellpadding="10" cellspacing="0"
                width="500" align="center" class="tblSaveForm">
                <tr class="tableheader">
                    <td colspan="2">Change Password</td>
                </tr>
                <tr>
                    <td width="40%"><label>Current Password</label></td>
                    <td width="60%"><input type="password" name="currentPassword" class="txtField"  /></td>  </tr>
                        
                    
              
                <tr>
                    <td><label>New Password</label></td>
                    <td><input type="password" name="newPassword" class="txtField" />
                        </td>
                </tr>
               
                <tr>
                <td><label>Confirm Password</label></td>
                <td><input type="password" name="confirmPassword" class="txtField" />
                   </td>
                   
                </tr>
                <tr>
            <td colspan="3" align="center">
            <a href="../../home.php">
            <input type="button" value="Cancel" onclick="return confirm('Do you want to leave the page')" style="width: 80px; height: 30px;"/>
            </a>
            <input type="submit" value="Change Password" name="update" onclick="return validatefrm()" style="width: 150px; height: 30px;"/>
            <input type="reset" value="Clear" onclick="return confirm('Do you want to clear all the fields')" style="width: 80px; height: 30px;"/></td>
    </tr>
    </table>
</form>
    </fieldset>  
    <div align="center">
    <a href="../../home.php"><img src="../../images/icons/images (9).jpg" width="50px" height="50px" /></a> 
    <footer>
  <p align="center">&copy; All rights reserved by Department of Agriculture</p>
</footer>
</body>
</html>

 