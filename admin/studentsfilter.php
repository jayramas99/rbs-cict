<?php include('../session.php'); ?>
<?php include('header.php'); ?>

   <?php
$lrn=$_GET['id'];
$query = mysqli_query($conn,"select * from student where student_id = '$lrn'");
while($row = mysqli_fetch_array($query)){
  $username = $row['username']; 
  $firstname = $row['firstname'];
  $middlename = $row['middlename'];
  $lastname = $row['lastname'];
  $suffix = $row['suffix'];
  $class_id = $row['class_id'];
  $strand = $row['strand'];
  
  
  
                   }


?>

    <body> 

		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('student_sidebar.php'); ?>
                <div style="margin-left:400px;">
				<div class="span3" id="adduser">
				<?php include('add_studentsfilter.php'); ?>		   			
				</div>
                <div class="span6" id="">
                     <div class="row-fluid">
                        <!-- block -->
                        <div  id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Student List</div>
                            </div>
                            <div class="block-content collapse in">
								<div class="span12" id="studentTableDiv">
									<?php include('studentfilter_table.php'); ?>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>


                </div>
                </div>
            </div>

        </div>
		<?php include('script.php'); ?>
    </body>

</html>