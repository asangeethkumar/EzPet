<!DOCTYPE html>
<?php
include_once "menuWithLogout.php";
?>
<br>
<br>
<br>
<html lang="en">  
<head>
<title>online consultation</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900" 	type="text/css" media="all">

<!-- Stylesheet file -->
<link href="<?php echo base_url('assets/css/style.css'); ?>" rel='stylesheet' type='text/css' />
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
				  <label for="inputState"> PET</label>
				  <select name="pet" id="inputState"  name="pet" class="form-control" required >
					<option></option>
					<option >DOG</option>
					<option>CAT</option>
					<option>FISH</option>
					<option>BIRDS</option>
				  </select>
		</div>
		<div class="form-group">
			<input type="text" name="petname"   placeholder="PET NAME" value="" required>
		</div>
			
	<div class="form-group">
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
				<div class="radio">
					<label>
						<input type="radio" name="gender" value="Male" <?php echo $mcheck; ?> required>
						Male
					</label>
					<label>
						<input type="radio" name="gender" value="Female" <?php echo $fcheck; ?> required>
						Female
					</label>
				</div>
			</div>

				
				
				
		<div class="form-group">
			<input type="text" name="petage"   placeholder="PET AGE" value="" required>
		</div>
			
			
			


		<div class="form-group">
			<input type="text" name="question"   placeholder="TYPE YOUR QUESTION?" value="" required>
		</div>
		<div class="form-group">
			<label>UPLOAD PHOTOS</label>
			<input name="upload"  type="file" class="form-control-file" id="exampleFormControlFile1" name="photos"  >
		</div>
		<div class="form-group ">
			  <label for="inputState">CATEGORY</label>
			  <select name="category" id="inputState" class="form-control" name="category" required >
			  <option></option>
				<option >Enquiry</option>
				<option>Disease</option>
				<option>Infection</option>
				<option>Operation</option>
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