<?php include('../session.php'); ?>
<?php include('header.php'); ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('student_sidebar.php'); ?>
                <div style="margin-left:380px;">
				<div class="span3" id="adduser">
					   			
				</div>
                <div class="span6" id="" style="width:80%;">
                     <div class="row-fluid">
                        <!-- block -->
                        <div  id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header" style="background-color: #f59d1f;">
                                <div class="muted pull-left" style="color:#4c4c4c;font-size:20px;"><b>Unregistered Student List</b></div>
                            </div>
                            <div class="block-content collapse in">
								<div class="span12" id="studentTableDiv">
									<?php include('student_table_unreg.php'); ?>
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

</html>