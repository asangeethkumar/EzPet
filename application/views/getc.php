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
<title>>DENTAL</title>
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
				
				<form class="login100-form validate-form"  action="" method="post" >
						<h1 align="center" >Online Consultation</h1>
						<br>
						<div class="wrap-input100 validate-input" data-validate  = " select valid option is required">
								<span class="focus-input100"></span>
								<label class="required" >PET SPECIES</label>
								<select name="pet" class='input100' id="inputState"  >
									<option>SELECT</option>
									<option >DOG</option>
									<option>CAT</option>
									<option>FISH</option>
									<option>BIRDS</option>
								</select>
								<br>
								<span class="symbol-input100">
								</span>
						</div>
						
						<div class="wrap-input100 validate-input" data-validate = "  valid name  is required">
								<label for="inputState"> </label>
								<input type="text" name="petname"   class="input100"  placeholder="ENTER PET NAME" value="" >	
								<span class="focus-input100"></span>
								<span class="symbol-input100">
									
								</span>
						</div>
						
						
						<br>
						
						<div class="input-radio100">
				<label>Gender: </label>
				<?php
				if(!empty($user['gender']) && $user['gender'] == 'Female'){
					$fcheck = 'checked="checked"';
					$mcheck = '';
				}else{
					$mcheck = 'checked="checked"';
					$fcheck = '';
				}
				?>
				<div class="input-radio100">
					<label>
						<input type="radio" name="gender" value="Male" <?php echo $mcheck; ?> >
						Male
					</label>
					<label>
						<input type="radio" name="gender" value="Female" <?php echo $fcheck; ?>>
						Female
					</label>
				</div>
			</div>
						
						<br>
						
						
						<div class="wrap-input100 validate-input" data-validate = "valid name is required">
						 <label  class="required"> PETAGE</label>
			<input type="text" name="petage"  placeholder="PETAGE" class="input100" value="" >
								<span class="focus-input100"></span>
								<span class="symbol-input100">
									
								</span>
						</div>
						
						<div class="wrap-input100 validate-input" data-validate = "  valid vitamin name  is required">
								<label for="inputState"> </label>
								<input type="text" name="question"    class="input100"   placeholder=" YOUR QUESTION" value="">
								
								
								<span class="focus-input100"></span>
								<span class="symbol-input100">
									
								</span>
						</div>
						
						<div class="wrap-input100 validate-input" data-validate = " valid option is required">
								<label>UPLOAD PHOTO</label>
								<input type="file" name="upload" class="input100"  >
								<span class="focus-input100"></span>
								<span class="symbol-input100">
									
								</span>
						</div>
						
						<div class="wrap-input100 validate-input" data-validate = " select valid option is required">
								<span class="focus-input100"></span>
								 <label for="inputState">SELECT CATEGORY</label>
								  <select name="category"  id="inputState" class='input100' >
									<option >ENQUIRY</option>
									<option>DAILY VISIT</option>
									<option>DISEASE</option>
									<option>OPERATION</option>
								  </select>
						</div>
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