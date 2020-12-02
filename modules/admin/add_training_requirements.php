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
        <title> පුහුණු අවශ්‍යතා | TMS for DOA</title>        
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
				// update all subject select lists
				var x = document.getElementsByName("subject_list");
				var i;
				for (i = 0; i < x.length; i++) {
				    x[i].innerHTML = xmlhttp.responseText;				  
				}
            }
		  }
		 	var url = "../../lib/emp_func.php?training="+training_id;
			
		xmlhttp.open("GET",url,true);
		xmlhttp.send();
	}	

    function loadTrainingrequirementsTable(){
	    
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
            document.getElementById("training_requirements_table").innerHTML=xmlhttp.responseText;
        }
      }
         var url = "../../lib/emp_func.php?training_requirements_table=1";
        
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
        <?php require_once '../../inc/menu_main.php'; 
        //require_once '../include/Include_Main.php'; ?>
        <div class="container-fluid">               
            <div class="row"> 
                <div class="container-fluid">               
                    <div class="row"> 
<?php
if(isset($_GET["msg"])) {

        $msg = $_GET["msg"];
        
		if( $msg == 1) {
		    
		    echo "<div class='alert alert-success' role='alert'>Added successfully</div>";
		    
		} else if($msg == 2) {
		    
		    echo "<div class='alert alert-danger' role='alert'>Adding failed</div>";
		    
		} else if($msg == 3) {
		    
		    echo "<div class='alert alert-info' role='alert'>No Results Found</div>";
		}
}
?>

						<div class="col-md-12">
                            <fieldset class="scheduler-border">
                                <legend class="scheduler-border">පුහුණු අවශ්‍යතා</legend>
                                <div class="col-md-11">
                                    <div class="form-horizontal">
                                        <form name="add_training_requirements" id="add_training_requirements" method="POST" action="../../lib/admin_func.php">

                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> දිස්ත්‍රික්කය </label>
                                            <div class="col-md-10">
                                                <select class="form-control" id='district' name='district' required>                                             
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
                                                <select class="form-control" placeholder="" id="txt_dir_div" name="txt_dir_div" onChange="loadUnit(this.value);" required>
                                                                   
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
                                            <label class="col-md-2 control-label"> ආයතනය</label>
                                            <div class="col-md-10">
                                                <span id="unitget">
                                                    <select  class="form-control"  name="txt_unit" id="txt_unit" required>
                                                        <option value="">--Select--</option>

                                                    </select>
                                                </span>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> තනතුර </label>
                                            <div class="col-md-10">
                                                <select class="form-control" id='txt_post' name='txt_post' required>                                             
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
                                            <label class="col-md-2 control-label"> පුහුණු වැඩසටහන </label>
                                            <div class="col-md-10">                                                    
                                                <select class="form-control" id='txt_training' name='txt_training' onChange="loadSubjects(this.value);" required>                                             
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
                                            <label class="col-md-2 control-label"> විෂය </label>
                                            <div class="col-md-10">
                                                <span name="subject_list">
                                                    <select  class="form-control"  name="txt_subject" id="txt_subject" required>
                                                        <option value="">--Select--</option>
                                                    </select>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> නිලධාරීන් සංඛ්යාව </label>
                                            <div class="col-md-10">
                                            <input class="form-control" placeholder="" id="officer_count" name="officer_count" type="number">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> කාල සීමාව (පැය) </label>
                                            <div class="col-md-10">
                                            <input class="form-control" placeholder="" id="time_duration" name="time_duration" type="number">
                                            </div>
                                        </div>

                                    <div class="form-group">
                                        <input type="submit" class="btn btn-success" id="addTrainingrequirements" name="addTrainingrequirements"/>
                                        <input type="reset" class="btn btn-default" id="cancelTrainingrequirements" name="cancelTrainingrequirements"/>
                                    </div>
                    				</form>
                				</div>
            				</div>                                                       
                          </fieldset>
                       </div>   

                        <div class="col-md-12">
                            <fieldset class="scheduler-border">
                                <legend class="scheduler-border">විෂය එක් කරන්න</legend>
                                <div class="col-md-11">
                                    <div class="form-horizontal">
                                        <form name="add_subject" id="add_subject" method="POST" action="../../lib/admin_func.php">

                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> පුහුණු වැඩසටහන </label>
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
                                            <label class="col-md-2 control-label"> විෂය </label>
                                            <div class="col-md-10">
                                                <input class="form-control" placeholder="" id="txt_subject" name="txt_subject">
                                            </div>
                                        </div>
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-success" id="saveSubject" name="addSubject"/>
                                        <input type="reset" class="btn btn-default" id="cancelSubject" name="cancelSubject"/>
                                    </div>
                    				</form>
                				</div>
            				</div>                                                       
                         </fieldset>
                      </div>        
                                                              
                        <div class="col-md-12">
                            <fieldset class="scheduler-border">
                                <legend class="scheduler-border">පුහුණු වැඩසටහන එක් කරන්න</legend>
                                <div class="col-md-11">
                                    <div class="form-horizontal">
                                        <form name="add_training_program" id="add_training_program" method="POST" action="../../lib/admin_func.php">

                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> පුහුණු වැඩසටහන </label>
                                            <div class="col-md-10">                                                    
                                            <input class="form-control" placeholder="" id="training_program" name="training_program">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <input type="submit" class="btn btn-success" id="saveTrainingProgram" name="saveTrainingProgram"/>
                                            <input type="reset" class="btn btn-default" id="cancelTrainingProgram" name="cancelTrainingProgram"/>
                                        </div>
                    					</form>
                					</div>
            					</div>                                                       
                            </fieldset>
        				</div>
        				
        				<div class="col-md-12">
                            <fieldset class="scheduler-border">
                                <legend class="scheduler-border">වාර්තා මුද්‍රණය කරන්න</legend>
                                <div class="col-md-11">
                                    <div class="form-horizontal">
                                        <form name="generateReport" id="generateReport" method="POST" action="../../lib/admin_func.php" target="_blank">

                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> දිස්ත්‍රික්කය </label>
                                            <div class="col-md-10">
                                                <select class="form-control" id='district' name='district'> 
                                                                                            
                                                    <?php 
                                                    echo("<option value=''>ALL</option>");
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
                                                                   
                                                    <?php 
                                                    echo("<option value=''>ALL</option>");
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
                                            <label class="col-md-2 control-label"> තනතුර </label>
                                            <div class="col-md-10">
                                                <select class="form-control" id='txt_post' name='txt_post'>                                             
                                                    <?php 
                                                    echo("<option value=''>ALL</option>");
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
                                            <label class="col-md-2 control-label">පුහුණු වැඩසටහන</label>
                                            <div class="col-md-10">                                                    
                                                <select class="form-control" id='txt_training' name='txt_training' onChange="loadSubjects(this.value);">                                             
                                                    <?php 
                                                    echo("<option value=''>ALL</option>");
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
                                            <label class="col-md-2 control-label"> විෂය </label>
                                            <div class="col-md-10">
                                                <span name="subject_list">
                                                    <select  class="form-control"  name="txt_subject" id="txt_subject" >
                                                        <option value="">ALL</option>
                                                    </select>
                                                </span>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <input type="submit" class="btn btn-success" id="generateReport" name="generateReport"/>
                                            <input type="reset" class="btn btn-default" id="cancelgenerateReport" name="cancelgenerateReport"/>
                                        </div>
                    					</form>
                					</div>
            					</div>                                                       
                            </fieldset>
        				</div>  
        				
        				<div class="col-md-12">
                            <fieldset class="scheduler-border">
                                <legend class="scheduler-border">සාරාංශ වාර්තාව</legend>
                                <div class="col-md-11">
                                    <div class="form-horizontal">
                                        <form name="generateReport" id="generateReport" method="POST" action="../../lib/admin_func.php" target="_blank">

                                        
                                        
                                        
										<div class="form-group">
                                            <label class="col-md-2 control-label">පුහුණු වැඩසටහන</label>
                                            <div class="col-md-10">                                                    
                                                <select class="form-control" id='txt_training' name='txt_training' onChange="loadSubjects(this.value);">                                             
                                                    <?php 
                                                    echo("<option value=''>ALL</option>");
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
                                            <input type="submit" class="btn btn-success" id="generateSummery" name="generateSummery"/>
                                            <input type="reset" class="btn btn-default" id="cancelgenerateSummery" name="cancelgenerateSummery"/>
                                        </div>
                    					</form>
                					</div>
            					</div>                                                       
                            </fieldset>
        				</div>  

                    <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-4 offset-md-4">
                        <!-- display training requirements table -->
                        <button onclick="loadTrainingrequirementsTable()" class="btn btn-primary">See All </button>
                    </div>
                    <div class="col-md-12">
                            <div class="panel panel-primary filterable scrollable" style="overflow-y: auto; overflow-x: auto">
                                <div class="panel-heading">
                                    <h3 class="panel-title">පුහුණු අවශ්‍යතා</h3>
                                    <div class="pull-right">
                                        <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filter</button>
                                    </div>
                                </div>
                                <div class="" >
                                    <div class="wrapper">
                                        <table class="table table-responsive" id="test">
                                            <thead>
                                                <tr class="filters">                
                                                    <th><input type="text" class="form-control" placeholder="district" disabled name="district"></th>
                                                    <th><input type="text" class="form-control" placeholder="unit" disabled name="unit"></th>
                                                    <th><input type="text" class="form-control" placeholder="post" disabled name="post"></th> 
                                                    <th><input type="text" class="form-control" placeholder="training" disabled name="training"></th> 
                                                    <th><input type="text" class="form-control" placeholder="subject" disabled name="subject"></th>
                                                    <th><input type="text" class="form-control" placeholder="officer_count" disabled name="officer_count"></th>
                                                    <th><input type="text" class="form-control" placeholder="time_duration" disabled name="time_duration"></th>                                                                        
                                                </tr>
                                            </thead>
                                            <tbody id="training_requirements_table">
                                            </tbody>
                                    	</table>
                                    </div>
                                </div>
                            </div>
                            <!-- end of the training requirements table -->
                        </div>
                    </div>
        </div>
    </body>
<div class="footer">
<?php require_once '../../inc/footer_main.php'; ?>
</div>
</html>