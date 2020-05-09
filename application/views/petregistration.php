<!DOCTYPE html>
<?php
include_once "menuWithLogout.php";
?>
<html lang="en">  
<head>
<title>PET INFO REGISTRATION</title>
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
	<link rel="stylesheet" type="text/css"  href="<?php echo base_url('assets/css/main.css'); ?>">
<!--===============================================================================================-->
<body>
	<br><br>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">

    <li class="breadcrumb-item"><a href='<?php echo base_url()."users/dashboard"; ?>'>Menu </a></li>
    <li class="breadcrumb-item"><a href='<?php echo base_url()."users/account"; ?>'>My Account </a></li>
    <li class="breadcrumb-item active" aria-current="page">Pet Registration</li>
  </ol>
</nav>

<!-- button onclick="goBack()">Go Back</button>

<script>
function goBack() {
  window.history.back();
}
</script> -->
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				
				<form class="login100-form validate-form"  action="" method="post" >
						<h1 align="center" >PET REGISTRATION</h1>


						





    
    
    
		  <form class="login100-form validate-form"  action="" method="post" >

		   <div class="wrap-input100 validate-input" data-validate = "valid AIN is required">
		   <label for="inputState">AIN</label>
                <input type="number_format" name="AIN" class="input100" placeholder="AIN" pattern="[1-9]{1,3}[A-Z]{8}[0-9]{6}" title="Enter valid AIN number" value="<?php echo !empty($user['AIN'])?$user['AIN']:''; ?>" >
                <?php echo form_error('AIN','<p class="help-block">','</p>'); ?>
				<span class="focus-input100"></span>
								<span class="symbol-input100">
									<i class="fa fa-AIN" aria-hidden="true"></i>
								</span>
            </div> 
			
            <div class="wrap-input100 validate-input" data-validate = "valid name is required">
                <input type="text" name="Pet Name" placeholder="PET NAME" class="input100" value="<?php echo !empty($user['Pet_Name'])?$user['Pet_Name']:''; ?>" >
                <?php echo form_error('Pet_Name','<p class="help-block">','</p>'); ?>
				<span class="focus-input100"></span>
								<span class="symbol-input100">
									<i class="fa fa-Pet Name" aria-hidden="true"></i>
								</span>
            </div>
			<div class="wrap-input100 validate-input" data-validate = "valid date is required">
			 <label for="inputState">PET DOB</label>
                <input type="date" name="DOB" placeholder="DOB" class="input100" pattern="(?:(?:0[1-9]|1[0-2])[\/\\-. ]?(?:0[1-9]|[12][0-9])|(?:(?:0[13-9]|1[0-2])[\/\\-. ]?30)|(?:(?:0[13578]|1[02])[\/\\-. ]?31))[\/\\-. ]?(?:19|20)[0-9]{2}" value="<?php echo !empty($user['DOB'])?$user['DOB']:''; ?>" >
                <?php echo form_error('DOB','<p class="help-block">','</p>'); ?>
				<span class="focus-input100"></span>
								<span class="symbol-input100">
									<i class="fa fa-DOB" aria-hidden="true"></i>
            </div>
			  <div class="wrap-input100 validate-input" data-validate = "valid color is required">
                <input type="text" name="color" placeholder="color" class="input100" value="<?php echo !empty($user['color'])?$user['color']:''; ?>" >
                <?php echo form_error('color','<p class="help-block">','</p>'); ?>
				<span class="focus-input100"></span>
								<span class="symbol-input100">
									<i class="fa fa-color" aria-hidden="true"></i>
            </div>
			
						  <div class="wrap-input100 validate-input" data-validate = "valid option is required">

                <input type="text" name="GENIUS" placeholder="GENIUS"  class="input100" value="<?php echo !empty($user['GENIUS'])?$user['GENIUS']:''; ?>" >
                <?php echo form_error('GENIUS','<p class="help-block">','</p>'); ?>
				<span class="focus-input100"></span>
								<span class="symbol-input100">
									<i class="fa fa-GENIUS" aria-hidden="true"></i>
            </div>
			<div class="wrap-input100 validate-input" data-validate  = " select valid option is required">
								<span class="focus-input100"></span>
								<label class="required" >SPECIES</label>
								<select name="species" class='input100' id="inputState"  >
									<option>SELECT</option>
									<option >Dog</option>
									<option>Cat</option>
									<option>Fish</option>
									<option>Birds</option>
								</select>
								<br>
								<span class="symbol-input100">
								</span>
						</div>

						<div class="wrap-input100 validate-input" data-validate  = " select valid option is required">
								<span class="focus-input100"></span>
								<label class="required" >Coat length</label>
								<select name="coat" class='input100' id="inputState"  >
									<option>SELECT</option>
									<option >Small</option>
									<option>Medium</option>
									<option>Large</option>
									<option>XL</option>
									<option>XXL</option>
									<option>XXXL</option>
								</select>
								<br>
								<span class="symbol-input100">
								</span>
						</div>
			
			 
			
			 <div class="wrap-input100 validate-input" data-validate = "valid number is required">
			
                <input type="number_format" name="weight" placeholder="weight"  class="input100" value="<?php echo !empty($user['weight'])?$user['weight']:''; ?>" >
                <?php echo form_error('weight','<p class="help-block">','</p>'); ?>
				<span class="focus-input100"></span>
								<span class="symbol-input100">
									<i class="fa fa-weight" aria-hidden="true"></i>
            </div> 
			
			 <div class="wrap-input100 validate-input" data-validate = "valid number is required">
                <input type="number_format" name="Height" placeholder="Height"  class="input100" value="<?php echo !empty($user['Height'])?$user['Height']:''; ?>">
                <?php echo form_error('Height','<p class="help-block">','</p>'); ?>
				<span class="focus-input100"></span>
								<span class="symbol-input100">
									<i class="fa fa-Height" aria-hidden="true"></i>
            </div> 

			<div class="input-radio100">
                <label>Microchiped or Tattooed </label>
                <?php 
                if(!empty($user['Microchiped_or_Tattooed']) && $user['Microchiped_or_Tattooed'] == 'no'){ 
                    $fcheck = 'checked="checked"'; 
                    $mcheck = ''; 
                }else{ 
                    $mcheck = 'checked="checked"'; 
                    $fcheck = ''; 
                } 
                ?>
                <div class="input-radio100">
                    <label>
                        <input type="radio" name="Microchiped_or_Tattooed" value="yes" <?php echo $mcheck; ?>>
						yes
                    </label>
                    <label>
                        <input type="radio" name="Microchiped_or_Tattooed" value="no" <?php echo $fcheck; ?>>
                        no
                    </label>
                </div>
            </div>


			 <div class="wrap-input100 validate-input" data-validate = "valid yes or no is required">
                <input type="text" name="Microchip_or_Tattoo" placeholder="Microchip or Tattoo"  class="input100"value="<?php echo !empty($user['Microchip_or_Tattoo'])?$user['Microchip_or_Tattoo']:''; ?>" >
                <?php echo form_error('Microchip_or_Tattoo','<p class="help-block">','</p>'); ?>
				<span class="focus-input100"></span>
								<span class="symbol-input100">
									<i class="fa fa-Height" aria-hidden="true"></i>
            </div> 



			 <div class="wrap-input100 validate-input" data-validate = "valid license is required">
                <input type="text" name="State_License_or_Registration" placeholder="State License or Registration"  class="input100"value="<?php echo !empty($user['State_License_or_Registration'])?$user['State_License_or_Registration']:''; ?>" >
                <?php echo form_error('State_License_or_Registration','<p class="help-block">','</p>'); ?>
				<span class="focus-input100"></span>
								<span class="symbol-input100">
									<i class="fa fa-Height" aria-hidden="true"></i>
            </div> 



			 <div class="wrap-input100 validate-input" data-validate = "valid registration is required">
                <input type="text" name="Club_or_Association_Registration" placeholder="Club or Association Registration" class="input100" value="<?php echo !empty($user['Club_or_Association_Registration'])?$user['Club_or_Association_Registration']:''; ?>" >
                <?php echo form_error('Club_or_Association_Registration','<p class="help-block">','</p>'); ?>
				<span class="focus-input100"></span>
								<span class="symbol-input100">
									<i class="fa fa-Height" aria-hidden="true"></i>
            </div> 




			 <div class="wrap-input100 validate-input" data-validate = "valid name is required">
                <input type="text" name="Pet_Sire_Name" placeholder="Pet Sire Name"  class="input100"value="<?php echo !empty($user['Pet_Sire_Name'])?$user['Pet_Sire_Name']:''; ?>">
                <?php echo form_error('Pet_Sire_Name','<p class="help-block">','</p>'); ?>
				<span class="focus-input100"></span>
								<span class="symbol-input100">
									<i class="fa fa-Height" aria-hidden="true"></i>
            </div> 



			 <div class="wrap-input100 validate-input" data-validate = "valid AIN is required">
                <input type="text" name="Pet_Sire_AIN" placeholder="Pet Sire AIN"  class="input100" pattern="[a-zA-Z0-9]{16}" value="<?php echo !empty($user['Pet_Sire_AIN'])?$user['Pet_Sire_AIN']:''; ?>">
                <?php echo form_error('Pet_Sire_AIN','<p class="help-block">','</p>'); ?>
				<span class="focus-input100"></span>
								<span class="symbol-input100">
									<i class="fa fa-Height" aria-hidden="true"></i>
            </div> 



			 <div class="wrap-input100 validate-input" data-validate = "valid name is required">
                <input type="text" name="Pet_Dam_Name" placeholder="Pet Dam Name"  class="input100"value="<?php echo !empty($user['Pet_Dam_Name'])?$user['Pet_Dam_Name']:''; ?>">
                <?php echo form_error('Pet_Dam_Name','<p class="help-block">','</p>'); ?>
				<span class="focus-input100"></span>
								<span class="symbol-input100">
									<i class="fa fa-Height" aria-hidden="true"></i>
            </div>
			

			 <div class="wrap-input100 validate-input" data-validate = "valid AIN is required">
                <input type="text" name="Pet_Dam_AIN" placeholder="Pet Dam AIN"  class="input100"  pattern="[a-zA-Z0-9]{16}" value="<?php echo !empty($user['Pet_Dam_AIN'])?$user['Pet_Dam_AIN']:''; ?>">
                <?php echo form_error('Pet_Dam_AIN','<p class="help-block">','</p>'); ?>
				<span class="focus-input100"></span>
								<span class="symbol-input100">
									<i class="fa fa-Height" aria-hidden="true"></i>
            </div> 
			
			
			
			
			
			
			<div class="wrap-input100 validate-input" data-validate = "Valid email is required: emailId@abc.com">
			<input type="email" class="input100" name="email" placeholder="EMAIL" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" > <?php echo form_error('email','<p class="help-block">','</p>'); ?>
								<span class="focus-input100"></span>
								<span class="symbol-input100">
									<i class="fa fa-envelope" aria-hidden="true"></i>
								</span>
						</div>
          <!--   <div class="form-group">
                <input type="password" name="password" placeholder="PASSWORD" required>
                <?php echo form_error('password','<p class="help-block">','</p>'); ?>
            </div>
            <div class="form-group">
                <input type="password" name="conf_password" placeholder="CONFIRM PASSWORD" required>
                <?php echo form_error('conf_password','<p class="help-block">','</p>'); ?>
            </div>            -->
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


			<div class="input-check100">
                <label>Spayed or Neutered </label>
                <?php 
                if(!empty($user['Spayed_or_Neutered']) && $user['Spayed_or_Neutered'] == 'no'){ 
                    $fcheck = 'checked="checked"'; 
                    $mcheck = ''; 
                }else{ 
                    $mcheck = 'checked="checked"'; 
                    $fcheck = ''; 
                } 
                ?>
                <div class="input-check100">
                    <label>
                        <input type="radio" name="Spayed_or_Neutered" value="yes" <?php echo $mcheck; ?>>
						yes
                    </label>
                    <label>
                        <input type="radio" name="Spayed_or_Neutered" value="no" <?php echo $fcheck; ?>>
                        no
                    </label>
                </div>
            </div>


				<div class="input-check100">
                <label>Special Status </label><br>

					<input type="checkbox" id="checkItem" name="Special_Status[]" value=" Service Dog"> Service Dog<br>
					<input type="checkbox" id="checkItem" name="Special_Status[]" value="Emotional Support Animal">Emotional Support Animal<br>
					<input type="checkbox" id="checkItem" name="Special_Status[]" value="K-9">K-9<br>
					<input type="checkbox" id="checkItem" name="Special_Status[]" value="other">Other<br>
					

					 </label>
                </div>          

			


            <div class="wrap-input100 validate-input" data-validate = "Valid phone is required">
                <input type="text" name="phone" placeholder="PHONENUMBER" class="input100"  pattern="[6-9]{1}[0-9]{9}" title="Enter valid phone number"value="<?php echo !empty($user['phone'])?$user['phone']:''; ?>">
                <?php echo form_error('phone','<p class="help-block">','</p>'); ?>
				<span class="focus-input100"></span>
								<span class="symbol-input100">
									<i class="fa fa-phone" aria-hidden="true"></i>
								</span>
            </div>

			<div class="wrap-input100 validate-input" data-validate ="Pet Image is required"> 
			    <input class="input100" type="file" name="image" />


				<a href="skype:echo123?call">Skype video </a>


<script type="text/javascript" src="http://www.skypeassets.com/i/scom/js/skype-uri.js"></script>

	<div id="call_32" style="width:20%;background-color:#0094ff">
   <script type="text/javascript">
        Skype.ui({
            name: "call",
            element: "call_32",
            participants: ["EzPet"],
            imageSize: 32,
            imageColor: "white"
        });
    </script>
</div>
<script>

// Place this code in the head section of your HTML file 
(function(r, d, s) {

	r.loadSkypeWebSdkAsync = r.loadSkypeWebSdkAsync || function(p) {
		var js, sjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(p.id)) { return; }
		js = d.createElement(s);
		js.id = p.id;
		js.src = p.scriptToLoad;
		js.onload = p.callback
		sjs.parentNode.insertBefore(js, sjs);
	};
	var p = {
		scriptToLoad: 'https://swx.cdn.skype.com/shared/v/latest/skypewebsdk.js',

		id: 'skype_web_sdk'
	};
	r.loadSkypeWebSdkAsync(p);
})(window, document, 'script');
</script>

<!-- Add class skype-share and data-style attribute with value (large, small, circle, square) to get the default button style -->
<!-- Additional attributes: data-lang='en-US' (for language) data-href='' (use '' for page URL, 'www.skype.com' for specific URL) -->
<!-- data-text = 'some message' (to pre-fill the message to that will be shared by the user, use '' to prompt user to enter a message) -->
<!-- Place the code of the share button where you what the share button to appear -->
<div class='skype-share' data-href='' data-lang='' data-text='' data-style='large' ></div>

</br></br></br></br></br>

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