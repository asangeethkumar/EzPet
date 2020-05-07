<!DOCTYPE html>
<?php
include_once "menuWithLogout.php";
?><br><br>
<html lang="en">  
<head>
<title>PET INFO REGISTRATION</title>
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
<body>
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				
				
						<h1 align="center" >PET REGISTRATION</h1>



<?php echo $error; ?>



<?php echo form_open_multipart('users/petregistration'); ?>

    
    
    
		  <form class="login100-form validate-form"  action="" method="post" >

		   <div class="wrap-input100 validate-input" data-validate = "valid AIN is required">
		   <label for="inputState">AIN</label>
                <input type="number_format" name="AIN" class="input100" placeholder="AIN" value="<?php echo !empty($user['AIN'])?$user['AIN']:''; ?>" >
                <?php echo form_error('AIN','<p class="help-block">','</p>'); ?>
				<span class="focus-input100"></span>
								<span class="symbol-input100">
									<i class="fa fa-AIN" aria-hidden="true"></i>
								</span>
            </div> 
			
            <div class="wrap-input100 validate-input" data-validate = "valid name is required">
                <input type="text" name="Pet Name" placeholder="PET NAME" class="input100" value="<?php echo !empty($user['Pet_Name'])?$user['Pet_Name']:''; ?>" >
                <?php echo form_error('Pet_Name','<p class="help-block">','</p>'); ?>
				<span class="focus-input100"></span>
								<span class="symbol-input100">
									<i class="fa fa-Pet Name" aria-hidden="true"></i>
								</span>
            </div>
			<div class="wrap-input100 validate-input" data-validate = "valid date is required">
			 <label for="inputState">PET DOB</label>
                <input type="date" name="DOB" placeholder="DOB" class="input100" value="<?php echo !empty($user['DOB'])?$user['DOB']:''; ?>" >
                <?php echo form_error('DOB','<p class="help-block">','</p>'); ?>
				<span class="focus-input100"></span>
								<span class="symbol-input100">
									<i class="fa fa-DOB" aria-hidden="true"></i>
            </div>
			  <div class="wrap-input100 validate-input" data-validate = "valid color is required">
                <input type="text" name="color" placeholder="color" class="input100" value="<?php echo !empty($user['color'])?$user['color']:''; ?>" >
                <?php echo form_error('color','<p class="help-block">','</p>'); ?>
				<span class="focus-input100"></span>
								<span class="symbol-input100">
									<i class="fa fa-color" aria-hidden="true"></i>
            </div>
			
						  <div class="wrap-input100 validate-input" data-validate = "valid option is required">

                <input type="text" name="GENIUS" placeholder="GENIUS"  class="input100" value="<?php echo !empty($user['GENIUS'])?$user['GENIUS']:''; ?>" >
                <?php echo form_error('GENIUS','<p class="help-block">','</p>'); ?>
				<span class="focus-input100"></span>
								<span class="symbol-input100">
									<i class="fa fa-GENIUS" aria-hidden="true"></i>
            </div>
			
			 
			
			 <div class="wrap-input100 validate-input" data-validate = "valid number is required">
			
                <input type="number_format" name="weight" placeholder="weight"  class="input100" value="<?php echo !empty($user['weight'])?$user['weight']:''; ?>" >
                <?php echo form_error('weight','<p class="help-block">','</p>'); ?>
				<span class="focus-input100"></span>
								<span class="symbol-input100">
									<i class="fa fa-weight" aria-hidden="true"></i>
            </div> 
			
			 <div class="wrap-input100 validate-input" data-validate = "valid number is required">
                <input type="number_format" name="Height" placeholder="Height"  class="input100" value="<?php echo !empty($user['Height'])?$user['Height']:''; ?>">
                <?php echo form_error('Height','<p class="help-block">','</p>'); ?>
				<span class="focus-input100"></span>
								<span class="symbol-input100">
									<i class="fa fa-Height" aria-hidden="true"></i>
            </div> 

			<div class="input-radio100">
                <label>Microchiped or Tattooed </label>
                <?php 
                if(!empty($user['Microchiped_or_Tattooed']) && $user['Microchiped_or_Tattooed'] == 'no'){ 
                    $fcheck = 'checked="checked"'; 
                    $mcheck = ''; 
                }else{ 
                    $mcheck = 'checked="checked"'; 
                    $fcheck = ''; 
                } 
                ?>
                <div class="input-radio100">
                    <label>
                        <input type="radio" name="Microchiped_or_Tattooed" value="yes" <?php echo $mcheck; ?>>
						yes
                    </label>
                    <label>
                        <input type="radio" name="Microchiped_or_Tattooed" value="no" <?php echo $fcheck; ?>>
                        no
                    </label>
                </div>
            </div>


			 <div class="wrap-input100 validate-input" data-validate = "valid yes or no is required">
                <input type="text" name="Microchip_or_Tattoo" placeholder="Microchip or Tattoo"  class="input100"value="<?php echo !empty($user['Microchip_or_Tattoo'])?$user['Microchip_or_Tattoo']:''; ?>" >
                <?php echo form_error('Microchip_or_Tattoo','<p class="help-block">','</p>'); ?>
				<span class="focus-input100"></span>
								<span class="symbol-input100">
									<i class="fa fa-Height" aria-hidden="true"></i>
            </div> 



			 <div class="wrap-input100 validate-input" data-validate = "valid license is required">
                <input type="text" name="State_License_or_Registration" placeholder="State License or Registration"  class="input100"value="<?php echo !empty($user['State_License_or_Registration'])?$user['State_License_or_Registration']:''; ?>" >
                <?php echo form_error('State_License_or_Registration','<p class="help-block">','</p>'); ?>
				<span class="focus-input100"></span>
								<span class="symbol-input100">
									<i class="fa fa-Height" aria-hidden="true"></i>
            </div> 



			 <div class="wrap-input100 validate-input" data-validate = "valid registration is required">
                <input type="text" name="Club_or_Association_Registration" placeholder="Club or Association Registration" class="input100" value="<?php echo !empty($user['Club_or_Association_Registration'])?$user['Club_or_Association_Registration']:''; ?>" >
                <?php echo form_error('Club_or_Association_Registration','<p class="help-block">','</p>'); ?>
				<span class="focus-input100"></span>
								<span class="symbol-input100">
									<i class="fa fa-Height" aria-hidden="true"></i>
            </div> 




			 <div class="wrap-input100 validate-input" data-validate = "valid name is required">
                <input type="text" name="Pet_Sire_Name" placeholder="Pet Sire Name"  class="input100"value="<?php echo !empty($user['Pet_Sire_Name'])?$user['Pet_Sire_Name']:''; ?>">
                <?php echo form_error('Pet_Sire_Name','<p class="help-block">','</p>'); ?>
				<span class="focus-input100"></span>
								<span class="symbol-input100">
									<i class="fa fa-Height" aria-hidden="true"></i>
            </div> 



			 <div class="wrap-input100 validate-input" data-validate = "valid AIN is required">
                <input type="text" name="Pet_Sire_AIN" placeholder="Pet Sire AIN"  class="input100"value="<?php echo !empty($user['Pet_Sire_AIN'])?$user['Pet_Sire_AIN']:''; ?>">
                <?php echo form_error('Pet_Sire_AIN','<p class="help-block">','</p>'); ?>
				<span class="focus-input100"></span>
								<span class="symbol-input100">
									<i class="fa fa-Height" aria-hidden="true"></i>
            </div> 



			 <div class="wrap-input100 validate-input" data-validate = "valid name is required">
                <input type="text" name="Pet_Dam_Name" placeholder="Pet Dam Name"  class="input100"value="<?php echo !empty($user['Pet_Dam_Name'])?$user['Pet_Dam_Name']:''; ?>">
                <?php echo form_error('Pet_Dam_Name','<p class="help-block">','</p>'); ?>
				<span class="focus-input100"></span>
								<span class="symbol-input100">
									<i class="fa fa-Height" aria-hidden="true"></i>
            </div>
			

			 <div class="wrap-input100 validate-input" data-validate = "valid AIN is required">
                <input type="text" name="Pet_Dam_AIN" placeholder="Pet Dam AIN"  class="input100"value="<?php echo !empty($user['Pet_Dam_AIN'])?$user['Pet_Dam_AIN']:''; ?>">
                <?php echo form_error('Pet_Dam_AIN','<p class="help-block">','</p>'); ?>
				<span class="focus-input100"></span>
								<span class="symbol-input100">
									<i class="fa fa-Height" aria-hidden="true"></i>
            </div> 
			
			
			
			
			
			
			<div class="wrap-input100 validate-input" data-validate = "Valid email is required: emailId@abc.com">
			<input type="email" class="input100" name="email" placeholder="EMAIL" > <?php echo form_error('email','<p class="help-block">','</p>'); ?>
								<span class="focus-input100"></span>
								<span class="symbol-input100">
									<i class="fa fa-envelope" aria-hidden="true"></i>
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
                        <input type="radio" name="gender" value="Male" <?php echo $mcheck; ?>>
						Male
                    </label>
                    <label>
                        <input type="radio" name="gender" value="Female" <?php echo $fcheck; ?>>
                        Female
                    </label>
                </div>
            </div>


			<div class="input-check100">
                <label>Spayed or Neutered </label>
                <?php 
                if(!empty($user['Spayed_or_Neutered']) && $user['Spayed_or_Neutered'] == 'no'){ 
                    $fcheck = 'checked="checked"'; 
                    $mcheck = ''; 
                }else{ 
                    $mcheck = 'checked="checked"'; 
                    $fcheck = ''; 
                } 
                ?>
                <div class="input-check100">
                    <label>
                        <input type="radio" name="Spayed_or_Neutered" value="yes" <?php echo $mcheck; ?>>
						yes
                    </label>
                    <label>
                        <input type="radio" name="Spayed_or_Neutered" value="no" <?php echo $fcheck; ?>>
                        no
                    </label>
                </div>
            </div>


				<div class="input-check100">
                <label>Special Status </label><br>

					<input type="checkbox" id="checkItem" name="Special_Status[]" value=" Service Dog"> Service Dog<br>
					<input type="checkbox" id="checkItem" name="Special_Status[]" value="Emotional Support Animal">Emotional Support Animal<br>
					<input type="checkbox" id="checkItem" name="Special_Status[]" value="K-9">K-9<br>
					<input type="checkbox" id="checkItem" name="Special_Status[]" value="other">Other<br>
					

					 </label>
                </div>            

			


            <div class="wrap-input100 validate-input" data-validate = "Valid phone is required">
                <input type="text" name="phone" placeholder="PHONENUMBER" class="input100" value="<?php echo !empty($user['phone'])?$user['phone']:''; ?>">
                <?php echo form_error('phone','<p class="help-block">','</p>'); ?>
				<span class="focus-input100"></span>
								<span class="symbol-input100">
									<i class="fa fa-phone" aria-hidden="true"></i>
								</span>
            </div>

			<div class="wrap-input100 validate-input" data-validate ="Pet Image is required"> 
			    <input class="input100" type="file" name="image" />

			</div>
			
				<div class="container-login100-form-btn">
						<button class="login100-form-btn" onclick="change()" id="submit" name="signupSubmit"  value="upload" type="submit">
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