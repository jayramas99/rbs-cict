<?php include('header.php');
$version = phpversion();
print $version;

?>
<style>
	body#login::before {
    	content: "";
    	position: absolute;
    	top: 0;
    	/* z-index: 1; */
    	left: 0;
    	width: 100%;
    	height: 100%;
		background-image: url("bulsu-main-gate.jpg");
		background-position: center;
        background-repeat: no-repeat;
        background-size: auto;
	}
</style>

<body id="login">
    <div style="position: relative;">
    	<div>
    		
    	</div>
		<div class="row-fluid" style="margin-top: 2%">
			<?php 
			
			include('login_form.php'); ?>
		</div>
    </div>
<?php include('script.php'); ?>
</body>
</html>