<!DOCTYPE html>
<?php
include_once "menuWithLogout.php";
?><br><br>
<html lang="en">  
<head>
<title>Accessories</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900" 	type="text/css" media="all">

<!-- Stylesheet file -->
<link href="<?php echo base_url('assets/css/style.css'); ?>" rel='stylesheet' type='text/css' />
</head>
<body>

<h1>  </h1>	
<div class="container">

	<h2>Accessories</h2>
	<form action="" method="POST">
				
			<div class="form-group">
				<input type="text" name="pet_name"   placeholder="PET NAME" required>
			</div>
			<div class="form-group">
				<input type="text" name="pet_breed"   placeholder="PET Breed"required>
			</div>
			<h3>
			<!--form action="/action_page.php">
  <input type="checkbox" id="belt" name="belt" value="belt">
  <label for="belt">belt</label><br>
  <input type="checkbox" id="pet_house" name="pet_house" value="pet_house">
  <label for="pet_house">pet house</label><br>
  <input type="checkbox" id="pet_mat" name="pet_mat" value="pet_mat">
  <label for="pet_mat">pet mat</label><br>
  <form action="/action_page.php">
  <input type="checkbox" id="pet_toys" name="pet_toys" value="pet_toys">
  <label for="pet_toys"> pet toys</label><br>
  <input type="checkbox" id="pet_bed" name="pet_bed" value="pet_bed">
  <label for="pet_bed">pet bed</label>
  
</form-->


				<!--h3>Payment</h3>
			<label for="cname"></label>
            <input type="text" id="cname" name="cardname" placeholder="Name on Card"><emsp>
            <label for="ccnum"></label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="Credit/Debit card number" required="">
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