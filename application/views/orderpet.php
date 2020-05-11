<!DOCTYPE html>

<?php
include_once "menuWithLogout.php";
?><br><br>
<html lang="en">  
<head>
<title>Initial Order for New Pet</title>
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
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">

    <li class="breadcrumb-item"><a href='<?php echo base_url()."users/account"; ?>'>Menu </a></li>
    <li class="breadcrumb-item"><a href='<?php echo base_url()."users/account"; ?>'>Get A pet </a></li>
    <li class="breadcrumb-item active" aria-current="page">Initial Order for New Pet</li>
  </ol>
</nav>
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				
				<form class="login100-form validate-form"  action="" method="post" >
						<h1 align="center" >Initial Order for New Pet</h1>
						<br>
						<br>



		  <div class="input-checkbox100">
                <label>  Pet type</label><br>
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
				 <div class="wrap-input100 validate-input" data-validate = "valid image is required">
                <input type="text" name="images" placeholder="images" class="input100"value="<?php echo !empty($user['images'])?$user['images']:''; ?>" >
                <?php echo form_error('images','<p class="help-block">','</p>'); ?>
            </div>


				<div class="wrap-input100 validate-input" data-validate = "valid file is required">
                 <label>Images of pet</label>
                   <!--input type="file" class="form-control" id="userfile" name="userfile"-->
                   <input type="file" class="form-control" name="userfile"  class="input100"value="<?php echo !empty($user['userfile'])?$user['userfile']:''; ?>" >
                <?php echo form_error('userfile','<p class="help-block">','</p>'); ?>
                 
             <input type="submit" class="btn btn-primary" value="Upload">
           </div>

		   <div class="wrap-input100 validate-input" data-validate = "valid number is required">
                <input type="text" name="Cost" placeholder="Cost" class="input100"value="<?php echo !empty($user['Cost'])?$user['Cost']:''; ?>" >
                <?php echo form_error('Cost','<p class="help-block">','</p>'); ?>
            </div>

			<div class="wrap-input100 validate-input" data-validate = "valid name is required">
                <input type="text" name="Adopton_pets" placeholder="Adoption pets" class="input100"value="<?php echo !empty($user['Adopton_pets'])?$user['Adopton_pets']:''; ?>" >
                <?php echo form_error('Adopton_pets','<p class="help-block">','</p>'); ?>
            </div>

			 <div class="wrap-input100 validate-input" data-validate = "valid status is required">
                <input type="text" name="Status" placeholder="Status" class="input100"value="<?php echo !empty($user['Status'])?$user['Status']:''; ?>" >
                <?php echo form_error('Status','<p class="help-block">','</p>'); ?>
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