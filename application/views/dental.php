<!DOCTYPE html>
<?php
include_once "menuWithLogout.php";
?>


<html lang="en">  
<head>
<title>>DENTAL</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900" 	type="text/css" media="all">

<!-- Stylesheet file -->
<link href="<?php echo base_url('assets/css/style.css'); ?>" rel='stylesheet' type='text/css' />
</head>
<body>

<h1>  </h1>	
<div class="container">

	<h2>DENTAL PRODUCTS</h2>
<BR>
	
	
	<!-- Registration form -->
	<div class="regisFrm">
		<form action="" method="post">
				<div class="form-group">
					<input type="text" name="first_name"   placeholder="ENTER YOUR  NAME" value="" required>
				</div>
				<div class="form-group">
					<input type="email"name="email" placeholder="EMAIL"  pattern="[a-z0-9._%+-]+@[a-z]+\.[a-z]{2,}$" value="" required>
				</div>
				<div class="form-group">
					<input type="text" name="phone" pattern="[6-9]{1}[0-9]{9}"  title="Phone number with 7-9 and remaing 9 digit with 0-9" placeholder="PHONE NUMBER" value="">
				</div>
			
				<div class="form-group ">
					  <label for="inputState">PET</label>
					  <select name="pet" id="inputState" class="form-control" required >
					  <option>SELECT</option>
						<option >DOG</option>
						<option>CAT</option>
						<option>FISH</option>
						<option>BIRDS</option>
					  </select>
				</div>
			 <div class="form-group">
				<label>Pet Gender: </label>
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
				  <label for="inputState">Choose Product</label>
				  				  <select  name="choose" id="inputState" class="form-control"required >
				   <option>SELECT</option>
					<option >DENTAL CHEWS</option>
					<option>DENTAL SUPPLIMENTS</option>
					<option>DENTAL FOOD</option>
					<option>Breath fresheners& teeth cleaning</option>
				  </select>
			</div>
			
			
			
			<div class="form-group">
				  <label for="inputState">QUANTITY </label>
				  
				  <select name="quantity" id="inputState" class="form-control"required >
				  <option>SELECT</option>
					<option >1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
				  </select>
			</div>

			
 
			<div class="form-group">
				  <label for="inputState"> DELIVERY</label>
				  <select name="delivery" id="inputState" class="form-control" required >
				  <option>SELECT</option>
					<option >delivery for one time </option>
					<option>delivery every month</option>
					<option>delivery for every two months</option>
					<option>delivery for every two months</option>
					<option>delivery for every three  months</option>
					<option>delivery for every four  months</option>
				  </select>
			</div>
			<div class="form-group">
				<input type="text" name="address"   placeholder="ENTER THE ADDRESS" value="" required>
			</div>
			<div class="form-group">
				  <label for="inputState" >PAYMENT TYPE</label>
				  <select  name="payment" id="inputState" class="form-control" required >
				  <option>SELECT</option>
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