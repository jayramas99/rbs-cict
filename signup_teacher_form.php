<br>



<div id="login_back_student">

<form id="signin_teacher" class="form-signin" method="post" style="box-shadow: 0px 5px 20px 1px;margin-left:35vh;
  		border-radius: .4em;">
					<h3 class="form-signin-heading" style="color: #333;
				margin-left: -2%;
				margin-top: -2%;">Professor Details</h3>
				<input type="text" class="input-block-level"  name="emp" placeholder="Professor ID" required>
					<input type="text" class="input-block-level"  name="firstname" placeholder="Firstname" required>
					<input type="text" class="input-block-level"  name="lastname" placeholder="Lastname" required>
					<label></label>
					<input type="text" class="input-block-level" id="username" name="username" placeholder="Username" required>
					<input type="password" class="input-block-level" id="password" name="password" placeholder="Password" required>
					<input type="password" class="input-block-level" id="cpassword" name="cpassword" placeholder="Re-type Password" required>
					<button id="signin" name="login" class="input-block-level"
		style="background-color:#f59d1f;border:none;" type="submit"  style="font-weight: bold;"> <b style="color:white">Sign Up</b></button>
					<div >
						<br>
						<button onclick="window.location='index.php'"  class="input-block-level"
		style="background-color:#a0d1b0;border:none;color:white:"  style="font-weight: bold;"><b style="color:white">Back</b></button>
					</div>
			</form>
					</div>
			<script>
			jQuery(document).ready(function(){
			jQuery("#signin_teacher").submit(function(e){
					e.preventDefault();
						var password = jQuery('#password').val();
						var cpassword = jQuery('#cpassword').val();
					if (password == cpassword){
					var formData = jQuery(this).serialize();
					$.ajax({
						type: "POST",
						url: "teacher_signup.php",
						data: formData,
						success: function(html){
						if(html=='true')
						{
						$.jGrowl("Welcome to Reviewer Based System", { header: 'Sign up Success' });
						var delay = 1000;
							setTimeout(function(){ window.location = 'dasboard_teacher.php'  }, delay);  
						}else{
							$.jGrowl("Your data is not found in the database", { header: 'Sign Up Failed' });
						}
						}
					});
			
					}else
						{
						$.jGrowl("Your data is not found in the database", { header: 'Sign Up Failed' });
						}
				});
			});
			</script>
			
			
			
				
		
					
		