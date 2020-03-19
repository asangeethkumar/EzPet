<!DOCTYPE html>
<?php
  include_once "menuWithLogout.php";
  ?>
  <br>
  <br>
<html lang="en">  
<head>
<title>PetSitter</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900" 	type="text/css" media="all">

<!-- Stylesheet file -->
<link href="<?php echo base_url('assets/css/style.css'); ?>" rel='stylesheet' type='text/css' />
</head>
<body>

<h1>  </h1>	
<div class="container">

	<h2>PetSitter</h2>
	
	<form action="" method="POST">
	
	<!-- Registration form 
	<div class="regisFrm">
		<form action="" method="post">
		<div class="form-group">
		<div class="form-group ">
      <label for="inputState">Services</label>
      <select id="inputState" class="form-control" required >
       
        <option>brushing</option>
		<option>Cutting the fur</option>
		<option></option>
		<option>SEROLOGY</option>
		<option>CYTOLOGY & HISTOPATHOLOGY</option>
		<option>MICROBIOLOGY</option>
		<option>HORMONE ANALYSIS</option>
		<option>SPECIALISED TEST</option>
		<option>PANELS</option>
		<option>LIVE STOCK HERD HEALTH SCREENING TEST</option>
		<option>EXPORT TESTING SERVICES (PET TRAVEL TO ABROAD)</option>
		<option>LAB ANIMAL HEALTH MONITORING AND CLINICAL TRIAL TESTING</option>
      </select>
</div> -->
<div class="form-group">
				<input type="text" name="first_name"   placeholder="OWNER NAME" required>
			
			</div>
			<div class="form-group">
				<input type="text" name="phone" pattern="[6-9]{1}[0-9]{9}" 
       title="Phone number with 7-9 and remaing 9 digit with 0-9" placeholder="PHONE NUMBER">
				
			</div>
			<div class="form-group">
				<input type="text" name="email"   placeholder="Email"  required>
				
			</div>
			<div class="form-group">
				<input type="text" name="ephone" pattern="[6-9]{1}[0-9]{9}" 
       title="Phone number with 7-9 and remaing 9 digit with 0-9" placeholder="Emergency Contact number" required>
				
			</div>			
			<div class="form-group">
				<input type="text" name="pet_name"   placeholder="PET NAME"  required>
			
			</div>
			<div class="form-group">
				<input type="text" name="pet_breed"   placeholder="PET Breed" required>
				
			</div>
			<label for="address">Address</label>

				<textarea id="address" name="address" rows="4" cols="50">
				</textarea>
				<p>
					If your reside in an apartment ,please advise if there are any special check-in procedures.

				</p><br>
				<br>
				<p>Does your home have any alarm:

				</p><br>
				<div class="form-group">
				<input type="text" name="alarm_de_code"   placeholder="ALARM DEACTVATION CODE" >
				<div class="form-group">
				<input type="text" name="alarm_ac_code"   placeholder="ALARM ACTVATION CODE" >
			</div>
		<!--
<form>
<h3>Payment</h3>
            <label for="fname"></label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
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
            </div>
          </div>
          
        </div>
        <h3>Payment</h3>

</form>	
			<h3>Payment</h3>
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
          </div>

-->			
			<div class="send-button">
				<input type="submit" name="signupSubmit" value="SUBMIT">
			</div>
		</form>
	</div>
</div>
</body>
</html>