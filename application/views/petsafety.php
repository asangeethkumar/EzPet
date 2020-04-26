
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
<title>pet food</title>
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
	<link rel="stylesheet" type="text/css"  href="<?php echo base_url('assets/css/mains.css'); ?>">
<!--===============================================================================================-->
</head>
<body>
<div class="limiter">

		<div class="container-login100">
			<div class="wrap-login100">
				


						<form class="login100-form validate-form"  action="" method="post" >
						<h1 align="center" >PET SAFETY </h1>
						<br>
						<br>



  								<div class="wrap-input100 validate-input" data-validate = "valid name is required">
								<input type="text" name="first_name"  class="input100" pattern="[A-Za-z_]{1,32}" title="digits ,whitespaces and special characters are not allowed"  maxlength="32" placeholder="FIRST NAME" value="<?php echo !empty($user['first_name'])?$user['first_name']:''; ?>"  >
								<?php echo form_error('first_name','<p class="help-block">','</p>'); ?>
								<span class="focus-input100"></span>
								<span class="symbol-input100">
									<i class="fa fa-user" aria-hidden="true"></i>
								</span>
								</div>
						

								<div class="wrap-input100 validate-input" data-validate = "Valid phone is required">
								<input type="text" name="phone"  class="input100" placeholder="PHONENUMBER" pattern="[6-9]{1}[0-9]{9}" title="Enter valid phone number"value="<?php echo !empty($user['phone'])?$user['phone']:''; ?>">
								<?php echo form_error('phone','<p class="help-block">','</p>'); ?>
						
								<span class="focus-input100"></span>
								<span class="symbol-input100">
									<i class="fa fa-phone" aria-hidden="true"></i>
								</span>
								</div>
				

								<div class="wrap-input100 validate-input" data-validate = "Valid email is required: emailId@abc.com">
								<input type="email"   class="input100" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"  placeholder="EMAIL" >
								<?php echo form_error('email','<p class="help-block">','</p>'); ?>
								<span class="focus-input100"></span>
								<span class="symbol-input100">
									<i class="fa fa-envelope" aria-hidden="true"></i>
								</span>
								</div>

				
			<h3>PET INFORMATION</h3>	
					<br>
							<div class="wrap-input100 validate-input" data-validate = "valid pet name is required">
								<input type="text" name="pet_name"  class="input100" placeholder="PET NAME"pattern="[A-Za-z_]{1,32}" title="digits ,whitespaces and special characters are not allowed"  maxlength="32" value="<?php echo !empty($user['PET_name'])?$user['PET_name']:''; ?>" >
								<?php echo form_error('pet_name','<p class="help-block">','</p>'); ?>
								<span class="focus-input100"></span>
								<span class="symbol-input100">
									
								</span>
								</div>

								<div class="wrap-input100 validate-input" data-validate = "valid pet breed is required">
								<input type="text" name="pet_breed"  class="input100" placeholder="PET BREED" value="<?php echo !empty($user['pet_breed'])?$user['pet_breed']:''; ?>" >
								<?php echo form_error('pet_breed','<p class="help-block">','</p>'); ?>
								<span class="focus-input100"></span>
								<span class="symbol-input100">
									
								</span>
								</div>



								     <h2>SAFETY:</h2>
             
      
  <input type="checkbox" id="Common Household Dangers for Pets" name="safety[]" value="Common Household Dangers for Pets">
  <label for="Common Household Dangers for Pets">Common Household Dangers for Pets</label><br>
  <input type="checkbox" id="Food Safety for Pets" name="safety[]" value="Food Safety for Pets">
  <label for="Food Safety for Pets">Food Safety for Pets</label><br>
  <input type="checkbox" id="How to Pet-Proof Your Home" name="safety[]" value="How to Pet-Proof Your Home">
  <label for="How to Pet-Proof Your Home">How to Pet-Proof Your Home</label><br>
  
  <input type="checkbox" id="Safety for Specialty and Exotic Pets" name="safety[]" value="Safety for Specialty and Exotic Pets">
  <label for="Safety for Specialty and Exotic Pets"> Safety for Specialty and Exotic Pets</label><br>
  <input type="checkbox" id="Pet Safety During a Natural Disaster" name="safety[]" value="Pet Safety During a Natural Disaster">
  <label for="Pet Safety During a Natural Disaster">Pet Safety During a Natural Disaster</label><br>


	<div class="container-login100-form-btn">
						<button class="login100-form-btn" onclick="change()" id="submit" name="signupSubmit"  value="SUBMIT" type="submit">
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