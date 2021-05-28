<?php

include_once 'dbcon.php';
if (isset($_POST['id'])) {
   $id=$_POST['id'];

$a =  $_POST['phone'];
$b =  $_POST['email'];
$c = $_POST['address'];


$d = "UPDATE topbar set phone='$a',email='$b',address='$c' where id=$id";
$query = mysqli_query($con,$d);

if ($query) {
  header("location:viewtopbar.php");
  # code...
}

}
?>
