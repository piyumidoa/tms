<?php 
	
if(isset($_POST["saveEmp"]))
    {
    $ename = $_POST["txt_name"];
    $etit = $_POST["sel_title"];
    $egen = $_POST["sel_gen"];
    $edob = $_POST["txt_dob"];
    $enic = $_POST["txt_nic"];
    $epost = $_POST["sel_post"];
    $eunit = $_POST["txt_unit"];
    $etp = $_POST["txt_tp"];
    $emob = $_POST["txt_mob"];
    $email = $_POST["txt_email"];
    
 //   echo $ename;    echo $etit;    echo $egen;    echo $edob;    echo $enic;    echo $epost; 
    $sql = "INSERT INTO tbl_employee (emp_id, emp_title, emp_name, emp_post, unit_id, emp_dob, emp_gender, emp_home_phone, emp_mobile, emp_email)
                              VALUES ('$enic', '$etit', '$ename', '$epost', '$eunit', '$edob', '$egen', '$etp', '$emob', '$email')";
    
    require_once 'connection.php';
    $obj = new dbconnection();
    $con = $obj->getcon();
    
    $query_result = mysqli_query($con,$sql);
    
    mysqli_close($con);
    
    if($query_result>0){
        header("Location:../modules/employee/add_employee.php?msg=1");
    }
    else {
        header("Location:../modules/employee/add_employee.php?msg=2");
    }
    }
    
    if(isset($_POST["updateEmp"]))
    {
        $hid = $_POST["hid"];
        $ename = $_POST["txt_name"];
        $etit = $_POST["sel_title"];
        $egen = $_POST["sel_gen"];
        $edob = $_POST["txt_dob"];
        $enic = $_POST["txt_nic"];
        $epost = $_POST["sel_post"];
        $eunit = $_POST["txt_unit"];
        $etp = $_POST["txt_tp"];
        $emob = $_POST["txt_mob"];
        $email = $_POST["txt_email"];

    $sql = "UPDATE tbl_employee SET emp_id='$enic', emp_title='$etit', emp_name='$ename', emp_post='$epost', unit_id='$eunit', emp_dob='$edob', emp_gender='$egen', emp_home_phone='$etp', emp_mobile='$emob', emp_email='$email'
            WHERE emp_id=$hid;";
    
    require_once 'connection.php';
    $obj = new dbconnection();
    $con = $obj->getcon();
    
    $query_result = mysqli_query($con,$sql);
    
    mysqli_close($con);
    
    if($query_result>0){
        header("Location:../modules/employee/add_employee.php?msg=3");
    }
    else {
        header("Location:../modules/employee/add_employee.php?msg=4");
    }
    }
    
    
    if(isset($_POST["applyEmp"]))
    {
    $eid = $_POST["txt_nic"];
    $train = $_POST["txt_train"];
    $dist = $_POST["sel_dist"];
    $appdate = $_POST["txt_app_date"];
    $hsrq = $_POST["hostel_req"];
    

    $sql1 = "SELECT apply_date FROM `tbl_apply_training` WHERE `emp_id`='$eid'";

    $sql = "INSERT INTO tbl_apply_training (emp_id, train_id, district_id, apply_date, hostel_req)
                              VALUES       ('$eid', '$train', '$dist', '$appdate', '$hsrq')";
    
    require_once 'connection.php';
    $obj = new dbconnection();
    $con = $obj->getcon();

    $query_result1 = mysqli_query($con,$sql1);
    $apply_date = "";
    if (!empty($query_result1)) {
        foreach($query_result1 as $result) {
            $apply_date_temp = $result["apply_date"];
            if($apply_date_temp > $apply_date) {
                $apply_date = $apply_date_temp;
            }
        }
    }

    $new_date = "";
    if( $apply_date != "" ) {

    echo "old ".$apply_date."<br>";

    $date = strtotime($apply_date);
    $new_date = strtotime('+ 3 year', $date);
    $new_date = date('Y-m-d', $new_date);

    }

    if( ($apply_date != "" && $new_date != "" && $new_date < $appdate) || $apply_date == "" ) {        

        $query_result = mysqli_query($con,$sql);
        mysqli_close($con);

        if($query_result>0) {
             header("Location:../modules/employee/add_emp_training.php?msg=1");
         }
         else {
             header("Location:../modules/employee/add_emp_training.php?msg=2");
         }
    } else {
        header("Location:../modules/employee/add_emp_training.php?msg=5");
    }

    }
?>