<!DOCTYPE html>
<?php
include_once "menuWithLogout.php";
?>
<br>
<br>
<br>
<br>

<html lang="en">  
<head>
<title>DIAGONSTIC</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?php echo base_url('assets/images/icons/favicon.ico'); ?>"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css"  href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css"  href="<?php echo base_url('assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css'); ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css"  href="<?php echo base_url('assets/vendor/animate/animate.css'); ?>">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css"  href="<?php echo base_url('assets/vendor/css-hamburgers/hamburgers.min.css'); ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/select2/select2.min.css'); ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/util.css'); ?>" >
	<link rel="stylesheet" type="text/css"  href="<?php echo base_url('assets/css/main.css'); ?>">
<!--===============================================================================================-->
</head>
<body>
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
			<?php echo @$error; ?>
				
				<form class="login100-form validate-form"  action="" method="post" >
						<h1 align="center" >FORGETPASSWORD</h1>
						<br>
						<br>
						
						
						
	
						
						
		
		<div class="wrap-input100 validate-input" data-validate = "  valid emailid  is required">
		<div class="wrap-input100 validate-input" data-validate = "  valid emailid  is required">
								<label for="inputState"> </label>
								<input type="email"   class="input100"  name="email" id="name" placeholder=""/><br>
								<span class="focus-input100"></span>
								<span class="symbol-input100">	
								<i class="fa fa-envelope" aria-hidden="true"></i>
								</span>
						</div>
						
						
					
						
		
		
						
					
						
						
						
					

				<div class="container-login100-form-btn">
						<button class="login100-form-btn" onclick="change()" id="submit" name="forgot_pass"  value="SUBMIT" type="submit">
							submit
						</button>
				</div>
			
			
		</form>
	</div>
</div>



<!--===============================================================================================-->	
	<script src="<?php echo base_url('assets/vendor/jquery/jquery-3.2.1.min.js'); ?>" ></script>
<!--===============================================================================================-->
	<script  src="<?php echo base_url('assets/vendor/bootstrap/js/popper.js'); ?>"  ></script>
	<script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.min.js'); ?>"  ></script>
<!--===============================================================================================-->
	<script  src="<?php echo base_url('assets/vendor/select2/select2.min.js'); ?>"  ></script>
<!--===============================================================================================-->
	<script  src="<?php echo base_url('assets/vendor/tilt/tilt.jquery.min.js'); ?>"  ></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script  src="<?php echo base_url('assets/js/main.js'); ?>"  ></script>

</body>
</html>