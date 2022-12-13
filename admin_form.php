<form id="login_form" class="form-signin" method="post" style="box-shadow: 0px 5px 20px 1px;
  		border-radius: .4em;margin-left:36%;">
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		
		<center>
        <h3 class="form-signin-heading" style="color: #333;
				margin-left: -2%;
				margin-top: -2%;">Log in Administrator</h3>
					</center>
        <input type="text" class="input-block-level" id="usernmae" name="username" placeholder="Username" required>
        <input type="password" class="input-block-level" id="password" name="password" placeholder="Password" required>
        <button name="login" class="btn btn-info" type="submit" style="font-weight: bold;">Sign in</button>
        <div class="pull-right">
						<a onclick="window.location='index.php'" id="btn_login" name="login" class="btn btn-info" type="submit" style="font-weight: bold;">Back</a>
					</div>
</form>

<script>
			jQuery(document).ready(function(){
			jQuery("#login_form").submit(function(e){
					e.preventDefault();
					var formData = jQuery(this).serialize();
					$.ajax({
						type: "POST",
						url: "admin/login.php",
						data: formData,
						success: function(html){
						if(html=='true')
						{
						$.jGrowl("Learning Management System", { header: 'Access Granted' });
						var delay = 2000;
							setTimeout(function(){ window.location = 'admin/dashboard.php'  }, delay);  
						}
						else
						{
						$.jGrowl("Please Check your username and Password", { header: 'Login Failed' });
						}
						}
						
					});
					return false;
				});
			});
			</script>