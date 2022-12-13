<div class="row-fluid" style="width:34vh;">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header" style="background-color:#f59d1f;">
                                <div class="muted pull-left"style="color:#4c4c4c;font-size:20px"><b>Add Professors</b></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form method="post">
								<!--
										<label>Photo:</label>
										<div class="control-group">
                                          <div class="controls">
                                               <input class="input-file uniform_on" id="fileInput" type="file" required>
                                          </div>
                                        </div>
									-->	
										
										  <div class="control-group">
											<label>Department:</label>
                                          <div class="controls">
                                            <select name="department"  class="" required>
                                             	<option></option>
											<?php
											$query = mysqli_query($conn,"select * from department order by department_name");
											while($row = mysqli_fetch_array($query)){
											
											?>
											<option value="<?php echo $row['department_id']; ?>"><?php echo $row['department_name']; ?></option>
											<?php } ?>
                                            </select>
                                          </div>
                                        </div>
										
                                        <div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" name="emp_id" id="focusedInput" type="text" placeholder = "Employee ID" class="" required>
                                          </div>
                                        </div>
                                        
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" name="firstname" id="focusedInput" type="text" placeholder = "Firstname" class="" required>
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" name="lastname" id="focusedInput" type="text" placeholder = "Lastname" class="" required>
                                          </div>
                                        </div>
										
										
									
											<div class="control-group">
                                          <div class="controls">
												<button name="save" class="btn btn-info"><i class="icon-plus-sign icon-large"></i></button>




                                          </div>

                                        </div>
                                </form>
                                <br>
                                <form action="upload2.php" method="post" id="import_excel_form" enctype="multipart/form-data">
<?php
                if(isset($_SESSION['message']))
                {
                    echo "<h4>".$_SESSION['message']."</h4>";
                    unset($_SESSION['message']);
                }
                ?>
<div>
    <label>Select Excel File</label>
    <input type="file" name="import_file" />
	<br> <br>
    <input type="submit" name="save_excel_data" id="import" class="btn btn-info btn-rounded btn-block my-4 waves-effect z-depth-0" style="background-color:#365B6D;margin-top:-5px;width:22%;" value="Import" />
</div>
</form>
								</div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
					
					
					    <?php
                            if (isset($_POST['save'])) {
                              $emp_id = $_POST['emp_id'];
                                $firstname = $_POST['firstname'];
                                $lastname = $_POST['lastname'];
                                $department_id = $_POST['department'];
								
								
								$query = mysqli_query($conn,"select * from teacher where employee_id = '$emp_id'")or die(mysqli_error());
								$count = mysqli_num_rows($query);
								
								if ($count > 0){ ?>
								<script>
								alert('Data Already Exist');
								</script>
								<?php
								}else{


                                mysqli_query($conn,"insert into teacher (firstname,lastname,location,department_id,employee_id)
								values ('$firstname','$lastname','uploads/NO-IMAGE-AVAILABLE.jpg','$department_id','$emp_id')         
								") or die(mysqli_error()); 

                $user_username = "CICT College";
                mysqli_query($conn,"insert into activity_log (date,username,action) values(NOW(),'$user_username','Added a Professor')")or die(mysqli_error());
                
                ?>
								<script>
                  alert("Successfully Added Professor");
							 	window.location = "teachers.php"; 
								</script>
								<?php   }} ?>
						 
						 