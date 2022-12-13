<div id="login_back">

<form id="login_form1"
	class="form-signin"
	method="post"
	style="box-shadow: 0px 5px 20px 1px;
  		border-radius: .4em;">
		<center>
		<img src="logobulsu.png" alt="logo" width="200" height="250">

	<h3 class="form-signin-heading"
		style="color: #333;
			
			margin-top: -2%;"></i><b>Sign in</b></h3>
</center>
	
	<input type="text"
		class="input-block-level"
		id="username"
		name="username"
		placeholder="Username"
		required>
	
	<input type="password"
		class="input-block-level"
		id="password" name="password"
		placeholder="Password"
		required>
		<br>
	<button data-placement="right"
		title="Click Here to Sign In"
		id="signin"
		name="login"
		class="input-block-level"
		style="background-color:#E09C14;border:none;margin-top:40px;color:white;"
		type="submit"
		style="font-weight: bold;
			"><b>Log In</b>
	</button>
	<hr style="border: 1px solid black;
  border-radius: 1px;">
	<center>
	<button data-placement="right"
		title="Click Here to Sign In"
		
		
		class="input-block-level"
		style="background-color:#a0d1b0;border:none;margin-top:40px;color:white;"
		onclick="location.href='signup.php';"
		style="font-weight: bold;
			"><b>Create New Account</b>
	</button>
	
</center>
<!--
	<div class="pull-right">
		<a data-placement="top"
			title="Log In as Admin"
			id="signin_teacher"
			onclick="window.location='/admin.php'"
			
			class="btn btn-info"
			
			style="font-weight: bold;">Admin Log in
		</a>
		
		
	</div>
-->
	<br>
		<br>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#signin').tooltip('show');
			$('#signin').tooltip('hide');
		});
	</script>		
</form>

	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">



<script>
	jQuery(document).ready(function(){
		jQuery("#login_form1").submit(function(e){
			e.preventDefault();
			var formData = jQuery(this).serialize();
			$.ajax({
				type: "POST",
				url: "login.php",
				data: formData,
				success: function(html){
					if(html=='true') {
						$.jGrowl("Loading File Please Wait......", { sticky: true });
						$.jGrowl("Checking Data......", { sticky: true });
						$.jGrowl("Welcome to  Reviewer Based System ", { header: 'Access Granted' });
						var delay = 3000;
						setTimeout(function(){ window.location = 'dasboard_teacher.php'  }, delay); 
					}else if (html == 'true_student') {
						$.jGrowl("Loading File Please Wait......", { sticky: true });
						$.jGrowl("Checking Data......", { sticky: true });
						$.jGrowl("Welcome to  Reviewer Based System", { header: 'Access Granted' });
						var delay = 3000;
						setTimeout(function(){ window.location = 'student_notification.php'  }, delay);
					} 
					else if (html == 'true_Admin') {
						$.jGrowl("Loading File Please Wait......", { sticky: true });
						$.jGrowl("Checking Data......", { sticky: true });
						$.jGrowl("Welcome to Administrator", { header: 'Access Granted' });
						var delay = 3000;
						setTimeout(function(){ window.location = 'admin/dashboard.php'  }, delay);
					} 
					
					else {
						$.jGrowl("Loading File Please Wait......", { sticky: false });
						$.jGrowl("Checking Data......", { sticky: false });
						$.jGrowl("Please Check your username and Password", { header: 'Login Failed' });
					}
				}
			});
			return false;
		});
	});
</script>
<!--
<div id="button_form"
	class="form-signin"
	style="box-shadow: 0px 5px 20px 1px;
  		border-radius: .4em;">
	<h3 class="form-signin-heading"
		style="color: #333;
			margin-left: -2%;
			margin-top: -2%;">Validation</h3>
	<button data-placement="top"
		title="Sign In as Student"
		id="signin_student"
		onclick="window.location='signup_student.php'"
		id="btn_student"
		name="login"
		class="btn btn-info"
		type="submit"
		style="font-weight: bold;">Student
	</button>
	<div class="pull-right">
		<button data-placement="top"
			title="Sign In as Teacher"
			id="signin_teacher"
			onclick="window.location='signup_teacher.php'"
			name="login"
			class="btn btn-info"
			type="submit"
			style="font-weight: bold;">Teacher
		</button>
	</div>
</div>
-->
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$('#signin_student').tooltip('show');
		$('#signin_student').tooltip('hide');
	});
</script>	

<script type="text/javascript">
	$(document).ready(function(){
		$('#signin_teacher').tooltip('show');
		$('#signin_teacher').tooltip('hide');
	});
</script>
