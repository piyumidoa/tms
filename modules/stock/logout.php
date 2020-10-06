<?php
session_start();
session_destroy(); //destroy the created session
{
header("Location:loginpopup.php?msg=succ");
	}
?>

