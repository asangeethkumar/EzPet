<!DOCTYPE html>
<?php
  include_once "menuWithLogout.php";
  ?>
  <br>
  <br>
<html lang="en">  
<head>
<title>Grooming</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900" 	type="text/css" media="all">

<!-- Stylesheet file -->
<link href="<?php echo base_url('assets/css/style.css'); ?>" rel='stylesheet' type='text/css' />
</head>
<body>

<h1>  </h1>	
<div class="container">

	<h2>Grooming</h2>
	
	<!-- Status message -->
	<?php 
		if(!empty($success_msg)){
			echo '<p class="status-msg success">'.$success_msg.'</p>';
		}elseif(!empty($error_msg)){
			echo '<p class="status-msg error">'.$error_msg.'</p>';
		}
	?>
	
	
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
				<input type="text" name="first_name"   placeholder="OWNER NAME" value="<?php echo !empty($user['first_name'])?$user['first_name']:''; ?>" required>
				<?php echo form_error('first_name','<p class="help-block">','</p>'); ?>
			</div>
				<div class="form-group">
				<input type="text" name="first_name"   placeholder="PET NAME" value="<?php echo !empty($user['first_name'])?$user['first_name']:''; ?>" required>
				<?php echo form_error('first_name','<p class="help-block">','</p>'); ?>
			</div>
			<div class="form-group">
				<input type="text" name="first_name"   placeholder="PET Breed" value="<?php echo !empty($user['first_name'])?$user['first_name']:''; ?>" required>
				<?php echo form_error('first_name','<p class="help-block">','</p>'); ?>
			</div>
			<div class="form-group">
				<input type="text" name="phone" pattern="[6-9]{1}[0-9]{9}" 
       title="Phone number with 7-9 and remaing 9 digit with 0-9" placeholder="PHONE NUMBER" value="<?php echo !empty($user['phone'])?$user['phone']:''; ?>">
				<?php echo form_error('phone','<p class="help-block">','</p>'); ?>
			</div>
			<h3>SERVICES:</h3>
			       
			<form action="/action_page.php">
  <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
  <label for="vehicle1">BRUSHING</label><br>
  <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
  <label for="vehicle2">Cutting the fur</label><br>
  <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
  <label for="vehicle3">Clipping nails</label><br>
  <form action="/action_page.php">
  <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
  <label for="vehicle1"> Cleaning ears</label><br>
  <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
  <label for="vehicle2">Bathing</label><br>
  <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
  <label for="vehicle3"> Drying</label><br>
  <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
  <label for="vehicle3">Styling</label><br>
  
</form>
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

</form>
</form>
			-->
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
			
			<div class="send-button">
				<input type="submit" name="signupSubmit" value="SUBMIT">
			</div>
		</form>
	</div>
</div>
</body>
</html>