<div class="span3" id="sidebar" style="height:800px;margin-top:-30px;margin-top:-30px;margin-left:-20px;position:fixed;border-style: groove;">
<br>
<br>
	<img id="avatar" src="admin/<?php echo $row['location']; ?>" class="img-polaroid" style="margin-left:100px;">
			<ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
				<li class=""><a href="dasboard_teacher.php">&nbsp;Back</a></li>
				<li class=""><a href="my_students.php<?php echo '?id='.$get_id; ?>"><i class="icon-chevron-right"></i><i class="icon-group"></i>&nbsp;My Students</a></li>
			
				<li class="active"><a href="downloadable.php<?php echo '?id='.$get_id; ?>"><i class="icon-chevron-right"></i><i class="icon-plus-sign"></i>&nbsp;Downloadable Materials</a></li>
		
			
			    <li class=""><a href="class_quiz.php<?php echo '?id='.$get_id; ?>"><i class="icon-chevron-right"></i><i class="icon-list"></i>&nbsp;Exam Grades</a></li>
			</ul>
				
</div>

