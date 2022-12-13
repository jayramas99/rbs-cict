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
            
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header" style="background-color:#f59d1f">
                                <div class="muted pull-left" style="font-size:25px;color:#4c4c4c"><br><b>Question</b>
								</div>
                            </div>
                            <div class="block-content collapse in">
                              
								
							
								
                            <div class="pull-right">
									<a href="students_assessments.php" class="btn btn-success"><i class="icon-arrow-left"></i> Back</a>
						
									</div>
									<form action="delete_quiz_question.php" method="post">
									<input type="hidden" name="get_id" value="<?php echo $get_id; ?>">
  									<table cellpadding="0" cellspacing="0" border="0" class="table" id="">
								
								
										<thead>
										        <tr>
												
												<th>Question Text</th>
												<!-- <th>Points</th> -->
												<th>Question Type</th>
												<th>Answer</th>
												<th>Date Added</th>
											
												</tr>
										</thead>
										<tbody>
                              		<?php
									$get_id = $_GET['id'];
										$query = mysqli_query($conn,"select * FROM quiz_question_main
										LEFT JOIN question_type on quiz_question_main.question_type_id = question_type.question_type_id
										where quiz_id = '$get_id'  order by date_added DESC ")or die(mysqli_error());
										while($row = mysqli_fetch_array($query)){
										$id  = $row['quiz_question_id'];
									?>                              
										<tr id="del<?php echo $id; ?>">
									
												<td><?php echo $row['question_text']; ?></td>
												<td><?php  echo $row['question_type']; ?></td>
												<td><?php  echo $row['answer']; ?></td>
												<td><?php echo $row['date_added']; ?></td>                                                                          
												
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
