<?php

$baseURL = 'http://localhost/system';

class Database {

    public static function connectDB() {

        $link = mysqli_connect('localhost', 'root', '') or die("Couldn't make connection.");
        mysqli_set_charset($link, 'utf8');
        date_default_timezone_set('Asia/Colombo');
        // $db = mysqli_select_db($link, 'agri') or die("Couldn't select database");
        $db = mysqli_select_db($link, 'gap_feis') or die("Couldn't select database");
        return $link;
    }

    public static function closeDB($link) {
        if (isset($link)) {
            mysqli_close($link);
        }
    }

    function getResult($query, $collum) {

        $value = '';
        $data = array();
        $db_con = new Database;
        $con = $db_con->connectDB();
        $result = mysqli_query($con, $query);



        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
        foreach ($data AS $aa) {
            $value = $aa[$collum];
        }


        mysqli_free_result($result);
        mysqli_close($con);

        return $value;
    }

    function getResultArray($query) {

        $data = array();
        $db_con = new Database;
        $con = $db_con->connectDB();
        $result = mysqli_query($con, $query);



        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
        mysqli_free_result($result);
        mysqli_close($con);

        return $data;
    }

    function getResultJeson($query) {
        $data = array();
        $db_con = new Database();
        $con = $db_con->connectDB();
        $result = mysqli_query($con, $query);

        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }

        mysqli_free_result($result);
        $db_con->closeDB($con);
        echo json_encode($data);
    }

    function setResultJesonFeedback($query) {

        $db_con = new Database();
        $con = $db_con->connectDB();
        $result = mysqli_query($con, $query);
        $db_con->confirmQuary($result, $con);
        $db_con->closeDB($con);
    }

    private function confirmQuary($result, $link) {
        if ($result) {
            echo json_encode(array(array("msgType" => 1, "msg" => "Data Successfully Processed", "qry" => mysqli_error($link))));
        } else {
            echo json_encode(array(array("msgType" => 2, "msg" => "Sorry, Data Cannot Be Processed", "qry" => mysqli_error($link))));
        }
    }

    public static function setResultGetLastId($query) {
        $db_con = new Database();
        $con = $db_con->connectDB();
        $result = mysqli_query($con, $query);
        $last_id = mysqli_insert_id($con);
        $db_con->confirmQuaryWithLastID($result, $con, $last_id);
        $db_con->closeDB($con);
    }

    private function confirmQuaryWithLastID($result, $link, $last_id) {
        if ($result) {
            echo json_encode(array(array("msgType" => 1, "msg" => "Data Successfully Processed", "qry" => mysqli_error($link), "inID" => $last_id)));
        } else {
            echo json_encode(array(array("msgType" => 2, "msg" => "Sorry Counld Not Be Processed Data", "qry" => mysqli_error($link))));
        }
    }

    function getCountByQuery($query) {
        $count = 0;
        $db_con = new Database();
        $con = $db_con->connectDB();
        $queryResult = mysqli_query($con, $query);
        $count = mysqli_num_rows($queryResult);
        //echo json_encode(array(array("msgType" => 1, "msg" => "Data Successfully Processed")));
        echo json_encode($count);
        $db_con->closeDB($con);
    }

}
