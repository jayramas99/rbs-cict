<?php include('session.php'); ?>
<?php include('header_dashboard.php'); ?>
<?php $get_id = $_GET['id']; ?>
<?php $quiz_question_id = $_GET['quiz_question_id']; ?>
<body>
		<?php include('navbar_teacher.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('quiz_sidebar_teacher.php'); ?>
                <div class="span9" id="content" style="margin-left:400px;">
                     <div class="row-fluid">
					    <!-- breadcrumb -->	
						<br>
									<ul class="breadcrumb">
										<?php
										$school_year_query = mysqli_query($conn,"select * from school_year order by school_year DESC")or die(mysqli_error());
										$school_year_query_row = mysqli_fetch_array($school_year_query);
										$school_year = $school_year_query_row['school_year'];
										?>
										<li><a href="#"><b>My Class</b></a><span class="divider">/</span></li>
										<li><a href="#">School Year: <?php echo $school_year_query_row['school_year']; ?></a><span class="divider">/</span></li>
										<li><a href="#"><b>Edit Review Assessment Questions</b></a></li>
									</ul>
						 <!-- end breadcrumb -->
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header" style="background-color:#f59d1f;font-size:25px;color:#4c4c4c;">
							 
							<div id="" class="muted pull-right">
							
								<a href="quiz_question.php<?php echo '?id='.$get_id; ?>" class="btn btn-success"><i class="icon-arrow-left"></i> Back</a>
								</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<?php
										$query = mysqli_query($conn,"select * FROM quiz_question
										LEFT JOIN question_type on quiz_question.question_type_id = question_type.question_type_id
										where quiz_id = '$get_id' and quiz_question_id = '$quiz_question_id'  order by date_added DESC ")or die(mysqli_error());
										$row = mysqli_fetch_array($query);
								?>
								
							    <form class="form-horizontal" method="post">
								        <div class="control-group">
											<label class="control-label" for="inputPassword">Question</label>
											<div class="controls">
													<textarea name="question" id="ckeditor_full" required><?php echo $row['question_text']; ?></textarea>
											</div>
										</div>
										<!-- <div class="control-group">
											<label class="control-label" for="inputEmail">Points</label>
											<div class="controls">
											
											<input type="number" class="span1" name="points" min=1 max=5 required> 
											</div>
										</div> -->
										<div class="control-group">
											<label class="control-label" for="inputEmail">Question Type:</label>
											<div class="controls">			
												<select id="qtype" name="question_tpye">

														<option value="<?php echo $row['question_type_id']; $qtid=$row['question_type_id']; ?>" ></option>
													<?php
													$query_question = mysqli_query($conn,"select * from question_type where question_type_id = '$qtid'")or die(mysqli_error());
													while($query_question_row = mysqli_fetch_array($query_question)){
													?>
													<option value="<?php echo $query_question_row['question_type_id']; ?>"><?php echo $query_question_row['question_type'];  ?></option>
													<?php } ?>

												</select>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="inputEmail"></label>
											<div class="controls">			
										<div id="opt11">
<?php
	$sqlz = mysqli_query($conn,"SELECT * FROM answer WHERE quiz_question_id = $quiz_question_id");
	while($rowz = mysqli_fetch_array($sqlz)){
		if($rowz['choices'] == 'A'){
			$a = $rowz['answer_text'];
		} else if($rowz['choices'] == 'B'){
			$b = $rowz['answer_text'];
		} else if($rowz['choices'] == 'C'){
			$c = $rowz['answer_text'];
		} else if($rowz['choices'] == 'D'){
			$d = $rowz['answer_text'];
		}
	}
?>
<?php
	$sqlzs = mysqli_query($conn,"SELECT * FROM quiz_question WHERE quiz_question_id = $quiz_question_id");
	while($rowa = mysqli_fetch_array($sqlzs)){
		$correct = $rowa['answer'];
	}
?>

	A.)<input type="text" name="ans1" size="60" value='<?php echo $a;?>'><input name="correctm" value="A" <?php if($correct == 'A'){ echo 'checked'; }?> type="radio"><br /><br />
	B.)<input type="text" name="ans2" size="60" value='<?php echo $b;?>'><input name="correctm" value="B" <?php if($correct == 'B'){ echo 'checked'; }?> type="radio"><br /><br />
	C.)<input type="text" name="ans3" size="60" value='<?php echo $c;?>'><input name="correctm" value="C" <?php if($correct == 'C'){ echo 'checked'; }?> type="radio"><br /><br />
	D.)<input type="text" name="ans4" size="60" value='<?php echo $d;?>'><input name="correctm" value="D" <?php if($correct == 'D'){ echo 'checked'; }?> type="radio"><br /><br />
</div>
<div id="opt12">
	<input name="correctt" <?php if($correct == 'True'){ echo 'checked'; }?> value="True" type="radio">True<br /><br />
	<input name="correctt" <?php if($correct == 'False'){ echo 'checked'; }?> value="False" type="radio">False<br /><br />
</div>
											</div>
										</div>
									
											
						
										

						<div class="control-group">
										<div class="controls">
										
										<button name="save" type="submit" class="btn btn-info"><i class="icon-save"></i> Save</button>
										</div>
										</div>		
																				
										
		</form>							
		
		<?php
		if (isset($_POST['save'])){
		$question = $_POST['question'];
		
		$type = $_POST['question_tpye'];
		$answer = $_POST['correctm']; 
		
		$ans1 = $_POST['ans1'];
		$ans2 = $_POST['ans2'];
		$ans3 = $_POST['ans3'];
		$ans4 = $_POST['ans4'];
		
		if ($type  == '2'){
			mysqli_query($conn,"update quiz_question set question_text = '$question',date_added = NOW(),answer = '".$_POST['correctt']."',question_type_id = '$type' where quiz_question_id ='$quiz_question_id'")or die(mysqli_error());




		
		}else{
			mysqli_query($conn,"update quiz_question set question_text = '$question',date_added = NOW(),answer = '$answer',question_type_id = '$type' where quiz_question_id ='$quiz_question_id'")or die(mysqli_error());

	
		$query = mysqli_query($conn,"select * from quiz_question order by quiz_question_id DESC LIMIT 1")or die(mysqli_error());
		$row = mysqli_fetch_array($query);
		
		
		mysqli_query($conn,"update answer SET  answer_text = '$ans1' where  quiz_question_id = '$quiz_question_id' and choices = 'A'")or die(mysqli_error());
		mysqli_query($conn,"update answer SET  answer_text = '$ans2' where  quiz_question_id = '$quiz_question_id' and choices = 'B'")or die(mysqli_error());
		mysqli_query($conn,"update answer SET  answer_text = '$ans3' where  quiz_question_id = '$quiz_question_id' and choices = 'C'")or die(mysqli_error());
		mysqli_query($conn,"update answer SET  answer_text = '$ans4' where  quiz_question_id = '$quiz_question_id' and choices = 'D'")or die(mysqli_error());
		
		}
		
	?>
		<script>
 		window.location = 'quiz_question.php<?php echo '?id='.$get_id; ?>' 
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
					<script>
	jQuery(document).ready(function(){
		jQuery("#opt11").hide();
		jQuery("#opt12").hide();
		jQuery("#opt13").hide();		

		jQuery("#qtype").change(function(){	
			var x = jQuery(this).val();			
			if(x == '1') {
				jQuery("#opt11").show();
				jQuery("#opt12").hide();
				jQuery("#opt13").hide();
			} else if(x == '2') {
				jQuery("#opt11").hide();
				jQuery("#opt12").show();
				jQuery("#opt13").hide();
			}
		});
		
	});
</script>
		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
    </body>
</html>