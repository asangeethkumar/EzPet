<!DOCTYPE html>

<?php
include_once "menuWithLogout.php";
?><br><br>
<html lang="en">  
<head>
<title>PET SHELTERS FORM</title>
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
						<h1 align="center" >PET SHELTERS</h1>
						<br>
						<br>



    


             <div class="wrap-input100 validate-input" data-validate = "valid name is required">
                <input type="text" name="Perspective_Pet_Parent" placeholder="Perspective Pet Parent" class="input100"value="<?php echo !empty($user['Perspective_Pet_Parent'])?$user['Perspective_Pet_Parent']:''; ?>" >
                <?php echo form_error('Perspective_Pet_Parent','<p class="help-block">','</p>'); ?>
				<span class="focus-input100"></span>
								<span class="symbol-input100">
									<i class="fa fa-user" aria-hidden="true"></i>
								</span>
            </div> 

			<div class="wrap-input100 validate-input" data-validate = "valid name is required">
                <input type="text" name="pet_name_adopted" placeholder="Name of Pet You Wish to Adopt" class="input100"value="<?php echo !empty($user['pet_name_adopted'])?$user['pet_name_adopted']:''; ?>" >
                <?php echo form_error('pet_name_adopted','<p class="help-block">','</p>'); ?>
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
                        <input type="radio" name="gender" value="Male" <?php echo $mcheck; ?>>
						Male
                    </label>
                    <label>
                        <input type="radio" name="gender" value="Female" <?php echo $fcheck; ?>>
                        Female
                    </label>
                </div>
            </div>
			
            
			
			<div class="wrap-input100 validate-input" data-validate = "valid name is required">
                <input type="text" name="Pet_Name" placeholder="Pet Name" class="input100"value="<?php echo !empty($user['Pet_Name'])?$user['Pet_Name']:''; ?>" >
                <?php echo form_error('Pet_Name','<p class="help-block">','</p>'); ?>
            </div>


			<div class="wrap-input100 validate-input" data-validate = "valid breed is required">
                <input type="text" name="Pet_breed" placeholder="Pet breed" class="input100"value="<?php echo !empty($user['Pet_breed'])?$user['Pet_breed']:''; ?>" >
                <?php echo form_error('Pet_breed','<p class="help-block">','</p>'); ?>
            </div>


			 <div class="wrap-input100 validate-input" data-validate = "valid phone is required">
                <input type="text" name="phone" placeholder="PHONE NUMBER" class="input100"value="<?php echo !empty($user['phone'])?$user['phone']:''; ?>">
                <?php echo form_error('phone','<p class="help-block">','</p>'); ?>
				<span class="focus-input100"></span>
								<span class="symbol-input100">
									<i class="fa fa-phone" aria-hidden="true"></i>
								</span>
            </div>


			<div class="wrap-input100 validate-input" data-validate = "valid address is required">
                <input type="text" name="address" placeholder="ADDRESS" class="input100"value="<?php echo !empty($user['address'])?$user['address']:''; ?>" >
                <?php echo form_error('address','<p class="help-block">','</p>'); ?>
            </div>
			
			 
			
			<div class="wrap-input100 validate-input" data-validate = "valid weight is required">
                <input type="number_format" name="weight" placeholder="weight" class="input100"value="<?php echo !empty($user['weight'])?$user['weight']:''; ?>" >
                <?php echo form_error('weight','<p class="help-block">','</p>'); ?>
            </div> 


			<div class="wrap-input100 validate-input" data-validate = "valid height is required">
                <input type="number_format" name="Height" placeholder="Height" class="input100"value="<?php echo !empty($user['Height'])?$user['Height']:''; ?>" >
                <?php echo form_error('Height','<p class="help-block">','</p>'); ?>
            </div> 


				<div class="wrap-input100 validate-input" data-validate = "valid option is required">
                <input type="text" name="rent_or_own_home" placeholder="Do you own or rent your home? " class="input100"value="<?php echo !empty($user['rent_or_own_home'])?$user['rent_or_own_home']:''; ?>" >
                <?php echo form_error('rent_or_own_home','<p class="help-block">','</p>'); ?>
            </div> 


				<div class="wrap-input100 validate-input" data-validate = "valid name is required">
                <input type="text" name="veterinarian_name" placeholder="veterinarian's name " class="input100"value="<?php echo !empty($user['veterinarian_name'])?$user['veterinarian_name']:''; ?>" >
                <?php echo form_error('veterinarian_name','<p class="help-block">','</p>'); ?>
				<span class="focus-input100"></span>
								<span class="symbol-input100">
									<i class="fa fa-user" aria-hidden="true"></i>
								</span>
            </div> 
			
				<div class="wrap-input100 validate-input" data-validate = "valid phone is required">
                <input type="text" name="veterinarian_phone_number" placeholder=" veterinarian's phone number" class="input100"value="<?php echo !empty($user['veterinarian_phone_number'])?$user['veterinarian_phone_number']:''; ?>" >
                <?php echo form_error('veterinarian_phone_number','<p class="help-block">','</p>'); ?>
				<span class="focus-input100"></span>
								<span class="symbol-input100">
									<i class="fa fa-phone" aria-hidden="true"></i>
								</span>
            </div> 


			
				<div class="wrap-input100 validate-input" data-validate = "valid time is required">
                <input type="text" name="Hours_pet_alone" placeholder=" How many hours per day would the pet be alone? " class="input100"value="<?php echo !empty($user['Hours_pet_alone'])?$user['Hours_pet_alone']:''; ?>">
                <?php echo form_error('Hours_pet_alone','<p class="help-block">','</p>'); ?>
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