<!DOCTYPE html>
<?php
  include_once "menuWithLogout.php";
  ?>
  <br>
  <br>
<html lang="en">  
<head>
<title>Pet_day_care</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900" 	type="text/css" media="all">

<!-- Stylesheet file -->
<link href="<?php echo base_url('assets/css/style.css'); ?>" rel='stylesheet' type='text/css' />
</head>
<body>

<h1>  </h1>	
<div class="container">

	<h2>Pet_day_care</h2>
	

	
	<form action="" method="POST">
  
<div class="form-group">
				<input type="text" name="first_name"   placeholder="OWNER NAME" required>
			</div>
			<div class="form-group">
				<input type="text" name="phone" pattern="[6-9]{1}[0-9]{9}" 
       title="Phone number with 7-9 and remaing 9 digit with 0-9" placeholder="PHONE NUMBER" >

			</div>
			<div class="form-group">
				<input type="text" name="email"   placeholder="Email"  required>
			</div>
			<div class="form-group">
				<input type="text" name="ephone" pattern="[6-9]{1}[0-9]{9}" 
       title="Phone number with 7-9 and remaing 9 digit with 0-9" placeholder="Emergency Contact number" >
			</div>	
			<label for="address">Address</label>

<textarea id="address" name="address" rows="4" cols="50">
</textarea>
			<h3>PET INFORMATION</h3>		
			<div class="form-group">
				<input type="text" name="pet_name"   placeholder="PET NAME"  required>
			</div>
			<div class="form-group">
				<input type="text" name="pet_breed"   placeholder="PET Breed"  required>
			</div>
			GENDER:
			<br>


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
                        <input type="radio" name="gender" value="Male" <?php echo $mcheck; ?>>
						Male
                    </label>
                    <label>
                        <input type="radio" name="gender" value="Female" <?php echo $fcheck; ?>>
                        Female
                    </label>
                </div>
            </div>
			
				






 			





			<div class="form-group">
				<input type="text" name="pet_food_type"   placeholder="PET FOOD"  required>
			</div>
			<div class="form-group">
				<input type="text" name="pet_food_quantity"   placeholder="PET FOOD QUANTITY"  required>
			</div>
			
			
		<!--	<h3>Payment</h3>
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