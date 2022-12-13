<div class="navbar navbar-fixed-top navbar-inverse">
        <div class="navbar-inner">
            <div class="container-fluid" style="background-color:#f59d1f;">
			
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
					<span class="icon-bar"></span><span class="icon-bar"></span>
                </a>
			
                <span class="brand" href="#"><img src="logobulsu.png" alt="logo" width="100" height="150" style="margin-left:-4%;" /><img src="CICT.png" alt="logo" width="58" height="100" style="margin-left:-3%;" />
				<div style="margin-left:27%;margin-top:-10%;width:550px">
					<b style="font-size:18px;color:#4c4c4c;"> 
					Bulacan State University <br><label style="font-size:22px;color:#4c4c4c;font-weight:bold;">College of Information and Communications Technology</label>
				    </b>
					</div></span>
					<div class="nav-collapse collapse">
						<ul class="nav pull-right" style="margin-top:30px;">
							<?php $query= mysqli_query($conn,"select * from student where student_id = '$session_id'")or die(mysqli_error());
									$row = mysqli_fetch_array($query);
							?>
							<li class="dropdown">
								<a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Hello <?php echo $row['firstname']." ".$row['lastname'];  ?> <i class="caret"></i></a>
									<ul class="dropdown-menu">
										<li><a tabindex="-1" href="change_password_student.php"> Change Password</a></li>
										<li><a tabindex="-1" href="#myModal_student" data-toggle="modal">Change Profile Picture</a></li>
										<li class="divider"></li>
										<li>
											<a tabindex="-1" href="logout.php"><i class="icon-signout"></i>&nbsp;Logout</a>
										</li>
									</ul>
							</li>
						</ul>
					</div>
            </div>
        </div>
</div>
<br>
<br>
<?php include('avatar_modal_student.php'); ?>	