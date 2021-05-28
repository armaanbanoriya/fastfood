<?php
include_once 'dbcon.php';
if (isset($_POST['send'])) {

$a=	$_POST['name'];
$b=	$_POST['email'];
$c=	$_POST['phone'];
$d=	$_POST['message'];

$f = "INSERT INTO request(name,email,phone,message)values('$a','$b','$c','$d')";
$query= mysqli_query($con,$f);

if ($query) {
	echo "<script>alert('data inserted')</script>";
	# code...
}else{
	echo "<script> alert('insert error') </script>";
}

	# code...
}
?>