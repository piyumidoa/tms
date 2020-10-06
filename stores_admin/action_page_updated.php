<?php 
session_start();
require 'dbcon.php';

// retrieving data from the login
if(isset($_POST['uname']) || isset($_POST['psw'])){
$uname=$_POST["uname"]; 
$pass=$_POST["psw"];
$_SESSION["id"] = $uname;
$_SESSION['password'] = $pass;
}
	
	if($uname=="" || $pass==""){
	header("Location:loginpopup.php?msg=1");
}
 else {
		

$obj=new dbcon();
$con=$obj->getcon();
	
$sql="SELECT * FROM users WHERE uname='$uname';";

try{
// execute the query and retrieve data
$result=mysqli_query($con,$sql);
$nor = $result->num_rows;

if($nor>0){
		$rec = mysqli_fetch_assoc($result);
			
		if($rec["psw"] == ($pass)) {// This will match records for the entered password
		
		///////////// checking status///////////////
		
			if($rec["status"]=="Active"){  
			                           
                            $_SESSION["user"]["uname"] = $uname;
                            $_SESSION["user"]["utype"] = $rec["type"];
                            $type = $rec["type"];
                            $usrid = $rec["id"];
                            $lintime = date("Y/m/d, h:i:s",time());
                                // Taking now logged in time.
                                    $_SESSION['start'] = time(); 
                                // Ending a session in 10 minutes from the starting time.
                                    $_SESSION['expire'] = $_SESSION['start'] + (100 * 60);                                                            
                                if
								(($type=="Admin") || ($type=="Staff")){                                                                           
							header("Location:home.php?msg=1");                           	
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
		header("Location:loginpopup.php?msg=5");
	}

}
}
catch(Exception $e){
	echo($e->getMessage());
}
mysqli_close($con);
 }
 ?>