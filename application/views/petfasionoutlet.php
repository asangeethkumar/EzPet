<!DOCTYPE html>
<?php
include_once "menuWithLogout.php";
?><br><br>
<html lang="en">  
<head>
<title>PetFashion</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900" 	type="text/css" media="all">

<!-- Stylesheet file -->
<link href="<?php echo base_url('assets/css/style.css'); ?>" rel='stylesheet' type='text/css' />
</head>
<body>

<h1>  </h1>	
<div class="container">

	<h2>PET FASHION :</h2>
	<form action="" method="POST">
	
				<div class="form-group">
				<input type="text" name="first_name"   placeholder="OWNER NAME" required>
			</div>
			<div class="form-group">
				<input type="text" name="phone" pattern="[6-9]{1}[0-9]{9}" 
       title="Phone number with 7-9 and remaing 9 digit with 0-9" placeholder="PHONE NUMBER" >
			</div>
			<div class="form-group">
				<input type="text" name="email"   placeholder="Email" >
			</div>
<h2> COSTUME DETAILS:</h2>

	<div class="form-group">
				<input type="text" name="pet_name"   placeholder="PET NAME" required>
			</div>
			<div class="form-group">
				<input type="text" name="pet_breed"   placeholder="PET Breed" required>
			</div>
			<div class="form-group">
				<input type="text" name="pet_size"   placeholder="PET SIZE" required>
			</div>
	
				<div class="form-group">
				<input type="text" name="costume_type"   placeholder="COSTUME TYPE" >
			</div>
				<div class="form-group">
				<input type="text" name="costume_name"   placeholder="COSTUME NAME" >
			</div>
			<!--h3>Payment</h3>
			<label for="cname"></label>
            <input type="text" id="cname" name="cardname" placeholder="Name on Card"><emsp>
            <label for="ccnum"></label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="Credit/Debit card number">
            <label for="expmonth"></label>
            <input type="text" id="expmonth" name="expmonth" placeholder="Exp Month"><ensp>
            <div class="">
              <div class="">
                <label for="expyear"></label>
                <input type="text" id="expyear" name="expyear" placeholder="Exp Year">
              </div>
              <div class="col-50">
                <label for="cvv"></label>
                <input type="text" id="cvv" name="cvv" placeholder="CVV">
              </div>
          </div-->

			
			<div class="send-button">
				<input type="submit" name="signupSubmit" value="SUBMIT">
			</div>
		</form>
	</div>
</div>
</body>
</html>