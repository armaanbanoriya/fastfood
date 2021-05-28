<?php
include_once 'dbcon.php';

if (isset($_POST['submit'])) {

 $a =	$_POST['title'];
 $b =	$_POST['price'];

$filename = $_FILES["img"]['name'];
$tempname = $_FILES["img"]['tmp_name'];

$c = "upload/".$filename;
move_uploaded_file($tempname, $c);

$d = "INSERT INTO recipes(name,price,img)values('$a','$b','$c')";

$query = mysqli_query($con,$d);

if ($query) {
	echo "<script>alert('data inserted');  </script>";
		# code...
}else{
		echo "<script>alert('INSERT ERROR');  </script>";

}

}

?>