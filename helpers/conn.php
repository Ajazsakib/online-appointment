<?php
// connect to database
define("HOSTNAME" , "localhost");
define("USERNAME" , "root");
define("PASSWORD" , "");
define("DBNAME" , "online-appointment");

$con = mysqli_connect('localhost', 'root', '', 'online-appointment');

if($con)
{
    //echo "Connected";
}

// check for connection errors
if(mysqli_connect_errno())
	die(mysqli_connect_error());

// function to execute query and automatically check for errors

function query($sql){
	$result = mysqli_query($GLOBALS['con'], $sql);  

	if(!$result){
		die(mysqli_error($GLOBALS['con']));
	}

	return $result;
}