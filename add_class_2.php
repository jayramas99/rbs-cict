						<!-- block -->
                        <div class="block" style="position:absolute;margin-left:820px; margin-top:0px;">
                            <div class="navbar navbar-inner block-header" style="background-color:#f59d1f;">
                                <div id="" class="muted pull-left"><h4 style="color:#4c4c4c;">Add class</h4></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form method="post" id="add_class">
										<div class="control-group">
											<label>Class Name:</label>
                                          <div class="controls">
											<input type="hidden" name="session_id" value="<?php echo $session_id; ?>">
                                            <select name="class_id"  class="" required>
                                             	<option></option>
											<?php

                                       


											$query = mysqli_query($conn,"select * from class order by class_name");
											while($row = mysqli_fetch_array($query)){
											
											?>
											<option value="<?php echo $row['class_id']; ?>"><?php echo $row['class_name']; ?></option>
											<?php } ?>
                                            </select>
                                          </div>
                                        </div>
                                        <div class="control-group">
											<label>Professor:</label>
                                          <div class="controls">
                                            <select name="teacher_id"  class="" required>
                                             	<option></option>
											<?php
											$query = mysqli_query($conn,"select * from teacher where teacher_id ='$session_id' order by teacher_id");
											while($row = mysqli_fetch_array($query)){
											
											?>
											<option value="<?php echo $row['teacher_id']; ?>"><?php echo $row['firstname'];?> <?php echo $row['lastname'];?></option>
											<?php } ?>
                                            </select>
                                          </div>
                                        </div>
										
										<div class="control-group">
											<label>Subject:</label>
                                          <div class="controls">
                                            <select name="subject_id"  class="" required>
                                             	<option></option>
											<?php



											$query = mysqli_query($conn,"select * from subject order by subject_code");
											while($row = mysqli_fetch_array($query)){
											
											?>
											<option value="<?php echo $row['subject_id']; ?>"><?php echo $row['subject_title']; ?></option>
											<?php } ?>
                                            </select>
                                          </div>
                                        </div>
										<div class="control-group">
											<label>Specialization:</label>
                                          <div class="controls">
                                            <select name="subject_Specialization"  class="" required>
                                             	<option></option>
											<?php
											$sql_spe = "SELECT * FROM teacher_class where teacher_id = '$session_id'";
											$result_spe = $conn->query($sql_spe);
											if ($result_spe->num_rows > 0) {
												// output data of each row
												while($row_spe = $result_spe->fetch_assoc()) {
												  $class_spe = $row_spe['Specialization'];
											
												}
												$query = mysqli_query($conn,"select * from strand  where id = '$class_spe' order by id");
											}
											else{
												$query = mysqli_query($conn,"select * from strand  order by id");
											}
											while($row = mysqli_fetch_array($query)){
											
											?>
											<option value="<?php echo $row['id']; ?>"><?php echo $row['strand_name']; ?></option>
											<?php } ?>
                                            </select>
                                          </div>
                                        </div>
										
										<div class="control-group">
											<label>School Year:</label>
                                          <div class="controls">
											<?php
											$query = mysqli_query($conn,"select * from school_year order by school_year DESC");
											$row = mysqli_fetch_array($query);
											?>
											<input id="" class="span5" type="text" class="" name="school_year" value="<?php  echo $row['school_year']; ?>"readonly >
                                          </div>
                                        </div>
											<div class="control-group">
                                          <div class="controls">
												<button name="save" class="btn btn-success"> Save</button>
                                          </div>
                                        </div>
                                </form>
								
            <script>
			jQuery(document).ready(function($){
				$("#add_class").submit(function(e){
					e.preventDefault();
					var _this = $(e.target);
					var formData = $(this).serialize();
					$.ajax({
						type: "POST",
						url: "admin/add_class_action.php",
						data: formData,
						success: function(html){
						if(html=="true")
						{
						$.jGrowl("Class Already Exist or Class Already taken", { header: 'Add Class Failed' });
						}
						else{
							$.jGrowl("Classs Successfully  Added", { header: 'Class Added' });
							var delay = 500;
							setTimeout(function(){ window.location = 'add_class_teacher.php'  }, delay);  
						}
						}
					});
				});
			});
			</script>		

								</div>
                            </div>
                        </div>
                        <!-- /block -->
						
