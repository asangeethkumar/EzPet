
	
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
<title>pet food</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?php echo base_url('assets/images/icons/favicon.ico'); ?>"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css"  href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css"  href="<?php echo base_url('assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css'); ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css"  href="<?php echo base_url('assets/vendor/animate/animate.css'); ?>">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css"  href="<?php echo base_url('assets/vendor/css-hamburgers/hamburgers.min.css'); ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/select2/select2.min.css'); ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/util.css'); ?>" >
	<link rel="stylesheet" type="text/css"  href="<?php echo base_url('assets/css/mains.css'); ?>">
<!--===============================================================================================-->
</head>
<body>
<div class="limiter">

		<div class="container-login100">
			<div class="wrap-login100">
				


						<form class="login100-form validate-form"  action="" method="post" >
						<h1 align="center" >PET TOYS </h1>
						<br>
						<br>
			

                  <div class="wrap-input100 validate-input" data-validate = "valid name is required">
                <input type="text" name="first_name"  class="input100" pattern="[A-Za-z_]{1,32}" title="digits ,whitespaces and special characters are not allowed"  maxlength="32" placeholder="FIRST NAME" value="<?php echo !empty($user['first_name'])?$user['first_name']:''; ?>"  >
                <?php echo form_error('first_name','<p class="help-block">','</p>'); ?>
                <span class="focus-input100"></span>
                <span class="symbol-input100">
                  <i class="fa fa-user" aria-hidden="true"></i>
                </span>
                </div>
                  <div class="wrap-input100 validate-input" data-validate = "valid pet name is required">
                <input type="text" name="pet_name"  class="input100" placeholder="PET NAME"pattern="[A-Za-z_]{1,32}" title="digits ,whitespaces and special characters are not allowed"  maxlength="32" value="<?php echo !empty($user['PET_name'])?$user['PET_name']:''; ?>" >
                <?php echo form_error('pet_name','<p class="help-block">','</p>'); ?>
                <span class="focus-input100"></span>
                <span class="symbol-input100">
                  
                </span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "valid pet breed is required">
                <input type="text" name="pet_breed"  class="input100" placeholder="PET BREED" value="<?php echo !empty($user['pet_breed'])?$user['pet_breed']:''; ?>" >
                <?php echo form_error('pet_breed','<p class="help-block">','</p>'); ?>
                <span class="focus-input100"></span>
                <span class="symbol-input100">
                  
                </span>
                </div>
                 <div class="wrap-input100 validate-input" data-validate = "valid pet breed is required">
                <input type="text" name="type"  class="input100" placeholder="TOY Type" value="<?php echo !empty($user['pet_breed'])?$user['pet_breed']:''; ?>" >
                <?php echo form_error('pet_breed','<p class="help-block">','</p>'); ?>
                <span class="focus-input100"></span>
                <span class="symbol-input100">
                  
                </span>
                </div>
		

			<h3>Toys:</h3>
			<br>
  <input type="checkbox" id="Benebone" name="toys[]" value="Benebone">
  <label for="Benebone">Benebone</label><br>
  <input type="checkbox" id="Haute Diggity Dog" name="toys[]" value="Haute Diggity Dog">
  <label for="Haute Diggity Dog">Haute Diggity Dog</label><br>
  <input type="checkbox" id="Chuckit" name="toys[]" value="Chuckit">
  <label for="Chuckit">Chuckit</label><br>
  
  <input type="checkbox" id="KONG Rubber Dog Chew Toy" name="toys[]" value="KONG Rubber Dog Chew Toy">
  <label for="KONG Rubber Dog Chew Toy"> KONG Rubber Dog Chew Toy</label><br>
  <input type="checkbox" id="Nylabone Dental Dinosaur" name="toys[]" value="Nylabone Dental Dinosaur">
  <label for="Nylabone Dental Dinosaur">Nylabone Dental Dinosaur</label><br>
  <input type="checkbox" id="Outward Hound Hide-A-Squirrel Dog Toy" name="toys[]" value="Outward Hound Hide-A-Squirrel Dog Toy">
  <label for="Outward Hound Hide-A-Squirrel Dog Toy"> Outward Hound Hide-A-Squirrel Dog Toy</label><br>


			<!--multiple check box -->
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

			
	<div class="container-login100-form-btn">
						<button class="login100-form-btn" onclick="change()" id="submit" name="signupSubmit"  value="SUBMIT" type="submit">
							submit
						</button>
			</div>
		</form>
	</div>
</div>

<!--===============================================================================================-->	
	<script src="<?php echo base_url('assets/vendor/jquery/jquery-3.2.1.min.js'); ?>" ></script>
<!--===============================================================================================-->
	<script  src="<?php echo base_url('assets/vendor/bootstrap/js/popper.js'); ?>"  ></script>
	<script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.min.js'); ?>"  ></script>
<!--===============================================================================================-->
	<script  src="<?php echo base_url('assets/vendor/select2/select2.min.js'); ?>"  ></script>
<!--===============================================================================================-->
	<script  src="<?php echo base_url('assets/vendor/tilt/tilt.jquery.min.js'); ?>"  ></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script  src="<?php echo base_url('assets/js/main.js'); ?>"  ></script>


</body>
</html>