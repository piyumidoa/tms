<?php
session_start();
ob_start();
if(isset($_SESSION['username']) || isset($_SESSION['password'])){
$navbar = "1";
$logindisplay = "0";
$username = $_SESSION['id'];
$password = $_SESSION['password'];
//$usrole = $_SESSION['user_role'];
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

if(isset($_GET["id"])){
    $id = $_GET["id"];
    
    $sql = "SELECT    *                 
            FROM tbl_employee
            INNER JOIN tbl_post ON tbl_employee.emp_post = tbl_post.post_id
            INNER JOIN tbl_unit ON tbl_employee.unit_id = tbl_unit.unit_id
            WHERE emp_id='$id'";
    
    require_once '../../lib/connection.php';    
    $dbobj = new dbConnection();
    $con = $dbobj->getCon();
    
    $result = mysqli_query($con,$sql);
    $nor = $result->num_rows;
    
    if($nor>0){
        while($rec = mysqli_fetch_array($result)){
            $eid = $rec["emp_id"];
            $emptitle = $rec["emp_title"];
            $empname = $rec["emp_name"];
            $emppost = $rec["emp_post"];
            $postname = $rec["post_name"];
            $unitid = $rec["unit_id"];
            $unitname =$rec["unit_name"];
            $empdob = $rec["emp_dob"];
            $empgen = $rec["emp_gender"];
            $empphone = $rec["emp_home_phone"];
            $empmob = $rec["emp_mobile"];
            $empmail = $rec["emp_email"];                    
        }
    }       
}
    mysqli_close($con);
    ?>
<Doctype html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Update Employee | TMS for DOA</title>        
        
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
				//alert(xmlhttp.responseText);
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
        <?php   require_once '../../inc/menu_main.php'; 
                require_once '../../inc/header_main.php';?>   
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
                                            <input type="hidden" name="hid" id="hid" value="<?php echo $eid;?>"/>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">ජා. හැ.ප. අංකය</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" placeholder="" name="txt_nic" id="txt_nic" onChange="loaddata(this.value);" maxlength="12" minlength="12" required value="<?php echo $eid;?>">
                                                <span id="user-availability-status" style="color: red; font-weight: bold; margin-left: 5px;"></span>
                                                <h6 id="f_id_11" style="color: red;  font-weight: bold; margin-left: 5px;"> </h6>
                                            </div>
                                        </div> 
                                            
                                        <div class="form-group">                                            
                                            <label  class="col-md-2 control-label">Title</label>
                                            <div class="col-md-2">
                                                <select id="sel_title" class="form-control chzn-select" name="sel_title" id="sel_title" required="">
                                                    <option value="<?php echo $emptitle;?>"><?php echo $emptitle;?></option>
                                                    <option value="1">Mr</option>
                                                    <option value="2">Mrs</option> 
                                                    <option value="3">Miss</option>
                                                    <option value="4">Ms</option>
                                                </select>
                                            </div>
                                            
                                            <label class="col-md-2 control-label">Gender</label>
                                            <div class="col-md-2">
                                                <select id="gender" class="form-control chzn-select" name="sel_gen" id="" required="">
                                                    <option value="<?php echo $empgen;?>"><?php echo $empgen;?></option>
                                                    <option value="1">Male</option>
                                                    <option value="2">Female</option>   
                                                </select>
                                            </div>
                                            
                                            

                                            <label class="col-md-1 control-label">DOB</label>
                                            <div class="col-md-2">
                                                <div class="input-group col-lg-6">
                                                    <div class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></div>
                                                    <input type="date" id="f_dob" class="form-control datepicker reg_Date" id="txt_dob" name="txt_dob" placeholder="Date" data-date-format="yyyy-mm-dd" required="" value="<?php echo $empdob;?>">
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label  class="col-md-2 control-label">නම</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" placeholder="" name="txt_name" id="txt_name" required value="<?php echo $empname;?>">
                                            </div>
                                        </div>                                       
                                            
                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> තනතුර </label>
                                            <div class="col-md-10">                                     
                                                <select class="form-control"  placeholder="Select Post" id="sel_post" name="sel_post">
                                                    <OPTION value="<?php echo $emppost;?>"><?php echo $postname;?></OPTION>
                                                    <!-- <datalist id="post_list">      -->                                              
                                                    <?php 
                                                    require_once '../../lib/connection.php';

                                                    $dbobj = new dbConnection();
                                                    $con = $dbobj->getCon();
                                                    
                                                    $sql = "SELECT DISTINCT * FROM tbl_post WHERE 1;";
                                                    $result = mysqli_query($con,$sql);
                                                    $nor = $result->num_rows;
                                                    
                                                    if($nor>0){
                                                      while($rec = mysqli_fetch_assoc($result)){
                                                        $pname = $rec["post_name"];
                                                        echo("<option value='".$rec["post_id"]."'>".$pname."</option>");
                                                      }
                                                    } 
                                                    mysqli_close($con);
                                                    ?>
                                        <!--    </datalist> -->
                                                </select>
                                            </div>
                                        </div>
                                            
                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> සේවා ස්ථානය </label>
                                            <div class="col-md-10">
                                                <select class="form-control" placeholder="" id="txt_unit" name="txt_unit" >                                                                
                                                    <OPTION value="<?php echo $unitid;?>"><?php echo $unitname;?></OPTION>
                                                    <?php 
                                                    require_once '../../lib/connection.php';

                                                    $dbobj = new dbConnection();
                                                    $con = $dbobj->getCon();
                                                    
                                                    $sql = "SELECT DISTINCT * FROM tbl_unit WHERE 1;";
                                                    $result = mysqli_query($con,$sql);
                                                    $nor = $result->num_rows;
                                                    
                                                    if($nor>0){
                                                      while($rec = mysqli_fetch_assoc($result)){
                                                        $uname = $rec["unit_name"];
                                                        echo("<option value='".$rec["unit_id"]."'>".$uname."</option>");
                                                      }
                                                    } 
                                                    mysqli_close($con);
                                                    ?>
                                                </select>
                                        <!--   </datalist> -->
                                            </div>
                                        </div>
                                                                                    

                                        <div class="form-group">
                                            <label class="col-md-2 control-label">දුරකථන අංකය</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" placeholder="" id="txt_tp" name="txt_tp" value="<?php echo $empphone;?>">
                                                <h6 id="pphone1" style="color: red;  font-weight: bold; margin-left: 5px;"> </h6>
                                                <h6 id="phonecusreg1" style="color: green;  font-weight: bold; margin-left: 5px;"> </h6>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label">ජංගම </label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" placeholder="" id="txt_mob" name="txt_mob" value="<?php echo $empmob;?>">
                                            </div>
                                        </div>
                                            
                                        <div class="form-group">
                                            <label  class="col-md-2 control-label">ඊ මේල් </label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" placeholder="" id="txt_email" name="txt_email" value="<?php echo $empmail;?>">
                                                <h6 id="email_11" style="color: red;  font-weight: bold; margin-left: 5px;"> </h6>
                                                <h6 id="email_22" style="color: green;  font-weight: bold; margin-left: 5px;"> </h6>
                                            </div>
                                        </div>
                                          
                                        <div class="results"></div>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-success" id="updateEmp" name="updateEmp"/>
                                        <input type="reset" class="btn btn-default" id="cancelEmp" name="cancelEmp"/>
                                    </div>
                                </div>

                                                                </div>
                                                            </div>
                    </form>
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
                                                <!--    <th><input type="text" class="form-control" placeholder="TP" disabled name="etp"></th> -->
                                                    <th><input type="text" class="form-control" placeholder="තනතුර " disabled name="epost"></th> 
                                                    <th><input type="text" class="form-control" placeholder="සේවා ස්ථානය" disabled name="eunit"></th>
                                                    <th><input type="text" class="form-control" placeholder="DOB" disabled name="epost"></th> 
                                                    <th><input type="text" class="form-control" placeholder="Gender" disabled name="eunit"></th>
                                                    <th><input type="text" class="form-control" placeholder="Tel" disabled name="epost"></th> 
                                                    <th><input type="text" class="form-control" placeholder="MOB" disabled name="eunit"></th>       <th><input type="text" class="form-control" placeholder="EMAIL" disabled name="email"></th>                                
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
                                                //
                                                $query = "SELECT    *                 
                                                        FROM tbl_employee
                                                        INNER JOIN tbl_post ON tbl_employee.emp_post = tbl_post.post_id
                                                        INNER JOIN tbl_unit ON tbl_employee.unit_id = tbl_unit.unit_id
                                                        WHERE tbl_post.post_name like '%$epost%' OR
                                                            unit_name like '%$eunit%' OR
                                                        emp_id like '%$enic%' OR
                                                        emp_name like '%$ename%' ";
                                                $result1 = mysqli_query($con, $query);

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

                                                    $sql=$query."LIMIT $start_from, $per_page;"; 
                                                    $result= mysqli_query($con,$sql);
                                                    
                                                while($row = mysqli_fetch_array($result)) {
                                                $eid=$row['emp_id'];
                                                $etit=$row['emp_title'];
                                              echo "<tr>";
                                        
                                              echo "<td>" . $row['emp_id']. "</td>";
                                              echo "<td>" . $etit.". ".$row['emp_name'] . "</td>";
                                              echo "<td>" . $row['post_name'] . "</td>";
                                              echo "<td>" . $row['unit_name'] . "</td>";
                                              echo "<td>" . $row['emp_dob'] . "</td>";
                                              echo "<td>" . $row['emp_gender'] . "</td>";
                                              echo "<td>" . $row['emp_home_phone'] . "</td>";
                                              echo "<td>" . $row['emp_mobile'] . "</td>";
                                             
                                              echo "<td align='center'><a href='edit_department.php?id=$eid'><img src='../../images/icons/edit.png' style='width: 25px; height: 25;' onclick='return confirm(`Do you want to edit the record`);' /></a>";
                                        if($usrole == 1) {
                                         echo "  <a href='del_employee.php?id=$eid'><img src='../../images/icons/delete.jpg' style='width: 25px; height: 25;' onclick='return confirm(`Do you want to delete the record`);'/></a></td>";
                                              }
                                               //    echo "<td align='center'>
                                              echo "</tr>";
                                            }
                                            echo "</table>";
                                            echo "<div class='Paging'>";

                                            //Going to first page
                                            echo "<center><a href='add_employee.php?page=1' class='pagination'>"."First Page</a>";

                                            for ($i=1; $i<=$total_pages; $i++) {

                                            echo "<a  href='add_employee.php?page=$i' class='pagination'>".$i."</a> ";
                                            };
                                            // Going to last page
                                            echo "<a href='add_employee.php?page=$total_pages' class='pagination'>"."Last Page</a></center> ";

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