<?php
include('admin/dbcon.php');
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$class_id = $_POST['class_id'];


$query = mysqli_query($conn,"select * from student where username='$username' and firstname='$firstname' and lastname='$lastname' and class_id = '$class_id' ")or die(mysqli_error());
$row = mysqli_fetch_array($query);
$id = $row['student_id'];

$count = mysqli_num_rows($query);
if ($count > 0){
	mysqli_query($conn,"update student set password = '$password', status = 'Registered',location = 'uploads/NO-IMAGE-AVAILABLE.jpg' where student_id = '$id'")or die(mysqli_error());
	$_SESSION['id']=$id;
	$querysz2 = mysqli_query($conn,"select * from student where username='$username'")or die(mysqli_error());
		$rowsz2 = mysqli_fetch_array($querysz2);
		$classid= $rowsz2['class_id'];
		$id = $rowsz2['student_id'];

	
		
	echo 'true';
}else{
echo 'false';
}
?>