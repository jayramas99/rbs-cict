<?php include('session.php'); ?>
<?php include('header_dashboard.php'); ?>
    <body>
		<?php include('navbar_student.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('student_sidebar_assessment.php'); ?>
                <div class="span9" id="content" style="margin-left:400px;">
                     <div class="row-fluid">
					    <!-- breadcrumb -->
				
									
					     <ul class="breadcrumb">
						<?php
						$school_year_query = mysqli_query($conn,"select * from school_year order by school_year DESC")or die(mysqli_error());
						$school_year_query_row = mysqli_fetch_array($school_year_query);
						$school_year = $school_year_query_row['school_year'];
						?>
							<li><a href="#"><b>My Class</b></a><span class="divider">/</span></li>
							<li><a href="#">School Year: <?php echo $school_year_query_row['school_year']; ?></a></li>
						</ul>
						 <!-- end breadcrumb -->
					 
				
					 
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header"style="background-color:#f59d1f;font-size:30px">
							<br><b style="color:#4c4c4c;">Assessments</b>
                                <div id="" class="muted pull-right">
									<?php $query = mysqli_query($conn,"select * from teacher_class_student
														LEFT JOIN teacher_class ON teacher_class.teacher_class_id = teacher_class_student.teacher_class_id 
														LEFT JOIN class ON class.class_id = teacher_class.class_id 
														LEFT JOIN subject ON subject.subject_id = teacher_class.subject_id
														LEFT JOIN teacher ON teacher.teacher_id = teacher_class.teacher_id
														where student_id = '$session_id' and school_year = '$school_year'
														")or die(mysqli_error());
														$count = mysqli_num_rows($query);
									?>
												
								</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form action="copy_file_student.php" method="post">
					
							
  									<table cellpadding="0" cellspacing="0" border="0" class="table" id="">
										<thead>
										        <tr>
												<th>Assessment Title</th>
												<th>Description</th>
												<th>Assessment Time (In Minutes)</th>
												<th></th>
												</tr>
										</thead>
										<tbody>
                              		<?php
$query_cl = mysqli_query($conn,"select * FROM student where student_id =  '$session_id'")or die(mysqli_error());
while($row_cl = mysqli_fetch_array($query_cl)){
	$id_class  = $row_cl['class_id'];
	
}



										$query = mysqli_query($conn,"select * FROM class_quiz_main 
										LEFT JOIN quiz_main on class_quiz_main.quiz_id = quiz_main.quiz_id
										where section = '$id_class'  order by class_quiz_id DESC ")or die(mysqli_error());
										while($row = mysqli_fetch_array($query)){
										$id  = $row['class_quiz_id'];
										$quiz_id  = $row['quiz_id'];
										$quiz_time  = $row['quiz_time'];
										$teacher_quiz_id = $row['teacher_class_id'];
									
										$query1 = mysqli_query($conn,"select * from student_class_quiz_main where class_quiz_id = '$id' and student_id = '$session_id'")or die(mysqli_error());
										$row1 = mysqli_fetch_array($query1);
									
										

									?>                              
										<tr>                     
										 <td><?php echo $row['quiz_title']; ?></td>
                                         <td><?php  echo $row['quiz_description']; ?></td>                                     
                                         <td><?php  echo $row['quiz_time'] / 60; ?></td>                                     
                                         <td width="200">
										<?php if (empty($row1['grade'])){ ?>
											<a  data-placement="bottom" title="Take your Assessment Exam" id="<?php echo $id; ?>Download" href="take_test_main.php<?php echo '?id='.$teacher_quiz_id ?>&<?php echo 'class_quiz_id='.$id; ?>&<?php echo 'test=ok' ?>&<?php echo 'quiz_id='.$quiz_id; ?>&<?php echo 'quiz_time='.$quiz_time;	 ?>"><i class="icon-check icon-large"></i>Take your Assessment Exam</a>
										<?php } 
										elseif($row1['trys'] != 0)
										{
										
										?>
										
										<a  data-placement="bottom" title="Take your Assessment Exam" id="<?php echo $id; ?>Download" href="take_test_main.php<?php echo '?id='.$teacher_quiz_id ?>&<?php echo 'class_quiz_id='.$id; ?>&<?php echo 'test=ok' ?>&<?php echo 'quiz_id='.$quiz_id; ?>&<?php echo 'quiz_time='.$quiz_time;	 ?>"><i class="icon-check icon-large"></i> Take your Assessment Exam</a>
										
										<?php }else{ ?>
										<b style="font-size:12px;">Exit Assessment Score <?php echo $row1['grade']; ?></b>
										<?php } ?>
										</td>            
														<script type="text/javascript">
														$(document).ready(function(){
															$('#<?php echo $id; ?>Take This Assessment').tooltip('show');
															$('#<?php echo $id; ?>Take This Assessment').tooltip('hide');
														});
														</script>										 
										</tr>
						 <?php } ?>
										</tbody>
									</table>
									</form>
  										
						
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>


                </div>
			
            </div>
	
        </div>
		<?php include('script.php'); ?>
    </body>
</html>