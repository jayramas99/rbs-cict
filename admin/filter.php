<?php
include('dbcon.php'); 
$lrn = $_POST['un'];


$query = mysqli_query($conn,"select * from student where username = '$lrn'");
while($row = mysqli_fetch_array($query)){
  $id = $row['student_id'];
}

header("Location: studentsfilter.php?id=$id");



?>