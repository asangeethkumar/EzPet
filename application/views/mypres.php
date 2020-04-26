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
<title>my pescription</title>
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
						<h1 align="center" >MY PESCRIPTION</h1>
						<br>
						<br>
							<br>
						<?php if($this->session->flashdata('msg')): ?>
						<p><?php echo $this->session->flashdata('msg'); ?></p>
						<?php else : ?>
						<p><?php echo $this->session->flashdata('error'); ?></p>
						<?php endif; ?>
						<br>
						
						<div class="wrap-input100 validate-input" data-validate = "valid name is required">
								<input type="text" name="first_name"  title="white spaces and special characters are not allowed" class="input100" placeholder="CARE TAKER NAME" value="<?php echo !empty($user['first_name'])?$user['first_name']:''; ?>" >
								<?php echo form_error('first_name','<p class="help-block">','</p>'); ?>
								<span class="focus-input100"></span>
								<span class="symbol-input100">
									<i class="fa fa-user" aria-hidden="true"></i>
								</span>
						</div>
						
				
				
				
						<div class="wrap-input100 validate-input" data-validate = "Valid email is required: emailId@abc.com">
								<input type="email"   class="input100" name="email" placeholder="EMAIL"  value="<?php echo !empty($user['email'])?$user['email']:''; ?>" placeholder="EMAIL">
								<?php echo form_error('email','<p class="help-block">','</p>'); ?>
								<span class="focus-input100"></span>
								<span class="symbol-input100">
									<i class="fa fa-envelope" aria-hidden="true"></i>
								</span>
						</div>
		
		
		
						<div class="wrap-input100 validate-input" data-validate = "Valid phone is required">
								<input type="text" name="phone"   
       title="Phone number with 6-9 and remaing 9 digit with 0-9" class="input100" placeholder="PHONENUMBER" value="<?php echo !empty($user['phone'])?$user['phone']:''; ?>">
								<?php echo form_error('phone','<p class="help-block">','</p>'); ?>
						
								<span class="focus-input100"></span>
								<span class="symbol-input100">
									<i class="fa fa-phone" aria-hidden="true"></i>
								</span>
						</div>
						
						<div class="wrap-input100 validate-input" data-validate  = " select valid option is required">
								<span class="focus-input100"></span>
								<label for="inputState">PET SPECIES</label>
								<select name="pet" class='input100' id="inputState" >
									<option >SELECT</option>
									<option >DOG</option>
									<option>CAT</option>
									<option>FISH</option>
									<option>BIRDS</option>
								</select>
						</div>
						
						<div class="wrap-input100 validate-input" data-validate = "  valid petname  is required">
								<label for="inputState"> </label>
								<input type="text" name="petname"   class="input100"  title="white spaces and special characters are not allowed"   placeholder="PET NAME" value="<?php echo !empty($user['petname'])?$user['petname']:''; ?>" >	
								<?php echo form_error('petname','<p class="help-block">','</p>'); ?>
								<span class="focus-input100"></span>
								<br>
								<span class="symbol-input100">
										<i class="fa fa-paw" aria-hidden="true"></i>
								</span>
						</div>
						
						<br>
						<div class="input-radio100">
							<label>PET AGE: </label>
							<?php
							if(!empty($user['age']) && $user['age'] == 'Kitten'){
								$fcheck = 'checked="checked"';
								$mcheck = '';
							}else{
								$mcheck = 'checked="checked"';
								$fcheck = '';
							}
							?>
							<div class="input-radio100">
								<label>
									<input type="radio" name="age" value="adult" <?php echo $mcheck; ?> >
									Adult
								</label>
								<label>
									<input type="radio" name="age" value="kitten" <?php echo $fcheck; ?> >
									Kitten 
								</label>
							</div>
						</div>
							
							
							
						<div class="wrap-input100 validate-input" data-validate = "  valid problem   is required">
								<label for="inputState"> </label>
								<input type="text" name="problem"   class="input100"  placeholder="ENTER PET PROBLEM?" value="">	
								<span class="focus-input100"></span>
								<span class="symbol-input100">
									
								</span>
						</div>
						
						
						<tr>
							<LABEL>PESCRIPTION</LABEL>
							<BR>
							<BR>

							<table>
							 
							<tr>
							<td align="center" ><b>Sl.No.</b></td>
							<td align="center"><b>ENTER_MEDICINENAME</b></td>
							<td align="center"><b>(BEFORE/AFTER)BREAKFAST</b></td>
							<td align="center"><b>(BEFORE/AFTER)LUNCH</b></td>
							<td align="center"><b>(BEFORE/AFTER)DINNER</b></td>
							</tr>
							 
							<tr>
							<td>1</td>
							<td><input type="text" class="input100"  name="a" maxlength="30"  /></td>
							<td><input type="text" class="input100"  name="b" maxlength="30"  /></td>
							<td><input type="text"class="input100"  name="c" maxlength="30"   /></td>
							<td><input type="text" class="input100" name="d" maxlength="30"  /></td>
							</tr>
							 
							<tr>
							<td>2</td>
							<td><input type="text" class="input100" name="e" maxlength="30" /></td>
							<td><input type="text"class="input100"  name="f" maxlength="30" /></td>
							<td><input type="text" class="input100" name="g" maxlength="30" /></td>
							<td><input type="text"class="input100"  name="h" maxlength="30" /></td>
							</tr>
							 
							<tr>
							<td>3</td>
							<td><input type="text" class="input100" name="i" maxlength="30" /></td>
							<td><input type="text" class="input100" name="j" maxlength="30" /></td>
							<td><input type="text"class="input100"  name="k" maxlength="30" /></td>
							<td><input type="text" class="input100" name="l" maxlength="30" /></td>
							</tr>
							 
							
							 

							</table>
							 
							</td>
							</tr>


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