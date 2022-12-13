<?php include('../session.php'); ?>
<?php include('header.php'); ?>

    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('teacher_sidebar.php'); ?>
                <div style="margin-left:380px;">
                    <br>
                    <br>
				<div class="span3" id="adduser" >
				<?php include('add_teacher.php'); ?>		   			
				</div>
                <div class="span6" id="" style="width:72%">
                     <div class="row-fluid">
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header" style="background-color:#f59d1f;">
                                <div class="muted pull-left"style="color:#4c4c4c;font-size:20px"><b>Manage Professors List</div>
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
                
  									<form action="delete_teacher.php" method="post">
  									<table cellpadding="0" cellspacing="0" border="0" class="table" id="Examples">
<script>
$(document).ready(function() {
    $('#examples').dataTable();
} );


    </script>
					 
									<?php include('modal_delete.php'); ?>
										<thead>
										    <tr>
                                    <th></th>
                                    <th>Photo</th>
                                    <th>Name</th>
                                    <th>Username</th>

                                    <th></th>
                                </tr>
										</thead>
										<tbody>
												 <?php
                                    $teacher_query = mysqli_query($conn,"select * from teacher") or die(mysqli_error());
                                    while ($row = mysqli_fetch_array($teacher_query)) {
                                    $id = $row['teacher_id'];
                                    $teacher_stat = $row['teacher_stat'];
                                        ?>
									<tr>
										<td width="30">
										<input id="optionsCheckbox" onclick="terms_changed(this)"  name="selector[]" type="checkbox" value="<?php echo $id; ?>">
										</td>
                                    <td width="40"><img class="img-circle" src="<?php echo $row['location']; ?>" height="50" width="50"></td> 
                                    <td><?php echo $row['firstname'] . " " . $row['lastname']; ?></td> 
                                    <td><?php echo $row['username']; ?></td> 
                               
									<td width="50"><a href="edit_teacher.php<?php echo '?id='.$id; ?>" class="btn btn-success"><i class="icon-pencil"></i></a></td>
									
                                </tr>
                                
                            <?php } ?>
                               
										</tbody>
									</table>
                                    <button data-toggle="modal" href="#teacher_delete" id="delete"  class="btn btn-danger" style="float:right;" name="" disabled>Delete</button>
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