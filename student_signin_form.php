<br>
<br>
<br>

<div id="login_back_student">

<form id="signin_student" class="form-signin" method="post" style="box-shadow: 0px 5px 20px 1px;
  		border-radius: .4em;">
			<h3 class="form-signin-heading" 
			style="color: #333;
				margin-left: -2%;
				margin-top: -2%;">Sign Up Student Details</h3>
			<input type="text" class="input-block-level" id="username" name="username" placeholder="Student Number" pattern="[0-9]{10}" onkeypress='return event.charCode>=48 && event.charCode<58' maxlength="10" required>
			<input type="text" class="input-block-level" id="firstname" name="firstname" placeholder="Firstname" required>
			<input type="text" class="input-block-level" id="lastname" name="lastname" placeholder="Lastname" required>
			<select name="class_id" class="input-block-level" style="margin-bottom: 5%; font-weight: bold; color: #999">
				<option value="" style="font-weight: bold; color: #999" disabled selected>Select Section...</option>
				<?php
				$query = mysqli_query($conn,"select * from class order by class_name ")or die(mysqli_error());
				while($row = mysqli_fetch_array($query)){
				?>
				<option value="<?php  echo $row['class_id']; ?>"><?php echo $row['class_name']; ?></option>
				<?php
				}
				?>
			</select>
			
			
			<input type="password" class="input-block-level" id="password" name="password" placeholder="Password" required>
			
			<input type="password" class="input-block-level" id="cpassword" name="cpassword" placeholder="Re-type Password" required>
			<button id="signin" name="login" class="input-block-level"
		style="background-color:#f59d1f;border:none;" type="submit" style="font-weight: bold;"><b style="color:white">Sign Up</b></button>
			
			<div >
				<br>
				<button onclick="window.location='index.php'"  class="input-block-level"
		style="background-color:#a0d1b0;border:none;color:white"  style="font-weight: bold;"><b style="color:white">Back</b></button>
			</div>
			</form>
			
			</div>		
			
			<script>
			jQuery(document).ready(function(){
			jQuery("#signin_student").submit(function(e){
					e.preventDefault();
						
						var password = jQuery('#password').val();
						var cpassword = jQuery('#cpassword').val();
					
					
					if (password == cpassword){
					var formData = jQuery(this).serialize();
					$.ajax({
						type: "POST",
						url: "student_signup.php",
						data: formData,
						success: function(html){
						if(html=='true')
						{
						$.jGrowl("Welcome to Reviewer Based System", { header: 'Sign up Success' });
						var delay = 2000;
							setTimeout(function(){ window.location = 'dashboard_student.php'  }, delay);  
						}else{
							$.jGrowl("student does not found in the database Please Sure to Check Your Student Number or Firstname, Lastname and the Section You Belong. ", { header: 'Sign Up Failed' });
						}
						}
						
						
					});
			
					}else
						{
						$.jGrowl("Check your Password if is the same ", { header: 'Sign Up Failed' });
						}
				});
			});
			</script>
			
			
			
				
		
					