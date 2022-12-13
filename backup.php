<div class="chart" style="position:absolute;">
     
      <ul class="bars">
	  <?php
	  $alltotal = 0;
	  $correct = 0;
	  $allmistake = 0;



										$query = mysqli_query($conn,"select * FROM class_quiz 
										LEFT JOIN quiz on class_quiz.quiz_id = quiz.quiz_id
										where teacher_class_id = '$get_id' order by class_quiz_id DESC ")or die(mysqli_error());
										while($row = mysqli_fetch_array($query)){
										$id  = $row['class_quiz_id'];
										$quiz_id  = $row['quiz_id'];
										$quiz_time  = $row['quiz_time'];
									

										


										$query1 = mysqli_query($conn,"select * from student_class_quiz where grade IS NOT NULL and class_quiz_id = '$id' and student_id = '$session_id' and items != '0' ")or die(mysqli_error());
										while ($row1 = mysqli_fetch_array($query1)){
										$grade = $row1['final'];
										$all = $row1['items'];

										
										

										$correct = $correct + $grade;

										$alltotal = $alltotal + $all;

											$allmistake = $allmistake + $grade;

											$wrong = $all - $grade;

											
											$gradetotal = round(100*(($all - $wrong)/$all));
											$gradetotal2 = $grade;
											
									?>          
										<?php if ($grade ==""){
										
										}else{ ?>	
								                                   
                                       
								

        <li><div class="bar" data-percentage="<?php echo $gradetotal; ?>" 
		<?php
		if($gradetotal2 < round(($all*0.70)))
		{
			echo 'style="background-color:red;"';
		}
		
		?>
		></div><span><?php echo $row['quiz_title'];?></span></li>
		<?php } ?>
						 <?php }
						 
	}?>
	

       
      </ul>
    </div>