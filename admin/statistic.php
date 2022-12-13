<?php  include('../session.php'); ?>
<?php  include('header.php'); ?>


    <body>
		<?php include('navbar.php') ?>
        <div class="container-fluid">
            <div class="row-fluid">
					<?php include('sidebar_stat.php'); ?>
                <!--/span-->
                <div class="span9" id="content" style="margin-left:400px;">
						<div class="row-fluid"></div>
						
                    <div class="row-fluid">
            <br>
            <br>
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header"style="background-color:#f59d1f;">
                                <div class="muted pull-left" style="color:black"><h1>STATISTIC</h1></div>
                            </div>
                          
                            <table cellpadding="0" cellspacing="0" border="0" class="table" id="examples">
								<script>
$(document).ready(function() {
    $('#examples').dataTable();
} );


    </script> 
										<thead>
										  <tr>
												<th>Student No.</th>
												<th>Fullname</th>
                                                <th>Section</th>
												<th>Specialization</th>
                                                <th>View Info</th>
												
											
										   </tr>
										</thead>
										<tbody>
													<?php
													$user_query = mysqli_query($conn,"select * from student where status = 'Registered' order by student_id ")or die(mysqli_error());
													while($row = mysqli_fetch_array($user_query)){
													$id = $row['student_id'];
                                                    $class = $row['class_id'];
													?>
									
												<tr>
											
												<td><?php echo $row['username']; ?></td>
												<td><?php echo $row['firstname']; ?>, <?php echo $row['lastname']; ?></td>
                                                <td><?php 
                                                $user_query2 = mysqli_query($conn,"select * from class where class_id = '$class' ")or die(mysqli_error());
                                                while($row2 = mysqli_fetch_array($user_query2)){
                                                
                                                echo $row2['class_name'];
                                                }
                                                
                                                ?></td>
												<td><?php echo $row['strand']; ?></td>
                                                <td><a href="student_info.php?id=<?php echo $row['student_id']; ?>">OPEN</a></td>
												</tr>
												<?php } ?>
										</tbody>
									</table>
						
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
