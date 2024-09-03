<?php 

$con=mysqli_connect('localhost',"root","","cat1");
$id=$_GET['id'];
$delete=mysqli_query($con,"DELETE from info where id='$id'");
if ($delete==true) {
	// code...
	include 'view.php';
}
else{
	echo "failed";
}


 ?>