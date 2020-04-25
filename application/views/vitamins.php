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
<title>vitamins</title>
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
						<h1 align="center" >VITAMINS AND SUPPLIMENT</h1>
						<br>
						<br>
						<?php if($this->session->flashdata('msg')): ?>
						<p><?php echo $this->session->flashdata('msg'); ?></p>
						<?php else : ?>
						<p><?php echo $this->session->flashdata('error'); ?></p>
						<?php endif; ?>
						<br>
						
						
						<div class="wrap-input100 validate-input" data-validate = "valid name is required">
								<input type="text" name="first_name"  class="input100" placeholder="ENTER YOUR NAME"  title="digits  and special characters are not allowed"  value="<?php echo !empty($user['first_name'])?$user['first_name']:''; ?>" >
								<?php echo form_error('first_name','<p class="help-block">','</p>'); ?>
								<span class="focus-input100"></span>
								<span class="symbol-input100">
									<i class="fa fa-user" aria-hidden="true"></i>
								</span>
						</div>
						
				
				
				
						<div class="wrap-input100 validate-input" data-validate = "Valid email is required: emailId@abc.com">
								<input type="email"   class="input100" name="email"   value="<?php echo !empty($user['email'])?$user['email']:''; ?>"placeholder="EMAIL" >
								<?php echo form_error('email','<p class="help-block">','</p>'); ?>
								<span class="focus-input100"></span>
								<span class="symbol-input100">
									<i class="fa fa-envelope" aria-hidden="true"></i>
								</span>
						</div>
		
		
		
						<div class="wrap-input100 validate-input" data-validate = "Valid phone is required">
								<input type="text" name="phone"  class="input100" 
								title="Phone number with 6-9 and remaing 9 digit with 0-9" placeholder="PHONENUMBER" value="<?php echo !empty($user['phone'])?$user['phone']:''; ?>">
								<?php echo form_error('phone','<p class="help-block">','</p>'); ?>
						
								<span class="focus-input100"></span>
								<span class="symbol-input100">
									<i class="fa fa-phone" aria-hidden="true"></i>
								</span>
						</div>
						
						
						<div class="wrap-input100 validate-input" data-validate = "  valid vitamin name  is required">
								<label for="inputState"> </label>
								​<textarea id="txtArea"   name="vitamin"    class="input100"  placeholder="ENTER VITAMIN NAME "  value="" rows="10" cols="70"></textarea>
								<!--<input type="text" name="vitamin"    class="input100"  placeholder="ENTER VITAMIN NAME " value="">-->
								
								<span class="focus-input100"></span>
								<span class="symbol-input100">
									
								</span>
						</div>
						
						<div class="wrap-input100 validate-input" data-validate = " valid upload file is required">
								<label>UPLOAD PRESCRIPTION</label>
								<input type="file" name="upload" accept="image/*" class="input100"  >
								<span class="focus-input100"></span>
								<span class="symbol-input100">
									
								</span>
						</div>
						
						
						<div class="wrap-input100 validate-input" data-validate  = " select valid option is required">
								<span class="focus-input100"></span>
								<label for="inputState">QUNATITY SHEETS </label>
								<select  name="quantity" id="inputState" class='input100' >
									<option> SELECT </option>
									<option >1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
								 </select>
						</div>
						
						<div class="wrap-input100 validate-input" data-validate  = " valid option is required">
								<span class="focus-input100"></span>
								<label for="inputState">QUANTITY ml</label>
								<select name="quant" id="inputState" class='input100'  >
									<option> SELECT </option>
									<option >15 ml</option>
									<option>20 ml</option>
									<option>30 ml</option>
									<option>40 ml</option>
								 </select>
						</div>

						
						
						
						
						
					
						
						
						
				
						<div class="wrap-input100 validate-input" data-validate = " select valid option is required">
							<span class="focus-input100"></span>
							<label for="inputState"> DELIVERY</label>
							<select name="delivery"  id="inputState" class='input100'>
									<option>SELECT </option>
									<option >Delivery for one time </option>
									<option>Delivery every month</option>
									<option>Delivery for every two months</option>
									<option>Delivery for every two months</option>
									<option>Delivery for every three  months</option>
									<option>Delivery for every four  months</option>
						  </select>
						</div>
				
				<div class="wrap-input100 validate-input" data-validate = "  valid address is required">
								<label for="inputState">ADDRESS </label>
								​<textarea id="txtArea" name="address" class="input100" rows="10" cols="70"></textarea>
								<!--<input type="text" name="address"  class="input100" >-->
								<span class="focus-input100"></span>
								<br>
								<span class="symbol-input100">
									<i class="fa fa-address-card-o" aria-hidden="true"></i>
								</span>
						</div>
				
				
				<div class="wrap-input100 validate-input" data-validate = " select valid option is required">
						<span class="focus-input100"></span>
						<label for="inputState" >PAYMENT TYPE</label>
						<select  name="payment" id="inputState" class='input100'>
									<option>SELECT </option>
									<option >CREDIT/DEBIT CARD </option>
									<option>NET BANKING</option>
									<option>CASH ON DELIVERY</option>
									<option>GOOGLE PAY</option>
									<option>PHONE PAY</option>
									<option>PAY PAL</option>
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