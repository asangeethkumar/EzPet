<!DOCTYPE html>
<html lang="en">  
<head>
<title>Ultrascan</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900" 	type="text/css" media="all">

<!-- Stylesheet file -->
<link href="<?php echo base_url('assets/css/style.css'); ?>" rel='stylesheet' type='text/css' />
</head>
<body>

<h1>  </h1>	
<div class="container">

	<h2>Ultrascan,X-Ray,MRI</h2>
	<br>
	
	<!-- Registration form -->
	<div class="regisFrm">
		<form action="" method="post">

		<div class="form-group ">
			  <label for="inputState">SELECT YOUR TEST</label>
			  <select id="inputState" class="form-control" required >
				<option >Ultrasacn</option>
				<option>X-Ray</option>
				<option>MRI</option>
				<option>Ctscan</option>
			  </select>
		</div>
		<div class="form-group">
			<input type="text" name="first_name"   placeholder="ENTER DOCTOR NAME" value="" required>
		</div>
		<div class="form-group">
			<input type="text" name="first_name"   placeholder="ENTER YOUR  NAME" value="" required>
		</div>
		<div class="form-group">
			<input type="text" name="phone" pattern="[6-9]{1}[0-9]{9}" title="Phone number with 7-9 and remaing 9 digit with 0-9" placeholder="PHONE NUMBER" value="">
		</div>
		<div class="form-group">
			<input type="text" name="first_name"   placeholder="LOCATION" value="" required>
		</div>
		<div class="form-group ">
			  <label for="inputState">SELECT YOUR PET</label>
			  <select id="inputState" class="form-control" required >
				<option >DOG</option>
				<option>CAT</option>
				<option>FISH</option>
				<option>BIRDS</option>
			  </select>
		</div>
		<div class="radio">
				<label>SELECT PET GENDER</label>
					<input type="radio" name="gender" value="Male" >
						Male
					</label>
					<label>
						<input type="radio" name="gender" value="Female" >
						Female
					</label>
		</div>	
		<br>
		<div class="radio">
					<label>SELECT PET AGE</label>
						<input type="radio" name="gender" value="Male" >
						Adult
					</label>
					<label>
						<input type="radio" name="gender" value="Female" >
						Kitten
					</label>
				</div>
				<br>
				

		<div class="form-group">
			  <label for="inputState" >SELECT PAYMENT TYPE</label>
			  <select id="inputState" class="form-control" required >
				<option >CREDIT/DEBIT CARD </option>
				<option>NET BANKING</option>
				<option>CASH ON DELIVERY</option>
				<option>GOOGLE PAY</option>
				<option>PHONE PAY</option>
				<option>PAY PAL</option>
			  </select>
		</div>

			
			
			<div class="send-button">
				<input type="submit" name="signupSubmit" value="SUBMIT">
			</div>
		</form>
	</div>
</div>
</body>
</html>