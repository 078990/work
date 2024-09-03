<?php 
 
 $con=mysqli_connect("localhost","root","","cat1");
 session_start();
 if($_SERVER['REQUEST_METHOD']=="POST"){

$username=$_POST['username'];
$password=$_POST['password'];
IF(!empty($username)&&!empty($password)){
$select=mysqli_query($con,"SELECT * from login where username='$username'limit 1");
if ($select) {

	if ($select  && mysqli_num_rows($select) > 0) {

		$data = mysqli_fetch_assoc($select);
		if ($data['password']===$password){
			$_SESSION['id'] = $data['id'];
			header("location:home.php");
			
		}
	}

}

}
echo "denied";
include 'login.php';
}

 ?>
