<?php
include('dbcon.php');
        
               $un = $_POST['un'];
               $fn = $_POST['fn'];
			   $mn = $_POST['mn'];
               $ln = $_POST['ln'];
			   $suffix = $_POST['suffix'];
               $class_id = $_POST['class_id'];
               $strand_id = $_POST['strand_id'];
$check_status = mysqli_query($conn, "SELECT * FROM student where status ='' and username = '$un'");
if(mysqli_num_rows($check_status) > 0)
{
mysqli_query($conn,"UPDATE student SET firstname='$fn', middlename='$mn', lastname='$ln', suffix='$suffix', class_id='$class_id',location='uploads/NO-IMAGE-AVAILABLE.jpg',status='Unregistered',strand='$strand_id' where status ='' and username = '$un'") or die(mysqli_error());
  echo 'same';

}

else{
$check_lrn = mysqli_query($conn, "SELECT * FROM student where username = '$un'");
if(mysqli_num_rows($check_lrn) > 0)
{
   echo 'false';
}
else{
              
echo 'true';
}
}
?>