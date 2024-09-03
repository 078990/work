<?php 

$con=mysqli_connect("localhost","root","","cat1");
$id=$_POST['id'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$nationalid=$_POST['nationalid'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$district=$_POST['district'];
$date=$_POST['date'];
$result=$_POST['result'];
$update=mysqli_query($con,"UPDATE info SET firstname='$firstname',lastname='$lastname', nationalid='$nationalid',age='$age',gender='$gender',district='$district',date='$date',result='$result' where id='$id'");

if ($update==true) {
	// code...
	include 'view.php';
}
else{
	echo "not updated";
}

 ?>