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
    
    /* add training requirements */
    
    // report generate 
    if(isset($_POST["generateReport"]))
    {        
        $txt_training = $_POST["txt_training"];
        $district = $_POST["district"];
        $txt_post = $_POST["txt_post"];
        $txt_dir_div = $_POST["txt_dir_div"];   
        $txt_subject = $_POST["txt_subject"];   
        
        $sql = "SELECT * FROM `tbl_training_requirements` 
        LEFT JOIN tbl_district on tbl_district.district_id = tbl_training_requirements.district
        LEFT JOIN tbl_unit on tbl_unit.unit_id = tbl_training_requirements.unit
        LEFT JOIN tbl_post on tbl_post.post_id = tbl_training_requirements.post
        LEFT JOIN tbl_training_program on tbl_training_program.id = tbl_training_requirements.training
        LEFT JOIN tbl_training_subject on tbl_training_subject.id = tbl_training_requirements.subject
        WHERE 1 ";
        
        if( !empty($district) ) {
            $sql = $sql."AND tbl_training_requirements.district='".$district."'";
        }
        if( !empty($txt_training) ) {
            $sql = $sql."AND tbl_training_requirements.training='".$txt_training."'";
        }
        if( !empty($txt_post) ) {
            $sql = $sql."AND tbl_training_requirements.post='".$txt_post."'";
        }
        if( !empty($txt_dir_div) ) {
            $sql = $sql."AND tbl_unit.dir_div_id='".$txt_dir_div."'";
        }
        if( !empty($txt_subject) ) {
            $sql = $sql."AND tbl_training_requirements.subject='".$txt_subject."'";
        }
        require_once 'connection.php';
        $obj = new dbconnection();
        $con = $obj->getcon();
        
        $query_result = mysqli_query($con,$sql);
        $nor = $query_result->num_rows;
        
        if($nor>0) {
            
            //create html table string 
            $table_text = '<meta charset="UTF-8"><title>පුහුණු අවශ්‍යතා</title> 
                            <style>
                            table, td, th {  
                              border: 1px solid #ddd;
                              text-align: left;
                            }
                            
                            table {
                              border-collapse: collapse;
                              width: 100%;
                            }
                            
                            th, td {
                              padding: 5px;
                            }
                            </style>
                        <div id="divpanel" align="right">
                        <input type="button" value="Print" onclick="prnt();" style="width: 80px; height: 30px" />&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="button" value="Close" onclick="window.close();" style="width: 80px; height: 30px" />
                        </div>
                        <h3>පුහුණු අවශ්‍යතා</h3>
                        <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th>දිස්ත්‍රික්කය</th>
                            <th>ආයතනය</th>
                            <th>තනතුර</th>
                            <th>පුහුණු වැඩසටහන</th>
                            <th>විෂය</th>
                            <th>නිලධාරී ගණන</th>
                            <th>කාල සීමාව</th>
                          </tr>
                        </thead>';
            
            while($row = mysqli_fetch_assoc($query_result)) {
                
                $table_text = $table_text.
                 "<tr>".                
                 "<td>" . $row['district_name']. "</td>".
                 "<td>" . $row['unit_name'] . "</td>".
                 "<td>" . $row['post_name'] . "</td>".
                 "<td>" . $row['training_program'] . "</td>".
                 "<td>" . $row['subject'] . "</td>".
                 "<td>" . $row['officer_count'] . "</td>".
                 "<td>" . $row['time_duration'] . "</td>".               
                 "</tr>";
            }
            $table_text = $table_text.'<tbody></tbody></table>
                                        <script type="text/javascript">
                                                function prnt(){
                                                document.getElementById("divpanel").style.display="none";
                                                window.print();
                                                }
                                        </script>';
            
            echo $table_text;
        }
        else {
            header("Location:../modules/admin/add_training_requirements.php?msg=3");
        }
        mysqli_close($con);               
    }

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
        header("Location:../modules/admin/add_training_requirements.php?msg=1");
    }
    else {
       header("Location:../modules/admin/add_training_requirements.php?msg=2");
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
        header("Location:../modules/admin/add_training_requirements.php?msg=1");
    }
    else {
       header("Location:../modules/admin/add_training_requirements.php?msg=2");
    }
    }

    if(isset($_POST["addTrainingrequirements"]))
    {

    $district = $_POST["district"];
    $txt_unit = $_POST["txt_unit"];
    $txt_post = $_POST["txt_post"];  
    $txt_training = $_POST["txt_training"];
    $txt_subject = $_POST["txt_subject"];     
    $officer_count = $_POST["officer_count"];     
    $time_duration = $_POST["time_duration"];  
       
    $sql = "INSERT INTO tbl_training_requirements ( `district`, `unit`, `post`, `training`, `subject`, `officer_count`, `time_duration` )
                              VALUES ('$district', '$txt_unit', '$txt_post', '$txt_training', '$txt_subject', '$officer_count', '$time_duration')";
    
    require_once 'connection.php';
    $obj = new dbconnection();
    $con = $obj->getcon();
    
   $query_result = mysqli_query($con,$sql);
		
    mysqli_close($con);
    
    if($query_result>0){
        header("Location:../modules/admin/add_training_requirements.php?msg=1");
    }
    else {
       header("Location:../modules/admin/add_training_requirements.php?msg=2");
    }
    }
    
    if(isset($_POST["editTrainingProgram"]))
    {
        
        $training_program_id = $_POST["training_program_id"];
        $training_program_name = $_POST["training_program"];
        
        $sql = "UPDATE `tbl_training_program` SET `training_program`='$training_program_name' WHERE id='$training_program_id'";
        
        require_once 'connection.php';
        $obj = new dbconnection();
        $con = $obj->getcon();
        
        $query_result = mysqli_query($con,$sql);
        
        mysqli_close($con);
        
        if($query_result>0){
            header("Location:../modules/admin/edit_training_requirements.php?msg=1");
        }
        else {
            header("Location:../modules/admin/edit_training_requirements.php?msg=2");
        }
    }
    
    if(isset($_POST["editSubject"]))
    {
        
        $subject_id = $_POST["subject_id"];
        $txt_subject = $_POST["txt_subject"];
        
        $sql = "UPDATE `tbl_training_subject` SET `subject`='$txt_subject'  WHERE id='$subject_id'";
        
        require_once 'connection.php';
        $obj = new dbconnection();
        $con = $obj->getcon();
        
        $query_result = mysqli_query($con,$sql);
        
        mysqli_close($con);
        
        if($query_result>0){
            header("Location:../modules/admin/edit_training_requirements.php?msg=1");
        }
        else {
            header("Location:../modules/admin/edit_training_requirements.php?msg=2");
        }
    }
?>

