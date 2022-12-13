<div class="span3" id="sidebar" style="height:800px;margin-top:-30px;margin-top:-30px;margin-left:-20px;position:fixed;border-style: groove;">
<br>
<br>
	<img id="avatar" src="admin/<?php echo $row['location']; ?>" class="img-polaroid" style="margin-left:100px;">
		<ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
				<li class=""><a href="dashboard_student.php"><i class="icon-chevron-right"></i><i class="icon-chevron-left"></i>&nbsp;Back</a></li>

				<li class=""><a href="progress.php<?php echo '?id='.$get_id; ?>"><i class="icon-chevron-right"></i><i class="icon-bar-chart"></i>&nbsp;Statistics</a></li>

				<li class="active"><a href="downloadable_student.php<?php echo '?id='.$get_id; ?>"><i class="icon-chevron-right"></i><i class="icon-book"></i>&nbsp;Reviewer</a></li>

				<li class=""><a href="student_quiz_list.php<?php echo '?id='.$get_id; ?>"><i class="icon-chevron-right"></i><i class="icon-reorder"></i>&nbsp;Review Assessment</a></li>
		</ul>
	<?php /* include('search_other_class.php'); */ ?>	
</div>