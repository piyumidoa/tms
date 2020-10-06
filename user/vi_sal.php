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
    header('Location:../index.php');
}
// Checking the time now when home page starts.
if ($now > $_SESSION['expire']) {
    header('Location:../logout.php');
        }
} 
else {
    header('Location:../index.php');
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>View User Information | HRMS for KMC</title>
    <link href="../../css/view_page.css" rel="stylesheet" type="text/css"/>
    <script type="text/javascript">
        var selected = $("input[name='radioid']:checked").val();
    </script>
    <link rel="stylesheet" type="text/css" href="../../css/menu.css"/>

</head>
<body background="../images/icons/header.jpg ">
    <?php
        require_once 'menu.php';
        echo "<br/>";
        ?>
    <fieldset style="">
<legend>Salary Information</legend>
<table width="96%">
    <form method="post" action="vi_sal.php">
    <tr>
        <td colspan="8"><label>Enter Search Keyword</label>
            <input type="text" id="txtemp_search" name="txtsal_search" style="width: 150px; height: 30px"/>
            <input type="submit" value="Search" name="btnsearch" style="width: 80px; height: 30px"/></td>
        <td width="10%" align="right"><a href="add_sal.php">
                <img src="../images/icons/add1.png" style="height:40px;  width:100%;"/></a></td>
    </tr>
    </form>
</table>

<?php
require_once("../lib/connection.php");

$dbobj = new dbConnection();
$con = $dbobj->getCon();

$search=@$_POST["txtsal_search"];
//Now select all from table
$sql = "SELECT * 
        FROM tbl_sal_type 
        WHERE sal_type_code like '%$search%' 
        OR sal_initial like '%$search%' 
        OR sal_maximum like '%$search%' ";
$result=mysqli_query($con,$sql);


echo "<table border='1' width='100%' contenteditable='false'>
<tr>
	<th><label>Salary Code</label></th>
	<th><label>Initial</label></th>
	<th><label>Years</label></th>
	<th><label>First Slab</label></th>
        <th><label>Years</label></th>
	<th><label>Second Slab</label></th>
	<th><label>Years</label></th>
	<th><label>Third Slab</label></th>
        <th><label>Years</label></th>
	<th><label>Fourth Slab</label></th>
	<th><label>Years</label></th>
        <th><label>Fifth Slab</label></th>
	<th><label>Maximum</label></th>
</tr>";

while($row = mysqli_fetch_array($result)) {
  $sid = $row['sal_type_id'];
  echo "<tr>";
  echo "<td>" . $row['sal_type_code']. "</td>";
  echo "<td>" . $row['sal_initial'] . "</td>";
  echo "<td>" . $row['sal_ini_yrs']. "</td>";
  echo "<td>" . $row['sal_slab_fst'] . "</td>";
  echo "<td>" . $row['sal_fst_yrs']. "</td>";
  echo "<td>" . $row['sal_slab_snd'] . "</td>";
  echo "<td>" . $row['sal_snd_yrs']. "</td>";
  echo "<td>" . $row['sal_slab_trd'] . "</td>";
  echo "<td>" . $row['sal_trd_yrs']. "</td>";
  echo "<td>" . $row['sal_slab_forth'] . "</td>";
  echo "<td>" . $row['sal_forth_yrs']. "</td>";
  echo "<td>" . $row['sal_slab_fifth'] . "</td>";
  echo "<td>" . $row['sal_maximum'] . "</td>";
  echo "</tr>";
}
echo "</table>";
echo "<div class='Paging'>";

//Going to first page
echo "<center><a href='vi_sal.php?page=1' class='pagination'>"."First Page</a>";

for ($i=1; $i<=$total_pages; $i++) {

echo "<a  href='vi_sal.php?page=$i' class='pagination'>".$i."</a> ";
};
// Going to last page
echo "<a href='vi_sal.php?page=$total_pages' class='pagination'>"."Last Page</a></center> ";

mysqli_close($con);
        ?>
</div>
</fieldset>
<br/>
<footer>
  <p align="center">&copy; All rights reserved by Kandy Municipal Council 2014</p>
</footer>

</body>
</html>