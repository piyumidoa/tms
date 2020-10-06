<?php 
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="css/menu.css"/>
    </head>
    <body>
       
        <?php
$time = date("Y/m/d, h:m:s",time());
$dtime = date("l jS \of F, Y,  h:i:s A") 
?>
    <h5 align="right">Welcome, Logged in as<input type="text" style="border: 0; width: auto" value="<?php echo "   ".$username;?>"/>
    <a href="logout.php">Logout</a></br>
    Date &amp; time :
    <?php echo($dtime); ?>
</h5>
        <div width="auto"  align="center" border="0" bordercolor="00ff00" style=" margin-top: 10px; color:#00ff00;">	
<?php 
if(isset($_GET ["msg"])){
                if($_GET ["msg"]==9){
                    echo("Your have successfully logged in!");                
                }
                elseif ($_GET ["msg"]==1){
                    echo "<p style='color: #00ff00;' align='center'>Password Successfully Changed!</p>";
                }
                else if ($_GET ["msg"]==2){
                    echo "<p style='color: #ff0000;' align='center'>Error occured.Password  not  Changed!</p>";
                }
                }
?>                        
        </div>
        <div class="menuBackground">
        <ul id="menu" class="dropDownMenu" style="position:">
    <li><a href="home.php"><img class="menu" src="images/icons/images (9).jpg"/>Home</a></li>
    <li><a href=""><img class="menu" src="images/icons/download (13).jpg"/>Employee</a>
        <ul>
            <li><a href="modules/employee/vi_emp_personal.php">Personal Information</a></li>
        </ul></li>        
    <li><a href=""><img class="menu" src="images/icons/images (6).jpg"/>Report</a>
        <ul>
            <li><a href="modules/reports/rep_emp.php">Transfer Report</a></li>
        </ul></li>
    <li><a href=""><img class="menu" src="images/icons/dbsys.jpg"/>System</a>
        <ul>
            <li><a href="modules/admin/vi_sys_user.php">User Management</a></li>
            <li><a href="modules/backup/sys_backup.php">System Backup</a></li>
            <li><a href="modules/backup/sys_restore.php">System Restore</a></li>


        </ul></li>
</ul>
        </div>
<br/><br/>
</body>
</html>