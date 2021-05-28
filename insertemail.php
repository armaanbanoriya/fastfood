<?php
include_once 'dbcon.php';

if (isset($_POST['subscribe'])) {

$a=	$_POST['email'];

$b = "INSERT INTO email(email)values('$a')";

$query= mysqli_query($con,$b);
 
if (isset($query)) {

	echo "<script>alert('data inserted')</script>";
	# code...
}else{
	echo "<script>alert('insert error')</script>";
}

}

?>