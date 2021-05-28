<?php
include_once 'dbcon.php';
if (isset($_POST['id'])) {
	$id=$_POST['id'];

$a=	$_POST['title'];
$b=	mysqli_real_escape_string($con,$_POST['description']);


$d = "UPDATE blogdata set title='$a',description='$b' where id=$id";

$query = mysqli_query($con,$d);


	# code...
}
?>