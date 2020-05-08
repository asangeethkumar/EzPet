<!DOCTYPE html>

<?php
include_once "menuWithLogout.php";
?><br><br>
<html lang="en">  
<head>
<title>MY ORDERS</title>
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
	<nav aria-label="breadcrumb">
  <ol class="breadcrumb">

    <li class="breadcrumb-item"><a href='<?php echo base_url()."users/account"; ?>'>Menu </a></li>
    <li class="breadcrumb-item"><a href='<?php echo base_url()."users/account"; ?>'>My Account </a></li>
    <li class="breadcrumb-item active" aria-current="page">My Orders </li>
  </ol>
</nav>
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				
				<form class="login100-form validate-form"  action="" method="post" >
						<h1 align="center" >My Orders </h1>
						<br>
						<br>


		  <div class="wrap-input100 validate-input" data-validate = "valid name is required">
                <input type="text" name="Full_Name" placeholder="Full NAME"  class="input100" pattern="[A-Za-z_]{1,32}" title="digits ,whitespaces and special characters are not allowed"  maxlength="32" value="<?php echo !empty($user['Full_Name'])?$user['Full_Name']:''; ?>" >
                <?php echo form_error('Full_Name','<p class="help-block">','</p>'); ?>
				<span class="focus-input100"></span>
								<span class="symbol-input100">
									<i class="fa fa-user" aria-hidden="true"></i>
								</span>
            </div>

			 <div class="wrap-input100 validate-input" data-validate = "Valid email is required: emailId@abc.com">
								<input type="email"   class="input100" name="email" placeholder="EMAIL" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
								<?php echo form_error('email','<p class="help-block">','</p>'); ?>
								<span class="focus-input100"></span>
								<span class="symbol-input100">
									<i class="fa fa-envelope" aria-hidden="true"></i>
								</span>
						</div>
		

			 <div class="wrap-input100 validate-input" data-validate = "valid phone is required">
                <input type="text" name="Contact_number" placeholder="CONTACT NUMBER"  class="input100" pattern="[6-9]{1}[0-9]{9}" title="Enter valid phone number" value="<?php echo !empty($user['Contact_number'])?$user['Contact_number']:''; ?>" >
                <?php echo form_error('Contact_number','<p class="help-block">','</p>'); ?>
				<span class="focus-input100"></span>
								<span class="symbol-input100">
									<i class="fa fa-phone" aria-hidden="true"></i>
								</span>
            </div>

			<div class="wrap-input100 validate-input" data-validate = "valid name is required">
                <input type="text" name="my_products" placeholder="my products"  class="input100"value="<?php echo !empty($user['my_products'])?$user['my_products']:''; ?>" >
                <?php echo form_error('my_products','<p class="help-block">','</p>'); ?>
            </div>

			<div class="wrap-input100 validate-input" data-validate = "valid number is required">
                <input type="text" name="total" placeholder="TOTAL"  class="input100"value="<?php echo !empty($user['total'])?$user['total']:''; ?>" >
                <?php echo form_error('total','<p class="help-block">','</p>'); ?>
            </div>

			<div class="wrap-input100 validate-input" data-validate = "valid address is required">
                <input type="text" name="billing_address" placeholder="BILLING ADDRESS"  class="input100"value="<?php echo !empty($user['billing_address'])?$user['billing_address']:''; ?>" >
                <?php echo form_error('billing_address','<p class="help-block">','</p>'); ?>
            </div>

			<div class="input-radio100">
                <label>	Is shipping address same as billing address?</label>
                <?php 
                if(!empty($user['Shipping_address']) && $user['Shipping_address'] == 'no'){ 
                    $fcheck = 'checked="checked"'; 
                    $mcheck = ''; 
                }else{ 
                    $mcheck = 'checked="checked"'; 
                    $fcheck = ''; 
                } 
                ?>
                <div class="input-radio100">
                    <label>
                        <input type="radio" name="Shipping_address" value="yes" <?php echo $mcheck; ?>>
						yes
                    </label>
                    <label>
                        <input type="radio" name="Shipping_address" value="no" <?php echo $fcheck; ?>>
                        no
                    </label>
                </div>
            </div>

			 <div class="container-login100-form-btn">
						<button class="login100-form-btn" onclick="change()" id="submit" name="signupSubmit"  value="SUBMIT" type="submit">
							submit
						</button>
				</div>
        </form>
      <!--  <p>Already have an account? <a href="<?php echo base_url('users/login'); ?>">Login here</a></p> -->
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