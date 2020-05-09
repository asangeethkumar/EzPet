<!DOCTYPE html>

<?php
include_once "menuWithLogout.php";
?>
<html lang="en">  
<head>
<title>find a pet</title>
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

    <li class="breadcrumb-item"><a href='<?php echo base_url()."users/account"; ?>'>Menu </a></li>
    <li class="breadcrumb-item"><a href='<?php echo base_url()."users/account"; ?>'>Get A pet </a></li>
    <li class="breadcrumb-item active" aria-current="page">Find A Pet For You</li>
  </ol>
</nav>
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				
				<form class="login100-form validate-form"  action="" method="post" >
						<h1 align="center" >Find A Pet</h1>
						<br>
						<br>







             <div class="wrap-input100 validate-input" data-validate = "valid breed is required">
                <input type="text" name="Pet_breed" placeholder="Pet breed"  class="input100"value="<?php echo !empty($user['Pet_breed'])?$user['Pet_breed']:''; ?>" >
                <?php echo form_error('Pet_breed','<p class="help-block">','</p>'); ?>
            </div> 
			 <div class="input-radio100">
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
                <div class="input-radio100">
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
			
            
			
			<div class="wrap-input100 validate-input" data-validate = "valid color is required">
                <input type="text" name="color" placeholder="color"  class="input100"value="<?php echo !empty($user['color'])?$user['color']:''; ?>" >
                <?php echo form_error('color','<p class="help-block">','</p>'); ?>
            </div>
			
			
			 
			<div class="wrap-input100 validate-input" data-validate = "valid weight is required">
			
                <input type="number_format" name="weight" placeholder="weight"  class="input100"value="<?php echo !empty($user['weight'])?$user['weight']:''; ?>" >
                <?php echo form_error('weight','<p class="help-block">','</p>'); ?>
            </div> 
			<div class="wrap-input100 validate-input" data-validate = "valid height is required">
                <input type="number_format" name="Height" placeholder="Height"  class="input100"value="<?php echo !empty($user['Height'])?$user['Height']:''; ?>" >
                <?php echo form_error('Height','<p class="help-block">','</p>'); ?>
            </div> 

			
			
			
			
			
			
         


			

				<div class="input-checkbox100">
                <label>Purpose_Of_Pet</label><br>
				 <?php 
                if(!empty($user['Purpose_Of_Pet']) && $user['Purpose_Of_Pet'] == 'Service Dog'){ 
                    $fcheck = 'checked="checked"'; 
                    $mcheck = ''; 

					if(!empty($user['Purpose_Of_Pet']) && $user['Purpose_Of_Pet'] == 'Emotional Support Animal'){ 
                    $fcheck = 'checked="checked"'; 
                    $mcheck = ''; 
                }


				if(!empty($user['Purpose_Of_Pet']) && $user['Purpose_Of_Pet'] == 'K-9'){ 
                    $fcheck = 'checked="checked"'; 
                    $mcheck = ''; 
                }
					
				if(!empty($user['Purpose_Of_Pet']) && $user['Purpose_Of_Pet'] == 'homely'){ 
                    $fcheck = 'checked="checked"'; 
                    $mcheck = ''; 
                }

                }else{ 
                    $mcheck = 'checked="checked"'; 
                    $fcheck = ''; 
                } 
                ?>
					<input type="checkbox" id="checkItem" name="Purpose_Of_Pet" value="1"<?php echo $mcheck; ?>>Service Dog<br>
					<input type="checkbox" id="checkItem" name="Purpose_Of_Pet" value="2"<?php echo $mcheck; ?>>Emotional Support Animal<br>
					<input type="checkbox" id="checkItem" name="Purpose_Of_Pet" value="3"<?php echo $mcheck; ?>>K-9<br>
					<input type="checkbox" id="checkItem" name="Purpose_Of_Pet" value="4"<?php echo $mcheck; ?>>homely<br>

					 </label>
                </div>            

			


            <div class="wrap-input100 validate-input" data-validate = "valid phone is required">
                <input type="text" name="phone" placeholder="PHONE NUMBER"  class="input100"value="<?php echo !empty($user['phone'])?$user['phone']:''; ?>">
                <?php echo form_error('phone','<p class="help-block">','</p>'); ?>
				<span class="focus-input100"></span>
								<span class="symbol-input100">
									<i class="fa fa-phone" aria-hidden="true"></i>
								</span>
            </div>
			<div class="wrap-input100 validate-input" data-validate = "valid number is required">
                <input type="text" name="Cost" placeholder="Cost"  class="input100"value="<?php echo !empty($user['Cost'])?$user['Cost']:''; ?>">
                <?php echo form_error('Cost','<p class="help-block">','</p>'); ?>
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