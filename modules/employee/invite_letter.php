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

require_once '../../lib/connection.php';
    
$dbobj = new dbConnection();
$con = $dbobj->getCon();

$sql1="SELECT       *                                           
                    FROM tbl_user                     
                    WHERE user_name='$username' ";

$result = mysqli_query($con,$sql1);

while ($row = mysqli_fetch_array($result)) {

        $empid=$row['user_id'];                               
        $usrole=$row['user_role'];
        
}
mysqli_close($con);
?>
<Doctype html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Com[pose Calling Letter | TMS for DOA</title>        
        <?php   require_once '../../inc/menu_main.php'; 
                require_once '../../inc/header_main.php';?>   
    </head>
 <body>
        <?php //require_once '../include/Include_Main.php'; ?>
        <div class="container-fluid">               
            <div class="row"> 
                <div class="container-fluid">               
                    <div class="row"> 

                        <div class="col-md-16">
                            <fieldset class="scheduler-border">
                                <legend class="scheduler-border">Compose Letter</legend>
                                <div class="col-md-11">
                                    <div class="form-horizontal">
                                        <form name="emp_reg" id="emp_reg" method="POST" action="invite_letter_print.php" target="_blank">

                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Subject No.</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" placeholder="" name="txt_sno" id="txt_sno" >
                                               
                                            </div>
                                        </div> 
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Date</label>
                                            <div class="col-md-10">
                                                <input type="date" class="form-control" placeholder="" name="txt_date" id="txt_date" >
                                                
                                            </div>
                                        </div> 
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Program</label>
                                            <div class="col-md-10">
                                                <select class="form-control" placeholder="" id="txt_train" name="txt_train">
                                                    <option>--Select--</option>
                                            <!--     <datalist id="unit_list">                     -->                           
                                                    <?php 
                                                    require_once '../../lib/connection.php';

                                                    $dbobj = new dbConnection();
                                                    $con = $dbobj->getCon();
                                                    
                                                    $sql = "SELECT DISTINCT * FROM tbl_training WHERE 1;";
                                                    $result = mysqli_query($con,$sql);
                                                    $nor = $result->num_rows;
                                                    
                                                    if($nor>0){
                                                      while($rec = mysqli_fetch_assoc($result)){
                                                        $tname = $rec["train_name"];
                                                        echo("<option value='".$rec["train_name"]."'>".$tname."</option>");
                                                      }
                                                    } 
                                                    mysqli_close($con);
                                                    ?>
                                                </select>
                                              
                                            </div></div>
                                        
                                         
                                            <div class="form-group">
                                            <label class="col-md-2 control-label">Place</label>
                                            <div class="col-md-10">
                                                <select class="form-control" placeholder="" id="unit_name" name="unit_name">
                                                    <option>--Select--</option>
                                            <!--     <datalist id="unit_list">                     -->                           
                                                    <?php 
                                                    require_once '../../lib/connection.php';

                                                    $dbobj = new dbConnection();
                                                    $con = $dbobj->getCon();
                                                    
                                                    $sql = "SELECT DISTINCT * FROM tbl_unit WHERE 1;";
                                                    $result = mysqli_query($con,$sql);
                                                    $nor = $result->num_rows;
                                                    
                                                    if($nor>0){
                                                      while($rec = mysqli_fetch_assoc($result)){
                                                        $tname = $rec["unit_name"];
                                                        echo("<option value='".$rec["unit_name"]."'>".$tname."</option>");
                                                      }
                                                    } 
                                                    mysqli_close($con);
                                                    ?>
                                                </select>
                                              
                                            </div>
                                            
                                        </div> 
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Programme Start Date</label>
                                            <div class="col-md-10">
                                                <input type="date" class="form-control" placeholder="" name="start_date" id="start_date" >
                                                </div>
                                            </div>
                                             <div class="form-group">
                                            <label class="col-md-2 control-label">Programme End Date</label>
                                            <div class="col-md-10">
                                                <input type="date" class="form-control" placeholder="" name="end_date" id="end_date" >
                                                </div>
                                            </div>
                                               <div class="form-group">
                                            <label class="col-md-2 control-label">Programme Time</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" placeholder="" name="time" id="time" >
                                                </div>
                                            </div>
                                     <!--   <div class="form-group">
                                            <label class="col-md-2 control-label">Copies</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" placeholder="" name="txt_cps" id="txt_cps">                                          
                                            </div>
                                        </div> -->
                                              <div class="results"></div>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-success" id="composeLetter" name="composeLetter" />
                                        <input type="reset" class="btn btn-default" id="cancelLetter" name="cancelfrm"/>
                                    </div>
                                     </form>  
                                </div>
                                                                </div>
                                                            </div>
                   
                </div>
            </div>                                                     
                                        </fieldset>
                                                        </div>     
                                        
                                            
                                            
                                        