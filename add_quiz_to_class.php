<?php include('session.php'); ?>
<?php include('header_dashboard.php'); ?>
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
		<?php include('navbar_teacher.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('quiz_sidebar_teacher.php'); ?>
                <div class="span9" id="content" style="margin-left:400px;">
                     <div class="row-fluid">
					    <!-- breadcrumb -->	<br>
									<ul class="breadcrumb">
										<?php
										$school_year_query = mysqli_query($conn,"select * from school_year order by school_year DESC")or die(mysqli_error());
										$school_year_query_row = mysqli_fetch_array($school_year_query);
										$school_year = $school_year_query_row['school_year'];
										?>
											<li><a href="#"><b>My Class</b></a><span class="divider">/</span></li>
										<li><a href="#">School Year: <?php echo $school_year_query_row['school_year']; ?></a><span class="divider">/</span></li>
										<li><a href="#"><b>Add Assessment</b></a></li>
									</ul>
						 <!-- end breadcrumb -->
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header" style="background-color:#f59d1f;font-size:25px"> <br><b style="color:#4c4c4c;">Add Assesment</b>
                                <div id="" class="muted pull-right"></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
									<div class="pull-right">
									<a href="teacher_quiz.php" class="btn btn-info"><i class="icon-arrow-left"></i> Back</a>
									</div>
								
<form class="form-horizontal" method="post" >
										<div class="control-group">
											<label class="control-label" for="inputEmail">Sucject Code</label>
											<div class="controls">
											<select name="sc">
            <option>Choose Filter</option>
            <option value="gray">IT 306</option>
            <option value="red">IT 307</option>
            <option value="green">IT 311</option>
            <option value="blue">IT 312</option>
			<option value="black">IT 403</option>
        </select>
											
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="inputPassword"> Assessment Time <br>(in minutes)</label>
											<div class="controls">
											<input type="text" class="span3" name="time" id="inputPassword" placeholder="Assessment Time" required>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="inputPassword"></label>
											<div class="controls">
											
	<div class="input-group"><div class="input-group-prepend"><span class="input-group-text" id="basic-addon1"><i class="fas fa-pen-alt"></i></span></div>
	<select name="quiz_id" style="display:none;">
											<option></option>
												<?php  $query = mysqli_query($conn,"select * from quiz where teacher_id = '$session_id'")or die(mysqli_error());
												while ($row = mysqli_fetch_array($query)){ $id = $row['quiz_id']; ?>
												<option value="<?php echo $id; ?>" ><?php echo $row['quiz_title']; ?></option>
												<?php } ?>
											</select>
											</div>
										</div>
										<hr>

										<!--table for new test for IT 306-->
										<div class="gray box" >
										
										<table class="table" id="question">
                <th></th>
                <th>Subject code</th>
				<th>Subject Title</th>
                <th>Description</th>
                <th></th>
				
				<tbody>
				<?php $query_quiz1 = mysqli_query($conn,"select * from quiz where teacher_id = '$session_id' and quiz_title ='IT 306'")or die(mysqli_error());
										$count = mysqli_num_rows($query_quiz1);
										
										if($count > 0){
										while($row_quiz1 = mysqli_fetch_array($query_quiz1)){
										$id_quiz1 = $row_quiz1['quiz_id'];
				
										?>
					<tr>
					<td width="30">
						<input id="optionsCheckbox2"  name="selector2[]" type="checkbox" value="<?php echo $id_quiz1; ?>" > 
					</td>
					<td><?php echo $row_quiz1['quiz_title']; ?></td>
					<td>ELECTIVE 1</td>
					<td><?php echo $row_quiz1['quiz_description']; ?></td>
					</tr>
					<input type="hidden" name="nodata1" value="yes" placeholder="No Quiz Data" >
					<?php }} else{ 
?>

<tr>
<td colspan="5"><input type="text" name="nodata1" placeholder="No Quiz Data" disabled></td>
<td></td>
<td></td>
					</tr>
			<?php	} ?>
				</tbody>
				</table>
				
										</div>			
										<!--table for new test END-->
										
										<!--table for new test2 for IT 307-->
										<div class="red box" >
									
										<table class="table" id="question">
                <th></th>
               <th>Subject code</th>
				<th>Subject Title</th>
                <th>Description</th>
                <th></th>
				
				<tbody>
				<?php $query_quiz1 = mysqli_query($conn,"select * from quiz where teacher_id = '$session_id' and quiz_title ='IT 307'")or die(mysqli_error());
										$count = mysqli_num_rows($query_quiz1);
										
										if($count > 0){
										while($row_quiz1 = mysqli_fetch_array($query_quiz1)){
										$id_quiz1 = $row_quiz1['quiz_id'];
				
										?>
					<tr>
					<td width="30">
						<input id="optionsCheckbox2"  name="selector2[]" type="checkbox" value="<?php echo $id_quiz1; ?>" > 
					</td>
					<td><?php echo $row_quiz1['quiz_title']; ?></td>
					<td>ELECTIVE 2</td>
					<td><?php echo $row_quiz1['quiz_description']; ?></td>
					</tr>
					<input type="hidden" name="nodata2" value="yes" placeholder="No Quiz Data" >
					<?php }} else{ 
?>
<tr>
<td colspan="5"><input type="text" name="nodata2" placeholder="No Quiz Data" disabled></td>
<td></td>
<td></td>
					</tr>
			<?php	} ?>
				</tbody>
				</table>
				
										</div>			
										<!--table for new test2 END-->
										<!--table for new test3 for IT 312-->
										<div class="blue box" >
									
										<table class="table" id="question">
                <th></th>
               <th>Subject code</th>
				<th>Subject Title</th>
                <th>Description</th>
                <th></th>
				
				<tbody>
				<?php $query_quiz1 = mysqli_query($conn,"select * from quiz where teacher_id = '$session_id' and quiz_title ='IT 312'")or die(mysqli_error());
										$count = mysqli_num_rows($query_quiz1);
										
										if($count > 0){
										while($row_quiz1 = mysqli_fetch_array($query_quiz1)){
										$id_quiz1 = $row_quiz1['quiz_id'];
				
										?>
					<tr>
					<td width="30">
						<input id="optionsCheckbox2"  name="selector2[]" type="checkbox" value="<?php echo $id_quiz1; ?>" > 
					</td>
					<td><?php echo $row_quiz1['quiz_title']; ?></td>
					<td>ELECTIVE 4</td>
					<td><?php echo $row_quiz1['quiz_description']; ?></td>
					</tr>
					<input type="hidden" name="nodata3" value="yes" placeholder="No Quiz Data" >
					<?php }} else{ 
?>

<tr>
<td colspan="5"><input type="text" name="nodata3" placeholder="No Quiz Data" disabled></td>
<td></td>
<td></td>
					</tr>
			<?php	} ?>
				</tbody>
				</table>
			
										</div>			
										<!--table for new test3 END-->
										<!--table for new test4 for IT 311-->
										<div class="green box" >
										<table class="table" id="question">
                <th></th>
               <th>Subject code</th>
				<th>Subject Title</th>
                <th>Description</th>
                <th></th>
				
				<tbody>
					<?php $query_quiz1 = mysqli_query($conn,"select * from quiz where teacher_id = '$session_id' and quiz_title ='IT 311'")or die(mysqli_error());
										$count = mysqli_num_rows($query_quiz1);
										
										if($count > 0){
										while($row_quiz1 = mysqli_fetch_array($query_quiz1)){
										$id_quiz1 = $row_quiz1['quiz_id'];
				
										?>
					<tr>
					<td width="30">
						<input id="optionsCheckbox2"  name="selector2[]" type="checkbox" value="<?php echo $id_quiz1; ?>" > 
					</td>
					<td><?php echo $row_quiz1['quiz_title']; ?></td>
					<td>ELECTIVE 3</td>
					<td><?php echo $row_quiz1['quiz_description']; ?></td>
					</tr>
					<input type="hidden" name="nodata4" value="yes" placeholder="No Quiz Data" >
					<?php }} else{ 
?>

<tr>
<td colspan="5"><input type="text" name="nodata4" placeholder="No Quiz Data" disabled></td>
<td></td>
<td></td>
					</tr>
			<?php	} ?>
				</tbody>
				</table>
										</div>			
										<!--table for new test4 END-->
										<!--table for new test4 for IT 311-->
										<div class="black box" >
										<table class="table" id="question">
                <th></th>
               <th>Subject code</th>
				<th>Subject Title</th>
                <th>Description</th>
                <th></th>
				
				<tbody>
					<?php $query_quiz1 = mysqli_query($conn,"select * from quiz where teacher_id = '$session_id' and quiz_title ='IT 403'")or die(mysqli_error());
										$count = mysqli_num_rows($query_quiz1);
										
										if($count > 0){
										while($row_quiz1 = mysqli_fetch_array($query_quiz1)){
										$id_quiz1 = $row_quiz1['quiz_id'];
				
										?>
					<tr>
					<td width="30">
						<input id="optionsCheckbox2"  name="selector2[]" type="checkbox" value="<?php echo $id_quiz1; ?>" > 
					</td>
					<td><?php echo $row_quiz1['quiz_title']; ?></td>
					<td>ELECTIVE 5</td>
					<td><?php echo $row_quiz1['quiz_description']; ?></td>
					</tr>
					<input type="hidden" name="nodata5" value="yes" placeholder="No Quiz Data" >
					<?php }} else{ 
?>

<tr>
<td colspan="5"><input type="text" name="nodata5" placeholder="No Quiz Data" disabled></td>
<td></td>
<td></td>
					</tr>
			<?php	} ?>
				</tbody>
				</table>
										</div>			
										<!--table for new test4 END-->
		<hr>
		<!--table for new class -->
<div class="gray box" >		
			<table class="table" id="question">
                <th></th>
                <th>ID</th>
                <th>Class</th>
                <th>Subject</th>
				
				<tbody>
					<?php $query = mysqli_query($conn,"select * from teacher_class
										LEFT JOIN class ON class.class_id = teacher_class.class_id
										LEFT JOIN subject ON subject.subject_id = teacher_class.subject_id
										where teacher_id = '$session_id' and subject_title = 'ELECTIVE 1' and school_year = '$school_year' ")or die(mysqli_error());
										$count = mysqli_num_rows($query);
										

										if($count > 0){
										while($row = mysqli_fetch_array($query)){
										$id = $row['teacher_class_id'];
				
										?>
					<tr>
					<td width="30">
						<input id="optionsCheckbox"  name="selector[]" type="checkbox" value="<?php echo $id; ?>" > 
					</td>
					<td><?php echo $id; ?></td>
					<td><?php echo $row['class_name']; ?></td>
					<td><?php echo $row['subject_title']; ?></td>
					</tr>
					<input type="hidden" name="nodata6" value="yes" placeholder="No Class Data" >
					<?php }} else{ 
?>

<tr>
<td colspan="5"><input type="text" name="nodata6" placeholder="No Class Data" disabled></td>
<td></td>
<td></td>
					</tr>
			<?php	} ?>
				</tbody>
</table>
</div>
			<!--table for new class  end-->	
				<!--table for new class -->
<div class="red box" >		
			<table class="table" id="question">
                <th></th>
                <th>ID</th>
                <th>Class</th>
                <th>Subject</th>
				
				<tbody>
					<?php $query = mysqli_query($conn,"select * from teacher_class
										LEFT JOIN class ON class.class_id = teacher_class.class_id
										LEFT JOIN subject ON subject.subject_id = teacher_class.subject_id
										where teacher_id = '$session_id' and subject_title = 'ELECTIVE 2' and school_year = '$school_year' ")or die(mysqli_error());
										$count = mysqli_num_rows($query);
										

										if($count > 0){
										while($row = mysqli_fetch_array($query)){
										$id = $row['teacher_class_id'];
				
										?>
					<tr>
					<td width="30">
						<input id="optionsCheckbox"  name="selector[]" type="checkbox" value="<?php echo $id; ?>" > 
					</td>
					<td><?php echo $id; ?></td>
					<td><?php echo $row['class_name']; ?></td>
					<td><?php echo $row['subject_title']; ?></td>
					</tr>
					<input type="hidden" name="nodata6" value="yes" placeholder="No Class Data" >
					<?php }} else{ 
?>

<tr>
<td colspan="5"><input type="text" name="nodata6" placeholder="No Class Data" disabled></td>
<td></td>
<td></td>
					</tr>
			<?php	} ?>
				</tbody>
</table>
</div>
			<!--table for new class  end-->		
			<!--table for new class -->
<div class="green box" >		
			<table class="table" id="question">
                <th></th>
                <th>ID</th>
                <th>Class</th>
                <th>Subject</th>
				
				<tbody>
					<?php $query = mysqli_query($conn,"select * from teacher_class
										LEFT JOIN class ON class.class_id = teacher_class.class_id
										LEFT JOIN subject ON subject.subject_id = teacher_class.subject_id
										where teacher_id = '$session_id' and subject_title = 'ELECTIVE 3' and school_year = '$school_year' ")or die(mysqli_error());
										$count = mysqli_num_rows($query);
										

										if($count > 0){
										while($row = mysqli_fetch_array($query)){
										$id = $row['teacher_class_id'];
				
										?>
					<tr>
					<td width="30">
						<input id="optionsCheckbox"  name="selector[]" type="checkbox" value="<?php echo $id; ?>" > 
					</td>
					<td><?php echo $id; ?></td>
					<td><?php echo $row['class_name']; ?></td>
					<td><?php echo $row['subject_title']; ?></td>
					</tr>
					<input type="hidden" name="nodata6" value="yes" placeholder="No Class Data" >
					<?php }} else{ 
?>

<tr>
<td colspan="5"><input type="text" name="nodata6" placeholder="No Class Data" disabled></td>
<td></td>
<td></td>
					</tr>
			<?php	} ?>
				</tbody>
</table>
</div>
			<!--table for new class  end-->		
			<!--table for new class -->
<div class="blue box" >		
			<table class="table" id="question">
                <th></th>
                <th>ID</th>
                <th>Class</th>
                <th>Subject</th>
				
				<tbody>
					<?php $query = mysqli_query($conn,"select * from teacher_class
										LEFT JOIN class ON class.class_id = teacher_class.class_id
										LEFT JOIN subject ON subject.subject_id = teacher_class.subject_id
										where teacher_id = '$session_id' and subject_title = 'ELECTIVE 4' and school_year = '$school_year' ")or die(mysqli_error());
										$count = mysqli_num_rows($query);
										

										if($count > 0){
										while($row = mysqli_fetch_array($query)){
										$id = $row['teacher_class_id'];
				
										?>
					<tr>
					<td width="30">
						<input id="optionsCheckbox"  name="selector[]" type="checkbox" value="<?php echo $id; ?>" > 
					</td>
					<td><?php echo $id; ?></td>
					<td><?php echo $row['class_name']; ?></td>
					<td><?php echo $row['subject_title']; ?></td>
					</tr>
					<input type="hidden" name="nodata6" value="yes" placeholder="No Class Data" >
					<?php }} else{ 
?>

<tr>
<td colspan="5"><input type="text" name="nodata6" placeholder="No Class Data" disabled></td>
<td></td>
<td></td>
					</tr>
			<?php	} ?>
				</tbody>
</table>
</div>
			<!--table for new class  end-->	
			<!--table for new class -->
<div class="black box" >		
			<table class="table" id="question">
                <th></th>
                <th>ID</th>
                <th>Class</th>
                <th>Subject</th>
				
				<tbody>
					<?php $query = mysqli_query($conn,"select * from teacher_class
										LEFT JOIN class ON class.class_id = teacher_class.class_id
										LEFT JOIN subject ON subject.subject_id = teacher_class.subject_id
										where teacher_id = '$session_id' and subject_title = 'ELECTIVE 5' and school_year = '$school_year' ")or die(mysqli_error());
										$count = mysqli_num_rows($query);
										

										if($count > 0){
										while($row = mysqli_fetch_array($query)){
										$id = $row['teacher_class_id'];
				
										?>
					<tr>
					<td width="30">
						<input id="optionsCheckbox"  name="selector[]" type="checkbox" value="<?php echo $id; ?>" > 
					</td>
					<td><?php echo $id; ?></td>
					<td><?php echo $row['class_name']; ?></td>
					<td><?php echo $row['subject_title']; ?></td>
					</tr>
					<input type="hidden" name="nodata6" value="yes" placeholder="No Class Data" >
					<?php }} else{ 
?>

<tr>
<td colspan="5"><input type="text" name="nodata6" placeholder="No Class Data" disabled></td>
<td></td>
<td></td>
					</tr>
			<?php	} ?>
				</tbody>
</table>
</div>
			<!--table for new class  end-->									
										<div class="control-group">
										<div class="controls">
										
										<button name="save" type="submit" class="btn btn-info"><i class="icon-save"></i> Save</button>
										</div>
										</div>
										



										</form>
										
									
										
										<?php
										if (isset($_POST['save'])){
											//$quiz_id = $_POST['quiz_id'];
											$time = $_POST['time'] * 60;
											$id=$_POST['selector'];
											$id_test=$_POST['selector2'];
											$sc=$_POST['sc'];

											if($id_test == "")
											{
												echo "<script>
												alert('No class data!');
												window.location.href='add_quiz_to_class.php?nodata';
												</script>";
											}else{}
											if($id == "")
											{
												echo "<script>
												alert('No quiz data!');
												window.location.href='add_quiz_to_class.php?nodata';
												</script>";
											}else{
											
																			
											$name_notification  = 'Add Practice Assessment file';
												
													$T = count($id_test);	
													for($z=0; $z < $T; $z++)
													{

											$N = count($id);
											for($i=0; $i < $N; $i++)
											{
												mysqli_query($conn,"insert into class_quiz (teacher_class_id,quiz_time,quiz_id) values('$id[$i]','$time','$id_test[$z]')")or die(mysqli_error());
												mysqli_query($conn,"insert into notification (teacher_class_id,notification,date_of_notification,link) value('$id[$i]','$name_notification',NOW(),'student_quiz_list.php')")or die(mysqli_error());




												$querye = mysqli_query($conn,"SELECT *
												FROM class_quiz
												WHERE class_quiz_id = ( SELECT MAX(class_quiz_id) FROM class_quiz ) ;
												")or die(mysqli_error());
												  while($rowe = mysqli_fetch_array($querye)){
												  $cqid = $rowe['class_quiz_id'];
												  $tcid = $rowe['teacher_class_id'];
												 
					 
												  $query = mysqli_query($conn,"select * FROM teacher_class_student
												  where teacher_class_id = '$tcid' 
												  ")or die(mysqli_error());
												  while($row = mysqli_fetch_array($query)){
												  $stdid = $row['student_id'];
												  
												  mysqli_query($conn,"insert into student_class_quiz (class_quiz_id,student_id,student_quiz_time,final,trys) value(' $cqid','$stdid','$time','0','4')")or die(mysqli_error());
	
	
												  }
						
								 
					  
									
					 
												 } 


												}
											}

										}



											
											
											
											
											
											?>
											<script>
												alert("Successfully Deploy a Review Assessment");
												window.location = 'add_quiz_to_class.php';
											</script>
											<?php
										}
										?>
								
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