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
<title>PET FOOD</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900" 	type="text/css" media="all">

<!-- Stylesheet file -->
<link href="<?php echo base_url('assets/css/style.css'); ?>" rel='stylesheet' type='text/css' />
</head>
<body>
<div class="container">

	<h2>PET FOOD</h2>

	
	
	<!-- Registration form -->
	<div class="regisFrm">
		<form action="" method="post">
				<div class="form-group">
					<input type="text" name="first_name"   placeholder="ENTER YOUR  NAME" value="<?php echo !empty($user['first_name'])?$user['first_name']:''; ?>"  required>
					<?php echo form_error('first_name','<p class="help-block">','</p>'); ?>
				</div>
				<div class="form-group">
					<input type="email"name="email" placeholder="EMAIL"  pattern="[a-z0-9._%+-]+@[a-z]+\.[a-z]{2,}$" value="" required>
				</div>
				<div class="form-group">
					<input type="text" name="phone" pattern="[6-9]{1}[0-9]{9}" title="Phone number with 7-9 and remaing 9 digit with 0-9" placeholder="PHONE NUMBER" value="">
				</div>

				<div class="form-group ">
						  <label for="inputState">PET SPECIES</label>
						  <select name="pet" id="inputState" class="form-control" required >
						  <option>SELECT</option>
							<option >DOG</option>
							<option>CAT</option>
							<option>FISH</option>
							<option>BIRDS</option>
						  </select>
				</div>
			<div class="form-group">
				<label>PET AGE: </label>
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
						Adult
					</label>
					<label>
						<input type="radio" name="age" value="kitten" <?php echo $fcheck; ?> required>
						Kitten 
					</label>
				</div>
			</div>
				<br>
				<div class="form-group">
					  <label for="inputState">CHOOSE PRODUCT</label>
					  <select name="product" id="inputState" class="form-control">
						<option>SELECT</option>
						<option >Veg</option>
						<option>Non-Veg</option>
					  </select>
				</div>
				<div class="form-group ">
					  <label for="inputState">PRICE RANGE</label>
					  <select name="range" id="inputState" class="form-control">
					  <option>SELECT</option>
						<option >0-500</option>
						<option>500-1000</option>
						<option>1000-1500</option>
						<option>1500-2000</option>
					  </select>
				</div>
				<div class="form-group ">
					  <label for="inputState">BRAND </label>
					  <select  name="brand" id="inputState" class="form-control">
					  <option>SELECT </option>
						<option >PEDIGREE</option>
						<option>ROYAL CANIN</option>
						<option>HILLS</option>
						<option>TASTE OF WILD</option>
					  </select>
				</div>
 
				<div class="form-group">
						  <label for="inputState"> DELIVERY</label>
						  <select name="delivery"  id="inputState" class="form-control" required >
						  <option>SELECT </option>
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
					  <option>SELECT </option>
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