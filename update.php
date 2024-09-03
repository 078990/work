<?php 

$con=mysqli_connect("localhost","root","","cat1");
$id=$_GET['id'];
$select=mysqli_query($con,"SELECT * from info where id='$id'");
$num=mysqli_num_rows($select);
while($data=mysqli_fetch_array($select)){
	$id=$data['id'];
	$firstname=$data['firstname'];
	$lastname=$data['lastname'];
	$nationalid=$data['nationalid'];
	$age=$data['age'];
	$gender=$data['gender'];
	$district=$data['district'];
	$date=$data['date'];
	$result=$data['result'];

}

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		button{
			background-color: green;
			color: white;
			border-style: none;
			border-radius: 4px;
			padding-left: px;
		}
		a{
			text-decoration: none;
			color: white;
		}
		body{
			background-color: ghostwhite;

		}
		form{
			padding-top: 5px;
			padding-left: 50px;
		}
		h1{
			padding-top: 70px;
			padding-left: 100px;
		}
		input{
			width: 400px;
		}
	</style>
</head>
<body>
<center>
	<h1>UPDATE PATIENT INFO</h1>
	<form method="POST" action="upd.php">	
		
				<th><b>id:</b></th>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="number" name="id" value="<?php echo $id ?>"><br><br>
				<th><b>Firstname:</b></th>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="text" name="firstname" value="<?php echo $firstname ?>"><br><br>
				<th><b>Lastname:</b></th>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="text" name="lastname" value="<?php echo $lastname ?>"><br><br>
				<th><b>National Id:</b></th>&nbsp&nbsp&nbsp <input type="number" name="nationalid" value="<?php echo $nationalid ?>"><br><br>
				<th><b>Age:</b></th>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="number" name="age" value="<?php echo $age ?>"><br><br>
				<th><b>Gender:</b></th>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="gender" value="<?php echo $gender?>"><br><br>
				<th><b>District:</b></th>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="text" name="district" value="<?php echo $district ?>"><br><br>
				<th><b>Date:</b></th>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="date" name="date"value="<?php echo $date ?>"> <br><br>
				<th><b>Result:</b></th>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="text" name="result"value="<?php echo $result ?>" ><br><br>
				<button type="submit">Update</button>
				
	

	</form>
</center>
</body>
</html>