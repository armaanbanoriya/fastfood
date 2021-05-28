<?php
include_once 'dbcon.php';
if (isset($_POST['submit'])) {

$a =	$_POST['title'];
$b =	$_POST['description'];
$c =	$_POST['sub_title'];
$d =	$_POST['sub_description'];

$filename = $_FILES['image']['name'];
$tempname = $_FILES['image']['tmp_name'];

$e = "upload/".$filename;
move_uploaded_file($tempname,$e);


$f = "INSERT INTO about_food(title,description,sub_title,sub_description,image)values('$a','$b','$c','$d','$e')";
	
$query = mysqli_query($con,$f);	

if ($query) {

	echo "<script>alert('insert successfull');</script>";
	# code...
}else{
		echo "<script>alert('insert ERROR');</script>";


}
}
?>