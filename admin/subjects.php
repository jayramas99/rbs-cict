<?php include('../session.php'); ?>
<?php include('header.php'); ?>

    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid" >
            <div class="row-fluid" >
				<?php include('subject_sidebar.php'); ?>
		
                <div class="span9" id="content" style="margin-left:400px;">
				<br>
                     <div class="row-fluid">
						
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header" style="background-color:#f59d1f;">
                                <div class="muted pull-left" style="color:#4c4c4c;font-size:30px"><b>Subject List</b></div>
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
									<form action="delete_subject.php" method="post">
  									<table cellpadding="0" cellspacing="0" border="0" class="table" id="examples">
<script>
$(document).ready(function() {
    $('#examples').dataTable();
} );


    </script> 
									
									<?php include('modal_delete.php'); ?>
										<thead>
										  <tr>
											    <th></th>
												<th>Subject Code</th>
                                            	<th>Units</th>
												<th>Subject Title</th>
											<!--	<th></th> -->
										   </tr>
										</thead>
										<tbody>
											
												<?php
											$subject_query = mysqli_query($conn,"select * from subject")or die(mysqli_error());
											while($row = mysqli_fetch_array($subject_query)){
											$id = $row['subject_id'];
											?>
										
											<tr>
													<td width="30">
													<input id="optionsCheckbox" onclick="terms_changed(this)" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
													</td>
													<td><?php echo $row['subject_code']; ?></td>
                                            		<td><?php echo $row['unit']; ?></td>
													<td><?php echo $row['subject_title']; ?></td>
												
													<!--<td width="30"><a href="edit_subject.php<?php echo '?id='.$id; ?>" class="btn btn-success">Edit</a></td>-->
										</tr>
											
											<?php } ?>   
                              
										</tbody>
									</table>
									</form>
									<br>
						 <!--<a href="add_subject.php" class="btn btn-info" style="float:right;">Add Subject</a>-->
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