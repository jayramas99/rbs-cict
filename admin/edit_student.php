<?php include('../session.php'); ?>
<?php include('header.php'); ?>

<?php $get_id = $_GET['id']; ?>
    <body id="class_div">
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('student_sidebar.php'); ?>
				<div style="margin-left:380px;">
				<div class="span3" id="adduser">
					<br>
				<?php include('edit_students_form.php'); ?>		   			
				</div>
                <div class="span6" id="" style="margin-left:10%;width:65%">
                     <div class="row-fluid">
						<br>
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header" style="background-color:#f59d1f;">
                                <div class="muted pull-left" style="color:black;font-size:20px;"><b>Student List</div>
                            </div>
                            <div class="block-content collapse in">
									<div class="span12">
									<form action="delete_student.php" method="post">
  									<table cellpadding="0" cellspacing="0" border="0" class="table" >
									
									<?php include('modal_delete.php'); ?>
										<thead>
										  <tr>
												    <th></th>
												
													<th>Name</th>
													<th>Student Number</th>
													<th>Course</th>
													<th>Yr & Section</th>
													<th></th>
										   </tr>
										</thead>
										<tbody>
											
                                         <?php
                                    $query = mysqli_query($conn,"select * from student LEFT JOIN class ON class.class_id = student.class_id ORDER BY student.student_id DESC") or die(mysqli_error());
                                    while ($row = mysqli_fetch_array($query)) {
                                        $id = $row['student_id'];
                                        ?>

										<tr>
										<td width="30">
										<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
										</td>
         
                                         <td><?php echo $row['firstname'] . " " . $row['middlename'] . " " . $row['lastname'] . " " . $row['suffix']; ?></td> 
										<td><?php echo $row['username']; ?></td> 
										<td width="100"><?php echo $row['strand']; ?></td> 
										<td width="100"><?php echo $row['class_name']; ?></td> 

										<td width="30"><a href="edit_student.php<?php echo '?id='.$id; ?>" class="btn btn-success"><i class="icon-pencil"></i> </a></td>
									 
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