<?php
 $host = "localhost";
 $username = "root";
 $password = "";
 $database = "dbs6046181";

 // Create DB Connection
 $conn = mysqli_connect($host, $username, $password, $database);

 // Check connection
 if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
 }

 session_start();

 
 require 'vendor/autoload.php';
 
 use PhpOffice\PhpSpreadsheet\Spreadsheet;
 use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
 
 if(isset($_POST['save_excel_data']))
 {
     $fileName = $_FILES['import_file']['name'];
     $file_ext = pathinfo($fileName, PATHINFO_EXTENSION);
 
     $allowed_ext = ['xls','csv','xlsx'];
 
     if(in_array($file_ext, $allowed_ext))
     {
         $inputFileNamePath = $_FILES['import_file']['tmp_name'];
         $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($inputFileNamePath);
         $data = $spreadsheet->getActiveSheet()->toArray();
 
         $count = "0";
         foreach($data as $row)
         {
             if($count > 0)
             {
                $student_no = $row['0'];
                 $firstname = $row['1'];
                 $middle = $row['2'];
                 $lastname = $row['3'];
                
                 $class_id = $row['5'];
                 $speacial = $row['4'];

                 $location = 'uploads/NO-IMAGE-AVAILABLE.jpg';
                 $status = 'Unregistered';
 
                 $studentQuery = "INSERT INTO student (username,firstname,middlename,lastname,class_id,strand,location,status) VALUES ('$student_no','$firstname','$middle','$lastname','$class_id','$speacial','$location','$status')";
                 $result = mysqli_query($conn, $studentQuery);
                 $msg = true;
             }
             else
             {
                 $count = "1";
             }
         }
 
         if(isset($msg))
         {
            $user_username = "CICT College";
            mysqli_query($conn,"insert into activity_log (date,username,action) values(NOW(),'$user_username','Import Students')")or die(mysqli_error());
             $_SESSION['message'] = "Successfully Imported";
             header('Location: students.php');
             exit(0);
         }
         else
         {
             $_SESSION['message'] = "Not Imported";
             header('Location: students.php');
             exit(0);
         }
     }
     else
     {
         $_SESSION['message'] = "Invalid File";
         header('Location: students.php');
         exit(0);
     }
 }
                                  




?>
