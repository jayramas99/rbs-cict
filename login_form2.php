<div id="login_back">


<div id="button_form"
	class="form-signin"
	style="box-shadow: 0px 5px 20px 1px;
  		border-radius: .4em;">
        <br>
		<center>
		<img src="logobulsu.png" alt="logo" width="200" height="250">

	<h3 class="form-signin-heading"
		style="color: #333;
			
			margin-top: -2%;"></i><b>Sign Up As</b></h3>
</center>
	
            <br>
    <br>
	<button data-placement="top"
		title="Sign In as Student"
		id="signin_student"
		onclick="window.location='signup_student.php'"
		class="input-block-level"
		style="background-color:#E09C14;border:none;color:white;"
		name="login"
		class="btn btn-info"
		type="submit"
		style="font-weight: bold;"><b>Student</b>
	</button>
    <br>
	<hr style="border: 1px solid black;
  border-radius: 1px;">
    <br>
	<div >
		<button data-placement="top"
			title="Sign In as Teacher"
			id="signin_teacher"
			onclick="window.location='signup_teacher.php'"
			name="login"
			class="input-block-level"
		style="background-color:#E09C14;border:none;color:white;"
			type="submit"
			style="font-weight: bold;"><b>Professor</b>
		</button>
	</div>
</div>
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
						$.jGrowl("Welcome to  Reviewer Based System", { header: 'Access Granted' });
						var delay = 1000;
						setTimeout(function(){ window.location = 'dasboard_teacher.php'  }, delay); 
					}else if (html == 'true_student') {
						$.jGrowl("Welcome to  Reviewer Based System", { header: 'Access Granted' });
						var delay = 1000;
						setTimeout(function(){ window.location = 'student_notification.php'  }, delay);
					} else {
						$.jGrowl("Please Check your username and Password", { header: 'Login Failed' });
					}
				}
			});
			return false;
		});
	});
</script>



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
