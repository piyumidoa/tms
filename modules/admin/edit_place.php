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
        <title> Edit Director Division | TMS for DOA</title>        
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
    <?php
    require_once '../../inc/admin_menu.php';
    require_once '../../lib/header.php';
    require_once '../../lib/connection.php';

    $dbobj = new dbConnection();
    $con = $dbobj->getCon();

    if(isset($_GET["id"])){
    
        // read db table
    $id = $_GET["id"];
    $query = "SELECT * FROM tbl_dir_div WHERE dir_div_id='$id'";
    $result = mysqli_query($con,$query);

    while ($row = mysqli_fetch_array($result)) {

        $dir_div_name = $row["dir_div_name"];
    }
    mysqli_close($con);
    }

?>
        <?php require_once '../../inc/admin_menu.php'; 
        //require_once '../include/Include_Main.php'; ?>
        <div class="container-fluid">               
            <div class="row"> 
                <div class="container-fluid">               
                    <div class="row"> 
  <?php  // result edit
if(isset($_GET["msg"])) {

        $msg = $_GET["msg"];
        
        if( $msg == 1) {
			echo "Edited successfully";
		}
		else {
			echo "Eding failed";	
		}
}
?>
                        <div class="col-md-16">
                            <fieldset class="scheduler-border">
                                <legend class="scheduler-border">Director Divisions</legend>
                                <div class="col-md-11">
                                    <div class="form-horizontal">
                                        <form name="emp_reg" id="emp_reg" method="POST" action="../../lib/admin_func.php">

                                        <div class="form-group">
                                            <label class="col-md-2 control-label"> Director Division </label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" placeholder="" id="txt_dir_div" name="txt_dir_div"
                                                 value="<?php if(isset($dir_div_name)) { echo $dir_div_name; } ?>" >                                                 
                                               
                                            </div>
                                        </div>
                                        <!-- Hide/Disable this input-->
                                        <input type="text" class="form-control" placeholder="" id="txt_dir_id" name="txt_dir_id"
                                                 value="<?php if(isset($id)) { echo $id; } ?>" > 
                                       
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-success" id="saveEmp" name="editPlace"/>
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
                 
                        <div class="col-md-6">
                            <div class="panel panel-primary filterable scrollable" style="overflow-y: auto; overflow-x: auto">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Director Divisions</h3>
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
                                                
                                                $query = "SELECT    *                 
                                                        FROM tbl_dir_div";
                                                 
                                                    $result= mysqli_query($con,$query);
                                                    
                                                while($row = mysqli_fetch_array($result)) {
                                                $ddid=$row['dir_div_id'];
                                            
                                              echo "<tr>";
                                        
                                              echo "<td>" . $row['dir_div_id']. "</td>";
                                         
                                              echo "<td>" . $row['dir_div_name'] . "</td>";
                                              
                                              
                                              
                                              echo "<td align='center'><a href='edit_place.php?id=$ddid'><img src='../../images/icons/edit.png' style='width: 25px; height: 25;' onclick='return confirm(`Do you want to edit the record`);' /></a>
                                       
                                              <a href='del_dir_div.php?id=$ddid'><img src='../../images/icons/delete.jpg' style='width: 25px; height: 25;' onclick='return confirm(`Do you want to delete the record`);'/></a></td>";
                                              
                                               //    echo "<td align='center'>
                                              echo "</tr>";
                                            }
                                            echo "</table>";
                                            echo "<div class='Paging'>";

                                            //Going to first page
                                      //      echo "<center><a href='add_place.php?page=1' class='pagination'>"."First Page</a>";

                                      //      for ($i=1; $i<=$total_pages; $i++) {

//                                            echo "<a  href='add_plac.php?page=$i' class='pagination'>".$i."</a> ";
                                       //     };
                                            // Going to last page
                                       //     echo "<a href='add_plac.php?page=$total_pages' class='pagination'>"."Last Page</a></center> ";
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