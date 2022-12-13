<div class="span3" id="sidebar" style="height:800px;margin-top:-30px;margin-top:-30px;margin-left:-20px;position:fixed;border-style: groove;">
	<br>
	<br>
<img id="avatar" class="img-polaroid" src="admin/<?php echo $row['location']; ?>" style="margin-left:100px;">
	<?php include('teacher_count.php'); ?>

	<ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
		<li class=""><a href="dasboard_teacher.php"><i class="icon-chevron-right"></i><i class="icon-group"></i>&nbsp;My Class</a></li>
		
		<li class=""><a href="add_class_teacher.php"><i class="icon-chevron-right"></i><i class="icon-plus-sign"></i>&nbsp;Add Class</a></li>
		
	
		<li class="active"><a href="teacher_quiz.php"><i class="icon-chevron-right"></i><i class="icon-list"></i>&nbsp;Create Exam</a></li>
		<li class=""><a href="general.php"><i class="icon-chevron-right"></i><i class="icon-group"></i>&nbsp;General Statistics</a></li>
		</ul>
		
</div>


