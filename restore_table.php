

<?php
//if(isset($_POST["btn_restore"])){

$sql = file_get_contents('unit_list_2019.sql');

$mysqli = new mysqli("localhost", "root", "", "test_db");
if (mysqli_connect_errno()) { /* check connection */
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

/* execute multi query */
if ($mysqli->multi_query($sql)) {
    echo "success";
} else {
   echo "error";
}

//}
?>