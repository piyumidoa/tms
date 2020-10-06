<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style type="text/css">
            .menuBackground {
	background:#0063DC;
}
.dropDownMenu a {
	color: #FFF;
}
.dropDownMenu,
.dropDownMenu ul {
	list-style: none;
	margin: 0;
	padding: 0;
}
.dropDownMenu li {
	position: relative;
}
.dropDownMenu a {
	padding: 10px 20px;
	display: block;
	text-decoration: none;
}
.dropDownMenu a:hover {
	background: #000;
}


/* Level 1 Drop Down Menu */
.dropDownMenu > li {
	display: inline-block;
	vertical-align: top;
	margin-left: -4px; /* solve the 4 pixels spacing between list-items */
}
.dropDownMenu > li:first-child {
	margin-left: 0;
}
.dropDownMenu > li > a {}
.dropDownMenu > li > a:hover {}

/* Level 2 */
.dropDownMenu > li > ul {
	text-align: left;
	width: auto; /* change auto value with 200px if you want a bigger menu */
	display: none;
	background: #634123;
	position: absolute;
	top: 100%;
	left: 0;
	z-index: 9999999; /* if you have YouTube iframes, is good to have a bigger z-index so the video can appear above the video */
}
.dropDownMenu > li:hover > ul {
	display: block;
}
.dropDownMenu ul li a {}
.dropDownMenu ul li a:hover {}

/* Level 3 */
.dropDownMenu > li > ul > li > ul {
	text-align: left;
	display: none;
	background: #E7B400;
	position: absolute;
	left: 100%;
	top: 0;
	z-index: 9999999;
}
.dropDownMenu > li > ul > li:hover > ul {
	display: block;
}
.dropDownMenu ul ul li {}
.dropDownMenu ul ul li a {}
.dropDownMenu ul ul li a:hover {}


  img:hover
{
 opacity:2.0;
 filter:alpha(opacity=200); /* For IE8 and earlier */
}
#view {
  position: absolute;
  margin-left: 40%;
  margin-top: 0%;
  width:30%;
  padding:10;
  border-radius:30px;
  background:#F0FFF0;
  font:14;
}

.menu{
  height:40px;
  width:40px;
  opacity:0.8;
  filter:alpha(opacity=100%); /* For IE8 and earlier */
}            </style>
    </head>
    <body>
        <?php
$time = date("Y/m/d, h:m",time());
$dtime = date("l jS \of F, Y,  h:i:s A") 
?>
        <h5 align="right">Welcome, Logged in as<input type="text" style="border: 0; width: auto" value="<?php echo "   ".$username;?>"/>
    <a href="../logout.php">Logout</a></br>
    Date &amp; time :
    <?php echo($dtime); ?>

    echo($time);
    ?>
</h5>
        <div width="auto"  align="center" border="0" bordercolor="00ff00" style=" margin-top: 10px; color:#00ff00;">
<?php 
if(isset($_GET ["msg"])){
                if($_GET ["msg"]==5){
                echo("Your have successfully logged in!");
                }
                }
?>                    
        </div>
          
<div class="menuBackground">
        <ul id="menu" class="dropDownMenu" style="position:">
    <li><a href="user.php"><img class="menu" src="../images/icons/images (9).jpg"/>Home</a></li>
    <li><a href=""><img class="menu" src="../images/icons/images (20).jpg"/>Organization</a>
        <ul>
            <li><a href="vi_department.php">Departments</a></li>
            <li><a href="vi_post.php">Post</a></li>
            <li><a href="vi_sal.php">Salary</a></li>
            <li><a href="vi_qual.php">Qualification</a></li>            
        </ul></li>
    <li><a href=""><img class="menu" src="../images/icons/download (13).jpg"/>Employee</a>
        <ul>
            <li><a href="vi_emp_personal.php">Personal Information</a></li>
            <li><a href="vi_emp_contact.php">Contact Information</a></li>
            <li><a href="vi_emp_service.php">Service Information</a></li> 
            <li><a href="vi_emp_salary.php">Salary Information</a></li>
            <li><a href="se_emp_dependent.php">Dependant Information</a></li>
            <li><a href="se_emp_qualification.php">Qualification Information</a></li>
        </ul></li>
    <li><a href=""><img class="menu" src="../images/icons/images (1).jpg"/>Leaves</a>
        <ul>
            <li><a href="vi_leav_type.php"> Leave Rule</a></li>
            <li><a href="leav_apply.php"> Apply Leave</a></li>
            <li><a href="vi_leav_holy.php">Holiday</a></li>
        </ul></li>        
    <li><a href=""><img class="menu" src="../images/icons/images (7).jpg"/>Notification</a>
        <ul>
            <li><a href="letter_comp.php">Compose Letter</a></li>
        </ul></li>
</ul>
</div>
<br/>
<br/>

    </body>
</html>
