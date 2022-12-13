<?php  include('../session.php'); ?>
<?php  include('header.php'); ?>


    <body>
		<?php include('navbar.php') ?>
        <div class="container-fluid">
            <div class="row-fluid">
					<?php include('sidebar_dashboard.php'); ?>
                <!--/span-->
                <div class="span9" id="content" style="margin-left:400px;">
						<div class="row-fluid"></div>
						
                    <div class="row-fluid">
            
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><h1>STUDENT INFO</h1></div>
                            </div>
                            <div style="width:80%;height:100%;margin-left:10%;">
                            <?php
                            $school_year_query = mysqli_query($conn,"select * from school_year order by school_year DESC")or die(mysqli_error());
                            $school_year_query_row = mysqli_fetch_array($school_year_query);
                            $school_year = $school_year_query_row['school_year'];
                            $idget = $_GET['id'];
                            $query = mysqli_query($conn,"select * from student where student_id = '$idget' ")or die(mysqli_error());
					$row = mysqli_fetch_array($query);
					$student_id = $row['student_id'];	
                            
                            
                            
                            ?>
<br>
<br>
<center>
                    <img src="<?php echo $row['location'];?>" alt="Student Picture" style="width:200px;height;200px;border-radius:10px;">
                    <h2><?php echo $row['firstname'];?>,<?php echo $row['lastname'];?></h2>
                    <h3><?php echo $row['strand'];?></h3>




                    <div class="block" >
                            <div class="navbar navbar-inner block-header" >
                              
									<?php $query = mysqli_query($conn,"select * from teacher_class_student
														LEFT JOIN teacher_class ON teacher_class.teacher_class_id = teacher_class_student.teacher_class_id 
														LEFT JOIN class ON class.class_id = teacher_class.class_id 
														LEFT JOIN subject ON subject.subject_id = teacher_class.subject_id
														LEFT JOIN teacher ON teacher.teacher_id = teacher_class.teacher_id
														where student_id = '$student_id' and school_year = '$school_year'
														")or die(mysqli_error());
														$count = mysqli_num_rows($query);
									?>
                                    <h2>See Result to there Assessment</h2>
							
                            </div>
                            
                            <div class="block-content collapse in">
                                <div>
							
  										<ul	 id="da-thumbs" class="da-thumbs">
													<?php
														if ($count != '0'){
														while($row = mysqli_fetch_array($query)){
														$id = $row['teacher_class_id'];	
													?>
											<li>
												<a href="stats.php<?php echo '?id='.$student_id; ?>&courseid=<?php echo $id;?>">
														<img src ="<?php echo $row['thumbnails'] ?>" width="124" height="140" class="img-polaroid">
													<div>
													<span>
													<p><?php echo $row['class_name']; ?></p>
													
													</span>
													</div>
												</a>
												<p class="class"><?php echo $row['class_name']; ?></p>
												<p class="subject"><?php echo $row['subject_code']; ?></p>
												<p class="subject"><?php echo $row['firstname']." ".$row['lastname']?></p>
													
											
											</li>
								
			
									<?php }}else{ ?>
									<div class="alert alert-info"> Not Enroll to the Class</div>
									<?php } ?>	
									</ul>
                                   
                                </div>
                            </div>
                               
                        </div>

</center>
<br>
<br>





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
