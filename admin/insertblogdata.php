<?php
include_once 'dbcon.php';
if (isset($_POST['submit'])) {
	$id=$_POST['id'];

$a=	$_POST['title'];
$b=	mysqli_real_escape_string($con,$_POST['description']);

$filename = $_FILES['image']['name'];
$tempname = $_FILES['image']['tmp_name'];

$c = "upload/".$filename;
move_uploaded_file($tempname, $c);

$d ="INSERT INTO blogdata(title,description,image)values('$a','$b','$c')";
$query= mysqli_query($con,$d);

if ($query) {

	echo "<script>alert('data inserted')</script>";
	# code...
}else{
	echo "<script>alert('insert error')</script>";

}

}
?>