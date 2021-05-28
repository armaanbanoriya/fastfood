<?php
include_once 'dbcon.php';

if (isset($_POST['submit'])) {

$a =	$_POST['title'];
$b =	$_POST['description'];
	# code...

$c = "INSERT INTO ourblog(title,description)values('$a','$b')";
$query = mysqli_query($con,$c);

if ($query) {
	echo "<script>alert('data inserted');</script>";
	# code...
}else{
	echo "<script>alert('insert error');</script>";

}

}
?>