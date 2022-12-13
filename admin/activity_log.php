<?php include('../session.php'); ?>
<?php include('header.php'); ?>

    <body >
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('activity_log_sidebar.php'); ?>
                <div class="span9" id="content" style="margin-left:400px;">
                     <div class="row-fluid">
                        <br>
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header" style="background-color:#f59d1f;">
                                <div class="muted pull-left"style="color:#4c4c4c;font-size:25px"><b><br>Activity Log</b></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
  									<table cellpadding="0" cellspacing="0" border="0" class="table" id="examples">
						<script>
$(document).ready(function() {
    $('#examples').dataTable();
} );


    </script> 
										<thead>
										        <tr>
                                                    <th style="display:none"></th>
                                                <th>ID</th>  
												<th>Date</th>
												<th>User</th>
												<th>Action</th>
									
												</tr>
												
										</thead>
										<tbody>
											
                              		<?php
										$query = mysqli_query($conn,"select * from  `activity_log` ORDER BY activity_log_id DESC ")or die(mysqli_error());
										while($row = mysqli_fetch_array($query)){
									?>
							

					
                              
										<tr>
                                        <td style="display:none"></td>
                                        <td><?php  echo $row['activity_log_id']; ?></td>
                                         <td><?php  echo $row['date']; ?></td>
                                         <td><?php echo $row['username']; ?></td>
                                         <td><?php echo $row['action']; ?></td>
                                  
                               
                                </tr>
                         
						 <?php } ?>
						   
                              
										</tbody>
									</table>
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