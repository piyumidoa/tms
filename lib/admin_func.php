<?php    
if(isset($_POST["addPlace"]))
    {
    $dname = $_POST["txt_dir_div"];
   // echo $dname;
    $sql = "INSERT INTO tbl_dir_div (dir_div_name)
                            VALUES ('$dname')";
    
    require_once 'connection.php';
    $obj = new dbconnection();
    $con = $obj->getcon();
    
    $query_result = mysqli_query($con,$sql);
    
    mysqli_close($con);
    
    if($query_result>0){
        header("Location:../modules/admin/add_place.php?msg=1");
    }
    else {
        header("Location:../modules/admin/add_place.php?msg=2");
    }
    }


if(isset($_POST["updateUnit"]))
    {
        
        //echo 'update unit';
    $txt_dir_div = $_POST["txt_dir_div"];
   // echo $txt_dir_div;
    $uname = $_POST["txt_unit"];
    echo $uname;
    $utel = $_POST["u_tel"];
    echo $utel;
    $uid = $_POST["hid"];
    echo $uid;
       
    $sql = "UPDATE tbl_unit SET unit_name='$uname', unit_tel='$utel', dir_div_id='$txt_dir_div' WHERE unit_id=$uid";
    echo $sql;
    
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
        
    $txt_dir_div = $_POST["txt_dir_div"];
    $uname = $_POST["txt_unit"];
    $utel = $_POST["u_tel"];
       
    $sql = "INSERT INTO tbl_unit (unit_name, unit_tel, dir_div_id)
                              VALUES ('$uname', '$utel', '$txt_dir_div')";
    
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
       
    $sql = "UPDATE tbl_training SET train_name ='$tname' WHERE train_id = $tid;
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
    $place = $_POST["place"];
    $from_date = $_POST["from_date"];
    $to_date = $_POST["to_date"];
       
    $sql = "INSERT INTO tbl_training ( `train_name`, `place`, `date_from`, `date_to`)
                              VALUES ('$tname', '$place', '$from_date', '$to_date')";
    
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

    // edit user
    if(isset($_POST["editUser"]))
    {
        $uid = $_POST["txtemp_id"];
        $uname = $_POST["txtusr_name"];
        $pass = $_POST["txtusr_pass"];
        $upass=md5($pass);
        $urole = $_POST["selrole"];
        $ustat = $_POST["radusr_stat"];
        
        $sql = "UPDATE `tbl_user` SET `user_name`='$uname',`user_password`='$upass',`user_role`='$urole',`user_status`='$ustat'
         WHERE `user_id`='$uid'";
        
        require_once 'connection.php';
        $obj = new dbconnection();
        $con = $obj->getcon();
        
    $query_result = mysqli_query($con,$sql);
    
        mysqli_close($con);
        
        if($query_result>0){
            header("Location:../modules/admin/edit_user.php?msg=1");
        }
        else {
        header("Location:../modules/admin/edit_user.php?msg=2");
        }
    }

    // edit director division
    if(isset($_POST["editPlace"]))
    {
        $txt_dir_div = $_POST["txt_dir_div"];       
        $txt_dir_id = $_POST["txt_dir_id"];        
        $sql = "UPDATE `tbl_dir_div` SET `dir_div_name`='$txt_dir_div' WHERE `dir_div_id`='$txt_dir_id'";
        
        require_once 'connection.php';
        $obj = new dbconnection();
        $con = $obj->getcon();
        
    $query_result = mysqli_query($con,$sql);
    
        mysqli_close($con);
        
        if($query_result>0){
            header("Location:../modules/admin/edit_place.php?msg=1");
        }
        else {
        header("Location:../modules/admin/edit_place.php?msg=2");
        }
    }

    //addPost
    if(isset($_POST["addPost"]))
    {
        $txt_post = $_POST["txt_post"];          
        $sql = "INSERT INTO `tbl_post`(`post_name`) VALUES ('$txt_post')";
        
        require_once 'connection.php';
        $obj = new dbconnection();
        $con = $obj->getcon();
        
        $query_result = mysqli_query($con,$sql);
    
        mysqli_close($con);
        
        if($query_result>0) {

            header("Location:../modules/admin/add_post.php?msg=1");
        }
        else {
            header("Location:../modules/admin/add_post.php?msg=2");
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
    
    // add training needs

    if(isset($_POST["saveTrainingProgram"]))
    {

    $training_program = $_POST["training_program"];
       
    $sql = "INSERT INTO tbl_training_program (`training_program`)
                              VALUES ('$training_program')";
    
    require_once 'connection.php';
    $obj = new dbconnection();
    $con = $obj->getcon();
    
   $query_result = mysqli_query($con,$sql);
		
    mysqli_close($con);
    
    if($query_result>0){
        header("Location:../modules/admin/add_training_needs.php?msg=1");
    }
    else {
       header("Location:../modules/admin/add_training_needs.php?msg=2");
    }
    }

    if(isset($_POST["addSubject"]))
    {

    $txt_training_id = $_POST["txt_training"];
    $txt_subject = $_POST["txt_subject"];    
       
    $sql = "INSERT INTO tbl_training_subject ( `subject`, `training`)
                              VALUES ('$txt_subject', '$txt_training_id')";
    
    require_once 'connection.php';
    $obj = new dbconnection();
    $con = $obj->getcon();
    
   $query_result = mysqli_query($con,$sql);
		
    mysqli_close($con);
    
    if($query_result>0){
        header("Location:../modules/admin/add_training_needs.php?msg=1");
    }
    else {
       header("Location:../modules/admin/add_training_needs.php?msg=2");
    }
    }

    if(isset($_POST["addTrainingNeeds"]))
    {

    $district = $_POST["district"];
    $txt_unit = $_POST["txt_unit"];
    $txt_post = $_POST["txt_post"];  
    $txt_training = $_POST["txt_training"];
    $txt_subject = $_POST["txt_subject"];     
    $officer_count = $_POST["officer_count"];     
    $time_duration = $_POST["time_duration"];  
       
    $sql = "INSERT INTO tbl_training_needs ( `district`, `unit`, `post`, `training`, `subject`, `officer_count`, `time_duration` )
                              VALUES ('$district', '$txt_unit', '$txt_post', '$txt_training', '$txt_subject', '$officer_count', '$time_duration')";
    
    require_once 'connection.php';
    $obj = new dbconnection();
    $con = $obj->getcon();
    
   $query_result = mysqli_query($con,$sql);
		
    mysqli_close($con);
    
    if($query_result>0){
        header("Location:../modules/admin/add_training_needs.php?msg=1");
    }
    else {
       header("Location:../modules/admin/add_training_needs.php?msg=2");
    }
    }
?>

