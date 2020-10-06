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

?>
<Doctype html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Register Training | TMS for DOA</title>        
        <?php   
                require_once '../../inc/header_main.php';?>   
        <script>
             
        
        function loadSubjects(training_id){
	
		if(training_id=="")
		return;
		
		var xmlhttp;
		if (window.XMLHttpRequest)
		  {// code for IE7+, Firefox, Chrome, Opera, Safari
		  xmlhttp=new XMLHttpRequest();
		  }
		else
		  {// code for IE6, IE5
		  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		  }
		xmlhttp.onreadystatechange=function()
		  {
		  if (xmlhttp.readyState==4 && xmlhttp.status==200)
			{				
				document.getElementById("subject_list").innerHTML=xmlhttp.responseText;
            }
		  }
		 	var url = "../../lib/emp_func.php?training="+training_id;
			
		xmlhttp.open("GET",url,true);
		xmlhttp.send();
	}	

    function loadTrainingNeedsTable(){
	    
    var xmlhttp;
    if (window.XMLHttpRequest)
      {// code for IE7+, Firefox, Chrome, Opera, Safari
      xmlhttp=new XMLHttpRequest();
      }
    else
      {// code for IE6, IE5
      xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
      }
    xmlhttp.onreadystatechange=function()
      {
      if (xmlhttp.readyState==4 && xmlhttp.status==200)
        {				
            document.getElementById("training_needs_table").innerHTML=xmlhttp.responseText;
        }
      }
         var url = "../../lib/emp_func.php?training_needs_table=1";
        
    xmlhttp.open("GET",url,true);
    xmlhttp.send();
}	

function loadUnit(dirid) {

		if(dirid=="")
		return;
		
		var xmlhttp;
		if (window.XMLHttpRequest)
		  {// code for IE7+, Firefox, Chrome, Opera, Safari
		  xmlhttp=new XMLHttpRequest();
		  }
		else
		  {// code for IE6, IE5
		  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		  }
		xmlhttp.onreadystatechange=function()
		  {
		  if (xmlhttp.readyState==4 && xmlhttp.status==200)
			{
				
				document.getElementById("unitget").innerHTML=xmlhttp.responseText;
            }
		  }
		  
		 	var url = "../../lib/emp_func.php?dir_divison="+dirid;
			
		xmlhttp.open("GET",url,true);
		xmlhttp.send();
	}	


        </script>
    </head>
    <body>
        <?php require_once '../../inc/admin_menu.php'; 
        //require_once '../include/Include_Main.php'; ?>
        <div class="container-fluid">               
            <div class="row"> 
                <div class="container-fluid">               
                    <div class="row"> 
<?php
if(isset($_GET["msg"])) {

        $msg = $_GET["msg"];
        
        if( $msg == 1) {
			echo "Added successfully";
		}
		else {
			echo "Adding failed";	
		}
}
?>

<div class="col-md-16">
                            <fieldset class="scheduler-border">
                                <legend class="scheduler-border">පුහුණු අවශ්‍යතා</legend>
                                <div class="col-md-11">
                                    <div class="form-horizontal">
                                        <form name="add_training_needs" id="add_training_needs" method="POST" action="../../lib/admin_func.php">

                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> district </label>
                                            <div class="col-md-10">
                                                <select class="form-control" id='district' name='district'>                                             
                                                    <?php 
                                                    require_once '../../lib/connection.php';

                                                    $dbobj = new dbConnection();
                                                    $con = $dbobj->getCon();
                                                    
                                                    $sql = "SELECT DISTINCT * FROM tbl_district WHERE 1;";
                                                    $result = mysqli_query($con,$sql);
                                                    $nor = $result->num_rows;
                                                    
                                                    if($nor>0) {
                                                      while($rec = mysqli_fetch_assoc($result)) {
                                                        $district_name = $rec["district_name"];
                                                        echo("<option value='".$rec["district_id"]."'>".$district_name."</option>");
                                                      }
                                                    } 
                                                    mysqli_close($con);
                                                    ?>
                                                </select>
                                            </div>
                                            </div>

                                            <div class="form-group">
                                            <label class="col-md-2 control-label">අධ්‍යක්ෂ අංශය </label>
                                            <div class="col-md-10">
                                                <select class="form-control" placeholder="" id="txt_dir_div" name="txt_dir_div" onChange="loadUnit(this.value);">
                                                                   
                                            <OPTION>--Select--</OPTION>
                                                    <?php 
                                                    require_once("../../lib/connection.php");
                                                    $dbobj = new dbConnection();
                                                    $con = $dbobj->getCon();

                                                    $sql6 = "SELECT * FROM tbl_dir_div";
                                                    $result6 = mysqli_query($con,$sql6);
                                                    $nor6 = $result6->num_rows;

                                                    if($nor6>0){
                                                            while($rec = mysqli_fetch_assoc($result6)){
                                                                $dirdiv = $rec["dir_div_name"];
                                                                echo("<option value='".$rec["dir_div_id"]."'>".$dirdiv."</option>");
                                                            }
                                                    }	
                                                    mysqli_close($con); 
                                                    ?>
                                                </select>
                                        <!--   </datalist> -->
                                            </div>
                                        </div>
                                            
                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> Institute</label>
                                            <div class="col-md-10">
                                                <span id="unitget">
                                                    <select name="txt_unit" id="txt_unit" required>
                                                        <option value="">--Select--</option>

                                                    </select>
                                                </span>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> Designation </label>
                                            <div class="col-md-10">
                                                <select class="form-control" id='txt_post' name='txt_post'>                                             
                                                    <?php 
                                                    require_once '../../lib/connection.php';

                                                    $dbobj = new dbConnection();
                                                    $con = $dbobj->getCon();
                                                    
                                                    $sql = "SELECT * FROM `tbl_post` ORDER BY `tbl_post`.`post_name` ASC";
                                                    $result = mysqli_query($con,$sql);
                                                    $nor = $result->num_rows;
                                                    
                                                    if($nor>0) {
                                                      while($rec = mysqli_fetch_assoc($result)) {
                                                        $post_name = $rec["post_name"];
                                                        echo("<option value='".$rec["post_id"]."'>".$post_name."</option>");
                                                      }
                                                    } 
                                                    mysqli_close($con);
                                                    ?>
                                                </select>
                                            </div>
                                            </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> Training Programme </label>
                                            <div class="col-md-10">                                                    
                                                <select class="form-control" id='txt_training' name='txt_training' onChange="loadSubjects(this.value);">                                             
                                                    <?php 
                                                    require_once '../../lib/connection.php';

                                                    $dbobj = new dbConnection();
                                                    $con = $dbobj->getCon();
                                                    
                                                    $sql = "SELECT DISTINCT * FROM tbl_training_program WHERE 1;";
                                                    $result = mysqli_query($con,$sql);
                                                    $nor = $result->num_rows;
                                                    
                                                    if($nor>0) {
                                                      while($rec = mysqli_fetch_assoc($result)) {
                                                        $tname = $rec["training_program"];
                                                        echo("<option value='".$rec["id"]."'>".$tname."</option>");
                                                      }
                                                    } 
                                                    mysqli_close($con);
                                                    ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> Subject </label>
                                            <div class="col-md-10">
                                                <span id="subject_list">
                                                    <select name="txt_subject" id="txt_subject" required>
                                                        <option value="">--Select--</option>
                                                    </select>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> Number of officers </label>
                                            <div class="col-md-10">
                                            <input class="form-control" placeholder="" id="officer_count" name="officer_count" type="number">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> Time duration( Hours ) </label>
                                            <div class="col-md-10">
                                            <input class="form-control" placeholder="" id="time_duration" name="time_duration" type="number">
                                            </div>
                                        </div>

                                    <div class="form-group">
                                        <input type="submit" class="btn btn-success" id="addTrainingNeeds" name="addTrainingNeeds"/>
                                        <input type="reset" class="btn btn-default" id="cancelTrainingNeeds" name="cancelTrainingNeeds"/>
                                    </div>
                                </div>

                                                                </div>
                                                            </div>
                    </form>
                </div>
            </div>                                                       
                                        </fieldset>
                                                        </div>   

                        <div class="col-md-16">
                            <fieldset class="scheduler-border">
                                <legend class="scheduler-border">Add Subject</legend>
                                <div class="col-md-11">
                                    <div class="form-horizontal">
                                        <form name="add_subject" id="add_subject" method="POST" action="../../lib/admin_func.php">

                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> Training Programme </label>
                                            <div class="col-md-10">                                                    
                                                <select class="form-control" id='txt_training' name='txt_training'>                                             
                                                    <?php 
                                                    require_once '../../lib/connection.php';

                                                    $dbobj = new dbConnection();
                                                    $con = $dbobj->getCon();
                                                    
                                                    $sql = "SELECT DISTINCT * FROM tbl_training_program WHERE 1;";
                                                    $result = mysqli_query($con,$sql);
                                                    $nor = $result->num_rows;
                                                    
                                                    if($nor>0) {
                                                      while($rec = mysqli_fetch_assoc($result)) {
                                                        $tname = $rec["training_program"];
                                                        echo("<option value='".$rec["id"]."'>".$tname."</option>");
                                                      }
                                                    } 
                                                    mysqli_close($con);
                                                    ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> Subject </label>
                                            <div class="col-md-10">
                                                <input class="form-control" placeholder="" id="txt_subject" name="txt_subject">
                                            </div>
                                        </div>
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-success" id="saveSubject" name="addSubject"/>
                                        <input type="reset" class="btn btn-default" id="cancelSubject" name="cancelSubject"/>
                                    </div>
                                </div>

                                                                </div>
                                                            </div>
                    </form>
                </div>
            </div>                                                       
                                        </fieldset>
                                                        </div>              
                                                        <div class="col-md-16">

                            <fieldset class="scheduler-border">
                                <legend class="scheduler-border">Add Training Program</legend>
                                <div class="col-md-11">
                                    <div class="form-horizontal">
                                        <form name="add_training_program" id="add_training_program" method="POST" action="../../lib/admin_func.php">

                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> Training Programme </label>
                                            <div class="col-md-10">                                                    
                                            <input class="form-control" placeholder="" id="training_program" name="training_program">
                                            </div>
                                        </div>

                                    <div class="form-group">
                                        <input type="submit" class="btn btn-success" id="saveTrainingProgram" name="saveTrainingProgram"/>
                                        <input type="reset" class="btn btn-default" id="cancelTrainingProgram" name="cancelTrainingProgram"/>
                                    </div>
                                </div>

                                                                </div>
                                                            </div>
                    </form>
                </div>
            </div>                                                       
                                        </fieldset>
        </div>           
                    </div>

                    <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-4 offset-md-4">
                        <!-- display training needs table -->
                        <button onclick="loadTrainingNeedsTable()" class="btn btn-primary">See All </button>
                        
                        <!-- end of the training needs table -->
                    </div>
                    <span id="training_needs_table">
                        </span>
                    <div>

                </div>
            </div>
        </div>
    </body>
<div class="footer">
<?php require_once '../../inc/footer_main.php'; ?>
</div>
</html>