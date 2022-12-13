<?php include('session.php'); ?>
<?php include('header_dashboard.php'); ?>
    <body>
		<?php include('navbar_student.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('student_sidebar.php'); ?>
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
                            <div class="navbar navbar-inner block-header"style="background-color:#f59d1f;font-size:25px;color:#4c4c4c"><br><b>My Class:</b>
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
												<span class="badge badge-info"><?php echo $count; ?></span>
								</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								
  										<ul	 id="da-thumbs" class="da-thumbs">
													<?php
														if ($count != '0'){
														while($row = mysqli_fetch_array($query)){
														$id = $row['teacher_class_id'];	
													?>
											<li>
												<a href="progress.php<?php echo '?id='.$id; ?>">
														<img src ="admin/<?php echo $row['thumbnails'] ?>" width="124" height="140" class="img-polaroid">
													<div>
													<span>
													<p><?php echo $row['class_name']; ?></p>
													
													</span>
													</div>
												</a>
												<p class="class"><?php echo $row['class_name']; ?></p>
												<p class="subject"><?php echo $row['subject_title']; ?></p>
												
													
											
											</li>
								
			
									<?php }}else{ ?>
									<div class="alert alert-info"> You are currently not enroll to your class</div>
									<?php } ?>	
									</ul>
						
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