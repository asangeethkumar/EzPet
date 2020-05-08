<!DOCTYPE html>
<?php
include_once "menuWithLogout.php";
?><br><br>
<html lang="en">  
<head>
<title>Pet License </title>
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
    <li class="breadcrumb-item active" aria-current="page">Pet License </li>
  </ol>
</nav>
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				
				<form class="login100-form validate-form"  action="" method="post" >
						<h1 align="center" >Pet License </h1>
						<br>
						<br>





	
    


		   <div class="wrap-input100 validate-input" data-validate = "valid number is required">
                <input type="number_format" name="License_No" placeholder="	License No" class="input100"value="<?php echo !empty($user['License_No'])?$user['License_No']:''; ?>" >
                <?php echo form_error('License_No','<p class="help-block">','</p>'); ?>
				<span class="focus-input100"></span>
								<span class="symbol-input100">
									<i class="fa fa-number" aria-hidden="true"></i>
								</span>
            </div> 

			 <div class="wrap-input100 validate-input" data-validate = "valid year is required">
                <input type="number_format" name="Year" placeholder="Year" class="input100"value="<?php echo !empty($user['Year'])?$user['Year']:''; ?>">
                <?php echo form_error('Year','<p class="help-block">','</p>'); ?>
				<span class="focus-input100"></span>
								<span class="symbol-input100">
									<i class="fa " aria-hidden="true"></i>
								</span>
            </div> 

			<div class="wrap-input100 validate-input" data-validate = "valid name is required">
                <input type="text" name="Applicant_Category" placeholder="Applicant Category (Individual / Institution). Since major Pet dog is a home owner, Select Individual." class="input100"value="<?php echo !empty($user['Applicant_Category'])?$user['Applicant_Category']:''; ?>">
                <?php echo form_error('Applicant_Category','<p class="help-block">','</p>'); ?>
				<span class="focus-input100"></span>
								<span class="symbol-input100">
									<i class="fa " aria-hidden="true"></i>
								</span>
            </div>

			<div class="wrap-input100 validate-input" data-validate = "valid name is required">
                <input type="text" name="Ward_Name" placeholder="Ward Name " class="input100"value="<?php echo !empty($user['Ward_Name'])?$user['Ward_Name']:''; ?>">
                <?php echo form_error('Ward_Name','<p class="help-block">','</p>'); ?>
				<span class="focus-input100"></span>
								<span class="symbol-input100">
									<i class="fa " aria-hidden="true"></i>
								</span>
            </div>

			<div class="wrap-input100 validate-input" data-validate = "valid name is required">
                <input type="text" name="Owners_Name" placeholder="Owners Name" class="input100" pattern="[A-Za-z_]{1,32}" title="digits ,whitespaces and special characters are not allowed"  maxlength="32" value="<?php echo !empty($user['Owners_Name'])?$user['Owners_Name']:''; ?>" >
                <?php echo form_error('Owners_Name','<p class="help-block">','</p>'); ?>
				<span class="focus-input100"></span>
								<span class="symbol-input100">
									<i class="fa fa-user" aria-hidden="true"></i>
								</span>
            </div>
			
			<div class="wrap-input100 validate-input" data-validate = "valid name is required">
                <input type="text" name="Applicant_name" placeholder="Applicant name " class="input100" pattern="[A-Za-z_]{1,32}" title="digits ,whitespaces and special characters are not allowed"  maxlength="32" value="<?php echo !empty($user['Applicant_name'])?$user['Applicant_name']:''; ?>" >
                <?php echo form_error('Applicant_name','<p class="help-block">','</p>'); ?>
				<span class="focus-input100"></span>
								<span class="symbol-input100">
									<i class="fa fa-user" aria-hidden="true"></i>
								</span>
            </div>

			<div class="wrap-input100 validate-input" data-validate = "valid address is required">
                <input type="text" name="Address_Pets_Owner_Institution" placeholder="Address of Pets Owner / Institution" class="input100"value="<?php echo !empty($user['Address_Pets_Owner_Institution'])?$user['Address_Pets_Owner_Institution']:''; ?>" >
                <?php echo form_error('Address_Pets_Owner_Institution','<p class="help-block">','</p>'); ?>
				<span class="focus-input100"></span>
								<span class="symbol-input100">
									<i class="fa fa-home" aria-hidden="true"></i>
								</span>
            </div>

			<label>Pet Dog Details </label>
			
			<div class="wrap-input100 validate-input" data-validate = "valid name is required">
                <input type="text" name="Pet_Name" placeholder="Pet Name" class="input100" pattern="[A-Za-z_]{1,32}" title="digits ,whitespaces and special characters are not allowed"  maxlength="32" value="<?php echo !empty($user['Pet_Name'])?$user['Pet_Name']:''; ?>" >
                <?php echo form_error('Pet_Name','<p class="help-block">','</p>'); ?>
				<span class="focus-input100"></span>
								<span class="symbol-input100">
									<i class="fa fa-user" aria-hidden="true"></i>
								</span>
            </div>
			
			<div class="wrap-input100 validate-input" data-validate = "valid breed is required">
                <input type="text" name="Breed" placeholder="Breed" class="input100"value="<?php echo !empty($user['Breed'])?$user['Breed']:''; ?>">
                <?php echo form_error('Breed','<p class="help-block">','</p>'); ?>
				<span class="focus-input100"></span>
								<span class="symbol-input100">
									<i class="fa fa-breed" aria-hidden="true"></i>
								</span>
            </div>
			
			<div class="wrap-input100 validate-input" data-validate = "valid color is required">
                <input type="text" name="Colour" placeholder="Colour" class="input100"value="<?php echo !empty($user['Colour'])?$user['Colour']:''; ?>" >
                <?php echo form_error('Colour','<p class="help-block">','</p>'); ?>
				<span class="focus-input100"></span>
								<span class="symbol-input100">
									<i class="fa fa-color" aria-hidden="true"></i>
								</span>
            </div>
			
			<div class="wrap-input100 validate-input" data-validate = "valid ID is required">
                <input type="text" name="ID_mark_ifany" placeholder="ID mark if any" class="input100"value="<?php echo !empty($user['ID_mark_ifany'])?$user['ID_mark_ifany']:''; ?>" >
                <?php echo form_error('ID_mark_ifany','<p class="help-block">','</p>'); ?>
				<span class="focus-input100"></span>
								<span class="symbol-input100">
									<i class="fa fa-id" aria-hidden="true"></i>
								</span>
            </div>
			
			<div class="wrap-input100 validate-input" data-validate = "valid age is required">
                <input type="text" name="Age" placeholder="Age" class="input100"value="<?php echo !empty($user['Age'])?$user['Age']:''; ?>">
                <?php echo form_error('Age','<p class="help-block">','</p>'); ?>
				<span class="focus-input100"></span>
								<span class="symbol-input100">
									<i class="fa fa-age" aria-hidden="true"></i>
								</span>
            </div>
			
			<div class="wrap-input100 validate-input" data-validate = "valid date is required">
			<label>Date when owner brought</label>
                <input type="Date" name="Date_brought" placeholder="Date when owner brought / Purchased OR Transferred by another owner" class="input100"value="<?php echo !empty($user['Date_brought'])?$user['Date_brought']:''; ?>" >
                <?php echo form_error('Pet_Name','<p class="help-block">','</p>'); ?>
				<span class="focus-input100"></span>
								<span class="symbol-input100">
									<i class="fa fa-date" aria-hidden="true"></i>
								</span>
            </div>
			
			<div class="wrap-input100 validate-input" data-validate = "valid name is required">
                <input type="text" name="Veterinary_Doctors_name" placeholder="Veterinary Doctors name" class="input100" pattern="[A-Za-z_]{1,32}" title="digits ,whitespaces and special characters are not allowed"  maxlength="32" value="<?php echo !empty($user['Veterinary_Doctors_name'])?$user['Veterinary_Doctors_name']:''; ?>">
                <?php echo form_error('Veterinary_Doctors_name','<p class="help-block">','</p>'); ?>
				<span class="focus-input100"></span>
								<span class="symbol-input100">
									<i class="fa fa-user" aria-hidden="true"></i>
								</span>
            </div>

			
			<div class="wrap-input100 validate-input" data-validate = "valid date is required">
			<label>Date of ARV Vaccination</label>
                <input type="Date" name="Date_ARV" placeholder="Date of ARV Vaccination" class="input100"value="<?php echo !empty($user['Date_ARV'])?$user['Date_ARV']:''; ?>" >
                <?php echo form_error('Date_ARV','<p class="help-block">','</p>'); ?>
				<span class="focus-input100"></span>
								<span class="symbol-input100">
									<i class="fa fa-date" aria-hidden="true"></i>
								</span>
            </div>

			
			<div class="wrap-input100 validate-input" data-validate = "valid name is required">
                <input type="text" name="Stray_Dog_Adopted" placeholder="Stray Dog Adopted" class="input100"value="<?php echo !empty($user['Stray_Dog_Adopted'])?$user['Stray_Dog_Adopted']:''; ?>" >
                <?php echo form_error('Stray_Dog_Adopted','<p class="help-block">','</p>'); ?>
				<span class="focus-input100"></span>
								<span class="symbol-input100">
									<i class="fa " aria-hidden="true"></i>
								</span>
            </div>

			<div class="wrap-input100 validate-input" data-validate = "valid place is required">
                <input type="text" name="Puppy_owners_place" placeholder="If Puppy took birth at owners place" class="input100"value="<?php echo !empty($user['Puppy_owners_place'])?$user['Puppy_owners_place']:''; ?>" >
                <?php echo form_error('Puppy_owners_place','<p class="help-block">','</p>'); ?>
				<span class="focus-input100"></span>
								<span class="symbol-input100">
									<i class="fa fa-name" aria-hidden="true"></i>
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