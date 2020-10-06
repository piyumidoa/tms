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
    header('Location:loginpopup.php');
}
// Checking the time now when home page starts.
if ($now > $_SESSION['expire']) {
    header('Location:logout.php');
        }
} 
else {
    header('Location:loginpopup.php');
}
?>