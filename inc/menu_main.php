<!--         *** TOPBAR ***
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
 _________________________________________________________ -->
<div id="top" class="container-fluid hidden-print">
            <div class="container ">
                <div class="col-md-6 offer">
                  
                </div>
                <div class="col-md-6">
                           
                    <ul class="menu">

                        
                        <li><a href="change_password.php">Change Password</a> &nbsp;&nbsp;<a>User : <?php echo $username; ?></a> </li>
                        <li><a href="../../logout.php" id="system_log"><span class="glyphicon glyphicon-log-in"></span>&nbsp;Logout</a></li>
                    </ul>
                </div>
            </div>


        </div>
        <div class="navbar navbar-default yamm" role="navigation" id="navbar">
            <div class="container">
                <div class="navbar-header">


                    <div class="navbar-buttons">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                            <span class="sr-only">Toggle navigation</span>
                            <i class="fa fa-align-justify"></i>
                        </button>

                    </div>
                </div>


               <div class="navbar-collapse collapse" id="navigation" align="center">

                    <ul class="nav navbar-nav navbar-left">
                       <li>
                            <li class=""><a href="index.php"  data-hover="dropdown">Home</a>
                            </li>
                            
                           
                            
                        
                            <li class=""><a href="../employee/add_employee.php" data-hover="dropdown">Employee Reg</a>
                            </li>
                            <li class=""><a href="../employee/add_emp_training.php" data-hover="dropdown">Apply Training</a>
                            </li>
                            <li class=""><a href="../employee/select_employee.php" data-hover="dropdown">Select Trainees</a>
                            </li>
                            <li class=""><a href="../employee/trainee_participation.php" data-hover="dropdown">Trainee Participation</a>
                            </li>
                            <li class=""><a href="../employee/training_estimation.php" data-hover="dropdown">Training Estimation</a>
                            </li>                            
                            <li class=""><a href="../admin/add_training_requirements.php" data-hover="dropdown">Training Requirements</a>
                            </li>
<?php
                            if($usrole == 1) {
                                echo '<li class=""><a href="../admin/index.php" data-hover="dropdown">Admin Home</a>
                            </li>';
                            }
                            ?>
                            
                          
                        
                    </ul>

                </div>

                <div class="collapse clearfix" id="search">

                </div>


            </div>

        </div>
