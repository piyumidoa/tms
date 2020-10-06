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

require_once '../../lib/connection.php';
    
$dbobj = new dbConnection();
$con = $dbobj->getCon();

$sql1="SELECT       *                                           
                    FROM tbl_user                     
                    WHERE user_name='$username' ";

$result = mysqli_query($con,$sql1);

while ($row = mysqli_fetch_array($result)) {

        $empid=$row['user_id'];                               
        $usrole=$row['user_role'];
        
}
mysqli_close($con);
?>
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
<Doctype html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Register Employee | TMS for DOA</title>        
        <?php   require_once '../../inc/menu_main.php'; 
                require_once '../../inc/header_main.php';?>   
        <script>
    function validatePassword() {
 //       var output = true;
        var newPass = document.getElementById('newPassword').value;
 //       var currentPassword = document.getElementById.('currentPassword').value;
        var confirmPass = document.getElementById.('confPassword').value;
        alert (newPass);
        alert (confirmPass);
   //     if(newPassword != confirmPassword) {
    //        newPassword.value="";
     //       confirmPassword.value="";
      //      newPassword.focus();
       //     document.getElementById("error_password").innerHTML = "New Password Not Matching";
         //   output = false;
        }   
//return output;
//}
        </script>        
    </head>
    <body>
        <div class="container-fluid">               
            <div class="row"> 
                <div class="container-fluid">               
                    <div class="row"> 

                        <div class="col-md-16">
                            <fieldset class="scheduler-border">
                                <legend class="scheduler-border">Change Password</legend>
                                <span id="error_password" class="required" style="color: #ff0000;"></span><br/>
                                 <div class="message" ><?php if(isset($message)) { echo $message; } ?></div>
                                <div class="col-md-11">
                                    <div class="form-horizontal">
                                        <form name="frmChangePsw" id="frmChangePsw" method="POST" action="">
                                           
                                        <div class="form-group">
                                            <label  class="col-md-2 control-label">මුරපදය</label>
                                            <div class="col-md-10">
                                                <input type="password" class="form-control" placeholder="" name="currentPassword" id="currentPassword" required="">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label  class="col-md-2 control-label">නව මුරපදය</label>
                                            <div class="col-md-10">
                                                <input type="password" class="form-control" placeholder="" name="newPassword" id="newPassword" required="">
                                            </div>
                                        </div>
                                        
                                            <div class="form-group">
                                            <label  class="col-md-2 control-label">මුරපදය තහවුරු කරන්න</label>
                                            <div class="col-md-10">
                                                <input type="password" class="form-control" placeholder="" name="confPassword" id="confPassword" required="">
                                            </div>
                                        </div>
                                         <div class="results"></div>
                                    
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-success" id="saveEmp" name="chgPassword" onclick="return validatePassword()"/>
                                        <input type="reset" class="btn btn-default" id="cancelEmp" name="cancelfrm"/>
                                    
                                    </div>
                                         </div>
                                </div>
                                                                </div>
                                                            </div>
                   
                </div>
            </div>                           </form>                             
                                        </fieldset>
                                                        </div>    
        <br><br><br><br><br><br><br><br><br><br><br><br>
        </body>
<div class="footer">
<?php require_once '../../inc/footer_main.php'; ?>
</div>
</html>