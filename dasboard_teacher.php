<?php include('session.php'); ?>
<?php include('header_dashboard.php'); ?>

    <body id="class_div">
		<?php include('navbar_teacher.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('teacher_sidebar.php'); ?>
                <div class="span6" id="content" style="margin-left:400px;">
                     <div class="row-fluid">
						<br>
					    <!-- breadcrumb -->	
					     <ul class="breadcrumb">
								<?php
								$school_year_query = mysqli_query($conn,"select * from school_year order by school_year DESC")or die(mysqli_error());
								$school_year_query_row = mysqli_fetch_array($school_year_query);
								$school_year = $school_year_query_row['school_year'];
								?>
								<li><a href="#"><b>My Class</b></a><span class="divider">/</span></li>
								<li><a href="#">School Year: <?php echo $school_year_query_row['school_year']; ?></a></li>
						</ul>
						 <!-- end breadcrumb -->
                        <!-- block -->
                        <div class="block">
								<div class="navbar navbar-inner block-header" style="background-color:#f59d1f;font-size:30px">
									<div id="count_class" class="muted pull-right"></div>
									<br><b style="color:#4c4c4c;">My Class</b>
								</div>
                            <div class="block-content collapse in">
                                <div class="span12">
										<?php include('teacher_class.php'); ?>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
									
                </div>
				
            </div>
	
        </div>
		<?php include('script.php'); ?>
    </body>
</html>