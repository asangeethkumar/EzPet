<!DOCTYPE html>

<?php
include_once "menuWithLogout.php";
?><br><br>
<html lang="en">  
<head>
<title>PET SHELTERS FORM</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900" 	type="text/css" media="all">

<!-- Stylesheet file -->
<link href="<?php echo base_url('assets/css/style.css'); ?>" rel='stylesheet' type='text/css' />
</head>
<body>




<div class="container">
<h1>PET SHELTERS</h1>
    <h2>Fill the Details</h2>
	
    <!-- Status message -->
    <?php  
        if(!empty($success_msg)){ 
            echo '<p class="status-msg success">'.$success_msg.'</p>'; 
        }elseif(!empty($error_msg)){ 
            echo '<p class="status-msg error">'.$error_msg.'</p>'; 
        } 
    ?>
	
    <!-- Registration form -->
    <div class="regisFrm">
        <form action="" method="post">
		 
			<!-- <div class="form-group">
                 <label>Image</label>
                   <!--input type="file" class="form-control" id="userfile" name="userfile"-->
          <!--         <input type="file" class="form-control" name="userfile"  value="<?php echo !empty($user['userfile'])?$user['userfile']:''; ?>" required>
                <?php echo form_error('userfile','<p class="help-block">','</p>'); ?>
                 
             <!--  <input type="submit" class="btn btn-primary" value="Upload">-->
          <!-- </div> -->


             <div class="form-group">
                <input type="text" name="Perspective Pet Parent" placeholder="Perspective Pet Parent" value="<?php echo !empty($user['Perspective_Pet_Parent'])?$user['Perspective_Pet_Parent']:''; ?>" required>
                <?php echo form_error('Perspective_Pet_Parent','<p class="help-block">','</p>'); ?>
            </div> 

			<div class="form-group">
                <input type="text" name="Name of Pet You Wish to Adopt " placeholder="Name of Pet You Wish to Adopt" value="<?php echo !empty($user['Name of Pet You Wish to Adopt'])?$user['Name of Pet You Wish to Adopt']:''; ?>" required>
                <?php echo form_error('Name of Pet You Wish to Adopt','<p class="help-block">','</p>'); ?>
            </div>
			
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
                <input type="text" name="Pet Name" placeholder="Pet Name" value="<?php echo !empty($user['Pet Name'])?$user['Pet Name']:''; ?>" required>
                <?php echo form_error('Pet Name','<p class="help-block">','</p>'); ?>
            </div>


			<div class="form-group">
                <input type="text" name="Pet breed" placeholder="Pet breed" value="<?php echo !empty($user['Pet_breed'])?$user['Pet_breed']:''; ?>" required>
                <?php echo form_error('Pet breed','<p class="help-block">','</p>'); ?>
            </div>


			 <div class="form-group">
                <input type="text" name="phone" placeholder="PHONE NUMBER" value="<?php echo !empty($user['phone'])?$user['phone']:''; ?>">
                <?php echo form_error('phone','<p class="help-block">','</p>'); ?>
            </div>


			<div class="form-group">
                <input type="text" name="address" placeholder="ADDRESS" value="<?php echo !empty($user['address'])?$user['address']:''; ?>" required>
                <?php echo form_error('address','<p class="help-block">','</p>'); ?>
            </div>
			
			 
			<div class="form-group">
			
                <input type="number_format" name="weight" placeholder="weight" value="<?php echo !empty($user['weight'])?$user['weight']:''; ?>" required>
                <?php echo form_error('weight','<p class="help-block">','</p>'); ?>
            </div> 


			<div class="form-group">
                <input type="number_format" name="Height" placeholder="Height" value="<?php echo !empty($user['Height'])?$user['Height']:''; ?>" required>
                <?php echo form_error('Height','<p class="help-block">','</p>'); ?>
            </div> 


				<div class="form-group">
                <input type="text" name="Do you own or rent your home? " placeholder="Do you own or rent your home? " value="<?php echo !empty($user['Height'])?$user['Height']:''; ?>" required>
                <?php echo form_error('Height','<p class="help-block">','</p>'); ?>
            </div> 


				<div class="form-group">
                <input type="text" name="veterinarian's name " placeholder="veterinarian's name " value="<?php echo !empty($user['Height'])?$user['Height']:''; ?>" required>
                <?php echo form_error('Height','<p class="help-block">','</p>'); ?>
            </div> 
			
				<div class="form-group">
                <input type="text" name="veterinarian's  phone number" placeholder=" veterinarian's phone number" value="<?php echo !empty($user['Height'])?$user['Height']:''; ?>" required>
                <?php echo form_error('Height','<p class="help-block">','</p>'); ?>
            </div> 


			
				<div class="form-group">
                <input type="text" name="How many hours per day would the pet be alone? " placeholder=" How many hours per day would the pet be alone? " value="<?php echo !empty($user['Height'])?$user['Height']:''; ?>" required>
                <?php echo form_error('Height','<p class="help-block">','</p>'); ?>
            </div> 
			
			
			
			
			
         


			

				
			


           
            <div class="send-button">
                <input type="submit" name="signupSubmit" value="SUBMIT">
            </div>
        </form>
      <!--  <p>Already have an account? <a href="<?php echo base_url('users/login'); ?>">Login here</a></p> -->
    </div>
</div>
</body>
</html>