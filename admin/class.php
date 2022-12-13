<?php include('../session.php'); ?>
<?php include('header.php'); ?>

    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('class_sidebar.php'); ?>
				<div style="margin-left:400px;">
				<br>				<div class="span3" id="adduser">
					
				<?php include('add_class.php'); ?>		   			
				</div>
                <div class="span6" id="" >
                     <div class="row-fluid">
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header" style="background-color:#f59d1f;">
                                <div class="muted pull-left" style="color:#4c4c4c;font-size:20px;"><b>Class List</b></div>
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
									<form action="delete_class.php" method="post">
  									<table cellpadding="0" cellspacing="0" border="0" class="table" id="examples">
                                      <script>
$(document).ready(function() {
    $('#examples').dataTable();
} );


    </script> 
										
													
									<thead>
										  <tr>
													<th></th>
													<th>Grade Year And Section</th>
													<th></th>
										   </tr>
										</thead>
										<tbody>
										<?php
										$class_query = mysqli_query($conn,"select * from class")or die(mysqli_error());
										while($class_row = mysqli_fetch_array($class_query)){
										$id = $class_row['class_id'];
										?>
												
										<tr>
											<td width="30">
											<input id="optionsCheckbox" onclick="terms_changed(this)"  name="selector[]" type="checkbox" value="<?php echo $id; ?>">
											</td>
											<td><?php echo $class_row['class_name']; ?></td>
											<td width="40"><a href="edit_class.php<?php echo '?id='.$id; ?>" class="btn btn-success">Edit </a></td>
                                     
                               
										</tr>
										<?php } ?>
                               
                               
										</tbody>
									</table>
									<br>
									<button data-toggle="modal" href="#class_delete" id="delete"  class="btn btn-danger" style="float:right;" name="" disabled>Delete</button>
													<?php include('modal_delete.php'); ?>
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