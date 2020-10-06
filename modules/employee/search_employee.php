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
                    WHERE tbl_user.user_name='$username' ";

$result = mysqli_query($con,$sql1);

while ($row = mysqli_fetch_array($result)) {

        $empid=$row['user_id'];                               
        $usrole=$row['user_role'];
        }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>View Employee Information | QMS for DOA</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
 
        <style>
            fieldset{
                width: 70%;
                align: central;
                margin-left: 15%;
            }
            input[type=text]{
                border: 0;
            }
        </style>
        </head>
<body background="../../images/icons/header.jpg" onload="doOnLoad();">
<?php
require_once '../../lib/header.php';

        if(isset($_GET ["msg"])){
        if($_GET ["msg"]==1){
            echo "<p style='color: #00ff00;' align='center'>Record successfully Updated</p>";            
        }
        else if ($_GET ["msg"]==2){
            echo "<p style='color: #ff0000;' align='center'>Error occured. Record update failed</p>";
        }
        else if ($_GET ["msg"]==3){
            echo "<p style='color: #00ff00;' align='center'>Record successfully deleted!</p>";
        }
        else if ($_GET ["msg"]==4){
                 echo "<p style='color: #ff0000;' align='center'>Error occured.Record delete failed!</p>";
        }
        else if ($_GET ["msg"]==5){
            echo "<p style='color: #00ff00;' align='center'>Record successfully added!</p>";
        }
        else if ($_GET ["msg"]==6){
                 echo "<p style='color: #ff0000;' align='center'>Error occured.Record not added!</p>";
        }
        }
require_once '../../lib/connection.php';
    
$dbobj = new dbConnection();
$con = $dbobj->getCon();

if(isset($_GET["id"]))
    $id = $_GET["id"];

    $sql2 = "SELECT * 
            FROM tbl_employee
            where emp_id='$id'";
    $result2 = mysqli_query($con,$sql2);

    while ($row = mysqli_fetch_array($result2)) {

        $empid=$row['emp_id'];
        $enic = $row['emp_nic'] ;
        $etit= $row['emp_title'] ;
        $ename= $row['emp_name'] ;
        $einitial=$row['emp_initials'];
        $epost =$row ['emp_post'];
        $empservice = $row['emp_service'];
        $egrade = $row['emp_grade'];
        $edob =$row['emp_dob'] ;
        $eadd = $row['emp_address'] ;
        $egnd = $row['gnd_id'];
        $ediiserv =$row['emp_diffi_service_year'];
        $esalcode =$row['emp_salary_code'];
        $esalscale = $row['emp_salary_scale'];       
        $sponame=$row['spouse_name'];
        $spoccup = $row['spou_occup'];
        $espoffi = $row['spouse_office'];
        $spoffiadd=$row['spose_office_address'];
        $sposalcode =$row['spouse_salary_code'];
        $equarterusage =$row['emp_quarter_usage'];
        $ehpn = $row['emp_home_phone'] ;
        $mob =  $row['emp_mobile'] ;
        $eemai= $row['emp_email'] ;

        if($row['emp_gender'] == 0){
            $gen='Male';
        }
        else{
            $gen='Female';
            }
        if($row['emp_marital_status'] == 0){
            $mstat = 'Single';
        }
        else {
            $mstat = 'Married';
        }
        if ($row ['emp_resi_10km']==0){
          $eresi10m="No";
        }else{
          $eresi10m="Yes";
        }
        if ($row ["emp_job_status"]==0){
          $empjobstat = "Probationary";
        }else{
          $empjobstat="Permenant";
        }
        if($row['spoquart_usage']==0){
          $spoquyears="No";
        }else{
          $spoquyears=$row['spoquart_usage']."Years";
        }
        if ($row ['emp_resi_nature']==1){
          $eresinature="Rental House";
        }else if ($row ['emp_resi_nature']==2) {
          $eresinature="Private House";
        }else if ($row ['emp_resi_nature']==3) {
          $eresinature="Parental House";
        }else{
          $eresinature="Spouse's House";
        }

        $edirdivid =$row['dir_div_id'];
        $eunitid= $row['unit_id'];
 
$sql4="SELECT * FROM tbl_dir_div WHERE  dir_div_id='$edirdivid'";
$result4 = mysqli_query($con,$sql4);

    while ($row = mysqli_fetch_array($result4)) {
       $edirdiv =$row['dir_div_name'];
}

$sql6="SELECT * FROM tbl_unit WHERE  unit_id='$eunitid'";
$result6 = mysqli_query($con,$sql6);

    while ($row = mysqli_fetch_array($result6)) {
       $eunit = $row['unit_name'];
}  
$sql7="SELECT * FROM tbl_qualification WHERE  emp_id='$id'";
    $result7 = mysqli_query($con,$sql7);

    while ($row = mysqli_fetch_array($result7)) {
       $distancekm = $row['distance_km'];
       $nodischi = $row['no_dischild'];
        if($row['rent_resi_marks']==10){
          $rentresi = "Yes";
        }else{
          $rentresi = "No";
        }
       if($row['dif_walk']==10){
          $diffwalik = "Yes";
        }else{
          $diffwalik = "No";
        }
       if($row['no_work_spouse']==10){
          $nowork= "Yes";
        }else{
          $nowork = "No";
        }
       $true_details = $row['true_detals'];
       $rec_quarter = $row['quarter_assignable'];
       $spou_list = $row['spouse_listed'];
       $home_loan = $row['home_loan'];
       $have_house =$row['have_house'];
    }     
    }
    
mysqli_close($con);
?>

<div id="fragment-1" class="ui-tabs-panel">
<fieldset><legend>Employee  Information</legend>
<table style="width:90%;" border="0" align="center">
<tr>
  <td><label>Employee ID</label></td>
        <td><?php echo $empid;?></td>
</tr>   
<tr>
  <td><label>Title</label></td>
  <td><?php echo $etit;?></td>        
</tr>
<tr>
  <td><label>Name with initials</label></td>
        <td><?php echo $ename;?></td>        
</tr>
<tr>
  <td><label>Names Donated By Initials</label></td>
        <td><?php echo $einitial;?></td>
</tr>
<tr>
  <td><label>Date of Birth</label></td>
        <td><?php echo $edob;?></td>
</tr>
<tr>
  <td><label>NIC No.</label></td>
        <td><?php echo $enic;?></td>       
</tr>
<tr>
  <td><label>Marital Status</label></td>
  <td><?php echo $mstat;?></td>
</tr>
<tr>
  <td><label>Gender</label></td>
  <td><?php echo $gen;?></td>
</tr>
</table></fieldset>
          </div>
    
          <fieldset><legend>Contact Information</legend>
          <div id="fragment-2" class="ui-tabs-panel ui-tabs-hide">
      
<table border="0" style="width:90%;"  align="center">
<tr>
    <td rowspan="2"><label for="txtemp_address">Address</label></td>
    <td rowspan="2"><?php echo $eadd; ?> </td>    
</tr>
<tr></tr>
<tr>
    <td><label>Residence Phone</label></td>
    <td><?php echo $ehpn;?></td>
</tr>
    <tr>
        <td><label>Mobile</label></td>
        <td><?php echo $mob;?></td>
    </tr>
<tr>
    <td><label>Email</label></td>
    <td><?php echo $eemai;?></td>
</tr>
<tr><td>Nature of the Current Residence</td>
    <td><?php echo $eresinature;?></td></tr>
<tr>
  <td>Whether having a residence within 10 Miles from Peradeniya?  </td>
  <td><?php echo $eresi10m;?></td>
</tr>
</table>  
                    </fieldset>
              </div>
                               
          <div id="fragment-3" class="ui-tabs-panel ui-tabs-hide">
                    <fieldset><legend>Service Information</legend>
      
                        <table border="0" align="center" style="width:90%;" >
<tr>
    <td><label>Service</label></td>
    <td><?php echo $empservice;?></td>
</tr>                       
<tr>
    <td><label>Post</label></td>
    <td><?php echo $epost;?></td>
</tr>
<tr>
      <td><label>Grade</label></td>
      <td><?php echo $egrade;?></td>      
</tr>
<tr>
      <td><label>Directorial Division</label></td>
      <td><?php echo $edirdiv;?></td>
</tr>
<tr>
      <td><label>Unit Division</label></td>
      <td><?php echo $eunit;?></td>
</tr>
<tr>
     <td><label>Whether the post is permanent?</label></td>
      <td><?php echo $empjobstat;?></td> 
</tr>
<tr>
     <td><label>Whether you have done difficult Service?</label></td>
     <?php
     if ($ediiserv==0){
        $edir ="No";
     }
     else {
        $edir ="Yes    Years:".$ediiserv;
     }
     ?>
      <td><?php echo $edir; ?></td> 
</tr>
         <tr>
     <td><label>Whether you have resided in a Quarters?</label></td>
     <?php
     if ($equarterusage==0){
        $equ ="No";
     }
     else {
        $equ ="Yes    Years:".$equarterusage;
     }
     ?>
      <td><?php echo $equ;?></td> 
</tr>                   
        <tr>
     <td><label>Salary Code</label></td>
      <td><?php echo $esalcode;?></td> 
</tr>
         <tr>
     <td><label>Salary Scale</label></td>
      <td><?php echo $esalscale;?></td> 
</tr>
</table>
                 </fieldset>   
                </div>
                    <div id="fragment-3" class="ui-tabs-panel ui-tabs-hide">
                    <fieldset><legend>Spouse's Information</legend>
      
                        <table border="0" align="center" style="width:90%;" >
<tr>
    <td><label>Name of the Spouse</label></td>
    <td><?php echo $sponame;?></td>
</tr>                       
<tr>
    <td><label>Occupation of the Spouse</label></td>
    <td><?php echo $spoccup;?></td>
</tr>
<tr>
      <td><label>Office of the Spouse</label></td>
      <td><?php echo $espoffi;?></td>      
</tr>
<tr>
      <td><label>Office Address of the Spouse</label></td>
      <td><?php echo $spoffiadd;?></td>
</tr>
<tr>
      <td><label>Salary Code</label></td>
      <td><?php echo $sposalcode;?></td>
</tr>
<tr>
     <td><label>Whether resided in a Quarters?</label></td>
      <td><?php echo $spoquyears;?></td> 
</tr>
</table>
                 </fieldset>   
                </div>
     
        <div>
 <fieldset><legend>Children Information</legend>    
        <?php
    require_once("../../lib/connection.php");

    $dbobj = new dbConnection();
    $con = $dbobj->getCon();
    
    $sql5 = "SELECT * FROM tbl_children WHERE emp_id = '$empid' ";
    $result5 = mysqli_query($con,$sql5);

    $nor = $result5->num_rows;
        if($nor>0){
      
    echo "<table border='1' width='100%'  align='center'>
<tr>"; if($usrole == "1"){ 
       echo" <th><label></label></th>
        <th><label></label></th>";
         }
  echo"      <th><label>Child Name</label></th>
  <th><label>Date of Birth</label></th>
        <th><label>School</label></th>
</tr>";

    while($row = mysqli_fetch_array($result5)) {
       
        $did= $row['child_id'];
        
        echo "<tr>";   
              if($usrole == "1"){ 
        echo "<td align='center'><a href='edit_dependant.php?id=$did&eid=$empid'><img src='../../images/icons/download (1).jpg' style='width: 15px; height: 20;'/></a></td>";
        echo "<td align='center'><a href='del_dependant.php?id=$did&eid=$empid'><img src='../../images/icons/delete_icon.png' style='width: 15px; height: 20;'/></a></td>";       
        }
        echo "<td>" . $row['child_name']. "</td>";
        echo "<td>" . $row['child_dob'] . "</td>";
        echo "<td>" . $row['child_school'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
        mysqli_close($con);

      }
     else {
     echo'<p align="center">No record found</p>';
 }   
    ?>
     </fieldset>
            </div>
            <div id="fragment-3" class="ui-tabs-panel ui-tabs-hide">
                    <fieldset><legend>Reasons for the Application</legend>
      
                        <table border="0" align="center" style="width:90%;" >
<tr>
    <td><label>Distance from House</label></td>
    <td><?php echo $distancekm;?></td>
</tr>                       
<tr>
    <td><label>Disabled Children</label></td>
    <td><?php echo $nodischi;?></td>
</tr>
<tr>
      <td><label>Difficault to walk</label></td>
      <td><?php echo $diffwalik;?></td>      
</tr>
<tr>
      <td><label>Residing in a rent House</label></td>
      <td><?php echo $rentresi;?></td>
</tr>
<tr>
      <td><label>No house for Spouse or non working spouse</label></td>
      <td><?php echo $nowork;?></td>
</tr>
</table>
                 </fieldset>   
                </div>
         <?php if($usrole == "2"){ ?>
          <div id="fragment-3" class="ui-tabs-panel ui-tabs-hide">
                    <fieldset><legend>Verify by Branch Head</legend>
       <form name="conf_info" action="search_employee.php" method="POST">
                        <table border="0" align="center" style="width:90%;" >
                          
      <tr>
    <td><label>The above information provided by the Employee is true</label></td>
    <td><select name="true_info" required>
      <option value="">--Select--</option>
      <option value="1">Yes</option>
      <option value="0">No</option>
    </select></td>
</tr>                       
<tr>
    <td><label>I recomend the said Employee </label></td>
    <td><select name="rec_emp" required>
      <option value="">--Select--</option>
      <option value="1">Yes</option>
      <option value="0">No</option>
    </select></td>
</tr>
<tr>
      <td>Employee or Spouse Listed in the queue for quaters</label></td>
      <td><select name="spou_listed" required>
        <option value="">--Select--</option>
        <option value="1">Yes</option>
        <option value="0">No</option>
    </select></td>      
<input type="hidden" name="hemp_id" value="<?php echo $empid;?>"/>
</tr>
<tr><td colspan="2">
  <input type="submit" value="Add" name="add" style="width: 80px; height: 30px;"/></td>
</tr>
</table>
                 </fieldset> 
                 </form>  
                </div>

                  <?php   } else if ($usrole == "3" || $usrole == "4" || $usrole=="1"){?>
                    <div id="fragment-3" class="ui-tabs-panel ui-tabs-hide">
                    <fieldset><legend>Verified by The Head of the Branch</legend>
      
                        <table border="0" align="center" style="width:90%;" >
<tr>
  <?php
  if ($true_details==1){
    $truedetails = "Yes";
  }else{
    $truedetails = "No";
  }
  if ($rec_quarter==1){
    $recquarter = "Yes";
  }else{
    $recquarter = "No";
  }
  if ($spou_list==1){
    $spoulist = "Yes";
  }else{
    $spoulist = "No";
  }
  ?>
    <td><label>The above information provided by the Employee is true</label></td>
    <td><?php echo $truedetails;?></td>
</tr>                       
<tr>
    <td><label>I recomend the said Employee </label></td>
    <td><?php echo $recquarter;?></td>
</tr>
<tr>
      <td><label>Listed for quaters employee or spouse</label></td>
      <td><?php echo $spoulist;?></td>      
</tr>
</table>
                 </fieldset>   
                </div>
                 <?php   if ($usrole == "3"){?>
                    <div id="fragment-3" class="ui-tabs-panel ui-tabs-hide">
                    <fieldset><legend>Verify Information</legend>
       <form name="conf_info" action="search_employee.php" method="POST">
                        <table border="0" align="center" style="width:90%;" >
                          
      <tr>
    <td><label>Home/ Property Loan</label></td>
    <td><select name="home_loan" required>
      <option value="">--Select--</option>
      <option value="1">Yes</option>
      <option value="0">No</option>
    </select></td>
</tr>                       
<tr>
    <td><label>Having House within 10 Miles from Peradeniya</label></td>
    <td><select name="have_house" required>
      <option value="">--Select--</option>
      <option value="1">Yes</option>
      <option value="0">No</option>
    </select></td>
    <input type="hidden" name="hemp_id" value="<?php echo $empid;?>"/>
</tr>
<tr><td colspan="2">
  <input type="submit" value="Add" name="add" style="width: 80px; height: 30px;"/></td>
</tr>
</table>
                 </fieldset> 
                 </form>  
                </div>
                 <?php  } 

                  else if ($usrole == "4" || $usrole=="1"){?>
                  <div id="fragment-3" class="ui-tabs-panel ui-tabs-hide">
                    <fieldset><legend>Verified by the Administrative Officer</legend>
       <form name="conf_info" action="search_employee.php" method="POST">
        <table border="0" align="center" style="width:90%;" >
                       
  <?php
  if ($home_loan==1){
    $homeloan = "Yes";
  }else{
    $homeloan = "No";
  }
  if ($have_house==1){
    $havehouse = "Yes";
  }else{
    $havehouse = "No";
  }
  ?>
<tr>
    <td><label>Having Home/ Property Loan</label></td>
    <td><?php echo $homeloan;?></td>
</tr>                       
<tr>
    <td><label>Having House within 10 Miles from Peradeniya</label></td>
    <td><?php echo $havehouse;?></td>
</tr>
</table>
                 </fieldset> 
                 </form>  
                </div>
                      <?php   if ($usrole == "4"){?>
      <div id="fragment-3" class="ui-tabs-panel ui-tabs-hide">
                    <fieldset><legend>Verify by the Director</legend>
       <form name="conf_info" action="search_employee.php" method="POST">
                        <table border="0" align="center" style="width:90%;" >
                          
      <tr>
    <td><label>The service of the employee is needed</label></td>
    <td><select name="service_need" required>
      <option value="">--Select--</option>
      <option value="10">Yes</option>
      <option value="0">No</option>
    </select></td>
</tr>                       
<tr>
    <td><label>The said empoyee can be listed to the queue</label></td>
    <td><select name="emp_listed" required>
      <option value="">--Select--</option>
      <option value="1">Yes</option>
      <option value="0">No</option>
    </select></td>
</tr>
<input type="hidden" name="hemp_id" value="<?php echo $empid;?>"/>
</tr>
<tr><td colspan="2">
  <input type="submit" value="Add" name="add" style="width: 80px; height: 30px;"/></td>
</tr>
</table>
                 </form>  
               </fieldset>
                </div>

                      <?php }} }?>
    <div align="center" width="50%" height="30px">
    <a href="vi_emp_personal.php">
    <input type="button" value="Cancel" style="width: 80px; height: 30px"/> </a>   
    </div>
<footer>
  <p align="center">&copy; All rights reserved Department of Agriculture</p>
</footer>           
</body>
</html> 

<?php
if (isset($_POST["add"])){

require_once'../../lib/connection.php';

$dbobj = new dbConnection();
$con = $dbobj->getCon();
$sql1="SELECT       *                                           
                    FROM tbl_user                     
                    WHERE tbl_user.user_name='$username' ";

$result = mysqli_query($con,$sql1);

while ($row = mysqli_fetch_array($result)) {

 //       $empid=$row['user_id'];                               
        $usrole=$row['user_role'];
        }

//        echo $usrole;
if ($usrole==2){

  $true_info = $_POST["true_info"];
$rec_emp = $_POST["rec_emp"];
$spou_listed = $_POST["spou_listed"];
$empid =$_POST["hemp_id"];

$sql1="UPDATE tbl_qualification 
       SET true_detals='$true_info',
        quarter_assignable ='$rec_emp',
        spouse_listed = '$spou_listed',
        verify_cc=1
    WHERE emp_id='$empid'";

} else if ($usrole==3){

  $home_loan = $_POST["home_loan"];
  $have_house = $_POST["have_house"];
  $empid =$_POST["hemp_id"];

$sql1="UPDATE tbl_qualification 
    SET home_loan='$home_loan',
        have_house = '$have_house',
        verify_ao = 1
    WHERE emp_id='$empid'";


} else if ($usrole==4){

$service_need = $_POST["service_need"];
$emp_listed = $_POST["emp_listed"];
$empid = $_POST["hemp_id"];

$sql1="UPDATE tbl_qualification s1, (
    SELECT s2.serv_req, s2.emp_listed, s2.total_marks
    FROM tbl_qualification s2
    WHERE s2.emp_id='$empid') s3
    SET s1.serv_req=(s3.serv_req+'$service_need'),
        s1.total_marks=(s3.total_marks+'$service_need'),
        s1.emp_listed = '$emp_listed'
    WHERE emp_id='$empid'";

}
$query_result1 = mysqli_query($con,$sql1);
mysqli_close($con);

if($query_result1>0){
    header("Location:vi_emp_personal.php?msg=1");
}
 else {
    header("Location:vi_emp_personal.php?msg=2");
}
        }
        
        ?>