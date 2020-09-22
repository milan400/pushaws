<?php

require "init.php";

$query = "SELECT * FROM  student";
$result = mysqli_query($con,$query);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	
	<style>
		
	 
	#mainall{
			border-radius: 20px;
	    	-webkit-mask-image: -webkit-radial-gradient(circle, white 100%, black 100%);
	    	position:relative;
		    color: white;
		    padding:auto;
		    background-image: url('image/background.png');
		    max-width: 600px;
		    min-height: 500px;
		    
		}

	body{
		background-color: #162447;
		margin: 100px;
		margin-top: 150px;
		background-size: 150px;

	}

	#formside{
		padding: 50px;
	}
	input[type=submit]{
		margin-top: 10px;
		margin-left: 100px;
		background-color: #4CAF50
  		color: white;
  		border: none;
  		text-decoration: none;

	}
	td{
		text-align: center;
	}
	th{
		text-align: center;
	}
	#table_student{
		margin-bottom: 40px;
	}


	</style>
<body>
	<div class="container" id="mainall">
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="read.php">Student Table</a>
				</div>
				<ul class="nav navbar-nav">
					<li><a href='index.html'>Create</a></li>
					<li class="active"><a href='read.php'>Read</a></li>	
					<li><a href='update.html'>Update</a></li>	
					<li><a href='delete.html'>Delete</a></li>	
				</ul>
			</div>
		</nav>
	
	<div id="table_student">
		<table  align="center" border="2px" style="width:500px; line-height:40px;">
			<tr>
				<th colspan="3"><h2>Student Record</h2></th>
			</tr>
			<t>
				<th>Email</th>
				<th>Name</th>
				<th>Address</th>
			</t>

			<?php 
				while($rows = mysqli_fetch_assoc($result)) {
					
			?>
				<tr>
					<td><?php echo $rows['email']; ?></td>
					<td><?php echo $rows['name']; ?></td>
					<td><?php echo $rows['address']; ?></td>
				</tr>
				

			<?php
				}
			?>

		</table>
	</div>
</body>

</html>