<?php

require "init_index.php";

$email = $_GET["email"];
$user_name = $_GET["name"];
$user_address = $_GET['address'];

$sql_check = "SELECT * from student where email= '{$email}'";
$result_check = mysqli_query($con,$sql_check);

if(mysqli_num_rows($result_check)>0){
	$status = "user exist";
}else{

	if($email != "" && $user_name != "" && $user_address != ""){
		$sql = "INSERT INTO student (email,name, address) VALUES ('$email','$user_name', '$user_address'); ";

		if(mysqli_query($con, $sql))
		{
			$status = "ok";
		}else{
			$status = "error";
		}
	}else{
		$status = "error";
	}
}
echo file_get_contents("index.html");


?>