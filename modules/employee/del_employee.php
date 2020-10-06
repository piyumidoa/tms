<?php

        require_once '../../lib/connection.php';
        $obj = new dbconnection();
        $con = $obj->getcon();
        
        
if (isset($_GET['id'])){
    $id = $_GET["id"];
        $sql = "DELETE FROM tbl_employee WHERE emp_id=$id";    
        $result = mysqli_query($con, $sql);
        
        mysqli_close($con); 
    //    $sql2 = "DELETE FROM tbl_qualification WHERE emp_id=$id";
     //   $result2 = mysqliii_query($con, $sql2);

     //   $sql3 = "DELETE FROM tbl_children WHERE emp_id=$id";
     //   $result3 = mysqlii_query($con, $sql3);
        
     //  $sql4 = "DELETE FROM tbl_user WHERE emp_id=$id";
       // $result4 = mysqlii_query($con, $sql4);

//&& [$result4>0 || $result5>0 || $result6>0
    if($result>0)
        {
        header("Location:add_employee.php?msg=5");
        }
     else {
        header("Location:add_employee.php?msg=6");
        }

}
?>