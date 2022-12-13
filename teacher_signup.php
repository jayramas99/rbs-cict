<?php
include('admin/dbcon.php');
session_start();
$emp = $_POST['emp'];
$username = $_POST['username'];
$password = $_POST['password'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];


$query = mysqli_query($conn,"select * from teacher where employee_id ='$emp' and firstname='$firstname' and lastname='$lastname'")or die(mysqli_error());
$row = mysqli_fetch_array($query);
$id = $row['teacher_id'];

$count = mysqli_num_rows($query);
if ($count > 0){
	mysqli_query($conn,"update teacher set username='$username',password = '$password', teacher_status = 'Registered' where teacher_id = '$id'")or die(mysqli_error());
	$_SESSION['id']=$id;
	echo 'true';
}else{
	echo 'false';
}
?>