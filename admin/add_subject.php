<?php include('../session.php'); ?>
<?php include('header.php'); ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('subject_sidebar.php'); ?>
		
						<div class="span9" id="content" style="margin-left:400px;">
		                    <div class="row-fluid">
							
		                        <!-- block -->
		                        <div class="block">
		                            <div class="navbar navbar-inner block-header">
		                                <div class="muted pull-left">Add Subject</div>
		                            </div>
		                            <div class="block-content collapse in">
									<a href="subjects.php">Back</a>
									    <form class="form-horizontal" method="post">
										<div class="control-group">
											<label class="control-label" for="inputEmail">Subject Code</label>
											<div class="controls">
											<input type="text" name="subject_code" id="inputEmail" placeholder="Subject Code">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="inputPassword">Subject Title</label>
											<div class="controls">
											<input type="text" class="span8" name="title" id="inputPassword" placeholder="Subject Title" required>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="inputPassword">Number of Units</label>
											<div class="controls">
											<input type="text" class="span1" name="unit" id="inputPassword" pattern="[0-5]{1}" maxlength="1" required>
											</div>
										</div>
											<div class="control-group">
											<label class="control-label" for="inputPassword">Semester</label>
											<div class="controls">
												<select name="semester">
													<option></option>
													<option>1st</option>
													<option>2nd</option>
												</select>
											</div>
										</div>
								
												
																		
											
										<div class="control-group">
										<div class="controls">
										
										<button onclick="myFunction()" name="save" type="submit" class="btn btn-info"> Save</button>
										</div>
										</div>
										</form>
						

										
										
										<?php
										if (isset($_POST['save'])){
										$subject_code = $_POST['subject_code'];
										$title = $_POST['title'];
										$unit = $_POST['unit'];
									

										$title = strtoupper($title);
										$semester = $_POST['semester'];
										
										
										$query = mysqli_query($conn,"select * from subject where subject_code = '$subject_code' ")or die(mysqli_error());
										$count = mysqli_num_rows($query);

										if ($count > 0){ 
											?>
										<script>
										alert('Data Already Exist');

										</script>
										<?php
										}
										else{
										mysqli_query($conn,"insert into subject (subject_code,subject_title,unit,semester) values('$subject_code','$title','$unit','$semester')")or die(mysqli_error());
										
										
										mysqli_query($conn,"insert into activity_log (date,username,action) values(NOW(),'$user_username','Add Subject $subject_code')")or die(mysqli_error());
										
										
										?>
										<script>

										alert("Save Sucessfully");
										window.location = "subjects.php";
										</script>
										<?php
										}
										}
										
										?>
									
								
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