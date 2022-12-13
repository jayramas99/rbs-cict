<?php include('../session.php'); ?>
<?php include('header.php'); ?>
    <body> 

		<?php include('navbar.php'); ?>
        <div class="container-fluid" >
            <div class="row-fluid">
				<?php include('student_sidebar.php'); ?>
                <div style="margin-left:380px;">
				<div class="span3" id="adduser" >
		   			
				</div>
                <div class="span6" id="" style="width:80%;">
                     <div class="row-fluid">
                        <!-- block -->
                        <div  id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header" style="background-color:#f59d1f;">
                                <div class="muted pull-left" style="color:#4c4c4c;font-size:20px"><b>Student List</div>
                            </div>
                            <div class="block-content collapse in">
								<div class="span12" id="studentTableDiv">
									





                                <?php include('dbcon.php'); ?>
	<form action="delete_student.php" method="post">
	<table cellpadding="0" cellspacing="0" border="0" class="table" id="examples">
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

	
	<div class="pull-right">
			    <ul class="nav nav-pills">
				<li class="active">
					<a href="students.php">All</a>
				</li>
				<li class="">
					<a href="unreg_students.php">Unregistered</a>
				</li>
				<li class="">
				<a href="reg_students.php">Registered</a>
				</li>
				</ul>
	</div>
	<?php include('modal_delete.php'); ?>
	
		<thead>
		<tr>
					<th></th>
						<th>ID</th>
					<th>Name</th>
					<th>Student Number</th>
					<th>Course</th>
					<th>Yr & Section</th>
					<th></th>
		</tr>
		</thead>
		<tbody>
			
		<?php
	$query = mysqli_query($conn,"select * from student LEFT JOIN class ON student.class_id = class.class_id where student.status ='Registered' or student.status = 'Unregistered'  ORDER BY student.student_id DESC") or die(mysqli_error());
	while ($row = mysqli_fetch_array($query)) {
		$id = $row['student_id'];
		?>
	
		<tr>
		<td width="30">
		<input id="optionsCheckbox" onclick="terms_changed(this)"  name="selector[]" type="checkbox" value="<?php echo $id; ?>">
		</td>
		<td><?php echo $row['student_id']; ?></td>
		<td><?php echo $row['firstname'] . " " . $row['middlename'] . " " . $row['lastname'] . " " . $row['suffix'];  ?></td> 
		<td><?php echo $row['username']; ?></td> 
		<td ><?php echo $row['strand']; ?></td>
        
		<td width="100"><?php echo $row['class_name']; ?></td> 
	
		<td width="30"><a href="edit_student.php<?php echo '?id='.$id; ?>" class="btn btn-success"><i class="icon-pencil"></i> </a></td>
	
		</tr>
	<?php } ?>    
	
		</tbody>
	</table>
	<button data-toggle="modal" href="#student_delete" id="delete"  class="btn btn-danger" name="" disabled>Delete</button>
	</form>


	<form action="upload.php" method="post" id="import_excel_form" enctype="multipart/form-data">
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


                </div>
                </div>
            </div>

        </div>
		<?php include('script.php'); ?>
    </body>

</html>