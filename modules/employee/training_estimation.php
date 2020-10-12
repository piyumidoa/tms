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
<title>Training Estimation | TMS for DOA</title>
<?php require_once '../../inc/menu_main.php';
require_once '../../inc/header_main.php';?>
</head>
<body>
<div class="container-fluid">
<div class="row">
<legend class="scheduler-border"> වියදම් ඇස්තමේන්තුව </legend>
<?php
if(isset($_GET["msg"])){
$msg = $_GET["msg"];

if( $msg == 1) {

echo "<div class='alert alert-success' role='alert'>Estimation details added successfully</div>";

} else {
echo "<div class='alert alert-danger' role='alert'>Estimation details adding failed</div>";
}

}
?>
<div class="form-horizontal">
<form name="training_estimation" id="training_estimation" method="POST" action="../../lib/add_training_estimation.php" target="_blank">
<div class="form-group">
<label class="col-md-2 control-label"> පුහුණු වැඩසටහන </label>
<div class="col-md-10">
<select class="form-control" placeholder="" id="txt_train" name="txt_train">
<option>--Select--</option>
<!-- <datalist id="unit_list"> -->
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
<!-- </datalist> -->
</div>
</div>
<div class="form-group">
<label class="col-md-2 control-label">ස්ථානය </label>
<div class="col-md-10">
<input type="text" class="form-control" placeholder="" name="place" id="place" >

</div>
</div>
<div class="form-group">
<label class="col-md-2 control-label">District</label>
<div class="col-md-2">
<select id="sel_title" class="form-control chzn-select" name="district_id" id="district_id" required="">
<option value="">--Select--</option>
<?php
require_once '../../lib/connection.php';

$dbobj = new dbConnection();
$con = $dbobj->getCon();

$sql = "SELECT DISTINCT * FROM tbl_district WHERE 1;";
$result = mysqli_query($con,$sql);
$nor = $result->num_rows;

if($nor>0) {
while($rec = mysqli_fetch_assoc($result)){
$dname = $rec["district_name"];
echo("<option value='".$rec["district_id"]."'>".$dname."</option>");
}
}
mysqli_close($con);
?>
</select>
</div>
</div>

<div class="form-group row" >
<label class="col-md-2 control-label">සම්පත් දායක දීමනා</label>
<div class="col-md-4">
<table id="resource_persons_contribution">
<tr>
<td>Date</td>
<td>Number of Hours</td>
<td>Payment per Hour</td>
</tr>
<tr>
<td><input type='date' class='form-control' name='training_date1' id='training_date1'></td>
<td><input type='number' class='form-control' name='no_of_hours1' id='no_of_hours1' onchange="loaddata();"></td>
<td><input type='number' class='form-control' name='payment_per_hour1' id='payment_per_hour1' step='0.01' onchange="loaddata();"></td>
</tr>
</table>
<button type="button" onClick="addNewRow()">Add new row</button>
</div>
</div>
<input class='form-control' name='no_of_days' id='no_of_days' type='hidden' value='1'>

<div class="form-group">
<label class="col-md-2 control-label">ඉන්ධන වියදම(රුපියල්)</label>
<div class="col-md-3">
<input type="number" class="form-control" placeholder="" name="fuel_costs" id="fuel_costs" step="0.01" onchange="loaddata();">
(ප්‍රධාන කාර්යාලයේ සිට පුහුණුව පැවැත්වෙන ස්ථානය දක්වා ලිපිද්‍රව්‍ය ප්‍රවාහනය, සම්පත්දායකයින් ප්‍රවාහනය)
</div>
</div>
<div class="form-group">
<label class="col-md-2 control-label">පුහුණු ආධාරක වියදම(රුපියල්)</label>
<div class="col-md-3">
<input type="number" class="form-control" placeholder="" name="training_aids" id="training_aids" step="0.01" onchange="loaddata();">
(සම්පත් දායකයන්ගේ ඉල්ලීම අනුව ලබාදීම සඳහා)
</div>
</div>
<div class="form-group">
<label class="col-md-2 control-label">එකතුව(රුපියල්)</label>
<div class="col-md-3">
<input type="number" class="form-control" placeholder="" name="total_cost" id="total_cost" step="0.01" disabled >

</div>
</div>

<div class="form-group">
<label class="col-md-2 control-label">වැය විෂය</label>
<div class="col-md-10">
<input type="text" list="vote_list" class="form-control" name="vote"/>
<datalist id="vote_list">
<option>හැකියා වර්ධන හා පුහුණු (285-02-03-0-2401)</option>
<option>හැකියා වර්ධන හා පුහුණු 2 (285-02-03-0-2401)</option>
</datalist>
</div>
</div>

<div class="form-group">
<input type="submit" class="btn btn-default" id="submitEstimation" name="submitEstimation" value="Generate Estimation Letter"/>
<input type="reset" class="btn btn-default" id="cancelEmp" name="cancelEmp"/>
</div>
</form>
</div>
</div>
</div>
<form name="training_estimation_letter" id="training_estimation_letter" method="POST" action="../../lib/training_estimation_letter.php">

</form>
<script>
/* function to calculate the total cost */
function loaddata(){
        
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
                document.getElementById("total_cost").value = xmlhttp.responseText;
}
         }

var no_of_days = document.getElementById("no_of_days").value;
var total = 0;
for( var i = 1 ; i <= no_of_days ; i ++ ) {
var no_of_hours = document.getElementById("no_of_hours"+i).value;
var payment_per_hour = document.getElementById("payment_per_hour"+i).value;
var sum = no_of_hours * payment_per_hour;
//total_resource = total_resource + sum;
total = total + sum;
}
var training_aids = document.getElementById("training_aids").value;
var fuel_costs = document.getElementById("fuel_costs").value;
if( training_aids != "" ) {
total = total + eval(training_aids);
}
if( fuel_costs != "" ) {
total = total + eval(fuel_costs);
}

         var url;
            url = "../../lib/add_training_estimation.php?total="+total;

            
        xmlhttp.open("GET",url,true);
        xmlhttp.send();
    }    

/* add new entry for resource persons contribution */
function addNewRow() {
var table = document.getElementById("resource_persons_contribution");
var rows_count = table.rows.length;
var row = table.insertRow(rows_count);
var cell1 = row.insertCell(0);
var cell2 = row.insertCell(1);
var cell3 = row.insertCell(2);
cell1.innerHTML = "<input type='date' class='form-control' name='training_date"+rows_count+"' id='training_date"+rows_count+"'>";
cell2.innerHTML = "<input type='number' class='form-control' name='no_of_hours"+rows_count+"' id='no_of_hours"+rows_count+"' onchange='loaddata();'>";
cell3.innerHTML = "<input type='number' class='form-control' name='payment_per_hour"+rows_count+"' id='payment_per_hour"+rows_count+"' step='0.01' onchange='loaddata();'>";
document.getElementById("no_of_days").value = rows_count;

}
    
</script>
<div class="footer">
<?php require_once '../../inc/footer_main.php'; ?>
</div>
</body>
</html>