<?php/*
ob_start();
session_start();
if(isset($_SESSION['username']) && isset($_SESSION['password'])){
$navbar = "1";
$logindisplay = "0";
$username = $_SESSION['id'];
$password = $_SESSION['password'];

    }
    else {
        
        $username = '';
    }

    if($username){
        header("location: home.php");
    }*/
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Login | TMS for DOA</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/custom.css" rel="stylesheet">
        <link href="css/style.default.css" rel="stylesheet" id="theme-stylesheet">
        <link href="css/font-awesome.css" rel="stylesheet">
        <link href="css/alertify.css" rel="stylesheet">
        <link href="css/animate.min.css" rel="stylesheet">
        <link href="css/owl.carousel.css" rel="stylesheet">
        <link href="css/owl.theme.css" rel="stylesheet">
        <link href="css/chosen-custom.css" rel="stylesheet">
        <link href="css/chosen.css" rel="stylesheet">
        
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="js/jquery.maskedinput.js"></script>
    <script type="text/javascript" src="js/jquery.cookie.js"></script>
    <script type="text/javascript" src="js/respond.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/bootstrap-datepicker.js"></script>
    <script type="text/javascript" src="js/front.js"></script>
    <script type="text/javascript" src="js/tableSpin.js"></script>
    <script type="text/javascript" src="js/alertify.js"></script>
    <script type="text/javascript" src="js/chosen.jquery.js"></script>
    <script type="text/javascript" src="js/waypoints.min.js"></script>
    <script type="text/javascript" src="js/sweetalert.js"></script>
    <script type="text/javascript" src="js/bootsnipFilterTable.js"></script>
    <script type="text/javascript" src="js/modernizr.js"></script>
    <script type="text/javascript" src="js/bootstrap-hover-dropdown.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/userManegmantConfig.js"></script>
<!--
 <link href="css/login.css" type="text/css" rel="stylesheet" />
 <link rel="stylesheet" type="text/css" href="css/back_ground.css"/> -->
</head>

<body>
	<?php 
            if(isset($_GET ["msg"])){
                if($_GET ["msg"]==1){
                echo("Please Enter Your Username and Password!");
                }
            else if ($_GET ["msg"]==2){
                echo("Your username or password is incorrect!");
            }
            else if ($_GET ["msg"]==3){
                echo("Your username or password is incorrect!");
            }
            else if ($_GET ["msg"]==4){
                echo("Your account has been inactivated.Pleaase contact Administrator!");
            }
            
            }
            ?>
<body>
 
    <div id="top">
        <div class="container">
            <div class="col-md-8 offer">
                
                <h2><img src="images/national_logo.png" alt="" height="60" width="40"/>
                    &nbsp;&nbsp;DEPARTMENT OF AGRICULTURE <br/> 
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Training Management System</h2>
            </div>
            <form name="frmlogin" action="lib/loginhandle.php" method="post">
            <div class="form-horizontal">
                    
                <div class="navbar-form">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="userName" type="text" class="form-control" name="txtuname" value="" placeholder="Username">                                        
                        </div>

                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input id="password" type="password" class="form-control" name="txtpass" placeholder="Password" required onkeyup="inputKeyUp(event)">                                        
                        </div>

                        <button id="logSystem" type="submit" class="btn btn-primary">Login</button>
                   </div>

            </div>
            </form>
        </div>
        

    </div>

    <div class="navbar navbar-default yamm" role="navigation" id="navbar2">
        <div class="container">

            <div class="navbar-collapse collapse" id="navigation">

                <ul class="nav navbar-nav navbar-left">
                    <li class="dropdown yamm-fw">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Downloads&nbsp;<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="yamm-content">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5>Forms</h5>
                                            <ul>
                                                <li><a href="pdf/Application for training.pdf">Employee Registration</a>
                                                </li>
                                                <li><a href="#">Employee List</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>                   
                </ul>
            </div>
        </div>

    </div><!-------------------------------------------------------------------------------------------------------------------------------->
    <div id="all">

        <div id="content">

            <div class="container">
                <div class="col-md-12">
                    <div id="main-slider">
                        <div class="item">                          
                            <img class="img-responsive" src="images/1.jpg" alt="" />
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="images/2.jpg" alt=""/>
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="images/3.jpg" alt=""/>
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="images/4.jpg" alt=""/>
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="images/5.jpg" alt=""/>
                        </div>
                    </div>
                </div>
            </div>

            <div id="hot">

                <div class="box">
                    <div class="container">
                        <div class="col-md-12">
                            <h2><b>Downloads</b></h2>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="product-slider">
                        <div class="item">
                            <div class="product">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <a href=""></a>
                                        <div class="front">
                                            <a href="pdf/pdf/Application for training.pdf" target="_blank">
                                                <img src="img/fardfdgmreg.png" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="back">
                                            <a href="pdf/pdf/Application for training.pdf" target="_blank">
                                                <img src="img/farmdfdfreg.png alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="pdf/Application for training.pdf" class="invisible" target="_blank">
                                    <img src="img/konkan.jpg" alt="" class="img-responsive">
                                </a>
                                <div class="text">
                                    <h3><a href="pdf/Application for training.pdf" target="_blank">Download</a></h3>
                                    <p class="price"></p>
                                </div>

                            </div>

                        </div>

                        <div class="item">
                            <div class="product">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                            <a href="pdf/pdf/Application for training.pdf" target="_blank">
                                                <img src="img/gapvfrgreq.png" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="back">
                                            <a href="pdf/pdf/Application for training.pdf" target="_blank">
                                                <img src="img/gadffpreq.png" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="pdf/pdf/Application for training.pdf" target="_blank" class="invisible">
                                    <img src="img/konkan.jpg" alt="" class="img-responsive">
                                </a>
                              <div class="text">
                                <h3><a href="pdf/pdf/Application for training.pdf" target="_blank">Download</a></h3>
                                  <p class="price"><del></del></p>
                                </div>

                            </div>

                        </div>

                        <div class="item">
                            <div class="product">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                            <a href="pdf/SL-GAP Auditing new format.pdf" target="_blank">
                                                <img src="img/gapiffntaudit.png" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="back">
                                            <a href="pdf/SL-GAP Auditing new format.pdf" target="_blank">
                                                <img src="img/gapidffntaudit.png" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="pdf/SL-GAP Auditing new format.pdf" target="_blank" class="invisible">
                                    <img src="img/konkan.jpg" alt="" class="img-responsive">
                                </a>
                                <div class="text">
                                    <h3><a href="pdf/SL-GAP Auditing new format.pdf" target="_blank">Download</a></h3>
                                    <p class="price"></p>
                                </div>

                            </div>

                        </div>

                        <div class="item">
                            <div class="product">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                            <a href="pdf/GAP final check list singhala.pdf" target="_blank">
                                                <img src="img/gapfinalfdfaudit.png" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="back">
                                            <a href="pdf/GAP final check list singhala.pdf" target="_blank">
                                                <img src="img/gapfidfnalaudit.png" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="pdf/GAP final check list singhala.pdf" target="_blank" class="invisible">
                                    <img src="img/konkan.jpg" alt="" class="img-responsive">
                                </a>
                                <div class="text">
                                    <h3><a href="pdf/GAP final check list singhala.pdf" target="_blank">Download</a></h3>
                                    <p class="price"></p>
                                </div>

                            </div>

                        </div>

                        <div class="item">
                            <div class="product">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                            <a href="pdf/crop record book.pdf" target="_blank">
                                                <img src="img/croprdect.png" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="back">
                                            <a href="pdf/crop record book.pdf" target="_blank">
                                                <img src="img/croprfdfect.png" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="pdf/crop record book.pdf" target="_blank" class="invisible">
                                    <img src="img/konkan.jpg" alt="" class="img-responsive">
                                </a>
                                <div class="text">
                                    <h3><a href="pdf/crop record book.pdf" target="_blank">Download</a></h3>
                                    <p class="price"></p>
                                </div>


                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>

        <div id="footer" data-animate="fadeInUp">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <h4>Links</h4>
                        <hr>
                        <ul>
                            <li><a href="#">Administration Division</a>
                            </li>
                            
                            <li><a href="#">Admin 04</a>
                            </li>
                        </ul>



                        

                        <hr class="hidden-md hidden-lg hidden-sm">

                    </div>

                    <div class="col-md-3 col-sm-6">

                        <h4>Contact Info</h4>
                        <hr>
                        <p><strong>(Admin4)
                        </strong>
                            <br>Administration Division
                            <br>Depatrment of Agriculture
                            <br>Old Galaha Road
                            <br>Peradeniya
                            <br>Sri lanka
                            <br>
                            <strong>+94-81-2388098 </strong>
                        </p>


                    </div>

                    <div class="col-md-3 col-sm-6">

                        <h4>Contact Us</h4>
                        <hr>
                        <p class="social">
                            <a href="#" class="facebook external" data-animate-hover="shake"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="twitter external" data-animate-hover="shake"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="instagram external" data-animate-hover="shake"><i class="fa fa-instagram"></i></a>
                            <a href="#" c
                            lass="gplus external" data-animate-hover="shake"><i class="fa fa-google-plus"></i></a>
                            <a href="#" class="email external" data-animate-hover="shake"><i class="fa fa-envelope"></i></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

</body>
<?php require_once 'inc/footer_main.php'; ?>
    
</html>