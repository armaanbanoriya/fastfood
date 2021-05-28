<?php
include_once 'dbcon.php';
if (isset($_POST['submit'])) {
$a =	$_POST['heading'];
$b =	$_POST['title'];
$c =	mysqli_real_escape_string($con,$_POST['description']);

$filename= $_FILES['image']['name'];
$tempname= $_FILES['image']['tmp_name'];

$d = "upload/".$filename;
move_uploaded_file($tempname, $d);

$e = "INSERT INTO client(heading,title,description,image)values('$a','$b','$c','$d')";
	# code...

$query = mysqli_query($con,$e);

if ($query) {

	echo "<script>alert('data inserted') </script>";
	# code...
}else{
	echo "<script>alert('insert error') </script>";

}

}
?>