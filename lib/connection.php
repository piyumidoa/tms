<?php
// connecting the Database
class dbconnection{
	private $iSERVER;
	private $iUSER;
	private $iPASS;
	private $iDATABASE;
	
 // construct method
	function __construct(){
		$this->iSERVER="localhost";
		$this->iUSER="root";
		$this->iPASS="";
		$this->iDATABASE="db_tms";
	}

// 	
	function getcon(){
	$con=mysqli_connect($this->iSERVER,$this->iUSER,$this->iPASS,$this->iDATABASE)
	or die ("Server Error".mysqli_error());
	$con->set_charset('utf8');
    return $con;
    }

    //SET Password=PASSWORD('doa0723257271')
}


?>