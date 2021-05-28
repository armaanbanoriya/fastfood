<?php
session_start();
include_once 'dbcon.php';
if (isset($_POST['submit'])) {

 $a =	$_POST['phone'];
 $b =	$_POST['email'];
 $c =    $_POST['address'];

$filename = $_FILES['logo']['name'];
$tempname = $_FILES['logo']['tmp_name'];

 $d = "upload/".$filename;
move_uploaded_file($tempname, $d);
	# code...


$e = "INSERT INTO topbar(phone,email,address,logo)values('$a','$b','$c','$d')";
$query = mysqli_query($con,$e);

if ($query) {
	$_SESSION['success']='Topbar data inserted';
	header('location:dashboard.php');
}else{
	echo "<script> alert('insert error'); </script>";
	// $_SESSION['error']='Insert Error';
	// header('location:topbar.php');
}

}
?>