<!--         *** TOPBAR ***
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
                            <li>
                           <li class=""    <?php

$user_role="";


                                if( $user_role== 1 ) {
                                    // admin home
                                    echo '<a href="../admin/index.php"  data-hover="dropdown">Admin Home</a>';
                              }
  else {
    
  }
                            ?>>
                            </li>
                        
                            <li class=""><a href="add_employee.php" data-hover="dropdown">Employee Reg</a>
                            </li>
                            <li class=""><a href="add_emp_training.php" data-hover="dropdown">Apply Training</a>
                            </li>
                            <li class=""><a href="select_employee.php" data-hover="dropdown">Select Trainees</a>
                            </li>
                            <li class=""><a href="trainee_participation.php" data-hover="dropdown">Trainee Participation</a>
                            </li>
                            <li class=""><a href="training_estimation.php" data-hover="dropdown">Training Estimation</a>
                            </li>                            
                           

                          
                        
                    </ul>

                </div>

                <div class="collapse clearfix" id="search">

                </div>


            </div>

        </div>
