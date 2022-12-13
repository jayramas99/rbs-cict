<?php  include('../session.php'); ?>
<?php  include('header.php'); ?>


    <body>
		<?php include('navbar.php') ?>
        <div class="container-fluid">
            <div class="row-fluid">
					<?php include('sidebar_assessment.php'); ?>
                <!--/span-->
                <div class="span9" id="content" style="margin-left:400px;">
						<div class="row-fluid"></div>
						
                    <div class="row-fluid">
					<br>
                        <!-- block -->
                        <div id="block_bg" class="block">
							
                            <div class="navbar navbar-inner block-header" style="background-color:#f59d1f;">
                                <div class="muted pull-left"style="color:#4c4c4c;font-size:30px;"><b>Assessment</div>
                            </div>
                            <div class="block-content collapse in">
							        
								
							
                            <div class="pull-right">
									<!--<a href="add_quiz.php" class="btn btn-info">Add Assessment</a>-->
									<td width="30"><a href="add_quiz_to_class.php" class="btn btn-success"> Add Assessment to Section</a></td>   
									</div>
								
									<form action="delete_quiz.php" method="post">
  									<table cellpadding="0" cellspacing="0" border="0" class="table" id="">
									
									
										<thead>
										        <tr>
												<th></th>
												<th>Assessment title</th>
												<th>Description</th>
												<th>Date Added</th>
												<th>Questions</th>
												
												</tr>
										</thead>
										<tbody>
                              		<?php
										$query = mysqli_query($conn,"select * FROM quiz_main order by date_added DESC ")or die(mysqli_error());
										while($row = mysqli_fetch_array($query)){
										$id  = $row['quiz_id'];
									
									?>                              
										<tr id="del<?php echo $id; ?>">
										<td width="30">
											
										</td>
										 <td><?php echo $row['quiz_title']; ?></td>
                                         <td><?php  echo $row['quiz_description']; ?></td>
                                         <td><?php echo $row['date_added']; ?></td>                                      
                                         <td><a href="quiz_question.php<?php echo '?id='.$id; ?>">Questions</a></td>                                      
										 <?php 
										 $query_quiz1 = mysqli_query($conn,"select * from class_quiz_main where quiz_id = '$id'")or die(mysqli_error());
										$count = mysqli_num_rows($query_quiz1);
										
										if($count > 0){
										
                                            
										
                                        
                                    ?>
										 <td><a href="delete_quiz_student.php?id=<?php echo $id ?>"   class="btn btn-danger" >Remove</a></td>                                                                 
										 <?php }
										 else{
										 ?>
			<td></td>
										 <?php }?>
										</tr>
									<?php } ?>
										</tbody>
									</table>
									</form>
								
								
								
								
									
								
								
								
								
							
								
								
								
									
								
								
						
						
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
