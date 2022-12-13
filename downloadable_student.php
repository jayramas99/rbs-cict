<?php include('session.php'); ?>
<?php include('header_dashboard.php'); ?>
<?php

$query_cl = mysqli_query($conn,"select * FROM student where student_id =  '$session_id'")or die(mysqli_error());
while($row_cl = mysqli_fetch_array($query_cl)){
	$id_class  = $row_cl['class_id'];
	
}



										$query = mysqli_query($conn,"select * FROM class_quiz_main 
										LEFT JOIN quiz_main on class_quiz_main.quiz_id = quiz_main.quiz_id
										where section = '$id_class'  order by class_quiz_id DESC ")or die(mysqli_error());
										while($row = mysqli_fetch_array($query)){
										$id  = $row['class_quiz_id'];
										$quiz_id  = $row['quiz_id'];
										$quiz_time  = $row['quiz_time'];
										$teacher_quiz_id = $row['teacher_class_id'];
									
										$query1 = mysqli_query($conn,"select * from student_class_quiz_main where class_quiz_id = '$id' and student_id = '$session_id'")or die(mysqli_error());
										$row1 = mysqli_fetch_array($query1);
										}								
?>
<?php 
$get_id = $_GET['id'];
if (empty($teacher_quiz_id)){
	$get_id2 = $_GET['id'];
}
else{
	$get_id2 = $teacher_quiz_id;
}
?>
    <body>
		<?php include('navbar_student.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('downloadable_link_student.php'); ?>
                <div class="span6" id="content" style="margin-left:400px;">
                     <div class="row-fluid">
					    <!-- breadcrumb -->
				
										<?php $class_query = mysqli_query($conn,"select * from teacher_class
										LEFT JOIN class ON class.class_id = teacher_class.class_id
										LEFT JOIN subject ON subject.subject_id = teacher_class.subject_id
										where teacher_class_id = '$get_id2'")or die(mysqli_error());
										$class_row = mysqli_fetch_array($class_query);
										$class_id = $class_row['class_id'];
										$school_year = $class_row['school_year'];
										?>
				
					     <ul class="breadcrumb">
							<li><a href="#"><?php echo $class_row['class_name']; ?></a> <span class="divider">/</span></li>
							<li><a href="#"><?php echo $class_row['subject_code']; ?></a> <span class="divider">/</span></li>
							<li><a href="#">School Year: <?php echo $class_row['school_year']; ?></a> <span class="divider">/</span></li>
							<li><a href="#"><b>Reviewer</b></a></li>
						</ul>
						 <!-- end breadcrumb -->
					 
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header" style="background-color:#f59d1f;">
						<h1 style="color:#4c4c4c">Reviewer</h1>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
										<div class="pull-right">
							
								<script>
								$("#checkAll").click(function () {
									$('input:checkbox').not(this).prop('checked', this.checked);
								});
								</script>					
							</div>
								<?php
									$query = mysqli_query($conn,"select * FROM files where class_id = '$class_id' order by fdatein DESC ")or die(mysqli_error());
									$count = mysqli_num_rows($query);	
								if ($count == '0'){ ?>



								<div class="alert alert-info"><i class="icon-info-sign"></i> No downloadable material currently uploaded.</div>
								
								
								
								
								<?php
								}else{


									$array = array();
									$sql_sc = "SELECT * FROM student_class_quiz_main where student_id = '$session_id' and grade != ''";
									$result_sc = $conn->query($sql_sc);
									
									if ($result_sc->num_rows > 0) {
									  // output data of each row
									  while($row_sc = $result_sc->fetch_assoc()) {
										$topic1 = $row_sc['topic1'];
										$topic2 = $row_sc['topic2'];
										$topic3 = $row_sc['topic3'];
										$topic4 = $row_sc['topic4'];
										$topic5 = $row_sc['topic5'];
									
										$limit1 = $row_sc['limit1'];
										$limit2 = $row_sc['limit2'];
										$limit3 = $row_sc['limit3'];
										$limit4 = $row_sc['limit4'];
										$limit5 = $row_sc['limit5'];
									  }

									if($topic1 >= $limit1*0.70)
									{
										array_push($array,"passes");
									}
									else{
										array_push($array,"failed");
									}

									if($topic2 >= $limit2*0.70)
									{
										array_push($array,"passes");
									}
									else{
										array_push($array,"failed");
									}

									if($topic3 >= $limit3*0.70)
									{
										array_push($array,"passes");
									}
									else{
										array_push($array,"failed");
									}

									if($topic4 >= $limit4*0.70)
									{
										array_push($array,"passes");
									}
									else{
										array_push($array,"failed");
									}

									if($topic5 >= $limit5*0.70)
									{
										array_push($array,"passes");
									}
									else{
										array_push($array,"failed");
									}

									

									

								?>
								
									<form action="copy_file_student.php" method="post">
								
									
									
									
  									<table cellpadding="0" cellspacing="0" border="0" class="table" id="">
						
										<thead>
										        <tr>
												<th></th>
												<th>Date Upload</th>
												<th>File Name</th>
												<th>Description</th>
												<th>Uploaded by</th>
												<th></th>
												
												</tr>
												
										</thead>
										<tbody>
											
                              		<?php
									$count = 0;
										$query = mysqli_query($conn,"select * FROM files where class_id = '$class_id' order by fdesc ASC ")or die(mysqli_error());
										while($row = mysqli_fetch_array($query)){
										$id  = $row['file_id'];
										
										if($count == 5)
										{
											
										}
										elseif($array[$count] != 'passes')
										{
											$count = $count + 1;
										}
										
										else{
											$count = $count + 1;
											continue;
										}
									
									




									?>                              
										<tr>
										<td width="30">
											
										</td>
                             
										 <td><?php echo $row['fdatein']; ?></td>
                                         <td><?php  echo $row['fname']; ?></td>
                                         <td><?php echo $row['fdesc']; ?></td>                                      
                                         <td><?php echo $row['uploaded_by'];  ?></td>                                      
                                         <td width="30">
										 <a  data-placement="bottom" title="Download" id="<?php echo $id; ?>Download" href="<?php echo $row['floc']; ?>"><i class="icon-download icon-large"></i></a>
										 </td>            
														<script type="text/javascript">
														$(document).ready(function(){
															$('#<?php echo $id; ?>Download').tooltip('show');
															$('#<?php echo $id; ?>Download').tooltip('hide');
														});
														</script>										 
                                </tr>
                         
						 <?php  } 
						 
						?>
</tbody>
									</table>
									</form>


						<?php
						}

						else{
						 
						 }?>			
						 <?php } ?>		
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
                </div>
			
            </div>
		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
    </body>
</html>