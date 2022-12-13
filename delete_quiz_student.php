<?php

include('dbcon.php');

$id=$_GET['id'];



$query_quiz1 = mysqli_query($conn,"select * from class_quiz where quiz_id = '$id'")or die(mysqli_error());
										$count = mysqli_num_rows($query_quiz1);
										
										if($count > 0){
										while($row_quiz1 = mysqli_fetch_array($query_quiz1)){
                                            
										$id_quiz1 = $row_quiz1['class_quiz_id'];
                                        $result = mysqli_query($conn,"DELETE FROM student_class_quiz where class_quiz_id='$id_quiz1'");
                                        }
                                    }

$result2 = mysqli_query($conn,"DELETE FROM class_quiz where quiz_id='$id'");

header("location: teacher_quiz.php");




?>