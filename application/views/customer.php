
<html lang="en">  
<head>
<title>CUSTODIAN FORM</title>

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
<!--	<nav aria-label="breadcrumb">
  <ol class="breadcrumb">

    <li class="breadcrumb-item"><a href='<?php echo base_url()."users/account"; ?>'>Menu </a></li>
    <li class="breadcrumb-item"><a href='<?php echo base_url()."users/account"; ?>'>My Account </a></li>
    <li class="breadcrumb-item active" aria-current="page">CUSTODIAN FORM </li>
  </ol>
</nav>-->
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				
				<form class="login100-form validate-form"  action="" method="post" >
						<h1 align="center" >CUSTODIAN FORM </h1>
						<br>
						<br
	<form class="login100-form validate-form"  action="" method="post" >
            <div class="wrap-input100 validate-input" data-validate = "valid name is required">
                <input type="text" name="first_name" placeholder="FIRST NAME" class="input100" pattern="[A-Za-z_]{1,32}" title="digits ,whitespaces and special characters are not allowed"  maxlength="32" value="<?php echo !empty($user['first_name'])?$user['first_name']:''; ?>" >
                <?php echo form_error('first_name','<p class="help-block">','</p>'); ?>
				<span class="focus-input100"></span>
								<span class="symbol-input100">
									<i class="fa fa-user" aria-hidden="true"></i>
								</span>
            </div>
			<div class="wrap-input100 validate-input" data-validate = "valid name is required">
                <input type="text" name="middle_name" placeholder="MIDDLE NAME"class="input100" pattern="[A-Za-z_]{1,32}" title="digits ,whitespaces and special characters are not allowed"  maxlength="32"  value="<?php echo !empty($user['middle_name'])?$user['middle_name']:''; ?>" >
                <?php echo form_error('middle_name','<p class="help-block">','</p>'); ?>
				<span class="focus-input100"></span>
								<span class="symbol-input100">
									<i class="fa fa-user" aria-hidden="true"></i>
								</span>
            </div>
            <div class="wrap-input100 validate-input" data-validate = "valid name is required">
                <input type="text" name="last_name" placeholder="LAST NAME" class="input100" pattern="[A-Za-z_]{1,32}" title="digits ,whitespaces and special characters are not allowed"  maxlength="32" value="<?php echo !empty($user['last_name'])?$user['last_name']:''; ?>" >
                <?php echo form_error('last_name','<p class="help-block">','</p>'); ?>
				<span class="focus-input100"></span>
								<span class="symbol-input100">
									<i class="fa fa-user" aria-hidden="true"></i>
								</span>
            </div>
			<div class="wrap-input100 validate-input" data-validate = "valid date is required">
			<label>DOB </label>
                <input type="date" name="DOB" placeholder="DOB" class="input100"value="<?php echo !empty($user['DOB'])?$user['DOB']:''; ?>" >
                <?php echo form_error('DOB','<p class="help-block">','</p>'); ?>
				<span class="focus-input100"></span>
								<span class="symbol-input100">
									<!--<i class="fa fa-DOB" aria-hidden="true"></i>-->
								</span>
            </div>
			
			<div class="wrap-input100 validate-input" data-validate = "valid address is required">
                <input type="text" name="address" placeholder="ADDRESS" class="input100"value="<?php echo !empty($user['address'])?$user['address']:''; ?>" >
                <?php echo form_error('address','<p class="help-block">','</p>'); ?>
				<span class="focus-input100"></span>
								<span class="symbol-input100">
									<!--<i class="fa fa-address" aria-hidden="true"></i>-->
								</span>
            </div>
			<div class="wrap-input100 validate-input" data-validate = "valid billing address is required">
                <input type="text" name="billing_address" placeholder="BILLING ADDRESS" class="input100"value="<?php echo !empty($user['billing_address'])?$user['billing_address']:''; ?>" >
                <?php echo form_error('billing_address','<p class="help-block">','</p>'); ?>
				<span class="focus-input100"></span>
								<span class="symbol-input100">
									<!--<i class="fa fa-address" aria-hidden="true"></i>-->
								</span>
            </div>
			 <div class="wrap-input100 validate-input" data-validate = "Valid email is required: emailId@abc.com">
                <input type="email" name="email" placeholder="EMAIL" class="input100" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" value="<?php echo !empty($user['email'])?$user['email']:''; ?>">
                <?php echo form_error('email','<p class="help-block">','</p>'); ?>
				<span class="focus-input100"></span>
								<span class="symbol-input100">
									<i class="fa fa-envelope" aria-hidden="true"></i>
								</span>
            </div>
			<div class="wrap-input100 validate-input" data-validate = "Valid phone is required">
								<input type="text" name="phone"  class="input100" placeholder="PHONENUMBER" pattern="[6-9]{1}[0-9]{9}" title="Enter valid phone number" value="<?php echo !empty($user['phone'])?$user['phone']:''; ?>">
								<?php echo form_error('phone','<p class="help-block">','</p>'); ?>
						
								<span class="focus-input100"></span>
								<span class="symbol-input100">
									<i class="fa fa-phone" aria-hidden="true"></i>
								</span>
						</div>
						
							<div class="wrap-input100 validate-input" data-validate = " select valid option is required">
						<span class="focus-input100"></span>
						<label for="inputState" >PAYMENT TYPE</label>
						<select  name="payment" id="inputState" class='input100'  >
									<option >SELECT </option>
									<option >CREDIT/DEBIT CARD </option>
									<option>NET BANKING</option>
									<option>CASH ON DELIVERY</option>
									<option>GOOGLE PAY</option>
									<option>PHONE PAY</option>
									<option>PAY PAL</option>
					  </select>
				</div>
            
						
			<div class="wrap-input100 validate-input" data-validate = "valid billing address is required">
                <input type="text" name="billing_address" placeholder="MY SUBSCRIPTIONS" class="input100"value="<?php echo !empty($user['billing_address'])?$user['billing_address']:''; ?>" >
                <?php echo form_error('billing_address','<p class="help-block">','</p>'); ?>
				<span class="focus-input100"></span>
								<span class="symbol-input100">
									<!--<i class="fa fa-address" aria-hidden="true"></i>-->
								</span>
            </div>
			
			<div class="wrap-input100 validate-input" data-validate = "valid billing address is required">
                <input type="text" name="billing_address" placeholder="MY PETS" class="input100"value="<?php echo !empty($user['billing_address'])?$user['billing_address']:''; ?>" >
                <?php echo form_error('billing_address','<p class="help-block">','</p>'); ?>
				<span class="focus-input100"></span>
								<span class="symbol-input100">
									<!--<i class="fa fa-address" aria-hidden="true"></i>-->
								</span>
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