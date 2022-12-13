
<div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Add Student</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                             

								<form id="add_student" method="post">
								
								        <div class="control-group">
                                   
                                          <div class="controls">
                                      

                                           <input   type="text" value="<?php echo $username;?>" placeholder = "Student Number" minlength="10" maxlength="12" required>
                                       <input name="un"  type="hidden" value="<?php echo $username;?>" placeholder = "LRN Number" maxlength="12" >
                                          </div>
                                        </div>
										<div class="control-group">
                                   
                                          <div class="controls">
                                          
                                            <select   class="" disabled>
                                             	
											<?php
											$cys_query = mysqli_query($conn,"select * from strand where  strand_name = '$strand'");
											while($cys_row = mysqli_fetch_array($cys_query)){
											
											?>
											<option value="<?php echo $cys_row['strand_name']; ?>"><?php echo $cys_row['strand_name']; ?></option>
											<?php } ?>
                                            </select>
                                                 <select  name="strand_id" style="display:none;" type="hidden">
                                             	
											<?php
											$cys_query = mysqli_query($conn,"select * from strand where  strand_name = '$strand'");
											while($cys_row = mysqli_fetch_array($cys_query)){
											
											?>
											<option value="<?php echo $cys_row['strand_name']; ?>"><?php echo $cys_row['strand_name']; ?></option>
											<?php } ?>
                                            </select>
                                          </div>
                                        </div>
										
								
										<div class="control-group">
                                          <div class="controls">
                                            
                                             <select   class="" disabled>
                                             	
											<?php
											$cys_query = mysqli_query($conn,"select * from class where class_id= '$class_id'");
											while($cys_row = mysqli_fetch_array($cys_query)){
											
											?>
											<option value="<?php echo $cys_row['class_id']; ?>"><?php echo $cys_row['class_name']; ?></option>
											<?php } ?>
                                            </select>
                                            
                                             <select  name="class_id" style="display:none;" >
                                             	
											<?php
											$cys_query = mysqli_query($conn,"select * from class where class_id= '$class_id'");
											while($cys_row = mysqli_fetch_array($cys_query)){
											
											?>
											<option value="<?php echo $cys_row['class_id']; ?>"><?php echo $cys_row['class_name']; ?></option>
											<?php } ?>
                                            </select>
                                             </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused"  type="text" value="<?php echo $firstname;?>" placeholder = "First Name" disabled>
                                            <input name="fn" class="input focused"  type="hidden" value="<?php echo $firstname;?>" placeholder = "First Name" >
                                          </div>
                                        </div>
                                  		<div class="control-group">
                                          <div class="controls">
                                            <input  class="input focused"  type="text" value="<?php echo $middlename;?>" placeholder = "Middle Name" disabled>
                                            <input name="mn" class="input focused"  type="hidden" value="<?php echo $middlename;?>" placeholder = "Middle Name" >
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
                                            <input   class="input focused"  type="text" value="<?php echo $lastname;?>" placeholder = "Last Name" disabled>
                                            <input  name="ln" class="input focused"  type="hidden" value="<?php echo $lastname;?>" placeholder = "Last Name" >
                                          </div>
                                        </div>
                                  
                                  		<div class="control-group">
                                          <div class="controls">
                                            <input   class="input focused"  type="text" value="<?php echo $suffix;?>" placeholder = "Suffix" disabled>
                                            <input  name="suffix" class="input focused"  type="hidden" value="<?php echo $suffix;?>" placeholder = "Suffix" >
                                          </div>
                                        </div>
								
										
											<div class="control-group">
                                          <div class="controls">
												<button name="save" class="btn btn-info" >Save</button>
												<button name="validate" type="submit" class="btn btn-info" disabled>Verify</button>
                                          </div>
                                        </div>
                                </form>
          
								</div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
					
			<script>
            jQuery(document).ready(function($){
				$("#add_student").submit(function(e){
					e.preventDefault();
					var _this = $(e.target);
					var formData = $(this).serialize();
					$.ajax({
						type: "POST",
						url: "save_student.php",
						data: formData,
						success: function(html){
							if(html=='true') {
							$.jGrowl("Student Number Have No Record Please Try Again", { header: 'NO RECORD' });
							$('#studentTableDiv').load('student_table.php', function(response){
								$("#studentTableDiv").html(response);
								$('#example').dataTable( {
									"sDom": "<'row'<'span6'l><'span6'f>r>t<'row'<'span6'i><'span6'p>>",
									"sPaginationType": "bootstrap",
									"oLanguage": {
										"sLengthMenu": "_MENU_ records per page"
									}
                                    
								} );
                                var delay = 1000;
							        setTimeout(function(){ window.location = 'students.php'  }, delay);  
								$(_this).find(":input").val('');
								$(_this).find('select option').attr('selected',false);
								$(_this).find('select option:first').attr('selected',true);
							});}
                            else if(html=='false') {
							$.jGrowl("Student Number is Already Taken", { header: 'ALREADY TAKEN' });
							$('#studentTableDiv').load('student_table.php', function(response){
								$("#studentTableDiv").html(response);
								$('#example').dataTable( {
									"sDom": "<'row'<'span6'l><'span6'f>r>t<'row'<'span6'i><'span6'p>>",
									"sPaginationType": "bootstrap",
									"oLanguage": {
										"sLengthMenu": "_MENU_ records per page"
									}
                                   
								} );
                                var delay = 1000;
							        setTimeout(function(){ window.location = 'students.php'  }, delay);  
								$(_this).find(":input").val('');
								$(_this).find('select option').attr('selected',false);
								$(_this).find('select option:first').attr('selected',true);
							});}
							else{
								$.jGrowl("Student Successfully  Validated", { header: 'Student Added' });
							$('#studentTableDiv').load('student_table.php', function(response){
								$("#studentTableDiv").html(response);
								$('#example').dataTable( {
									"sDom": "<'row'<'span6'l><'span6'f>r>t<'row'<'span6'i><'span6'p>>",
									"sPaginationType": "bootstrap",
									"oLanguage": {
										"sLengthMenu": "_MENU_ records per page"
									}
                                    
								} );
                                var delay = 1000;
							        setTimeout(function(){ window.location = 'students.php'  }, delay);  
								$(_this).find(":input").val('');
								$(_this).find('select option').attr('selected',false);
								$(_this).find('select option:first').attr('selected',true);
							});
							}
						}
					});
				});
			});
            
            
            
            
            
            
            
 
			</script>		
