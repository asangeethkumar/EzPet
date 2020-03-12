<!DOCTYPE html>
<?php
include_once "menuWithLogout.php";
?>
<html lang="en">  
<head>
<title>online consultation</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900" 	type="text/css" media="all">

<!-- Stylesheet file -->
<link href="<?php echo base_url('assets/css/style.css'); ?>" rel='stylesheet' type='text/css' />
<link href="<?php echo base_url('menuWithLogout.php'); ?>" rel='stylesheet' type='text/css' />
</head>
<body>
<br>
<br>
<div class="container">

	<h2>ONLINE CONSULTATION</h2>
<br>
	
	<!-- Registration form -->
	<div class="regisFrm">
		<form action="" method="post">
		<div class="form-group ">
				  <label for="inputState">SELECT YOUR PET</label>
				  <select id="inputState"  name="pet" class="form-control" required >
					<option >DOG</option>
					<option>CAT</option>
					<option>FISH</option>
					<option>BIRDS</option>
				  </select>
		</div>
		<div class="form-group">
			<input type="text" name="petname"   placeholder="PET NAME" value="" required>
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
		<div class="form-group">
			<input type="text" name="question"   placeholder="TYPE YOUR QUESTION?" value="" required>
		</div>
		<div class="form-group">
			<label>UPLOAD PHOTOS</label>
			<input type="file" class="form-control-file" id="exampleFormControlFile1" name="photos" required >
		</div>
		<div class="form-group ">
			  <label for="inputState">SELECT CATEGORY</label>
			  <select id="inputState" class="form-control" name="category" required >
				<option >enquiry</option>
				<option>disease</option>
				<option>infection</option>
				<option>operation</option>
			  </select>
		</div>
					

			
			<div class="send-button">
				<input type="submit" name="signupSubmit" value="SUBMIT THE QUESTION">
			</div>
		</form>
	</div>
</div>
</body>
</html>