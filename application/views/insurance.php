<!DOCTYPE html>
<?php
include_once "menuWithLogout.php";
?>
<br>
<br>
<br>
<br>
<html lang="en">  
<head>
<title>pet insurance</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900" 	type="text/css" media="all">

<!-- Stylesheet file -->
<link href="<?php echo base_url('assets/css/style.css'); ?>" rel='stylesheet' type='text/css' />
</head>
<body>	
<div class="container">

	<h2>PET INSURANCE</h2>
	<br>

	
	
	<!-- Registration form -->
		<div class="regisFrm">
				<form action="" method="post">
				
				<div class="form-group">
					  <label for="inputState" >COVERAGE AMOUNT</label>
					  <select name="amount" id="inputState" class="form-control" required >
						<option >select amount </option>
						<option>1000</option>
						<option>5000</option>
						<option>10000</option>
						<option>15000</option>
						<option>20000</option>
						<option>25000</option>
						<option>30000</option>
						<option>35000</option>
					  </select>
				</div>

		
		
		
				<div class="form-group">
					<input type="text" name="inurance"   placeholder="ENTER INSURANCE NAME" value="" required>
				</div>
			
			
				<div class="form-group ">
					  <label for="inputState"> YOUR PET</label>
					  <select name="pet" id="inputState" class="form-control" required >
					  <option>SELECT </option>
						<option >DOG</option>
						<option>CAT</option>
						<option>FISH</option>
						<option>BIRDS</option>
					  </select>
				</div>
			
			<div class="form-group">
				<label for="birthday"> PET DATE OF BIRTH</label>
				<input type="date" name="dob" id="birthday" name="birthday">
			</div>
			<div class="form-group">
				<input type="text" name="petage"   placeholder="PET AGE" value="" required>
			</div>
			
			<div class="form-group">
				<input type="text" name="identification"   placeholder="Marks of Identification" value="" required>
			</div>
			<div class="form-group">
				<label> Pet Gender: </label>
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
				<input type="text" name="cname"  placeholder="Customer Name" value="">
			</div>
			<div class="form-group">
				<label>Customer Gender: </label>
				<?php
				if(!empty($user['age']) && $user['age'] == 'Kitten'){
					$fcheck = 'checked="checked"';
					$mcheck = '';
				}else{
					$mcheck = 'checked="checked"';
					$fcheck = '';
				}
				?>
				<div class="radio">
					<label>
						<input type="radio" name="age" value="adult" <?php echo $mcheck; ?> required>
						Male
					</label>
					<label>
						<input type="radio" name="age" value="kitten" <?php echo $fcheck; ?> required>
						Female
					</label>
				</div>
			</div>
			
			<div class="form-group">
				<input type="email"name="email" placeholder="EMAIL"  pattern="[a-z0-9._%+-]+@[a-z]+\.[a-z]{2,}$" value="" required>
			</div>
			<div class="form-group">
				<input type="text" name="address"   placeholder="Address" value="" required>
			</div>
				<input type="text" name="phone" pattern="[6-9]{1}[0-9]{9}"  title="Phone number with 7-9 and remaing 9 digit with 0-9" placeholder="PHONE NUMBER" value="">
				
			</div>
		
			<div class="send-button">
				<input type="submit" name="signupSubmit" value="SUBMIT">
			</div>
		</form>
	</div>
</div>
</body>
</html>