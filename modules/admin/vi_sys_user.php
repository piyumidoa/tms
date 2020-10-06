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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>View User Information | TDSS for DOA</title>
    <link rel="stylesheet" type="text/css" href="../../css/menu.css"/>
    <link href="../../css/view_page.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="../../css/back_ground.css"/>
    <script type="text/javascript">
        var selected = $("input[name='radioid']:checked").val();
    </script>
</head>
<body>
    <?php
    require_once '../../lib/header.php';
    
        if(isset($_GET ["msg"])){
        if ($_GET ["msg"]==1){
            echo "<p style='color: #00ff00;' align='center'>Record successfully added!</p>";
        }
        else if ($_GET ["msg"]==2){
            echo "<p style='color: #ff0000;' align='center'>Error occured. Record not  added!</p>";
        }
        else if($_GET ["msg"]==3){
            echo "<p style='color: #ff0000;' align='center'>Error occured. Record update failed!</p>";
        }
        else if ($_GET ["msg"]==4){
            echo "<p style='color: #00ff00;' align='center'>Record successfully Updated!</p>";
        }    
        else if ($_GET ["msg"]==5){
            echo "<p style='color: #00ff00;' align='center'>Record successfully deleted!</p>";
        }
        else if ($_GET ["msg"]==6){
            echo "<p style='color: #ff0000;' align='center'>Error occured. Record delete failed!</p>";
        }
        
        }
        ?>
    <br/>

    <fieldset style="">
<legend>User Information</legend>
<table width="96%">
<form method="post" action="vi_sys_user.php">
    <tr>
        <td colspan="8"><label>Enter Search Keyword</label>
            <input type="text" id="txtemp_search" name="txtusr_search" style="width: 150px; height: 30px"/>
            <input type="submit" value="Search" name="btnsearch" style="width: 80px; height: 30px"/></td>
        <td width="10%" align="right"><a href="add_user.php">
                <img src="../../images/icons/add1.png" style="width: 60px; height: 60px;"/></a></td>
    </tr>
    </form>
</table>

<?php
require_once("../../lib/connection.php");

$dbobj = new dbConnection();
$con = $dbobj->getCon();

$search=@$_POST["txtusr_search"];

require_once '../../lib/per_page.php';
//Now select all from table
$query = "SELECT * FROM tbl_user WHERE user_id like '%$search%' OR user_name like '%$search%' ";       ;
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


$sql="SELECT * FROM tbl_user 
      WHERE user_id like '%$search%' OR user_name like '%$search%'
      LIMIT $start_from, $per_page ";
$result=mysqli_query($con,$sql);

//$result = mysqli_query($con,"SELECT * FROM tbl_user WHERE emp_id = %$search% OR user_name = $search OR user_id = $search");

echo "<table border='1' width='100%' contenteditable='false'>
<tr>
        <th><label></label></th>
        <th><label></label></th>
	<th><label>User Name</label></th>
	<th><label>User Role</label></th>
	<th><label>Status</label></th>
</tr>";

while($row = mysqli_fetch_array($result)) {
  $uid = $row['user_id'];
  $empid = $row['user_id'];
  $usname = $row['user_name'];

  $urole = $row['user_role'];
  $utype = substr($urole, 0,1);
    if($utype=="1"){
        $usrole = "Admin";
    }
    else if ($utype=="2"){
        $usrole = "Branch Head";
    }
    else if ($utype=="3"){
        $usrole = "Administrative Officer";
    }
    else if ($utype=="4"){
        $usrole = "Director";
    }
    if($row['user_status']=="1"){
        $ustatus = "<div style='color: #00ff00; font-size: larger;'>Active </div>";
    }
        else{
        $ustatus = "<div style='color: #ff0000; font-size: larger;'>Inactive </div>";
        }
  echo "<tr>";
  echo "<td align='center'><a href='edit_user.php?id=$uid'><img src='../../images/icons/download (1).jpg' style='width: 25px; height: 25;' onclick='return confirm(`Do you want to edit the record`);'/></a></td>";
  echo "<td align='center'><a href='del_user.php?id=$uid'><img src='../../images/icons/delete_icon.png' style='width: 25px; height: 25;' onclick='return confirm(`Do you want to delete the record`);'/></a></td>";
  echo "<td>" . $row['user_name'] . "</td>";
  echo "<td>" . $usrole . "</td>";
  echo "<td align='center'>" . $ustatus . "</td>";
  echo "</tr>";
}
echo "</table>";
echo "<div class='Paging'>";

//Going to first page
echo "<center><a href='vi_sys_user.php?page=1' class='pagination'>"."First Page</a>";

for ($i=1; $i<=$total_pages; $i++) {

echo "<a  href='vi_sys_user.php?page=$i' class='pagination'>".$i."</a> ";
};
// Going to last page
echo "<a href='vi_sys_user.php?page=$total_pages' class='pagination'>"."Last Page</a></center> ";

mysqli_close($con);
        ?>
</div>
    </fieldset><div align="center">
    <a href="../../home.php"><img src="../../images/icons/images (9).jpg" width="50px" height="50px" /></a>
</div>
<br/>

<footer>
  <p align="center">&copy; All rights reserved by Department of Agriculture</p>
</footer>

</body>
</html>