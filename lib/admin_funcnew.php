<?php    
if(isset($_POST["updateUnit"]))
    {
    $uid = $_POST["hid"];
    $uname = $_POST["txt_unit"];
    $utel = $_POST["u_tel"];
       
    $sql = "UPDATE tbl_unit SET unit_name='$uname', unit_tel='$utel' WHERE unit_id=$uid";
    
    require_once 'connection.php';
    $obj = new dbconnection();
    $con = $obj->getcon();
    
    $query_result = mysqli_query($con,$sql);
    
    mysqli_close($con);
    
    if($query_result>0){
        header("Location:../modules/admin/add_unit.php?msg=1");
    }
    else {
        header("Location:../modules/admin/add_unit.php?msg=2");
    }
    }
    
    
if(isset($_POST["addUnit"]))
    {
    $uname = $_POST["txt_unit"];
    $utel = $_POST["u_tel"];
       
    $sql = "INSERT INTO tbl_unit (unit_name, unit_tel)
                              VALUES ('$uname', '$utel')";
    
    require_once 'connection.php';
    $obj = new dbconnection();
    $con = $obj->getcon();
    
    $query_result = mysqli_query($con,$sql);
    
    mysqli_close($con);
    
    if($query_result>0){
        header("Location:../modules/employee/add_unit.php?msg=1");
    }
    else {
        header("Location:../modules/employee/add_unit.php?msg=2");
    }
    }
    
if(isset($_POST["updatePost"]))
    {
    $pid= $_POST["hid"];
    $pname = $_POST["txt_post"];
       
    $sql = "UPDATE tbl_post SET post_name ='$pname' WHERE post_id = $pid;
                              ";
    
    require_once 'connection.php';
    $obj = new dbconnection();
    $con = $obj->getcon();
    
    $query_result = mysqli_query($con,$sql);
    
    mysqli_close($con);
    
    if($query_result>0){
        header("Location:../modules/admin/add_post.php?msg=1");
    }
    else {
        header("Location:../modules/admin/add_post.php?msg=2");
    }
    }
    
if(isset($_POST["updateTrain"]))
    {
    $tid= $_POST["hid"];
    $tname = $_POST["txt_train"];
       
    $sql = "UPDATE tbl_dir_div SET dir_div_name ='$tname' WHERE dir_div_id = $tid;
                              ";
    
    require_once 'connection.php';
    $obj = new dbconnection();
    $con = $obj->getcon();
    
    $query_result = mysqli_query($con,$sql);
    
    mysqli_close($con);
    
    if($query_result>0){
        header("Location:../modules/admin/add_training.php?msg=1");
    }
    else {
        header("Location:../modules/admin/add_training.php?msg=2");
    }
    }
    
    
if(isset($_POST["addTrain"]))
    {
    $tname = $_POST["txt_train"];
       
    $sql = "INSERT INTO tbl_dir_div (train_name)
                              VALUES ('$tname')";
    
    require_once 'connection.php';
    $obj = new dbconnection();
    $con = $obj->getcon();
    
   $query_result = mysqli_query($con,$sql);
		
		
		
    mysqli_close($con);
    
    if($query_result>0){
        header("Location:../modules/admin/add_training.php?msg=1");
    }
    else {
       header("Location:../modules/admin/add_training.php?msg=2");
    }
    }
    
    
    if(isset($_POST["addUser"]))
    {
    $uid = $_POST["txtemp_id"];
    $uname = $_POST["txtusr_name"];
    $pass = $_POST["txtusr_pass"];
    $upass=md5($pass);
    $urole = $_POST["selrole"];
    $ustat = $_POST["radusr_stat"];
       
    $sql = "INSERT INTO tbl_user (user_id, user_name, user_password, user_role, user_status)
                              VALUES ('$uid', '$uname', '$upass', '$urole', '$ustat')";
    
    require_once 'connection.php';
    $obj = new dbconnection();
    $con = $obj->getcon();
    
   $query_result = mysqli_query($con,$sql);
   
    mysqli_close($con);
    
    if($query_result>0){
        header("Location:../modules/admin/add_user.php?msg=1");
    }
    else {
       header("Location:../modules/admin/add_user.php?msg=2");
    }
    }
    
    
    
if(isset($_GET["cPass"])){
	$cPass = $_GET["cPass"];
	
	valcPass($cPass);	
}
	function valcPass($cPass){
		 		
                $hspass =  md5($cPass);
                
			echo($hspass);
	}
?>
<?php
require_once("connection.php");


if(isset($_GET["empId"])){
	$empId = $_GET["empId"];
	
	loadEmpDetails($empId);	
}
	function loadEmpDetails($empId){
		$obj = new dbconnection();
		$con = $obj->getcon();
		
                $sql1 = "SELECT * from tbl_user WHERE user_id = '$empId';";
		
                $result1 = mysqli_query($con,$sql1) or die("SQL Error : ".mysqli_error($con));
										
                $nor1 = $result1->num_rows;
                    if($nor1>0){
                        echo 'Employee already has a user account!';
                    }
		
		else		{						
                    
                    
			echo("New User ID");
                    }		
		mysqli_close($con);
	}
?>

