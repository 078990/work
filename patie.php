<?php 

$con=mysqli_connect("localhost","root","","cat1");
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$nationalid=$_POST['nationalid'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$district=$_POST['district'];
$date=$_POST['date'];
$result=$_POST['result'];

$insert=mysqli_query($con,"INSERT into info values('','$firstname','$lastname','$nationalid','$age','$gender','$district','$date','$result')");
if ($insert==true) {
	// code...
	include 'view.php';


}
else{
	echo "incorrect";
}


 ?>