<?php include('session.php'); ?>
<?php include('header_dashboard.php'); ?>

<body id="class_div">
		<?php include('navbar_teacher.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('quiz_sidebar_teacher.php'); ?>
                <div class="span9" id="content" style="margin-left:400px;">
                     <div class="row-fluid">
					    <!-- breadcrumb -->	
						<br>
						<br>
									<ul class="breadcrumb">
										<?php
										$school_year_query = mysqli_query($conn,"select * from school_year order by school_year DESC")or die(mysqli_error());
										$school_year_query_row = mysqli_fetch_array($school_year_query);
										$school_year = $school_year_query_row['school_year'];
										?>
											<li><a href="#"><b>My Class</b></a><span class="divider">/</span></li>
										<li><a href="#">School Year: <?php echo $school_year_query_row['school_year']; ?></a><span class="divider">/</span></li>
										<li><a href="#"><b>Practice Assessment</b></a></li>
									</ul>
						 <!-- end breadcrumb -->
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header" style="background-color:#f59d1f;font-size:25px">
                                <div id="" class="muted pull-right" ></div><br><b style="color:#4c4c4c;">Add Practice Assesment</b>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
									<div class="pull-right">
									<a href="teacher_quiz.php" class="btn btn-info"> Back</a>
									</div>
								
									    <form class="form-horizontal" method="post">
										<div class="control-group">
											<label class="control-label" for="inputEmail">Subject Code</label>
											<div class="controls">
										
											<select name="quiz_title"  id="inputEmail">
    <option value="IT 306">IT 306</option>
  <option value="IT 307">IT 307</option>
  <option value="IT 311">IT 311</option>
  <option value="IT 312">IT 312</option>
  <option value="IT 403">IT 403</option>
</select>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="inputPassword">Description</label>
											<div class="controls">
											<input type="text" class="span8" name="description" id="inputPassword" placeholder="Description" required>
											</div>
										</div>										
										<div class="control-group">
										<div class="controls">										
										<button name="save" type="submit" class="btn btn-success">Save</button>
										</div>
										</div>
										</form>									
										<?php
										if (isset($_POST['save'])){
										$quiz_title = $_POST['quiz_title'];
										$description = $_POST['description'];
										mysqli_query($conn,"insert into quiz (quiz_title,quiz_description,date_added,teacher_id) values('$quiz_title','$description',NOW(),'$session_id')")or die(mysqli_error());
										
										mysqli_query($conn,"insert into activity_log (date,username,action) values(NOW(),'$user_username','Add New Review Assessment $quiz_title')")or die(mysqli_error());
										?>
										<script>
											alert("Successfully Added Review Assessment");
										window.location = 'teacher_quiz.php';
										</script>
										<?php
										}
										?>							
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