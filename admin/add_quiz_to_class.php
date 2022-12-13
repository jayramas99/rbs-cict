<?php  include('../session.php'); ?>
<?php  include('header.php'); ?>
<script>
$(document).ready(function(){
    $("select").change(function(){
        $(this).find("option:selected").each(function(){
            var optionValue = $(this).attr("value");
            if(optionValue){
                $(".box").not("." + optionValue).hide();
                $("." + optionValue).show();
			
            } else{
                $(".box").hide();
			
            }
        });
    }).change();
});
</script>
<style>
.box{
    width: 100%;
  height: 100%;
        display: none;
      
    }
	</style>

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
					<br>
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header" style="background-color:#f59d1f;">
                                <div class="muted pull-left" style="color:#4c4c4c;font-size:20px"><b>Deploy Assessment</div>
                            </div>
                            <div class="block-content collapse in">
							        
								
							






                            <div class="pull-right" >
									<a href="students_assessments.php" class="btn btn-info"><i class="icon-arrow-left"></i> Back</a>
									
									</div>
								
									    <form class="form-horizontal" method="post">
										<div class="control-group">
											<label class="control-label" for="inputEmail">Exam</label>
											<div class="controls">
											<select name="quiz_id" required>
											<option></option>
												<?php  $query = mysqli_query($conn,"select * from quiz_main")or die(mysqli_error());
												while ($row = mysqli_fetch_array($query)){ $id = $row['quiz_id']; ?>
												<option value="<?php echo $id; ?>" ><?php echo $row['quiz_title']; ?></option>
												<?php } ?>
											</select>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="inputPassword">Test Time (in minutes)</label>
											<div class="controls">
											<input type="text" class="span3" name="time" id="inputPassword" placeholder="Test Time" required>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="inputPassword">Items</label>
											<div class="controls">
											<?php  
											$query_items = mysqli_query($conn,"select * from setting")or die(mysqli_error());
												while ($row_items = mysqli_fetch_array($query_items)){ 
													$items = $row_items['items']; 
												
												 } ?>
											<input type="number" class="span3" name="Items" id="inputPassword" placeholder="Items" value="<?php echo $items?>" required>
											</div>
										</div>
										<div class="111 box" >
												<table class="table" id="question">
                <th></th>
                <th>Class</th>
                <th>Subject</th>
                <th>Specialization</th>
                <th></th>
				
				<tbody>
					<?php $query = mysqli_query($conn,"select * from teacher_class
										LEFT JOIN class ON class.class_id = teacher_class.class_id
										LEFT JOIN subject ON subject.subject_id = teacher_class.subject_id where Specialization = 10
										 ")or die(mysqli_error());
										$count = mysqli_num_rows($query);
										

										while($row = mysqli_fetch_array($query)){
                                          $cid = $row['class_id'];
										$id = $row['teacher_class_id'];
                                        $sp = $row['Specialization'];
										?>
					<tr>
					<td width="30">
						<input id="optionsCheckbox"  name="selector[]" type="checkbox" value="<?php echo $id; ?>"  > 
                        <input   name="section" type="text" value="<?php echo $cid; ?>" style="display:none;"> 
					</td>
					<td><?php echo $row['class_name']; ?></td>
					<td><?php echo $row['subject_title']; ?></td>
                    <td>
                    <?php
											$query_sub = mysqli_query($conn,"select * from strand where id = $sp");
											while($row_sub = mysqli_fetch_array($query_sub)){
											
										$strand = $row_sub['strand_name'];
											 echo $row_sub['strand_name']; 
                                            }
											
										  ?>
										   <input   name="strand[]" type="text" value="<?php echo $strand; ?>" style="display:none;"> 
                
                
                </td>
					</tr>
					<?php } ?>
				</tbody>
				</table>
										</div>
										<div class="111 box" >
												<table class="table" id="question">
                <th></th>
                <th>Class</th>
                <th>Subject</th>
                <th>Specialization</th>
                <th></th>
				
				<tbody>
					<?php $query = mysqli_query($conn,"select * from teacher_class
										LEFT JOIN class ON class.class_id = teacher_class.class_id
										LEFT JOIN subject ON subject.subject_id = teacher_class.subject_id where Specialization = 11
										 ")or die(mysqli_error());
										$count = mysqli_num_rows($query);
										

										while($row = mysqli_fetch_array($query)){
                                          $cid = $row['class_id'];
										$id = $row['teacher_class_id'];
                                        $sp = $row['Specialization'];
										?>
					<tr>
					<td width="30">
						<input id="optionsCheckbox"  name="selector[]" type="checkbox" value="<?php echo $id; ?>" > 
                        <input   name="section" type="text" value="<?php echo $cid; ?>" style="display:none;"> 
					</td>
					<td><?php echo $row['class_name']; ?></td>
					<td><?php echo $row['subject_title']; ?></td>
                    <td>
                    <?php
											$query_sub = mysqli_query($conn,"select * from strand where id = $sp");
											while($row_sub = mysqli_fetch_array($query_sub)){
											
										$strand = $row_sub['strand_name'];
											 echo $row_sub['strand_name']; 
                                            }
											
										  ?>
										   <input   name="strand[]" type="text" value="<?php echo $strand; ?>" style="display:none;"> 
                
                
                </td>
					</tr>
					<?php } ?>
				</tbody>
				</table>
										</div>
										<div class="111 box" >
												<table class="table" id="question">
                <th></th>
                <th>Class</th>
                <th>Subject</th>
                <th>Specialization</th>
                <th></th>
				
				<tbody>
					<?php $query = mysqli_query($conn,"select * from teacher_class
										LEFT JOIN class ON class.class_id = teacher_class.class_id
										LEFT JOIN subject ON subject.subject_id = teacher_class.subject_id where Specialization = 12
										 ")or die(mysqli_error());
										$count = mysqli_num_rows($query);
										

										while($row = mysqli_fetch_array($query)){
                                          $cid = $row['class_id'];
										$id = $row['teacher_class_id'];
                                        $sp = $row['Specialization'];
										?>
					<tr>
					<td width="30">
						<input id="optionsCheckbox"  name="selector[]" type="checkbox" value="<?php echo $id; ?>" > 
                        <input   name="section" type="text" value="<?php echo $cid; ?>" style="display:none;" > 
					</td>
					<td><?php echo $row['class_name']; ?></td>
					<td><?php echo $row['subject_title']; ?></td>
                    <td>
                    <?php
											$query_sub = mysqli_query($conn,"select * from strand where id = $sp");
											while($row_sub = mysqli_fetch_array($query_sub)){
											
										$strand = $row_sub['strand_name'];
											 echo $row_sub['strand_name']; 
                                            }
											
										  ?>
										   <input   name="strand[]" type="text" value="<?php echo $strand; ?>" style="display:none;"> 
                
                
                </td>
					</tr>
					<?php } ?>
				</tbody>
				</table>
										</div>
		
											
										<div class="control-group">
										<div class="controls">
										
										<button name="save" type="submit" class="btn btn-info"><i class="icon-save"></i> Save</button>
										</div>
										</div>
										</form>
										
									
										
										<?php









										if (isset($_POST['save'])){


											$quiz_id = $_POST['quiz_id'];
											$quiz_id_backup = $_POST['quiz_id'];
											

											$query_log = mysqli_query($conn,"select * from teacher_class
											LEFT JOIN class ON class.class_id = teacher_class.class_id
											LEFT JOIN subject ON subject.subject_id = teacher_class.subject_id where Specialization = $quiz_id
											 ")or die(mysqli_error());
											
											 $stack = array();
											
											 
											$news = array();
											while($row = mysqli_fetch_array($query_log)){
											 
												$news = $row['teacher_class_id'];
												array_push($stack, "$news");
											
											}
												









											$time = $_POST['time'] * 60;
											//$id=$_POST['selector'];
											$id = $stack;
                                            $section=$_POST['section'];

											$setting=$_POST['Items'];

if($id == ""){
	echo "<script>
												alert('No class data!');
												window.location.href='add_quiz_to_class.php?nodata';
												</script>";

}
else{}
				


											$str_main=$_POST['strand'];
											

$sql_items = "UPDATE setting SET items='$setting' WHERE id=1";

if ($conn->query($sql_items) === TRUE) {
 
} else {
  echo "Error updating record: " . $conn->error;
}
                                            
											
													$name_notification  = 'Deploy Assessment';
													
											$N = count($id);




$sql_class = "SELECT * FROM teacher_class where Specialization = '$quiz_id_backup' group by class_id";
$result_class = $conn->query($sql_class);

if ($result_class->num_rows > 0) {
  // output data of each row
  while($row_class = $result_class->fetch_assoc()) {
   
 $class_room = $row_class['class_id'];
											
												$query_get = mysqli_query($conn,"select * from teacher_class where teacher_class_id = $id[0]");
												while($row_get = mysqli_fetch_array($query_get)){
													$class_get = $row_get['class_id'];
																	$strand_get = $row_get['Specialization'];
																		
												}

																		$query_get2 = mysqli_query($conn,"select * from strand where id = '$strand_get'");
																		while($row_get2 = mysqli_fetch_array($query_get2)){
																								
																							$strand_get2 = $row_get2['strand_name'];
																								
																								}



												mysqli_query($conn,"insert into class_quiz_main (teacher_class_id,quiz_time,quiz_id,section) values('$id[0]','$time','$quiz_id','$class_room')")or die(mysqli_error());
											




											








											
											$querye = mysqli_query($conn,"SELECT *
											FROM class_quiz_main
											WHERE section ='$class_room';
											")or die(mysqli_error());
											  while($rowe = mysqli_fetch_array($querye)){
											  $cqid = $rowe['class_quiz_id'];
											  $tcid = $rowe['teacher_class_id'];
											  
				 
											  $query = mysqli_query($conn,"select * FROM student
											  where class_id = '$class_room' 
											  ")or die(mysqli_error());
											  while($row = mysqli_fetch_array($query)){
											  $stdid = $row['student_id'];
											  
											  
											  mysqli_query($conn,"insert into student_class_quiz_main (class_quiz_id,student_id,student_quiz_time,final,trys,strand) value(' $cqid','$stdid','$time','0','2','$strand_get2')")or die(mysqli_error());

											 
											  }
											}
					
											 
											
											}
										}
				 
											
											
											
											 mysqli_query($conn,"insert into activity_log (date,username,action) values(NOW(),'CICT Colleges','Deploy Assessments')")or die(mysqli_error());
											
											?>
											<script>
												alert("Exit Assessment has been deployed");
												window.location = 'students_assessments.php';
											</script>
											<?php
										}
										?>













								
								
								
									
								
								
								
								
							
								
								
								
									
								
								
						
						
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
