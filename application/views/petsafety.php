<!DOCTYPE html>
<?php
include_once "menuWithLogout.php";
?><br><br>
<html lang="en">  
<head>
<title>PetSafety</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900" 	type="text/css" media="all">

<!-- Stylesheet file -->
<link href="<?php echo base_url('assets/css/style.css'); ?>" rel='stylesheet' type='text/css' />
</head>
<body>

<h1>  </h1>	
<div class="container">

	<h2>PetSafety</h2>
	
	<form action="" method="POST">
	<h3>Owner Information</h3>
	
<div class="form-group">
				<input type="text" name="first_name"   placeholder="OWNER NAME" required>
			</div>
			<div class="form-group">
				<input type="text" name="phone" pattern="[6-9]{1}[0-9]{9}" 
       title="Phone number with 7-9 and remaing 9 digit with 0-9" placeholder="PHONE NUMBER" >

			</div>
			<div class="form-group">
				<input type="text" name="first_name"   placeholder="Email" required>
			</div>
			<div class="form-group">
				<input type="text" name="phone" pattern="[6-9]{1}[0-9]{9}" 
       title="Phone number with 7-9 and remaing 9 digit with 0-9" placeholder="Emergency Contact number" >
			</div>		
			<h3>PET INFORMATION</h3>	
			<div class="form-group">
				<input type="text" name="first_name"   placeholder="PET NAME"required>
			</div>
			<div class="form-group">
				<input type="text" name="first_name"   placeholder="PET Breed" required>
			</div>
		

			
			<div class="send-button">
				<input type="submit" name="signupSubmit" value="SUBMIT">
			</div>
		</form>
	</div>
</div>
</body>
</html>