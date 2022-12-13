<?php include('../session.php'); ?>
<?php include('header.php'); ?>

    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('user_log_sidebar.php'); ?>

                <div class="span9" id="content" style="margin-left:400px;">
                     <div class="row-fluid">
						<br>
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header"style="background-color:#f59d1f;">
                                <div class="muted pull-left"style="color:#4c4c4c;font-size:25px"><br><b>Users Log List</b></div>
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
										  	<th style="Display:none;"></th>
											
												<th>Date Login</th>
												<th>Date logout</th>
												<th>Username</th>
												
											
										   </tr>
										</thead>
										<tbody>
													<?php
													$user_query = mysqli_query($conn,"select * from user_log order by user_log_id DESC ")or die(mysqli_error());
													while($row = mysqli_fetch_array($user_query)){
													$id = $row['user_log_id'];
													?>
									
												<tr>
													<td style="Display:none;"></td>
												<td><?php echo $row['login_date']; ?></td>
												<td><?php echo $row['logout_date']; ?></td>
												<td><?php echo $row['username']; ?></td>
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