

<!DOCTYPE html>
<?php
include_once "menuWithLogout.php";
?>


<html lang="en">  
<head>
<title>BREEDERS</title>

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
<br><br>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">

    <li class="breadcrumb-item"><a href='<?php echo base_url()."users/account"; ?>'>Menu </a></li>
    <li class="breadcrumb-item"><a href='<?php echo base_url()."users/account"; ?>'>Get A pet </a></li>
    <li class="breadcrumb-item active" aria-current="page">Breeders</li>
  </ol>
</nav>
<br>
<br>
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				
				<form class="login100-form validate-form"  action="" method="post" >
						<h1 align="center">BREEDERS</h1>
						<br>
						<br>






    

		   <div class="wrap-input100 validate-input" data-validate = "valid name is required">
                <input type="text" name="Full_Name" placeholder="Full NAME" class="input100"value="<?php echo !empty($user['Full_Name'])?$user['Full_Name']:''; ?>" >
                <?php echo form_error('Full_Name','<p class="help-block">','</p>'); ?>
				<span class="focus-input100"></span>
								<span class="symbol-input100">
									<i class="fa fa-user" aria-hidden="true"></i>
								</span>
            </div>

			<div class="wrap-input100 validate-input" data-validate = "valid address is required">
                <input type="text" name="address" placeholder="ADDRESS"class="input100" value="<?php echo !empty($user['address'])?$user['address']:''; ?>" >
                <?php echo form_error('address','<p class="help-block">','</p>'); ?>
            </div>

			<div class="wrap-input100 validate-input" data-validate = "valid phone is required">
                <input type="text" name="breeder_phone" placeholder="BREEDER PHONE NUMBER" class="input100"value="<?php echo !empty($user['breeder_phone'])?$user['breeder_phone']:''; ?>">
                <?php echo form_error('breeder_phone','<p class="help-block">','</p>'); ?>
				<span class="focus-input100"></span>
								<span class="symbol-input100">
									<i class="fa fa-phone" aria-hidden="true"></i>
								</span>
            </div>

			<div class="wrap-input100 validate-input" data-validate = "valid address is required">
                <input type="text" name="address_female" placeholder="FEMALE BREEDING ADDRESS" class="input100"value="<?php echo !empty($user['address_female'])?$user['address_female']:''; ?>" >
                <?php echo form_error('address_female','<p class="help-block">','</p>'); ?>
            </div>
				
				<div class="wrap-input100 validate-input" data-validate = "valid address is required">
                <input type="text" name="address_stud" placeholder="STUD DOG  ADDRESS"class="input100" value="<?php echo !empty($user['address_stud'])?$user['address_stud']:''; ?>" >
                <?php echo form_error('address_stud','<p class="help-block">','</p>'); ?>
            </div>

			<div class="wrap-input100 validate-input" data-validate = "valid name is required">
                <input type="text" name="Veterinary_Doctor_Name" placeholder="Veterinary Doctor NAME"class="input100" value="<?php echo !empty($user['Veterinary_Doctor_Name'])?$user['Veterinary_Doctor_Name']:''; ?>" >
                <?php echo form_error('Veterinary_Doctor_Name','<p class="help-block">','</p>'); ?>
				<span class="focus-input100"></span>
								<span class="symbol-input100">
									<i class="fa fa-user" aria-hidden="true"></i>
								</span>
            </div>

			<div class="wrap-input100 validate-input" data-validate = "valid address is required">
                <input type="text" name="Veterinary_Doctor_ADDRESS" placeholder="Veterinary Doctor ADDRESS" class="input100"value="<?php echo !empty($user['Veterinary_Doctor_ADDRESS'])?$user['Veterinary_Doctor_ADDRESS']:''; ?>" >
                <?php echo form_error('Veterinary_Doctor_ADDRESS','<p class="help-block">','</p>'); ?>
            </div>

			<div class="wrap-input100 validate-input" data-validate = "valid phone is required">
                <input type="text" name="Veterinary_Doctor_phone_number" placeholder="Veterinary Doctor phone number" class="input100"value="<?php echo !empty($user['Veterinary_Doctor_phone_number'])?$user['Veterinary_Doctor_phone_number']:''; ?>" >
                <?php echo form_error('Veterinary_Doctor_phone_number','<p class="help-block">','</p>'); ?>
				<span class="focus-input100"></span>
								<span class="symbol-input100">
									<i class="fa fa-phone" aria-hidden="true"></i>
								</span>
            </div>
			<div class="wrap-input100 validate-input" data-validate = "valid name is required">
                <input type="text" name="Microchip" placeholder="Microchip" class="input100"value="<?php echo !empty($user['Microchip'])?$user['Microchip']:''; ?>" >
                <?php echo form_error('Microchip','<p class="help-block">','</p>'); ?>
            </div> 

			 <div class="wrap-input100 validate-input" data-validate = "valid breed is required">
                <input type="text" name="Pet_breed" placeholder="Pet breed" class="input100"value="<?php echo !empty($user['Pet_breed'])?$user['Pet_breed']:''; ?>" >
                <?php echo form_error('Pet_breed','<p class="help-block">','</p>'); ?>
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
			
			<div class="wrap-input100 validate-input" data-validate = "valid date is required">
			<label>Date of birth of Pet</label><br>
                <input type="date" name="DOB" placeholder="DOB" class="input100"value="<?php echo !empty($user['DOB'])?$user['DOB']:''; ?>" >
                <?php echo form_error('DOB','<p class="help-block">','</p>'); ?>
            </div>

			<div class="wrap-input100 validate-input" data-validate = "valid color is required">
                <input type="text" name="color" placeholder="color" class="input100"value="<?php echo !empty($user['color'])?$user['color']:''; ?>" >
                <?php echo form_error('color','<p class="help-block">','</p>'); ?>
            </div>

			<div class="wrap-input100 validate-input" data-validate = "valid mark is required">
                <input type="text" name="Body_Markings" placeholder="Body Markings"class="input100" value="<?php echo !empty($user['Body_Markings'])?$user['Body_Markings']:''; ?>" >
                <?php echo form_error('Body_Markings','<p class="help-block">','</p>'); ?>
            </div>

			<div class="wrap-input100 validate-input" data-validate = "valid date is required">
			<label>Date of last rabies vaccination</label><br>
                <input type="date" name="DOB_rabies" placeholder="Date of last rabies vaccination" class="input100"value="<?php echo !empty($user['DOB_rabies'])?$user['DOB_rabies']:''; ?>" >
                <?php echo form_error('DOB_rabies','<p class="help-block">','</p>'); ?>
            </div>

			<div class="wrap-input100 validate-input" data-validate = "valid date is required">
			<label>Date of last 7 in 1 vaccination</label><br>
                <input type="date" name="DOB_last" placeholder="Date of last 7 in 1 vaccination" class="input100"value="<?php echo !empty($user['DOB_last'])?$user['DOB_last']:''; ?>" >
                <?php echo form_error('DOB_last','<p class="help-block">','</p>'); ?>
            </div>

			<div class="wrap-input100 validate-input" data-validate = "valid dateis required">
			<label>Date of last De-worming</label><br>
                <input type="date" name="DOB_deworming" placeholder="Date of last De-worming" class="input100"value="<?php echo !empty($user['DOB_deworming'])?$user['DOB_deworming']:''; ?>" >
                <?php echo form_error('DOB_deworming','<p class="help-block">','</p>'); ?>
    







            
			
			
			
			 
			
			
         


			

				
			


           
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