<?php
require_once'../../lib/connection.php';

$dbobj = new dbConnection();
$con = $dbobj->getCon();

$uid = $_POST["hid"];
$empid = $_POST["txtemp_id"];
$usrname = $_POST["txtusr_name"];
$usrpas = $_POST["txtusr_pass"];
$usrole = $_POST{"selrole"};

if ($usrole == 2){
    $cmbunit = $_POST["cmbunit"];
    $urole = $usrole."".$cmbunit;

}else{
     $urole = $usrole;
}
$usrstat = $_POST["radusr_stat"];
$usrpass = md5($usrpas);

$sql2 = "UPDATE tbl_user SET user_id = '$empid',
                            user_name = '$usrname',
                            user_password = '$usrpass', 
                            user_role = '$urole', 
                            user_status = '$usrstat', 
                            emp_id = '$empid'
        WHERE user_id = '$uid'" ;
//Execute SQL Statement and store results as a recordset

$query_result = mysqli_query($con,$sql2);

mysqli_close($con);
	
//Verify that the record is updated

if($query_result>0){
    header("Location:vi_sys_user.php?msg=1");
}
 else {
    header("Location:vi_sys_user.php?msg=2");
}

?>