<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="css/menu.css"/>
    </head>
    <body>
        <?php
$time = date("Y/m/d, h:m:s",time());
$dtime = date("l jS \of F, Y,  h:i:s A"); 
?>
    <h5 align="right"><div>Welcome, Logged in as<?php echo "   ".$username;?></div>
      <a href="logout.php">Logout</a></br>
    Date &amp; time :
    <?php echo($dtime); ?><br/>
    <?php echo "<td align='left'><a href='modules/admin/change_password.php?id=$empid'>"?>Change Password</a>
</h5>
        <div width="auto"  align="center" border="0" bordercolor="00ff00" style=" margin-top: 10px; color:#00ff00; ">	
<?php 
if(isset($_GET ["msg"])){
                if($_GET ["msg"]==5){
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
        <br/><br/>
</body>
</html>