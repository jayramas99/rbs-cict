<?php  include('../session.php'); ?>
<?php  include('header.php'); ?>


    <body>
		<?php include('navbar.php') ?>
        <div class="container-fluid">
            <div class="row-fluid">
					<?php include('sidebar_assessment.php'); ?>
                <!--/span-->
                <div class="span9" id="content" style="margin-left:400px;">
						<div class="row-fluid"></div>
						
                    <div class="row-fluid">
            
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"></div>
                            </div>
                            <div class="block-content collapse in">
                            <div class="span12">
									<div class="pull-right">
									<a href="students_assessments.php" class="btn btn-info"> Back</a>
									</div>
								
									    <form class="form-horizontal" method="post">
										<div class="control-group">
											<label class="control-label" for="inputEmail">Assessment Title</label>
											<div class="controls">
											<input type="text" name="quiz_title" id="inputEmail" placeholder="Assessment Title">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="inputPassword">Assessment Description</label>
											<div class="controls">
											<input type="text" class="span8" name="description" id="inputPassword" placeholder="Assessment Description" required>
											</div>
										</div>	
                                        <div class="control-group">
											<label class="control-label" for="inputPassword">Assessment Specialization</label>
											<div class="controls">
                                            <select name="subject_Specialization"  class="" required>
                                             	<option></option>
											<?php
											$query = mysqli_query($conn,"select * from strand order by id");
											while($row = mysqli_fetch_array($query)){
											
											?>
											<option value="<?php echo $row['id']; ?>"><?php echo $row['strand_name']; ?></option>
											<?php } ?>
                                            </select>
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
                                        $specialization = $_POST['subject_Specialization'];
										mysqli_query($conn,"insert into quiz_main (quiz_title,quiz_description,specialization,date_added) values('$quiz_title','$description','$specialization',NOW())")or die(mysqli_error());
										?>
										<script>
										window.location = 'students_assessments.php';
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
    
       
        </div>
	<?php include('script.php'); ?>
    </body>
