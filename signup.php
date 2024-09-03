<?php 

$con=mysqli_connect("localhost","root","","cat1");
$username=$_POST['username'];
$password=$_POST['password'];
$insert=mysqli_query($con,"INSERT into login values('','$username','$password')");
if ($insert==true) {
	// code...
	include 'login.php';


}
else{
	echo "incorrect";
}


 ?>