   
   <br>
   
   <div class="row-fluid" style="width:40vh;">
   <a href="students.php" class="btn btn-info"> Back</a>
   
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Add Student</div>
                            </div>
                            <div class="block-content collapse in">
							<?php
							$query = mysqli_query($conn,"select * from student LEFT JOIN class ON class.class_id = student.class_id where student_id = '$get_id'")or die(mysqli_error());
							$row = mysqli_fetch_array($query);
							?>
                                <div class="span12">
								<form method="post">
								
								        <div class="control-group">
                                   
                                          <div class="controls">
                                            <select  name="cys" class="" required>
                                             	<option value="<?php echo $row['class_id']; ?>"><?php echo $row['class_name']; ?></option>
											<?php
											$cys_query = mysqli_query($conn,"select * from class order by class_name");
											while($cys_row = mysqli_fetch_array($cys_query)){
											
											?>
											<option value="<?php echo $cys_row['class_id']; ?>"><?php echo $cys_row['class_name']; ?></option>
											<?php } ?>
                                            </select>
                                          </div>
                                        </div>



                                        <div class="control-group">
                                   
                                   <div class="controls">
                                   <select  name="strand_id" class="" required>
                                             	<option value="<?php echo $row['strand']; ?>"><?php echo $row['strand']; ?></option>
											<?php
											$cys_query = mysqli_query($conn,"select * from strand order by id");
											while($cys_row = mysqli_fetch_array($cys_query)){
											
											?>
											<option value="<?php echo $cys_row['strand_name']; ?>"><?php echo $cys_row['strand_name']; ?></option>
											<?php } ?>
                                            </select>
                                   </div>
                                 </div>




                                        
								
										<div class="control-group">
                                          <div class="controls">
                                            <input name="un" value="<?php echo $row['username']; ?>" class="input focused" id="focusedInput" pattern="[0-9]{12}" onkeypress='return event.charCode>=48 && event.charCode<57' maxlength="12" type="text" placeholder = "Student Number" readonly>
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
                                            <input name="fn"  value="<?php echo $row['firstname']; ?>"  class="input focused" id="focusedInput" type="text" placeholder = "Firstname" required>
                                          </div>
                                        </div>
                                  
                                  		<div class="control-group">
                                          <div class="controls">
                                            <input name="mn"  value="<?php echo $row['middlename']; ?>"  class="input focused" id="focusedInput" type="text" placeholder = "Middlename">
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
                                            <input  name="ln"  value="<?php echo $row['lastname']; ?>" class="input focused" id="focusedInput" type="text" placeholder = "Lastname" required>
                                          </div>
                                        </div>
                                  
                                  		<div class="control-group">
                                          <div class="controls">
                                            <input name="suffix"  value="<?php echo $row['suffix']; ?>"  class="input focused" id="focusedInput" type="text" placeholder = "Suffix">
                                          </div>
                                        </div>
								
										
											<div class="control-group">
                                          <div class="controls">
												<button name="update" class="btn btn-success">Save</button>

                                          </div>
                                        </div>
                                </form>
								</div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
					
					
		
	      <?php
                            if (isset($_POST['update'])) {
                               
                                $un = $_POST['un'];
                                $fn = $_POST['fn'];
                                $mn = $_POST['mn'];
                                $ln = $_POST['ln'];
                                $suffix = $_POST['suffix'];
                                $cys = $_POST['cys'];
                                $strand_id = $_POST['strand_id'];
                      

								mysqli_query($conn,"update student set username = '$un' , firstname ='$fn' , middlename ='$mn', lastname = '$ln' , suffix ='$suffix', class_id = '$cys',strand = '$strand_id' where student_id = '$get_id' ")or die(mysqli_error());

								?>
 
								<script>
                  alert("Edit Successfully");
								window.location = "students.php"; 
								</script>

                       <?php     }  ?>
	