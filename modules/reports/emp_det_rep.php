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
} else {
    header('Location:../../index.php');
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>   
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title></title>
<script type="text/javascript">
function prnt(){
	document.getElementById("divpanel").style.display='none';
	window.print();
}
</script>
</head>

<body>
<table width="800" border="0">
<tr>
<td>
    <img src="../../images/icons/logo1.jpg"/>
</td>
</tr>

<?php
    $search=$_POST["txtempid"];
    //echo $search;            
    
    require_once("../../lib/connection.php");
    
    $dbobj = new dbConnection();
    $con = $dbobj->getCon();
	
    $sql="SELECT * FROM tbl_employee WHERE emp_id = '$search'";
    $result= mysqli_query($con,$sql);
	$nor = $result->num_rows;
	//echo($nor);
    $row = mysqli_fetch_assoc($result);
        
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
    $retireDate = date('Y-m-d', strtotime('+60 years', strtotime($edob)));

    //    $retireDate = date("Y-m-d", strtotime(date("Y-m-d", strtotime($edob)) . "+ 60year"));
?>
    <table width="80%" align="center">
        <tr><td colspan="2" align="center"><h1 style="font-weight: bold;">Employee Details</h1></td></tr>
        <tr><td colspan="2" align="right"><?php echo date("l jS \of F, Y,  h:i:s A") ; ?></td></tr>
        <tr><td colspan="2"><hr /></td></tr>
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
</tr><?php

//        <tr>
  //          <td>Predicted Retirement Date <?php echo ': '.$retireDate;?>
  <?php //</td>
        //</tr>
    ?>
       
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
        <tr>
            <td></td>
        </tr>
    </table>           
           
<tr><td colspan="3" align="center"><hr /></td></tr>   
<tr><td colspan="4" align="center">
    <div id="divpanel" align="center">
<input type="button" value="Print" onclick="prnt();" style="width: 80px; height: 30px" />&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="button" value="Close" onclick="window.close();" style="width: 80px; height: 30px" />
</div></td></tr>
<tr>
<td colspan="2" align="center">
<hr />
<i></i>
</td>
</tr>
</table>
</body>
</html>