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
        <title>Register Employee | TMS for DOA</title>        
        <?php   require_once '../../inc/menu_main.php'; 
                require_once '../../inc/header_main.php';?>   
        <script>
            function loaddata(empId){
	//alert(empId);
		if(empId=="")
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
			//	alert(xmlhttp.responseText);
				document.getElementById("user-availability-status").innerHTML = xmlhttp.responseText;
                        }
		  }
		  var url;
			url = "../../lib/emp_func.php?empId="+empId;
			
		xmlhttp.open("GET",url,true);
		xmlhttp.send();
	}	
	
        </script>
    </head>
    <body>
        <?php //require_once '../include/Include_Main.php'; ?>
        <div class="container-fluid">               
            <div class="row"> 
                <div class="container-fluid">               
                    <div class="row"> 

                        <div class="col-md-16">
                            <fieldset class="scheduler-border">
                                <legend class="scheduler-border">Employee Details</legend>
                                <div class="col-md-11">
                                    <div class="form-horizontal">
                                        <form name="emp_reg" id="emp_reg" method="POST" action="../../lib/emp_crud.php">

                                        <div class="form-group">
                                            <label class="col-md-2 control-label">ජා. හැ.ප. අංකය</label>
                                            <div class="col-md-10">
                                                <input type="number" class="form-control" placeholder="" name="txt_nic" id="txt_nic" onchange="loaddata(this.value);" maxlength="12" minlength="12">
                                                <span id="user-availability-status" style="color: #0000ff; font-weight: bold; margin-left: 5px;"></span>
                                            </div>
                                        </div> 
                                            
                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> Training </label>
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
                                                        echo("<option value='".$rec["train_id"]."'>".$tname."</option>");
                                                      }
                                                    } 
                                                    mysqli_close($con);
                                                    ?>
                                                </select>
                                        <!--   </datalist> -->
                                            </div>
                                        </div>
                                        
                                            <div class="form-group">                                            
                                            <label  class="col-md-2 control-label">District</label>
                                            <div class="col-md-2">
                                                <select id="sel_title" class="form-control chzn-select" name="sel_dist" id="sel_dist" required="">
                                                    <option value="">--Select--</option>
                                                    <?php 
                                                    require_once '../../lib/connection.php';

                                                    $dbobj = new dbConnection();
                                                    $con = $dbobj->getCon();
                                                    
                                                    $sql = "SELECT DISTINCT * FROM tbl_district WHERE 1;";
                                                    $result = mysqli_query($con,$sql);
                                                    $nor = $result->num_rows;
                                                    
                                                    if($nor>0){
                                                      while($rec = mysqli_fetch_assoc($result)){
                                                        $dname = $rec["district_name"];
                                                        echo("<option value='".$rec["district_id"]."'>".$dname."</option>");
                                                      }
                                                    } 
                                                    mysqli_close($con);
                                                    ?>
                                                </select>
                                            </div>                                                                                  


                                            <label class="col-md-1 control-label">Date</label>
                                            <div class="col-md-2">
                                                <div class="input-group col-lg-6">
                                                    <div class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></div>
                                                    <input type="date" id="f_dob" class="form-control datepicker reg_Date" id="txt_app_date" name="txt_app_date" placeholder="Date" data-date-format="yyyy-mm-dd">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label">රාත්‍රි නවාතැන් අව අවශ්‍ය වේද??</label>
                                            <div class="col-md-2">
                                                 <select id="sel_title" class="form-control chzn-select" name="hostel_req" id="sel_title" required="">
                                                    <option value="">--Select--</option>
                                                    <option value="1">Yes</option>
                                                    <option value="0">No</option>
                                                 </select>
                                                <h6 id="pphone1" style="color: red;  font-weight: bold; margin-left: 5px;"> </h6>
                                                <h6 id="phonecusreg1" style="color: green;  font-weight: bold; margin-left: 5px;"> </h6>
                                            </div>
                                        </div>
                                        <div class="results"></div>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-success" id="saveEmp" name="applyEmp"/>
                                        <input type="reset" class="btn btn-default" id="cancelEmp" name="cancelEmp"/>
                                    </div>
                                </div>

                                                                </div>
                                                            </div>
                    </form>
                    <?php
                    if(isset($_GET["msg"])){

                        $msg = $_GET["msg"];
                        
                        if($msg == "1") {
                            
                            echo "<script type=\"text/javascript\">alert('Successfully applied')</script>";
                        }
                        if($msg == "5") {
                                                        
                            echo "<script type=\"text/javascript\">alert('You cannot apply this training within 3 years after last apply date.')</script>";
                        }
                        
                    }
                    ?>
                </div>
            </div>                                                       
                                        </fieldset>
                                                        </div>                           
                 
                        <div class="col-md-12">
                            <div class="panel panel-primary filterable scrollable" style="overflow-y: auto; overflow-x: auto">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Employee Details</h3>
                                    <div class="pull-right">

                                        <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filter</button>
                                    </div>
                                </div>
                                <div class="" >
                                    <div class="wrapper">
                                        <table class="table farmer_details_save_Table table-responsive" id="test">
                                            <thead>
                                                <tr class="filters">
                
                                                    <th><input type="text" class="form-control" placeholder="NIC" disabled name="enic"></th>
                                                    <th><input type="text" class="form-control" placeholder="Name" disabled name="ename"></th>
                                                <!--    <th><input type="text" class="form-control" placeholder="TP" disabled name="etp"></th> 
                                                    <th><input type="text" class="form-control" placeholder="තනතුර " disabled name="epost"></th> 
                                                    <th><input type="text" class="form-control" placeholder="සේවා ස්ථානය" disabled name="eunit"></th>
                                                    <th><input type="text" class="form-control" placeholder="Date" disabled name="epost"></th>  -->
                                                    <th><input type="text" class="form-control" placeholder="District" disabled name="eunit"></th>
                                                    <th><input type="text" class="form-control" placeholder="Training" disabled name="epost"></th> 
                                                    <th><input type="text" class="form-control" placeholder="Date" disabled name="eunit"></th>
                                                    <th><input type="text" class="form-control" placeholder="රාත්‍රි නවාතැන් අව" disabled name="eunit"></th>
                                                                                                     
                                                    <th><Label><b>Edit / Delete</b></label></th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $enic=@$_POST["enic"];
                                                $ename=@$_POST["ename"];
                                                $eunit=@$_POST["eunit"];
                                                $epost=@$_POST["epost"];
                                                
                                                require_once '../../lib/per_page.php';
                                                require_once '../../lib/connection.php';
                                                $obj = new dbconnection();
                                                $con = $obj->getcon();
                                                //Now select all from table
                                                /*INNER JOIN tbl_post ON tbl_employee.emp_post = tbl_post.post_id
                                                        INNER JOIN tbl_unit ON tbl_employee.unit_id = tbl_unit.unit_id
                                                        INNER JOIN tbl_apply_training ON tbl_employee.emp_id = tbl_apply_training.emp_id
                                                        INNER JOIN tbl_apply_training ON tbl_training.train_id = tbl_apply_training.train_id
                                                        WHERE post_name like '%$epost%' OR
                                                              unit_name like '%$eunit%' OR
                                                              emp_id like '%$enic%' OR
                                                              emp_name like '%$ename%' ";*/
                                                $query = "SELECT    *  FROM tbl_apply_training
                                                        INNER JOIN tbl_employee ON tbl_apply_training.emp_id = tbl_employee.emp_id
                                                        INNER JOIN tbl_training ON tbl_apply_training.train_id = tbl_training.train_id
                                                        INNER JOIN tbl_district ON tbl_apply_training.district_id = tbl_district.district_id
                                                        WHERE tbl_employee.emp_id like '%$enic%'";                                                        
                                          /*      $result1 = mysqli_query($con, $query);

                                                // Count the total records
                                                $total_records = $result1->num_rows;

                                                //Using ceil function to divide the total records on per page
                                                $total_pages = ceil($total_records / $per_page);
                                                //echo $total_pages;

                                                if (isset($_GET['page'])) {
                                                $page = $_GET['page'];
                                                }
                                                else {
                                                $page=1;
                                                }

                                                // Page will start from 0 and Multiple by Per Page
                                                $start_from = ($page-1) * $per_page;
                                           * ."LIMIT $start_from, $per_page;";
*/
                                                    $sql=$query; 
                                                    $result= mysqli_query($con,$sql);
                                                    
                                                while($row = mysqli_fetch_array($result)) {
                                                $eid=$row['emp_id'];
                                                 $hsr=$row['hostel_req'];
                                                
                                                if($hsr==1){
                                                    $hs="අවශ්‍ය වේ";       
                                                }  else {
                                                      $hs="අවශ්‍ය නොවේ "; 
                                                }
                                            //    $etit=$row['emp_title'];
                                              echo "<tr>";
                                        
                                              echo "<td>" . $row['emp_id']. "</td>";
                                              echo "<td>" . $row['emp_name'] . "</td>";
                                           //   echo "<td>" . $row['post_name'] . "</td>";
                                            //  echo "<td>" . $row['unit_name'] . "</td>";
                                              echo "<td>" . $row['district_name'] . "</td>";
                                              echo "<td>" . $row['train_name'] . "</td>";
                                              echo "<td>" . $row['apply_date'] . "</td>";
                                              echo "<td>" . $hs . "</td>";
                                              
                                              
                                              echo "<td align='center'><a href='edit_emp_training.php?id=$eid'><img src='../../images/icons/edit.png' style='width: 25px; height: 25;' onclick='return confirm(`Do you want to edit the record`);' /></a>";
                                       if($usrole == 1) {
                                      echo"     <a href='edit_emp_training.php?id=$eid'><img src='../../images/icons/delete.jpg' style='width: 25px; height: 25;' onclick='return confirm(`Do you want to delete the record`);'/></a></td>";
                                              
                                                }
                                                //    echo "<td align='center'>
                                              echo "</tr>";
                                             
                                            }
                                            echo "</table>";
                                         /*   echo "<div class='Paging'>";

                                            //Going to first page
                                            echo "<center><a href='add_emp_training.php?page=1' class='pagination'>"."First Page</a>";

                                            for ($i=1; $i<=$total_pages; $i++) {

                                            echo "<a  href='add_emp_training.php?page=$i' class='pagination'>".$i."</a> ";
                                            };
                                            // Going to last page
                                            echo "<a href='add_emp_training.php?page=$total_pages' class='pagination'>"."Last Page</a></center> ";
*/
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
            </div>
        </div>
    </body>
<div class="footer">
<?php require_once '../../inc/footer_main.php'; ?>
</div>
</html>