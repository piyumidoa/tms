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

<?php
        require_once '../../lib/connection.php';
        
    $dbobj = new dbConnection();
    $con = $dbobj->getCon();

    if(isset($_GET["id"]))
    $id = $_GET["id"];
    $sql = "DELETE FROM tbl_user where user_id='$id'";
    $result = mysqli_query($con,$sql);
    
    mysqli_close($con);

    if($result){
        header("Location:add_user.php?msg=5");
    }
    else{
        header("Location:add_user.php?msg=6");
    }
      //  $sql= "delete FROM purchage_book WHERE id='$id'";
      //  $rs=mysqli_query($con,$sql)or die(mysqli_error());
     ?>        