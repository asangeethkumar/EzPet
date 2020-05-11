<!DOCTYPE html>
<?php
include_once "menuWithLogout.php";
?>
<html lang="en">  
<head>
<title>Initial Health Check & Vaccination</title>
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
    <li class="breadcrumb-item active" aria-current="page">Initial Health Check & Vaccination</li>
  </ol>
</nav>
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				
				<form class="login100-form validate-form"  action="" method="post" >
						<h1 align="center" >Initial Health Check & Vaccination</h1>
						<br>
						<br>



		  <div class="wrap-input100 validate-input" data-validate = "valid name is required">
                <input type="text" name="petname" placeholder="petname" class='input100'value="<?php echo !empty($user['petname'])?$user['petname']:''; ?>" >
                <?php echo form_error('petname','<p class="help-block">','</p>'); ?>
            </div>

			<div class="wrap-input100 validate-input" data-validate = "valid DOB is required">
			<label>Date of vaccination</label><br>
                <input type="date" name="DOB" placeholder="DOB" class='input100'value="<?php echo !empty($user['DOB'])?$user['DOB']:''; ?>" >
                <?php echo form_error('DOB','<p class="help-block">','</p>'); ?>
            </div>

			<div class="wrap-input100 validate-input" data-validate = "valid date is required">
			<label>Date of last 7 in 1 vaccination</label><br>
                <input type="date" name="DOB_vacination" placeholder="Date of last 7 in 1 vaccination" class='input100'value="<?php echo !empty($user['DOB_vacination'])?$user['DOB_vacination']:''; ?>" >
                <?php echo form_error('DOB_vacination','<p class="help-block">','</p>'); ?>
            </div>
			<div class="wrap-input100 validate-input" data-validate  = " select valid option is required">
								<span class="focus-input100"></span>
								<label for="inputState">list of vaccination</label>
								<select name="pet" class='input100' id="inputState"  required >
									<option>SELECT</option>
									<option >rabbis</option>
									<option>Parvovirus</option>
									<option>Distemper</option>
									<option>Canine Parainfluenza Virus </option>
									<option>Canine Influenza Virus (CIV)</option>
								</select>
						</div>

			


	<div class="wrap-input100 validate-input" data-validate = "valid name is required">
                <input type="text" name="Monitoring" placeholder="Monitoring" class='input100'value="<?php echo !empty($user['Monitoring'])?$user['Monitoring']:''; ?>" >
                <?php echo form_error('Monitoring','<p class="help-block">','</p>'); ?>
            </div>


	<div class="wrap-input100 validate-input" data-validate = "valid date is required">
		<label>Slot booking for vaccination</label><br>
                <input type="date" name="DOB_bookvac" placeholder="Date of last 7 in 1 vaccination"class='input100' value="<?php echo !empty($user['DOB_bookvac'])?$user['DOB_bookvac']:''; ?>" >
                <?php echo form_error('DOB_bookvac','<p class="help-block">','</p>'); ?>
            </div>


			
			<div class="wrap-input100 validate-input" data-validate = "valid name is required">
                <input type="text" name="preferred_Doctor" placeholder="preferred Doctor" class='input100'value="<?php echo !empty($user['preferred_Doctor'])?$user['preferred_Doctor']:''; ?>" >
                <?php echo form_error('preferred_Doctor','<p class="help-block">','</p>'); ?>
            </div>

			<div class="wrap-input100 validate-input" data-validate = "valid hospital is required">
                <input type="text" name="hospital_preferred" placeholder="hospital preferred" class='input100'value="<?php echo !empty($user['hospital_preferred'])?$user['hospital_preferred']:''; ?>" >
                <?php echo form_error('hospital_preferred','<p class="help-block">','</p>'); ?>
            </div>



			<div class="input-radio100">
                <label>availability </label>
                <?php 
                if(!empty($user['availability']) && $user['availability'] == 'no'){ 
                    $fcheck = 'checked="checked"'; 
                    $mcheck = ''; 
                }else{ 
                    $mcheck = 'checked="checked"'; 
                    $fcheck = ''; 
                } 
                ?>
                <div class="input-radio100">
                    <label>
                        <input type="radio" name="availability" value="yes" <?php echo $mcheck; ?>>
						yes
                    </label>
                    <label>
                        <input type="radio" name="availability" value="no" <?php echo $fcheck; ?>>
                        no
                    </label>
                </div>
            

			  <div class="container-login100-form-btn">
						<button class="login100-form-btn" onclick="change()" id="submit" name="signupSubmit"  value="SUBMIT" type="submit">
							submit
						</button>
				</div>
        </form>
      <!--  <p>Already have an account? <a href="<?php echo base_url('users/login'); ?>">Login here</a></p> -->
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
