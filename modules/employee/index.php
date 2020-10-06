<?php
session_start();
ob_start();
if(isset($_SESSION['username']) || isset($_SESSION['password'])){
$navbar = "1";
$logindisplay = "0";
$username = $_SESSION['id'];
$password = $_SESSION['password'];
$now = time();
$inactive = 1;
$_SESSION['timestamp']= time();
//$_SESSION['expire'] = time()+1*60;
$_SESSION['loginTime'] = time();
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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>   
<title>Home | TMS for DOA</title>
 <?php require_once '../../inc/menu_main.php'; ?>  

<link href="../../css/bootstrap.min.css" rel="stylesheet">
        <link href="../../css/custom.css" rel="stylesheet">
        <link href="../../css/style.default.css" rel="stylesheet" id="theme-stylesheet">
        <link href="../../css/font-awesome.css" rel="stylesheet">
        <link href="../../css/alertify.css" rel="stylesheet">
        <link href="../../css/animate.min.css" rel="stylesheet">
        <link href="../../css/owl.carousel.css" rel="stylesheet">
        <link href="../../css/owl.theme.css" rel="stylesheet">
        <link href="../../css/chosen-custom.css" rel="stylesheet">
        <link href="../../css/chosen.css" rel="stylesheet">
        
    <script type="text/javascript" src="../../js/jquery.js"></script>
    <script type="text/javascript" src="../../js/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="../../js/jquery.maskedinput.js"></script>
    <script type="text/javascript" src="../../js/jquery.cookie.js"></script>
    <script type="text/javascript" src="../../js/respond.min.js"></script>
    <script type="text/javascript" src="../../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../../js/bootstrap.js"></script>
    <script type="text/javascript" src="../../js/bootstrap-datepicker.js"></script>
    <script type="text/javascript" src="../../js/front.js"></script>
    <script type="text/javascript" src="../../js/tableSpin.js"></script>
    <script type="text/javascript" src="../../js/alertify.js"></script>
    <script type="text/javascript" src="../../js/chosen.jquery.js"></script>
    <script type="text/javascript" src="../../js/waypoints.min.js"></script>
    <script type="text/javascript" src="../../js/sweetalert.js"></script>
    <script type="text/javascript" src="../../js/bootsnipFilterTable.js"></script>
    <script type="text/javascript" src="../../js/modernizr.js"></script>
    <script type="text/javascript" src="../../js/bootstrap-hover-dropdown.js"></script>
    <script type="text/javascript" src="../../js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="../../js/userManegmantConfig.js"></script>
</head>
<body>
         <div class="row products">

                <div class="container">
                    <div class="col-md-12">
                    <div class="same-height-row">

                        <div class="col-sm-4">
                            <div class="box same-height clickable"   align="center">
                              <a href="add_employee.php"></a>
                              <img src="../../images/traitement-png-4.png" height="100" width="100" class="img-responsive"/>
                              
                                </a>
                              <h3><a href="add_employee.php">Employee Registration</a></h3>
                                
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="box same-height clickable"   align="center">
                                <a href="add_emp_training.php">
                                <img src="../../images/application.jpg" alt="" height="100" width="100" class="img-responsive"/>
                                </a>
                                <h3><a href="add_emp_training.php">Apply Training</a></h3>
                                
                            </div>
                        </div>
                        
                        <div class="col-sm-4">
                            <div class="box same-height clickable"   align="center">
                                <a href="trainee_participation.php"></a>
                                <img src="../../images/desig.jpg" alt="" height="100" width="100" class="img-responsive"/>
                                </a>
                                <h3><a href="trainee_participation.php">Trainee Participation</a></h3>
                                
                            </div>
                        </div>
                        
                        <div class="col-sm-4">
                            <div class="box same-height clickable"   align="center">
                               <a href="select_employee.php"></a>
                                <img src="../../images/Office-Stationery-and-Supply.jpg" alt="" height="100" width="100" class="img-responsive"/>
                               
                                <h3><a href="select_employee.php">Select Trainees</a></h3>
                                
                            </div>
                        </div>
                        
                        <div class="col-sm-4">
                            <div class="box same-height clickable"   align="center">
                                <a href="invite_letter.php">
                                <img src="../../images/letter.png" alt="" height="100" width="100" class="img-responsive"/>
                                </a>
                                <h3><a href="invite_letter.php">Letter Composer</a></h3>
                                
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="box same-height clickable"   align="center">
                                <a href="../../stores_admin/home.php".php"></a>
                                    <img src="../../images/stock4.png" alt="" height="100" width="100" class="img-responsive"/>
                                </a>
                              <h3><a href="select_employee.php">Stock</a></h3>
                                
                          </div>
                        </div>
                    </div>
                    </div>
                </div>
<?php require_once'../../inc/footer_main.php';?>
</body>
</html>