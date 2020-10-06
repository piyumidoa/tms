<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="css/menu.css"/>
    </head>
    <body>
        <div class="menuBackground">
        <ul id="menu" class="dropDownMenu" style="position:">
    <li><a href="home.php"><img class="menu" src="images/icons/images (9).jpg"/>Home</a></li>
    <li><a href="modules/employee/vi_emp_personal.php"><img class="menu" src="images/icons/download (13).jpg"/>Employee</a></li>
    <?php if($usrole == "1"){ ?>

          
    <li><a href="modules/employee/add_dependant.php"><img class="menu" src="images/add-user-group-woman-icon.png"/>Add Children Information</a></li>
    <li><a href="modules/employee/vi_assign_quarters.php"><img class="menu" src="images/QT.jpg"/>Assign Quarters</a></li>  
    <li><a href="modules/reports/rep_emp.php"><img class="menu" src="images/icons/images (6).jpg"/>Report</a></li>    
    <li><a href="modules/backup/sys_backup.php"><img class="menu" src="images/icons/dbsys.jpg"/>System Backup</a></li>
    <li><a href="modules/admin/vi_sys_user.php"><img class="menu" src="images/members.png"/>User Management</a></li>
    <li><a href="modules/backup/sys_restore.php"><img class="menu" src="images/restore-clock-icon-vector.jpg"/>System Restore</a></li>

      <?php   } else if ($usrole == "4"){?>

        <li><a href="modules/employee/assign_quarter.php"><img class="menu" src="images/QT.jpg"/>Assign Quarters</a></li>  
    <li><a href="modules/reports/rep_emp.php"><img class="menu" src="images/icons/images (6).jpg"/>Report</a></li>    
         <?php   } 
         else if ($usrole == "2" || $usrole == "3"){?>
 
    <li><a href="modules/reports/rep_emp.php"><img class="menu" src="images/icons/images (6).jpg"/>Report</a></li>    
         <?php   } ?>
         
</ul>
        </div>
<br/><br/>
</body>
</html>