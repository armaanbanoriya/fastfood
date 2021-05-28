<?php
include_once 'dbcon.php';
if (isset($_POST['submit'])) {

$a =	$_POST['title'];
$b =	mysqli_real_escape_string($con,$_POST['description']);


$filename = $_FILES['image']['name'];
$tempname = $_FILES['image']['tmp_name'];

 $c = "upload/".$filename;
move_uploaded_file($tempname, $c);

$query = "INSERT INTO slider(title,description,image)values('$a','$b','$c')";

mysqli_query($con,$query);

if ($query){
	echo "<script> alert('data inserted'); </script>";
	# code...
}else{
		echo "<script> alert('INSERT ERROR'); </script>";


}
}
?>