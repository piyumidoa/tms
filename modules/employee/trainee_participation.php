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
        <title>Register Employee Participation | TMS for DOA</title>        
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
        <?php //require_once '../include/Include_Main.php'; ?>
        <div class="container-fluid">               
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
                                                        WHERE emp_participate = 1                                                 
                                                        ORDER BY tbl_apply_training.apply_date, emp_dob ASC";
                                                /*        
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
                                                //"LIMIT $start_from, $per_page;"
                                                
                                                // Page will start from 0 and Multiple by Per Page
                                                $start_from = ($page-1) * $per_page;
*/
                                                    $sql=$query; 
                                                    $result= mysqli_query($con,$sql);
                                                    
                                                while($row = mysqli_fetch_array($result)) {
                                                $eid=$row['emp_id'];
                                            //    $etit=$row['emp_title'];
                                              echo "<tr>";
                                              $id=$row["emp_id"];
                                              $app_id=$row["app_id"];
                                              echo "<td>" . $row['emp_id']. "</td>";
                                              echo "<td>" . $row['emp_name'] . "</td>";
                                           //   echo "<td>" . $row['post_name'] . "</td>";
                                            //  echo "<td>" . $row['unit_name'] . "</td>";
                                              echo "<td>" . $row['district_name'] . "</td>";
                                              echo "<td>" . $row['train_name'] . "</td>";
                                              echo "<td>" . $row['apply_date'] . "</td>";

                                              
                                              //<select name='sel_emp' ><option value='1'>Yes</option><option value='0'>No</option>   </select>
                                               //    echo "<td align='center'>
                                              echo "</tr>";
                                            }
                                            echo "</table>";
                                            echo "<div class='Paging'>";
/*
                                            //Going to first page
                                            echo "<center><a href='add_employee.php?page=1' class='pagination'>"."First Page</a>";

                                            for ($i=1; $i<=$total_pages; $i++) {

                                            echo "<a  href='add_employee.php?page=$i' class='pagination'>".$i."</a> ";
                                            };
                                            // Going to last page
                                            echo "<a href='add_employee.php?page=$total_pages' class='pagination'>"."Last Page</a></center> ";
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
    </div>
</body>
</html>
                                            
                                            
                                        