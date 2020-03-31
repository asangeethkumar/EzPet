<!DOCTYPE html>
<?php
include_once "menuWithLogout.php";
?><br><br>
<html lang="en">  
<head>
<title>Pet veterinary chart </title>

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
						<h1 align="center" >Pet veterinary chart </h1>
						<br>
						<br>

	
   <div class="wrap-input100 validate-input" data-validate = "valid name is required">

		  <label>Pet Details </label>
			
			<div class="wrap-input100 validate-input" data-validate = "valid name is required">
                <input type="text" name=" Pet_Name " placeholder="Pet Name" class='input100'value="<?php echo !empty($user['Pet_Name'])?$user['Pet_Name']:''; ?>" >
                <?php echo form_error('Pet_Name','<p class="help-block">','</p>'); ?>
				<span class="focus-input100"></span>
								<span class="symbol-input100">
									<i class="fa fa-user" aria-hidden="true"></i>
								</span>
            </div>
			<div class="wrap-input100 validate-input" data-validate = "valid breed is required">
                <input type="text" name="Breed " placeholder="Breed" class='input100'value="<?php echo !empty($user['Breed'])?$user['Breed']:''; ?>" >
                <?php echo form_error('Breed','<p class="help-block">','</p>'); ?>
				<span class="focus-input100"></span>
								<span class="symbol-input100">
									<i class="fa fa-animal" aria-hidden="true"></i>
								</span>
            </div>
			<div class="wrap-input100 validate-input" data-validate = "valid name is required">
                <input type="text" name="Colour" placeholder="Colour" class='input100'value="<?php echo !empty($user['Colour'])?$user['Colour']:''; ?>" >
                <?php echo form_error('Colour','<p class="help-block">','</p>'); ?>
				<span class="focus-input100"></span>
								<span class="symbol-input100">
									<i class="fa fa-color" aria-hidden="true"></i>
								</span>
            </div>
			<div class="wrap-input100 validate-input" data-validate = "valid mark is required">
                <input type="text" name="ID_Mark_ifany" placeholder="ID Mark if any" class='input100' value="<?php echo !empty($user['ID_Mark_ifany'])?$user['ID_Mark_ifany']:''; ?>">
                <?php echo form_error('ID_Mark_ifany','<p class="help-block">','</p>'); ?>
				<span class="focus-input100"></span>
								<span class="symbol-input100">
									<i class="fa " aria-hidden="true"></i>
								</span>
            </div>
			<div class="wrap-input100 validate-input" data-validate = "valid age is required">
                <input type="number_format" name="Age" placeholder="Age" class='input100'value="<?php echo !empty($user['Age'])?$user['Age']:''; ?>" >
                <?php echo form_error('Age','<p class="help-block">','</p>'); ?>
				<span class="focus-input100"></span>
								<span class="symbol-input100">
									<i class="fa fa-age" aria-hidden="true"></i>
								</span>
            </div>
			

			<div class="wrap-input100 validate-input" data-validate = "valid dates is required">
                <input type="number_format" name="Recommended_Immunization_Schedule " placeholder="Recommended Immunization Schedule" class='input100' value="<?php echo !empty($user['Recommended_Immunization_Schedule'])?$user['Recommended_Immunization_Schedule']:''; ?>" >
                <?php echo form_error('Recommended_Immunization_Schedule','<p class="help-block">','</p>'); ?>
				<span class="focus-input100"></span>
								<span class="symbol-input100">
									<i class="fa" aria-hidden="true"></i>
								</span>
            </div>
			



			<div class="wrap-input100 validate-input" data-validate = "valid dates is required">
				<input type="text" name="Immunization_Dates"   placeholder="Immunization Dates" class='input100'value="<?php echo !empty($user['Immunization_Dates'])?$user['Immunization_Dates']:''; ?>" >
                <?php echo form_error('Immunization_Dates','<p class="help-block">','</p>'); ?> 
			</div>
			<tr>
							<LABEL>Immunization Dates</LABEL>
							<BR>
							<BR>

							<table>
							 
							<tr>
							<td align="center"><b>Vaccine</b></td>
							<td align="center"><b>Immunization Date 1 </b></td>
							<td align="center"><b>Immunization Date 2</b></td>
							<td align="center"><b>Immunization Date 3</b></td>
							<td align="center"><b> Veterinarian</b></td>
							</tr>
							 
							<tr>
							<td>Rabies</td>
							<td><input type="text" name="" maxlength="30" /></td>
							<td><input type="text" name="" maxlength="30" /></td>
							<td><input type="text" name="" maxlength="30" /></td>
							<td><input type="text" name="" maxlength="30" /></td>
							</tr>
							 
							<tr>
							<td>Parainuenza</td>
							<td><input type="text" name="" maxlength="30" /></td>
							<td><input type="text" name="" maxlength="30" /></td>
							<td><input type="text" name="" maxlength="30" /></td>
							<td><input type="text" name="" maxlength="30" /></td>
							</tr>
							 
							<tr>
							<td>Leptospirosis</td>
							<td><input type="text" name="" maxlength="30" /></td>
							<td><input type="text" name="" maxlength="30" /></td>
							<td><input type="text" name="" maxlength="30" /></td>
							<td><input type="text" name="" maxlength="30" /></td>
							</tr>
							 
							<tr>
							<td>Parainuenza</td>
							<td><input type="text" name="" maxlength="30" /></td>
							<td><input type="text" name="" maxlength="30" /></td>
							<td><input type="text" name="" maxlength="30" /></td>
							<td><input type="text" name="" maxlength="30" /></td>
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