<?php include('../session.php'); ?>
<?php include('header.php'); ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('department_sidebar.php'); ?>
				<div style="margin-left:400px;">
				<div class="span3" id="adduser">
					
				<?php include('add_department.php'); ?>		   			
				</div>
                <div class="span6" id="">
                     <div class="row-fluid">
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Department List</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<script>
										function terms_changed(termsCheckBox){
   
    if(termsCheckBox.checked){
        
        document.getElementById("delete").disabled = false;
    } else{
        
        document.getElementById("delete").disabled = true;
    }
}

										</script>
                                  <script>
$(document).ready(function() {
    $('#examples').dataTable();
} );


    </script>      
									<form action="delete_department.php" method="post">
  									<table cellpadding="0" cellspacing="0" border="0" class="table" id="examples">
                                      <script>
$(document).ready(function() {
    $('#examples').dataTable();
} );


    </script>      
									<button data-toggle="modal" href="#department_delete" id="delete"  class="btn btn-danger" name="" disabled>Delete</button>
									<?php include('modal_delete.php'); ?>
  
										<thead>
										  <tr>
												<th></th>
												<th>Department</th>
												<th>Person In-charge</th>
											
												<th></th>
										   </tr>
										</thead>
										<tbody>
													<?php
													$user_query = mysqli_query($conn,"select * from department")or die(mysqli_error());
													while($row = mysqli_fetch_array($user_query)){
													$id = $row['department_id'];
													?>
									
													<tr>
														<td width="30">
														<input id="optionsCheckbox" onclick="terms_changed(this)" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
														</td>
														<td><?php echo $row['department_name']; ?></td>
														<td><?php echo $row['dean']; ?></td>
												
														<td width="30"><a href="edit_department.php<?php echo '?id='.$id; ?>" class="btn btn-success">Edit</a></td>

                               
													</tr>
												<?php } ?>
										</tbody>
									</table>
									</form>
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

</html>