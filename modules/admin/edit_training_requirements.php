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
        
        function loadSubjectsTable(subjectId){
    	    
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
                    document.getElementById("subjects_table").innerHTML=xmlhttp.responseText;
                }
              }
                 var url = "../../lib/emp_func.php?subjects_table="+subjectId;
                
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
		    
		    echo "<div class='alert alert-success' role='alert'>Edited successfully</div>";
		    
		} else if($msg == 2) {
		    
		    echo "<div class='alert alert-danger' role='alert'>Eding failed</div>";
		    
		} else if($msg == 3) {
		    
		    echo "<div class='alert alert-info' role='alert'>No Results Found</div>";
		}
}
// edit
    require_once '../../lib/connection.php';

    $dbobj = new dbConnection();
    $con = $dbobj->getCon();

    if(isset($_GET["training_program"])){
    
        // read db table
        $training_program_id = $_GET["training_program"];
        $query = "SELECT * FROM tbl_training_program WHERE id='$training_program_id'";
    $result = mysqli_query($con,$query);

    while ($row = mysqli_fetch_array($result)) {

        $training_program_name = $row["training_program"];
    }
    mysqli_close($con);
    }
    
    if(isset($_GET["subject"])){
        
        // read db table
        $subject_id = $_GET["subject"];
        $query = "SELECT * FROM tbl_training_subject WHERE id='$subject_id'";
        $result = mysqli_query($con,$query);
        
        while ($row = mysqli_fetch_array($result)) {
            
            $subject_name = $row["subject"];
        }
        mysqli_close($con);
    }

?>					

                        <div class="col-md-12">
                            <fieldset class="scheduler-border">
                                <legend class="scheduler-border">විෂය සංස්කරණය කරන්න</legend>
                                <div class="col-md-11">
                                    <div class="form-horizontal">
                                        <form name="add_subject" id="add_subject" method="POST" action="../../lib/admin_func.php">

                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> පුහුණු වැඩසටහන </label>
                                            <div class="col-md-10">                                                    
                                                <select class="form-control" id='txt_training' name='txt_training' onchange="loadSubjectsTable(this.value)">                                             
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
                                                <input class="form-control" placeholder="" id="txt_subject" name="txt_subject" 
                                                value="<?php if(isset($subject_name)) { echo $subject_name; } ?>">
                                            </div>
                                        </div>
                                        
                                        <input type="hidden" id="subject_id" name="subject_id" 
                                        value="<?php if(isset($subject_id)) { echo $subject_id; } ?>">
                                        
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-success" id="editSubject" name="editSubject"/>
                                        <input type="reset" class="btn btn-default" id="cancelSubject" name="cancelSubject"/>
                                    </div>
                    				</form>
                				</div>
            				</div>                                                       
                         </fieldset>
                      </div>        
                      
                      <div class="row">
                    
                    <div class="col-md-12">
                            <div class="panel panel-primary filterable scrollable" style="overflow-y: auto; overflow-x: auto">
                                <div class="panel-heading">
                                    <h3 class="panel-title">විෂය</h3>
                                    <div class="pull-right">
                                        <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filter</button>
                                    </div>
                                </div>
                                <div class="" >
                                    <div class="wrapper">
                                        <table class="table table-responsive" id="test">
                                            <thead>
                                                <tr class="filters">                
                                                    <th><input type="text" class="form-control" placeholder="id" disabled name="id"></th>
                                                    <th><input type="text" class="form-control" placeholder="subject" disabled name="subject"></th>                                                                      
                                                </tr>
                                            </thead>
                                            <tbody id="subjects_table">
                                            </tbody>
                                    	</table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                                                              
                        <div class="col-md-12">
                            <fieldset class="scheduler-border">
                                <legend class="scheduler-border">පුහුණු වැඩසටහන සංස්කරණය කරන්න</legend>
                                <div class="col-md-11">
                                    <div class="form-horizontal">
                                        <form name="edit_training_program" id="edit_training_program" method="POST" action="../../lib/admin_func.php">

                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> පුහුණු වැඩසටහන </label>
                                            <div class="col-md-10">                                                    
                                            <input class="form-control" placeholder="" id="training_program" name="training_program"
                                            value="<?php if(isset($training_program_name)) { echo $training_program_name; } ?>" >
                                            </div>
                                        </div>
                                        <input type="hidden" id="training_program_id" name="training_program_id" 
                                        value="<?php if(isset($training_program_id)) { echo $training_program_id; } ?>">

                                        <div class="form-group">
                                            <input type="submit" class="btn btn-success" id="editTrainingProgram" name="editTrainingProgram"/>
                                            <input type="reset" class="btn btn-default" id="cancelTrainingProgram" name="cancelTrainingProgram"/>
                                        </div>
                    					</form>
                					</div>
            					</div>                                                       
                            </fieldset>
        				</div>
        			
                    <div class="row">
                    
                    <div class="col-md-12">
                            <div class="panel panel-primary filterable scrollable" style="overflow-y: auto; overflow-x: auto">
                                <div class="panel-heading">
                                    <h3 class="panel-title">පුහුණු වැඩසටහන</h3>
                                    <div class="pull-right">
                                        <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filter</button>
                                    </div>
                                </div>
                                <div class="" >
                                    <div class="wrapper">
                                        <table class="table table-responsive" id="test">
                                            <thead>
                                                <tr class="filters">                
                                                    <th><input type="text" class="form-control" placeholder="id" disabled name="id"></th>
                                                    <th><input type="text" class="form-control" placeholder="training" disabled name="training"></th>                                                                       
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            
                                            require_once '../../lib/connection.php';
                                            
                                            $dbobj = new dbConnection();
                                            $con = $dbobj->getCon();
                                            
                                            $sql = "SELECT DISTINCT * FROM tbl_training_program WHERE 1;";
                                            $result = mysqli_query($con,$sql);
                                            $nor = $result->num_rows;
                                            
                                            if($nor>0) {
                                                while($row = mysqli_fetch_assoc($result)) {
                                                    
                                                  echo "<tr>";                                            
                                                  echo "<td>".$row['id']."</td>";
                                                  echo "<td>".$row['training_program']."</td>";
                                                  echo "<td> <a href='edit_training_requirements.php?training_program=".$row['id']."'><img src='../../images/icons/edit.png' style='width: 25px; height: 25;'></td>";
                                                  echo "</tr>";
                                                }
                                            }
                                            mysqli_close($con); 
                                        ?>
                                            </tbody>
                                    	</table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
    </body>
<div class="footer">
<?php require_once '../../inc/footer_main.php'; ?>
</div>
</html>