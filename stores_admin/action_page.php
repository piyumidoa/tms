<?php
session_start();
require_once("connection.php");

if(isset($_POST['txtuname']) && isset($_POST['txtpass'])){
    $uname = $_POST["uname"];
    $pass = $_POST["psw"];
    $_SESSION["id"] = $uname;
    $_SESSION['password'] = $pass;
}

if($uname=="" || $pass==""){
	header("Location:loginpopup.php?msg=1");
}
 else {
    
$dbobj = new dbConnection();
$con = $dbobj->getCon();

$sql = "SELECT * FROM tbl_user WHERE user_name='$uname';";

try{
	$result = mysqli_query($con,$sql);
	$nor = $result->num_rows;
	if($nor>0){
		$rec = mysqli_fetch_assoc($result);
		if($rec["psw"]==md5($pass)){
			if($rec["status"]=="1"){
                            
                            $_SESSION["user"]["uname"] = $uname;
                            $_SESSION["user"]["urole"] = $rec["type"];
                            $type = $rec["user_role"];
                            $usrid = $rec["user_id"];
                            $lintime = date("Y/m/d, h:i:s",time());
                                // Taking now logged in time.
                                    $_SESSION['start'] = time(); 
                                // Ending a session in 10 minutes from the starting time.
                                    $_SESSION['expire'] = $_SESSION['start'] + (100 * 60);
                                //saveLogins
                                $sql1 = "INSERT INTO tbl_usrlog(user_id,login_time)
                                                VALUES('$usrid','$lintime')";
                                $result1 = mysqli_query($con,$sql1);
                                
                                if(($type=="1")||($type=="2")){                                                                           
					header("Location:loginpopup.php?msg=9");
                                }                                
                                else if($type=="3"){
					header("Location:loginpopup.php?msg=5");
                                }
			}
			else{
				header("Location:loginpopup.php?msg=4");
			}
		}
		else{
			header("Location:loginpopup.php?msg=3");
		}
	}
	else{
		header("Location:loginpopup.php?msg=2");
	}
}
catch(Exception $e){
	echo($e->getMessage());
}
mysqli_close($con);
 }
?>