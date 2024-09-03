<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<center>
		<h1>View patient's Information</h1>
<table border="1">
	<thead>
	<tr>
		<th>Id</th>
		<th>Names</th>
		<th>Date Of Birth</th>
		<th>Gender Id</th>
		<th>Address</th>
		
		<th>National Id</th>
		<th>Marital Status</th>
		<th>Phone Number</th>
		<th colspan="2"><center>Option</center></th>
	</tr>
	<?php 

$con=mysqli_connect("localhost","root","","joy");
$select=mysqli_query($con,"SELECT * from userdata");
$num=mysqli_num_rows($select);


if ($num>0) {
	// code...

 
 while($data=mysqli_fetch_array($select)) {
 	?>

 	<tr>
 		
 		<td><?php echo $data['id'] ?></td>
 		<td><?php echo $data['names'] ?></td>
 		<td><?php echo $data['dob'] ?></td>
 		<td><?php echo $data['gender'] ?></td>
 		<td><?php echo $data['address'] ?></td>
 		<td><?php echo $data['nationalid'] ?></td>
 		<td><?php echo $data['status'] ?></td>
 		<td><?php echo $data['phone'] ?></td>

 		<td><a href="delete.php?id=<?php echo $data['id'] ?>">delete</a></td>
 		<td><a href="update.php?id=<?php echo $data['id'] ?>">update</a></td>


 	</tr> 	
 	<?php

}
 }
 else{
 	echo "there is no data";
 }


	 ?>
</thead>
</table>
</center>
</body>
</html>