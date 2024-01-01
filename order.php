<?php

$con=mysqli_connect("localhost","root","","ordering");


if (isset($_POST['send'])) {

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$code = $_POST['code'];
$chicken = $_POST['chicken'];

$query=mysqli_query($con,"INSERT INTO data (fname,lname,address,phone,code,chicken) VALUES ('$fname','$lname','$address','$phone','$code','$chicken')");
if ($query) {
	$msg="We will process your request";
	header("location: Ordering.php?msg=$msg");
}else{
	echo "faile";
}
}

?>