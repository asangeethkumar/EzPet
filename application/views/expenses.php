<!DOCTYPE html>

<?php
include_once "menuWithLogout.php";
?>
<html lang="en">  
<head>
<title>My Budget & Spending Statistics </title>
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
	<br><br>
		<nav aria-label="breadcrumb">
  <ol class="breadcrumb">

    <li class="breadcrumb-item"><a href='<?php echo base_url()."users/account"; ?>'>Menu </a></li>
    <li class="breadcrumb-item"><a href='<?php echo base_url()."users/account"; ?>'>My Account </a></li>
    <li class="breadcrumb-item active" aria-current="page">My Budget & Spending Statistics</li>
  </ol>
</nav>
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				
				<form class="login100-form validate-form"  action="" method="post" >
						<h1 align="center" >My Budget & Spending Statistics </h1>
						<br>
						<br>






		   <div class="wrap-input100 validate-input" data-validate = "valid number is required">
                <input type="text" name="income" placeholder="INCOME"  class="input100"value="<?php echo !empty($user['income'])?$user['income']:''; ?>" >
                <?php echo form_error('income','<p class="help-block">','</p>'); ?>
            </div>

			 <div class="wrap-input100 validate-input" data-validate = "valid number is required">
                <input type="text" name="expenses" placeholder="EXPENSES"  class="input100"value="<?php echo !empty($user['expenses'])?$user['expenses']:''; ?>" >
                <?php echo form_error('expenses','<p class="help-block">','</p>'); ?>
            </div>

			 <div class="wrap-input100 validate-input" data-validate = "valid number is required">
                <input type="text" name="savings" placeholder="SAVINGS"  class="input100"value="<?php echo !empty($user['savings'])?$user['savings']:''; ?>">
                <?php echo form_error('savings','<p class="help-block">','</p>'); ?>
            </div>

			 <div class="wrap-input100 validate-input" data-validate = "valid number is required">
                <input type="text" name="total" placeholder="total"  class="input100" value="<?php echo !empty($user['total'])?$user['total']:''; ?>">
                <?php echo form_error('total','<p class="help-block">','</p>'); ?>
            </div>
			<div class="container-login100-form-btn">
						<button class="login100-form-btn" onclick="change()" id="submit" name="signupSubmit"  value="SUBMIT" type="submit">
							submit
						</button>
				</div>
			
        </form>
      <!--  <p>Already have an account? <a href="<?php echo base_url('users/login'); ?>">Login here</a></p> -->
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