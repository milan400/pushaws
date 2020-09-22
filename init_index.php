<?php

$host = "milangendb.cq9st27hjvbq.us-east-1.rds.amazonaws.com";
$user_name = "admin";
$user_password = "nokia143";
$db_name = "milangendb";


$con = mysqli_connect($host, $user_name, $user_password,$db_name);



//check if there is tbale or not
$exist = mysqli_query($con,"SHOW TABLES LIKE  student");

if($exist == False)
{
	$sql = "CREATE TABLE student(
	email VARCHAR(30) NOT NULL,
	name VARCHAR(30) NOT NULL,
	address VARCHAR(30) NOT NULL
	)";

	mysqli_query($con, $sql);
}

?>