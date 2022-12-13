<?php include('dbcon.php');
$session_id = $_POST['teacher_id'];
$subject_id = $_POST['subject_id'];
$class_id = $_POST['class_id'];
$specialization = $_POST['subject_Specialization'];
$school_year = $_POST['school_year'];
$query = mysqli_query($conn,"select * from teacher_class where subject_id = '$subject_id' and class_id = '$class_id'  and 	Specialization  = '$specialization' and school_year = '$school_year' ")or die(mysqli_error());
$count = mysqli_num_rows($query);

$sql_spe = "SELECT * FROM teacher_class where teacher_id = '$session_id'";
$result_spe = $conn->query($sql_spe);
if($count > 0)
{
  echo "true";
}
else{
if ($result_spe->num_rows > 0) {
  // output data of each row
  while($row_spe = $result_spe->fetch_assoc()) {
    $class_spe = $row_spe['Specialization'];
    $class_spe_id = $row_spe['class_id'];
    $class_spe_sub = $row_spe['subject_id'];
  }

if($class_spe_id == $class_id && $class_spe_sub == $subject_id)
{
  echo "true";
}
  elseif($class_spe == $specialization)
  {
       
mysqli_query($conn,"insert into teacher_class (teacher_id,subject_id,class_id,thumbnails,school_year,Specialization) values('$session_id','$subject_id','$class_id','uploads/thumbnails.jpg','$school_year','$specialization')")or die(mysqli_error());

$teacher_class = mysqli_query($conn,"select * from teacher_class order by teacher_class_id DESC")or die(mysqli_error());
$teacher_row = mysqli_fetch_array($teacher_class);
$teacher_id = $teacher_row['teacher_class_id'];
$teacher_id_main = $teacher_row['teacher_id'];


if($specialization == "10")
{
  $query_sub = mysqli_query($conn,"select * from subject where subject_id = $subject_id");
  while($row_sub = mysqli_fetch_array($query_sub)){
  
$strand = $row_sub['strand_name'];
    $subname = $row_sub['subject_title']; 
                        }

 if($subname == "ELECTIVE 1")   
 {                    
    $filedesc = "ELECTIVE 1";
    $newname = "admin/uploads/UNIT-2-DOM-USING-JAVASCRIPT.pdf";
    $name = "UNIT-2-DOM-USING-JAVASCRIPT";
    $uploaded_by = "Admin";
mysqli_query($conn,"INSERT INTO files (fdesc,floc,fdatein,class_id,fname,uploaded_by) VALUES ('$filedesc','$newname',NOW(),'$class_id','$name','$uploaded_by')");
 }
 elseif($subname == "ELECTIVE 2")   
 { 
$filedesc = "ELECTIVE 2";
$newname = "admin/uploads/SUNIT-2-DOM-USING-PHP.pdf";
$name = "UNIT-2-DOM-USING-PHP";
$uploaded_by = "Admin";

mysqli_query($conn,"INSERT INTO files (fdesc,floc,fdatein,class_id,fname,uploaded_by) VALUES ('$filedesc','$newname',NOW(),'$class_id','$name','$uploaded_by')");
 }
 elseif($subname == "ELECTIVE 3")   
 { 
$filedesc = "ELECTIVE 3";
    $newname = "admin/uploads/UNIT-4-JQUERY.pdf";
    $name = "UNIT-4-JQUERY";
    $uploaded_by = "Admin";
mysqli_query($conn,"INSERT INTO files (fdesc,floc,fdatein,class_id,fname,uploaded_by) VALUES ('$filedesc','$newname',NOW(),'$class_id','$name','$uploaded_by')");
 }

 elseif($subname == "ELECTIVE 4")   
 { 
$filedesc = "ELECTIVE 4";
    $newname = "admin/uploads/Lesson-4-to-6-Jason.pdf";
    $name = "Lesson-4-to-6-Jason";
    $uploaded_by = "Admin";
mysqli_query($conn,"INSERT INTO files (fdesc,floc,fdatein,class_id,fname,uploaded_by) VALUES ('$filedesc','$newname',NOW(),'$class_id','$name','$uploaded_by')");
 }

 elseif($subname == "ELECTIVE 5")   
 { 
$filedesc = "ELECTIVE 5";
    $newname = "admin/uploads/UNIT3_SHUN.pdf";
    $name = "UNIT3_SHUN";
    $uploaded_by = "Admin";
mysqli_query($conn,"INSERT INTO files (fdesc,floc,fdatein,class_id,fname,uploaded_by) VALUES ('$filedesc','$newname',NOW(),'$class_id','$name','$uploaded_by')");
 }

}
elseif($specialization == "11")
{
    $query_sub = mysqli_query($conn,"select * from subject where subject_id = $subject_id");
  while($row_sub = mysqli_fetch_array($query_sub)){
  
$strand = $row_sub['strand_name'];
    $subname = $row_sub['subject_title']; 
                        }

 if($subname == "ELECTIVE 1")   
 {  
    $filedesc = "ELECTIVE 1";
    $newname = "admin/uploads/IT-403-BA-Elective5-Analytics-Application-2022-2023.docx";
    $name = "IT-403-BA-Elective5-Analytics-Application-2022-2023";
    $uploaded_by = "Admin";
mysqli_query($conn,"INSERT INTO files (fdesc,floc,fdatein,class_id,fname,uploaded_by) VALUES ('$filedesc','$newname',NOW(),'$class_id','$name','$uploaded_by')");
 }
 elseif($subname == "ELECTIVE 2")   
 { 
$filedesc = "ELECTIVE 2";
$newname = "admin/uploads/Supplemental-Assessment-Template.docx";
$name = "Supplemental-Assessment-Template";
$uploaded_by = "Admin";

mysqli_query($conn,"INSERT INTO files (fdesc,floc,fdatein,class_id,fname,uploaded_by) VALUES ('$filedesc','$newname',NOW(),'$class_id','$name','$uploaded_by')");
 }
 elseif($subname == "ELECTIVE 3")   
 { 
$filedesc = "ELECTIVE 3";
    $newname = "admin/uploads/Trailhead-Academy-University-program-BSU.pptx";
    $name = "Trailhead-Academy-University-program-BSU";
    $uploaded_by = "Admin";
mysqli_query($conn,"INSERT INTO files (fdesc,floc,fdatein,class_id,fname,uploaded_by) VALUES ('$filedesc','$newname',NOW(),'$class_id','$name','$uploaded_by')");
 }
 elseif($subname == "ELECTIVE 4")   
 { 
$filedesc = "ELECTIVE 4";
    $newname = "admin/uploads/3. UNIT-3_Data-Objects-And-AttributesTypes.pdf";
    $name = "UNIT-3_Data-Objects-And-AttributesTypes";
    $uploaded_by = "Admin";
mysqli_query($conn,"INSERT INTO files (fdesc,floc,fdatein,class_id,fname,uploaded_by) VALUES ('$filedesc','$newname',NOW(),'$class_id','$name','$uploaded_by')");
 }
 elseif($subname == "ELECTIVE 5")   
 { 
$filedesc = "ELECTIVE 5";
    $newname = "admin/uploads/UNIT-4_Descriptive-Statistics.pdf";
    $name = "4. UNIT-4_Descriptive-Statistics";
    $uploaded_by = "Admin";
mysqli_query($conn,"INSERT INTO files (fdesc,floc,fdatein,class_id,fname,uploaded_by) VALUES ('$filedesc','$newname',NOW(),'$class_id','$name','$uploaded_by')");
 }

}
elseif($specialization == "12")
{
    $query_sub = mysqli_query($conn,"select * from subject where subject_id = $subject_id");
  while($row_sub = mysqli_fetch_array($query_sub)){
  
$strand = $row_sub['strand_name'];
    $subname = $row_sub['subject_title']; 
                        }

if($subname == "ELECTIVE 1")   
{ 
    $filedesc = "ELECTIVE 1";
    $newname = "admin/uploads/IT-311-BPO-Lesson-1-9-Merged.pdf";
    $name = "IT-311-BPO-Lesson-1-9-Merged";
    $uploaded_by = "Admin";
mysqli_query($conn,"INSERT INTO files (fdesc,floc,fdatein,class_id,fname,uploaded_by) VALUES ('$filedesc','$newname',NOW(),'$class_id','$name','$uploaded_by')");
}
elseif($subname == "ELECTIVE 2")   
 { 
$filedesc = "ELECTIVE 2";
$newname = "admin/uploads/Lesson-1-5-Merged-IT312.pdf";
$name = "Lesson-1-5-Merged-IT312";
$uploaded_by = "Admin";

mysqli_query($conn,"INSERT INTO files (fdesc,floc,fdatein,class_id,fname,uploaded_by) VALUES ('$filedesc','$newname',NOW(),'$class_id','$name','$uploaded_by')");
 }





 elseif($subname == "ELECTIVE 3")   
 { 
$filedesc = "ELECTIVE 3";
$newname = "admin/uploads/SMPBPO101-Module-9-1.pptx";
$name = "SMPBPO101-Module-9-1";
$uploaded_by = "Admin";

mysqli_query($conn,"INSERT INTO files (fdesc,floc,fdatein,class_id,fname,uploaded_by) VALUES ('$filedesc','$newname',NOW(),'$class_id','$name','$uploaded_by')");
 }

 elseif($subname == "ELECTIVE 4")   
 { 
$filedesc = "ELECTIVE 4";
$newname = "admin/uploads/SMPBPO102-module-5-1.pptx";
$name = "SMPBPO102-module-5-1";
$uploaded_by = "Admin";

mysqli_query($conn,"INSERT INTO files (fdesc,floc,fdatein,class_id,fname,uploaded_by) VALUES ('$filedesc','$newname',NOW(),'$class_id','$name','$uploaded_by')");
 }
 elseif($subname == "ELECTIVE 5")   
 { 
$filedesc = "ELECTIVE 5";
$newname = "admin/uploads/SMPBPO102-Module-6-1.pptx";
$name = "SMPBPO102-Module-6-1";
$uploaded_by = "Admin";

mysqli_query($conn,"INSERT INTO files (fdesc,floc,fdatein,class_id,fname,uploaded_by) VALUES ('$filedesc','$newname',NOW(),'$class_id','$name','$uploaded_by')");
 }


}


$sql_subject = "SELECT * FROM subject where subject_id = '$subject_id'";
$result_subject = $conn->query($sql_subject);

if ($result_subject->num_rows > 0) {
  // output data of each row
  while($row_subject = $result_subject->fetch_assoc()) {
    $subject_code = $row_subject['subject_code'];
    $subject_name = $row_subject['subject_title'];
  }
}



mysqli_query($conn,"INSERT INTO quiz (quiz_title,quiz_description,date_added,teacher_id) VALUES ('$subject_code','$subject_name',NOW(),'$teacher_id_main')");


$insert_query = mysqli_query($conn,"select * from student where class_id = '$class_id'")or die(mysqli_error());
while($row = mysqli_fetch_array($insert_query)){
$id = $row['student_id'];
mysqli_query($conn,"insert into teacher_class_student (teacher_id,student_id,teacher_class_id) value('$session_id','$id','$teacher_id')")or die(mysqli_error());
echo "yes";
}
  }
  else{
    echo "true";
    
  }

 
}











    
else{

mysqli_query($conn,"insert into teacher_class (teacher_id,subject_id,class_id,thumbnails,school_year,Specialization) values('$session_id','$subject_id','$class_id','uploads/thumbnails.jpg','$school_year','$specialization')")or die(mysqli_error());

$teacher_class = mysqli_query($conn,"select * from teacher_class order by teacher_class_id DESC")or die(mysqli_error());
$teacher_row = mysqli_fetch_array($teacher_class);
$teacher_id = $teacher_row['teacher_class_id'];
$teacher_id_main = $teacher_row['teacher_id'];


if($specialization == "10")
{
    $query_sub = mysqli_query($conn,"select * from subject where subject_id = $subject_id");
  while($row_sub = mysqli_fetch_array($query_sub)){
  
$strand = $row_sub['strand_name'];
    $subname = $row_sub['subject_title']; 
                        }

 if($subname == "ELECTIVE 1")   
 {                    
    $filedesc = "ELECTIVE 1";
    $newname = "admin/uploads/UNIT-2-DOM-USING-JAVASCRIPT.pdf";
    $name = "UNIT-2-DOM-USING-JAVASCRIPT";
    $uploaded_by = "Admin";
mysqli_query($conn,"INSERT INTO files (fdesc,floc,fdatein,class_id,fname,uploaded_by) VALUES ('$filedesc','$newname',NOW(),'$class_id','$name','$uploaded_by')");
 }
 elseif($subname == "ELECTIVE 2")   
 { 
$filedesc = "ELECTIVE 2";
$newname = "admin/uploads/SUNIT-2-DOM-USING-PHP.pdf";
$name = "UNIT-2-DOM-USING-PHP";
$uploaded_by = "Admin";

mysqli_query($conn,"INSERT INTO files (fdesc,floc,fdatein,class_id,fname,uploaded_by) VALUES ('$filedesc','$newname',NOW(),'$class_id','$name','$uploaded_by')");
 }
 elseif($subname == "ELECTIVE 3")   
 { 
$filedesc = "ELECTIVE 3";
    $newname = "admin/uploads/UNIT-4-JQUERY.pdf";
    $name = "UNIT-4-JQUERY";
    $uploaded_by = "Admin";
mysqli_query($conn,"INSERT INTO files (fdesc,floc,fdatein,class_id,fname,uploaded_by) VALUES ('$filedesc','$newname',NOW(),'$class_id','$name','$uploaded_by')");
 }

 elseif($subname == "ELECTIVE 4")   
 { 
$filedesc = "ELECTIVE 4";
    $newname = "admin/uploads/Lesson-4-to-6-Jason.pdf";
    $name = "Lesson-4-to-6-Jason";
    $uploaded_by = "Admin";
mysqli_query($conn,"INSERT INTO files (fdesc,floc,fdatein,class_id,fname,uploaded_by) VALUES ('$filedesc','$newname',NOW(),'$class_id','$name','$uploaded_by')");
 }

 elseif($subname == "ELECTIVE 5")   
 { 
$filedesc = "ELECTIVE 5";
    $newname = "admin/uploads/UNIT3_SHUN.pdf";
    $name = "UNIT3_SHUN";
    $uploaded_by = "Admin";
mysqli_query($conn,"INSERT INTO files (fdesc,floc,fdatein,class_id,fname,uploaded_by) VALUES ('$filedesc','$newname',NOW(),'$class_id','$name','$uploaded_by')");
 }

}
elseif($specialization == "11")
{
    $query_sub = mysqli_query($conn,"select * from subject where subject_id = $subject_id");
  while($row_sub = mysqli_fetch_array($query_sub)){
  
$strand = $row_sub['strand_name'];
    $subname = $row_sub['subject_title']; 
                        }

 if($subname == "ELECTIVE 1")   
 {  
    $filedesc = "ELECTIVE 1";
    $newname = "admin/uploads/IT-403-BA-Elective5-Analytics-Application-2022-2023.docx";
    $name = "IT-403-BA-Elective5-Analytics-Application-2022-2023";
    $uploaded_by = "Admin";
mysqli_query($conn,"INSERT INTO files (fdesc,floc,fdatein,class_id,fname,uploaded_by) VALUES ('$filedesc','$newname',NOW(),'$class_id','$name','$uploaded_by')");
 }
 elseif($subname == "ELECTIVE 2")   
 { 
$filedesc = "ELECTIVE 2";
$newname = "admin/uploads/Supplemental-Assessment-Template.docx";
$name = "Supplemental-Assessment-Template";
$uploaded_by = "Admin";

mysqli_query($conn,"INSERT INTO files (fdesc,floc,fdatein,class_id,fname,uploaded_by) VALUES ('$filedesc','$newname',NOW(),'$class_id','$name','$uploaded_by')");
 }
 elseif($subname == "ELECTIVE 3")   
 { 
$filedesc = "ELECTIVE 3";
    $newname = "admin/uploads/Trailhead-Academy-University-program-BSU.pptx";
    $name = "Trailhead-Academy-University-program-BSU";
    $uploaded_by = "Admin";
mysqli_query($conn,"INSERT INTO files (fdesc,floc,fdatein,class_id,fname,uploaded_by) VALUES ('$filedesc','$newname',NOW(),'$class_id','$name','$uploaded_by')");
 }
 elseif($subname == "ELECTIVE 4")   
 { 
$filedesc = "ELECTIVE 4";
    $newname = "admin/uploads/3. UNIT-3_Data-Objects-And-AttributesTypes.pdf";
    $name = "UNIT-3_Data-Objects-And-AttributesTypes";
    $uploaded_by = "Admin";
mysqli_query($conn,"INSERT INTO files (fdesc,floc,fdatein,class_id,fname,uploaded_by) VALUES ('$filedesc','$newname',NOW(),'$class_id','$name','$uploaded_by')");
 }
 elseif($subname == "ELECTIVE 5")   
 { 
$filedesc = "ELECTIVE 5";
    $newname = "admin/uploads/UNIT-4_Descriptive-Statistics.pdf";
    $name = "4. UNIT-4_Descriptive-Statistics";
    $uploaded_by = "Admin";
mysqli_query($conn,"INSERT INTO files (fdesc,floc,fdatein,class_id,fname,uploaded_by) VALUES ('$filedesc','$newname',NOW(),'$class_id','$name','$uploaded_by')");
 }

}
elseif($specialization == "12")
{
    $query_sub = mysqli_query($conn,"select * from subject where subject_id = $subject_id");
  while($row_sub = mysqli_fetch_array($query_sub)){
  
$strand = $row_sub['strand_name'];
    $subname = $row_sub['subject_title']; 
                        }

if($subname == "ELECTIVE 1")   
{ 
    $filedesc = "ELECTIVE 1";
    $newname = "admin/uploads/IT-311-BPO-Lesson-1-9-Merged.pdf";
    $name = "IT-311-BPO-Lesson-1-9-Merged";
    $uploaded_by = "Admin";
mysqli_query($conn,"INSERT INTO files (fdesc,floc,fdatein,class_id,fname,uploaded_by) VALUES ('$filedesc','$newname',NOW(),'$class_id','$name','$uploaded_by')");
}
elseif($subname == "ELECTIVE 2")   
 { 
$filedesc = "ELECTIVE 2";
$newname = "admin/uploads/Lesson-1-5-Merged-IT312.pdf";
$name = "Lesson-1-5-Merged-IT312";
$uploaded_by = "Admin";

mysqli_query($conn,"INSERT INTO files (fdesc,floc,fdatein,class_id,fname,uploaded_by) VALUES ('$filedesc','$newname',NOW(),'$class_id','$name','$uploaded_by')");
 }





 elseif($subname == "ELECTIVE 3")   
 { 
$filedesc = "ELECTIVE 3";
$newname = "admin/uploads/SMPBPO101-Module-9-1.pptx";
$name = "SMPBPO101-Module-9-1";
$uploaded_by = "Admin";

mysqli_query($conn,"INSERT INTO files (fdesc,floc,fdatein,class_id,fname,uploaded_by) VALUES ('$filedesc','$newname',NOW(),'$class_id','$name','$uploaded_by')");
 }

 elseif($subname == "ELECTIVE 4")   
 { 
$filedesc = "ELECTIVE 4";
$newname = "admin/uploads/SMPBPO102-module-5-1.pptx";
$name = "SMPBPO102-module-5-1";
$uploaded_by = "Admin";

mysqli_query($conn,"INSERT INTO files (fdesc,floc,fdatein,class_id,fname,uploaded_by) VALUES ('$filedesc','$newname',NOW(),'$class_id','$name','$uploaded_by')");
 }
 elseif($subname == "ELECTIVE 5")   
 { 
$filedesc = "ELECTIVE 5";
$newname = "admin/uploads/SMPBPO102-Module-6-1.pptx";
$name = "SMPBPO102-Module-6-1";
$uploaded_by = "Admin";

mysqli_query($conn,"INSERT INTO files (fdesc,floc,fdatein,class_id,fname,uploaded_by) VALUES ('$filedesc','$newname',NOW(),'$class_id','$name','$uploaded_by')");
 }


}


$sql_subject = "SELECT * FROM subject where subject_id = '$subject_id'";
$result_subject = $conn->query($sql_subject);

if ($result_subject->num_rows > 0) {
  // output data of each row
  while($row_subject = $result_subject->fetch_assoc()) {
    $subject_code = $row_subject['subject_code'];
    $subject_name = $row_subject['subject_title'];
  }
}



mysqli_query($conn,"INSERT INTO quiz (quiz_title,quiz_description,date_added,teacher_id) VALUES ('$subject_code','$subject_name',NOW(),'$teacher_id_main')");


$insert_query = mysqli_query($conn,"select * from student where class_id = '$class_id'")or die(mysqli_error());
while($row = mysqli_fetch_array($insert_query)){
$id = $row['student_id'];
mysqli_query($conn,"insert into teacher_class_student (teacher_id,student_id,teacher_class_id) value('$session_id','$id','$teacher_id')")or die(mysqli_error());
echo "yes";
}
}
}
?>