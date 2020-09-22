<?php

require "init.php";

$email = $_GET["email"];

$sql_check = "SELECT * from student where email= '{$email}'";
$result_check = mysqli_query($con,$sql_check);

if(mysqli_num_rows($result_check)>0){
	if($user_name != ""){
	
	$sql = "DELETE FROM student WHERE email = '{$email}'";

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
else
{
	$status = "Doesnot exist";
}


echo file_get_contents("delete.html");


?>