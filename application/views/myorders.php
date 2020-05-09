<!DOCTYPE html>

<?php
include_once "menuWithLogout.php";
?>
<html lang="en">  
<head>
<title>MY ORDERS</title>
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
	<link rel="stylesheet" type="text/css"  href="<?php echo base_url('assets/css/main.css'); ?>">
<!--===============================================================================================-->
</head>
<body>
<br>
<br>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">

    <li class="breadcrumb-item"><a href='<?php echo base_url()."users/dashboard"; ?>'>Menu </a></li>
    <li class="breadcrumb-item"><a href='<?php echo base_url()."users/account"; ?>'>My Account </a></li>
    <li class="breadcrumb-item active" aria-current="page">My Orders</li>
  </ol>
</nav>
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				
				<form class="login100-form "  action="" method="post" >
						<h1 align="center" >My Orders </h1>
						<br>
						<br>
				<div class="wrap-input100">
					<input class="input100" name="location"  type="search" placeholder="Search by location" aria-label="Search">
					<br>

				</div>
					
					
						<div class="wrap-input100 " >
								<span class="focus-input100"></span>
								<label for="inputState"> SPECIES</label>
								<select name="species" class='input100' id="inputState"   >
									<option >Any</option>
									<option >DOG</option>
									<option>CAT</option>
									<option>FISH</option>
									<option>BIRDS</option>
								</select>
						</div>
						
					<div class="wrap-input100" >
						<span class="focus-input100"></span>
						<label for="inputState" >SIZE</label>
						<select  name="size" id="inputState" class='input100'  >
									<option>Any</option>
									<option>Small</option>
									<option>Medium</option>
									<option>Large</option>
									<option>Extra large</option>
									
						</select>
					</div>
				
				
				
					<div class="wrap-input100 " >
						<span class="focus-input100"></span>
						<label for="inputState" >BREED</label>
						<select  name="breed" id="inputState" class='input100'  >
									<option>Any</option>
									<option>Abyssinian</option>
									<option>Degu</option>
									<option>American Bulldog</option>
									<option>American Buly</option>
									
						</select>
					</div>
					<div class="wrap-input100 " >
						<span class="focus-input100"></span>
						<label for="inputState" >GENDER</label>
						<select  name="gender" id="inputState" class='input100'  >
									<option>Any</option>
									<option>Male</option>
									<option>Female</option>
									
						</select>
					</div>
				
				<div class="wrap-input100 " >
						<span class="focus-input100"></span>
						<label for="inputState" >AGE RANGE</label>
						<select  name="age" id="inputState" class='input100' >
									<option>Any</option>
									<option>Puppy</option>
									<option>Young</option>
									<option>Adult</option>
									<option>Senior</option>
									
						</select>
					</div>
					
					<div class="wrap-input100 " >
						<span class="focus-input100"></span>
						<label for="inputState" >COAT LENGTH</label>
						<select  name="coat" id="inputState" class='input100'>
									<option>Any</option>
									<option>Hairless</option>
									<option>Short</option>
									<option>Medium</option>
									<option>Long</option>
									<option>wire</option>
									<option>Curly</option>
									
						</select>
					</div>
					<div class="wrap-input100" >
						<span class="focus-input100"></span>
						<label for="inputState" >COLOR</label>
						<select  name="color" id="inputState" class='input100' >
									<option>Any</option>
									<option>White</option>
									<option>Black</option>
									<option>Brown</option>
									<option>Light Brown</option>
									<option>smoke</option>
									<option>torbie</option>
									
						</select>
					</div>
				<div class="container-login100-form-btn">
						<button class="login100-form-btn" onclick="change()" id="submit" name="signupSubmit"  value="upload" type="submit">
							search
						</button>


			 
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