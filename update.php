<?php

require "init.php";

$email = $_GET["email"];
$user_name = $_GET["name"];
$user_address = $_GET['address'];

if($email != "" && $user_name != "" && $user_address != ""){
	
	$sql = "UPDATE student SET address = '{$user_address}', name ='{$user_name}'  where email = '{$email}'";

	if(mysqli_query($con, $sql))
	{
		$status = "ok";
	}else{
		$status = "error";
	}
}else{
	$status = "error";
}

echo file_get_contents("update.html");


?>