<?php
session_start();
require_once("connection.php");

if(isset($_POST['txtuname']) && isset($_POST['txtpass'])){
    $uname = $_POST["txtuname"];
    $pass = $_POST["txtpass"];
    $_SESSION["id"] = $uname;
    $_SESSION['password'] = $pass;
}

if($uname=="" || $pass==""){
	header("Location:../index.php?msg=1");
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
		if($rec["user_password"]==md5($pass)){
			if($rec["user_status"]=="1"){
                            
                            $_SESSION["user"]["uname"] = $uname;
                            $_SESSION["user"]["urole"] = $rec["user_role"];
                            $urole = $rec["user_role"];
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

                          //      $type =substr($urole, 0,1);
                                $type =$urole;
                                
                                if($type=="2" ){                                                                           
					header("Location:../modules/employee/index.php?msg=5");
                                }      
                                else if($type=="1"){                                                                           
					header("Location:../modules/admin/index.php?msg=5");
                                }      
			}
			else{
				header("Location:../index.php?msg=4");
				//echo json_encode(array(array("msgType" => 1, "msg" => "User Name or Password Was Incorrect.Please Check Your User Name and Password")));
			}
		}
		else{
			header("Location:../index.php?msg=3");
			//echo json_encode(array(array("msgType" => 2, "msg" => "User Not Found, Please Check Your Username")));
		}
	}
	else{
		header("Location:../index.php?msg=2");
		
        //echo json_encode(array(array("msgType" => 3, "msg" => "Please Enter Username and Password")));
	}
}
catch(Exception $e){
	echo($e->getMessage());
}
mysqli_close($con);
 }
?>