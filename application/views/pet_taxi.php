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
						<h1 align="center" >PET TAXI </h1>
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


								<div class="wrap-input100 validate-input" data-validate = "Valid Emergency phone is required">
								<input type="text" name="ephone"  class="input100" placeholder="EMEREGENCY PHONENUMBER" pattern="[6-9]{1}[0-9]{9}" title="Enter valid phone number"value="<?php echo !empty($user['phone'])?$user['phone']:''; ?>">
								<?php echo form_error('phone','<p class="help-block">','</p>'); ?>
						
								<span class="focus-input100"></span>
								<span class="symbol-input100">
									<i class="fa fa-phone" aria-hidden="true"></i>
								</span>
								</div>
								<div class="wrap-input100 validate-input" data-validate = "valid pet name is required">
								<input type="text" name="pet_name"  class="input100" placeholder="PET NAME" value="<?php echo !empty($user['PET_name'])?$user['PET_name']:''; ?>" >
								<?php echo form_error('PET_name','<p class="help-block">','</p>'); ?>
								<span class="focus-input100"></span>
								<span class="symbol-input100">
									
								</span>
								</div>

								<div class="wrap-input100 validate-input" data-validate = "valid adderss is required">
			<label for="address">PICK UP ADDRESS</label>

				<textarea id="address" name="address" class="input100" rows="4" cols="50">
				</textarea>
				<span class="focus-input100"></span>
								<span class="symbol-input100">
									
								</span>
							</div>

							<div class="wrap-input100 validate-input" data-validate = "valid adderss is required">
			<label for="address">DROP ADDRESS</label>

				<textarea id="address" name="address" class="input100" rows="4" cols="50">
				</textarea>
				<span class="focus-input100"></span>
								<span class="symbol-input100">
									
								</span>
							</div>
								
								
			<!--h3>Taxi Payment</h3>
			<label for="cname"></label>
            <input type="text" id="cname" name="cardname" placeholder="Name on Card"><emsp>
            <label for="ccnum"></label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="Credit/Debit card number">
            <label for="expmonth"></label>
            <input type="text" id="expmonth" name="expmonth" placeholder="Exp Month"><ensp>
            <div class="">
              <div class="">
                <label for="expyear"></label>
                <input type="text" id="expyear" name="expyear" placeholder="Exp Year">
              </div>
              <div class="col-50">
                <label for="cvv"></label>
                <input type="text" id="cvv" name="cvv" placeholder="CVV">
              </div>
          </div-->
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