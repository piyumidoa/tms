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
				document.getElementById("txtemp_name").value = xmlhttp.responseText;
                        }
		  }
		  var url;
			url = "../../lib/admin_func.php?empId="+empId;
			
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
                                <legend class="scheduler-border">User Details</legend>
                                <div class="col-md-11">
                                    <div class="form-horizontal">
                                        <form name="emp_reg" id="emp_reg" method="POST" action="../../lib/admin_func.php">
                                           
                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> User ID </label>
                                            <div class="col-md-10">                                             
                                                <input type="text" class="form-control chzn-select" name="txtemp_id" id="txtemp_id" onblur="loaddata(this.value);"/>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> User Name </label>
                                            <div class="col-md-10">                             
                                                <input type="text" class="form-control chzn-select" name="txtusr_name" id="txtusr_name"/>
                                            </div>
                                        </div>
                                            
                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> Password </label>
                                            <div class="col-md-10">                             
                                                <input type="password" class="form-control chzn-select" name="txtusr_pass" id="txtusr_pass" onkeyup="CheckPasswordStrength(this.value);" placeholder="Please type password"/>
                                            </div>
                                        </div>
                                            
                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> Confirm Password </label>
                                            <div class="col-md-10">                             
                                                <input type="password" class="form-control chzn-select" name="txtcon_pass" id="txtconf_pass" onkeyup="checkPass(); return false;" placeholder="Please type password"/>
                                            </div>
                                        </div>
                                            
                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> User Role </label>
                                            <div class="col-md-10">                             
                                                <select id="selrole" name="selrole" class="form-control chzn-select">
                                                    <option value="">--Select--</option>
                                                    <option value="1">Admin</option>
                                                    <option value="2">User</option>
                                                </select>
                                            </div>
                                        </div>
                                            
                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> Status </label>
                                            <div class="col-md-10">                             
                                                <input type="radio"  name="radusr_stat" id="radStat_a"  value="1" checked />
                                                    <label for="radStat_a">Active</label>
                                                    <input type="radio"  name="radusr_stat" id="radStat_i" value="0" />
                                                    <label for="radStat_i">Inactive</label>
                                            </div>
                                        </div>
                                                                         
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-success" id="saveEmp" name="addUser"/>
                                        <input type="reset" class="btn btn-default" id="cancelEmp" name="cancelEmp"/>
                                    </div>
                                
                        
                    </form>
                </div>
                                </div> 
                        </div>                                                      
                                        </fieldset>
                                                        </div>                  
                                                                                
        
                        <div class="col-md-6">
                            <div class="panel panel-primary filterable scrollable" style="overflow-y: auto; overflow-x: auto">
                                <div class="panel-heading">
                                    <h3 class="panel-title">User Details</h3>
                                    <div class="pull-right">

                                        <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filter</button>
                                    </div>
                                </div>
                                <div class="" >
                                    <div class="wrapper">
                                        <table class="table farmer_details_save_Table table-responsive" id="test">
                                            <thead>
                                                <tr class="filters">
                
                                                    <th><input type="text" class="form-control" placeholder="ID" disabled name="enic"></th>
                                                    <th><input type="text" class="form-control" placeholder="Name" disabled name="ename"></th>
                                                <!--    <th><input type="text" class="form-control" placeholder="TP" disabled name="etp"></th> 
                                                    <th><input type="text" class="form-control" placeholder="තනතුර " disabled name="epost"></th> 
                                                    <th><input type="text" class="form-control" placeholder="සේවා ස්ථානය" disabled name="eunit"></th>
                                                    <th><input type="text" class="form-control" placeholder="Date" disabled name="epost"></th>  -->
                                                   
                                                                                                     
                                                    <th><Label><b>Edit / Delete</b></label></th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                
                                                $tname=@$_POST["txt_train"];
                                                                                             
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
                                                $query = "SELECT    *                 
                                                        FROM tbl_user
                                                        ";
                                                        
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
                                                $uid=$row['user_id'];
                                            //    $etit=$row['emp_title'];
                                              echo "<tr>";
                                        
                                              echo "<td>" . $row['user_id']. "</td>";
                                          //    echo "<td>" . $row['emp_name'] . "</td>";
                                          //    echo "<td>" . $row['post_name'] . "</td>";
                                           //   echo "<td>" . $row['unit_name'] . "</td>";
                                              echo "<td>" . $row['user_name'] . "</td>";
                                              
                                              
                                              
                                              echo "<td align='center'><a href='edit_training.php?id=$uid'><img src='../../images/icons/edit.png' style='width: 25px; height: 25;' onclick='return confirm(`Do you want to edit the record`);' /></a>
                                       
                                           <a href='del_training.php?id=$uid'><img src='../../images/icons/delete.jpg' style='width: 25px; height: 25;' onclick='return confirm(`Do you want to delete the record`);'/></a></td>";
                                              
                                               //    echo "<td align='center'>
                                              echo "</tr>";
                                            }
                                            echo "</table>";
                                            echo "<div class='Paging'>";

                                            //Going to first page
                                            echo "<center><a href='add_training.php?page=1' class='pagination'>"."First Page</a>";

                                            for ($i=1; $i<=$total_pages; $i++) {

                                            echo "<a  href='add_training.php?page=$i' class='pagination'>".$i."</a> ";
                                            };
                                            // Going to last page
                                            echo "<a href='add_training.php?page=$total_pages' class='pagination'>"."Last Page</a></center> ";

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