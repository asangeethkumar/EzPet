<!DOCTYPE html>
<html lang="en">
<head>
	<title>REGISTER</title>
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
				<div class="login100-pic js-tilt" data-tilt>
					<img src="<?php echo base_url('assets/images/1.jpg'); ?>" alt="IMG">
			</div>
			
			

				<form class="login100-form validate-form"  action="" method="post" >
					<span class="login100-form-title">
					 <div class="signup-img-content">
                        <h2>Register now </h2>
                        <p>get your loved Pets !</p>
                    </div>
						
					</span>

													<?php 

							if(!empty($success_msg)){
								echo '<p class="status-msg success">'.$success_msg.'</p>';
							}elseif(!empty($error_msg)){
								echo '<p class="status-msg error">'.$error_msg.'</p>';
							}
						?>
						
						<div class="wrap-input100 validate-input" data-validate = "Valid name is required:">
						<input type="text" name="first_name" class="input100" placeholder="FIRST NAME"  >
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>
						
						
						
						<div class="wrap-input100 validate-input" data-validate = "Valid name is required:">
						<input type="text" name="last_name"  class="input100" placeholder="LAST NAME" value="<?php echo !empty($user['first_name'])?$user['first_name']:''; ?>" >
				<?php echo form_error('last_name','<p class="help-block">','</p>'); ?>
						
				
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>
					
					
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
						
						
						
						
						
						
						
						
		<div class="wrap-input100 validate-input" data-validate = "Valid email is required: emailId@abc.com">
						<input type="email"   class="input100" name="email"   pattern="[a-z0-9._%+-]+@[a-z]+\.[a-z]{2,}$" placeholder="EMAIL" >
				<?php echo form_error('email','<p class="help-block">','</p>'); ?>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>
		
			
			
			
			<div class="wrap-input100 validate-input" data-validate = "Password is required : As@!@">
						<input type="password"    pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"class="input100" name="password" placeholder="PASSWORD" >
						<?php echo form_error('password','<p class="help-block">','</p>'); ?>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
			
			
			
			<div class="wrap-input100 validate-input" data-validate = "Password is required : As@!@">
			<input type="password" name="conf_password" class="input100" placeholder="CONFIRMPASSWORD" >
				<?php echo form_error('conf_password','<p class="help-block">','</p>'); ?>
						
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
				<!--	<div class="wrap-input100 validate-input" data-validate = "Region is required">
                <span class="focus-input100"></span>

                    <select class='input100' name='gender'>
                    <option>Select Gender</option>
					<option>Male</option>
					<option>Female</option>
				  </select>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>-->
					
					
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: emailId@abc.com">
					<input type="text" name="phone"  pattern="[6-9]{1}[0-9]{9}" 
       title="Phone number with 7-9 and remaing 9 digit with 0-9" class="input100" placeholder="PHONENUMBER" value="<?php echo !empty($user['phone'])?$user['phone']:''; ?>">
				<?php echo form_error('phone','<p class="help-block">','</p>'); ?>
						
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-phone" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
					
						<button class="login100-form-btn" type="submit" name="signupSubmit" value="CREATE ACCOUNT">
							submit
						</button>
					</div>
					
<div class="text-center p-t-36">
						<a class="txt2" href="<?php echo base_url('users/login'); ?>"">
							I am already member!
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
					

					
				</form>
			</div>
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