<!DOCTYPE html>
<?php
include_once "menuWithLogout.php";
?><br><br>
<html lang="en">  
<head>
<title>International puppy kitten /finder</title>
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
						<h1 align="center">International puppy kitten /finder</h1>
						<br>
						<br>


 
 
		  	<div class="wrap-input100 validate-input" data-validate = "valid name is required">
                <input type="text" name="adopt_pet_finder" placeholder="adopt pet finder" class="input100" value="<?php echo !empty($user['adopt_pet_finder'])?$user['adopt_pet_finder']:''; ?>" >
                <?php echo form_error('adopt_pet_finder','<p class="help-block">','</p>'); ?>
            </div> 

			<div class="input-checkbox100">
                <label> PET TYPE</label><br>
				 <?php 
                if(!empty($user['Special_Status']) && $user['Special_Status'] == 'Dog'){ 
                    $fcheck = 'checked="checked"'; 
                    $mcheck = ''; 

					if(!empty($user['Special_Status']) && $user['Special_Status'] == 'cat'){ 
                    $fcheck = 'checked="checked"'; 
                    $mcheck = ''; 
                }


				if(!empty($user['Special_Status']) && $user['Special_Status'] == 'birds'){ 
                    $fcheck = 'checked="checked"'; 
                    $mcheck = ''; 
                }
					
				if(!empty($user['Special_Status']) && $user['Special_Status'] == 'orther'){ 
                    $fcheck = 'checked="checked"'; 
                    $mcheck = ''; 
                }

                }else{ 
                    $mcheck = 'checked="checked"'; 
                    $fcheck = ''; 
                } 
                ?>
					<input type="checkbox" id="checkItem" name="Special_Status" value="1"<?php echo $mcheck; ?>>Dog<br>
					<input type="checkbox" id="checkItem" name="Special_Status" value="2"<?php echo $mcheck; ?>>cat<br>
					
					<input type="checkbox" id="checkItem" name="Special_Status" value="4"<?php echo $mcheck; ?>>birds<br>
					<input type="checkbox" id="checkItem" name="Special_Status" value="3"<?php echo $mcheck; ?>>orther<br>

					 </label>
                </div>  
				 	<div class="wrap-input100 validate-input" data-validate = "valid breed is required">
                <input type="text" name="Pet_breed" placeholder="Pet_breed" class="input100" value="<?php echo !empty($user['Pet_breed'])?$user['Pet_breed']:''; ?>" >
                <?php echo form_error('Pet_breed','<p class="help-block">','</p>'); ?>
            </div> 

				<div class="wrap-input100 validate-input" data-validate = "valid age is required">
                <input type="text" name="age" placeholder="age" class="input100" value="<?php echo !empty($user['age'])?$user['age']:''; ?>" >
                <?php echo form_error('age','<p class="help-block">','</p>'); ?>
            </div> 

				<div class="wrap-input100 validate-input" data-validate = "valid pets is required">
                <input type="text" name="featured_pets" placeholder="featured pets" class="input100" value="<?php echo !empty($user['featured_pets'])?$user['featured_pets']:''; ?>" >
                <?php echo form_error('featured_pets','<p class="help-block">','</p>'); ?>
            </div> 

				<div class="wrap-input100 validate-input" data-validate = "valid result is required">
                <input type="text" name="search_results" placeholder="search results" class="input100" value="<?php echo !empty($user['search_results'])?$user['search_results']:''; ?>" >
                <?php echo form_error('search_results','<p class="help-block">','</p>'); ?>
            </div> 

				<div class="wrap-input100 validate-input" data-validate = "valid control is required">
                 <label>Images of adopted pets</label>
                   
                  <input type="file" class="form-control" name="userfile" class="input100"  value="<?php echo !empty($user['userfile'])?$user['userfile']:''; ?>" >
                <?php echo form_error('userfile','<p class="help-block">','</p>'); ?>
              
		<div class="wrap-input100 validate-input" data-validate = "valid control is required">
              <input type="submit" class="btn btn-primary" class="input100" value="Upload">
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