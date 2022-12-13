<?php
include('admin/dbcon.php');
$id = $_POST['id'];

$sql = "SELECT * FROM teacher_class_student where teacher_class_student_id = '$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $std_id=$row['student_id'];
  }
} else {
  echo "0 results";
}
mysqli_query($conn,"delete from teacher_class_student where student_id = '$std_id'")or die(mysqli_error());

mysqli_query($conn,"delete from student where student_id = '$std_id'")or die(mysqli_error());
?>

