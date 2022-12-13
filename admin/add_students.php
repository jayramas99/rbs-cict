

<div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Add Students</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form action="filter.php" method="post">
								
								        <div class="control-group">
                                   
                                          <div class="controls">
                                      
										   <select  name="un" class="" required>
                                             	<option></option>
											<?php
											$cys_query = mysqli_query($conn,"select * from student where status = '' ");
											while($cys_row = mysqli_fetch_array($cys_query)){
											
											?>
											<option value="<?php echo $cys_row['username']; ?>"><?php echo $cys_row['username']; ?></option>
											<?php } ?>
                                            </select>
                                          </div>
                                        </div>
										<div class="control-group">
                                   
                                          <div class="controls">
                                            <select  name="strand_id" class="" disabled>
                                             	<option></option>
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
                                             <select  name="class_id" class="" disabled>
                                             	<option></option>
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
                                            <input name="fn" class="input focused" id="focusedInput" type="text" placeholder = "First Name" disabled>
                                          </div>
                                        </div>
                                  		<div class="control-group">
                                          <div class="controls">
                                            <input name="mn" class="input focused" id="focusedInput" type="text" placeholder = "Middle Name" disabled>
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
                                            <input  name="ln" class="input focused" id="focusedInput" type="text" placeholder = "Last Name" disabled>
                                          </div>
                                        </div>
                                  
                                  		<div class="control-group">
                                          <div class="controls">
                                            <input  name="suffix" class="input focused" id="focusedInput" type="text" placeholder = "Suffix" disabled>
                                          </div>
                                        </div>
								
										
											<div class="control-group">
                                          <div class="controls">
												<button name="save" class="btn btn-info" disabled>Save</button>
												<button name="validate" type="submit" class="btn btn-info" >Verify</button>
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
							$.jGrowl("Student LRN Have No Record Please Try Again", { header: 'NO RECORD' });
							$('#studentTableDiv').load('student_table.php', function(response){
								$("#studentTableDiv").html(response);
								$('#example').dataTable( {
									"sDom": "<'row'<'span6'l><'span6'f>r>t<'row'<'span6'i><'span6'p>>",
									"sPaginationType": "bootstrap",
									"oLanguage": {
										"sLengthMenu": "_MENU_ records per page"
									}
								} );
								$(_this).find(":input").val('');
								$(_this).find('select option').attr('selected',false);
								$(_this).find('select option:first').attr('selected',true);
							});}
                            else if(html=='false') {
							$.jGrowl("Student LRN is Already Taken", { header: 'ALREADY TAKEN' });
							$('#studentTableDiv').load('student_table.php', function(response){
								$("#studentTableDiv").html(response);
								$('#example').dataTable( {
									"sDom": "<'row'<'span6'l><'span6'f>r>t<'row'<'span6'i><'span6'p>>",
									"sPaginationType": "bootstrap",
									"oLanguage": {
										"sLengthMenu": "_MENU_ records per page"
									}
								} );
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
