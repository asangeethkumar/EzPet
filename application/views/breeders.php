

<!DOCTYPE html>
<?php
include_once "menuWithLogout.php";
?><br><br>


<html lang="en">  
<head>
<title>BREEDERS</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900" 	type="text/css" media="all">

<!-- Stylesheet file -->
<link href="<?php echo base_url('assets/css/style.css'); ?>" rel='stylesheet' type='text/css' />
</head>
<body><br>
<br>




<div class="container">
<h1>BREEDERS</h1>
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
                <input type="text" name="Full Name" placeholder="Full NAME" value="<?php echo !empty($user['Name'])?$user['Name']:''; ?>" required>
                <?php echo form_error('Pet_Name','<p class="help-block">','</p>'); ?>
            </div>

			<div class="form-group">
                <input type="text" name="address" placeholder="ADDRESS" value="<?php echo !empty($user['address'])?$user['address']:''; ?>" required>
                <?php echo form_error('address','<p class="help-block">','</p>'); ?>
            </div>

			<div class="form-group">
                <input type="text" name="breeder phone" placeholder="BREEDER PHONE NUMBER" value="<?php echo !empty($user['phone'])?$user['phone']:''; ?>">
                <?php echo form_error('phone','<p class="help-block">','</p>'); ?>
            </div>

			<div class="form-group">
                <input type="text" name="address" placeholder="FEMALE BREEDING ADDRESS" value="<?php echo !empty($user['address'])?$user['address']:''; ?>" required>
                <?php echo form_error('address','<p class="help-block">','</p>'); ?>
            </div>
				
				<div class="form-group">
                <input type="text" name="address" placeholder="STUD DOG  ADDRESS" value="<?php echo !empty($user['address'])?$user['address']:''; ?>" required>
                <?php echo form_error('address','<p class="help-block">','</p>'); ?>
            </div>

			<div class="form-group">
                <input type="text" name="Veterinary Doctor Name" placeholder="Veterinary Doctor NAME" value="<?php echo !empty($user['Name'])?$user['Name']:''; ?>" required>
                <?php echo form_error('Pet_Name','<p class="help-block">','</p>'); ?>
            </div>

			<div class="form-group">
                <input type="text" name="Veterinary Doctor ADDRESS " placeholder="Veterinary Doctor ADDRESS" value="<?php echo !empty($user['Name'])?$user['Name']:''; ?>" required>
                <?php echo form_error('Pet_Name','<p class="help-block">','</p>'); ?>
            </div>

			<div class="form-group">
                <input type="text" name="Veterinary Doctor phone number " placeholder="Veterinary Doctor phone number" value="<?php echo !empty($user['Name'])?$user['Name']:''; ?>" required>
                <?php echo form_error('Pet_Name','<p class="help-block">','</p>'); ?>
            </div>
			<div class="form-group">
                <input type="text" name="Microchip" placeholder="Microchip " value="<?php echo !empty($user['Microchip'])?$user['Microchip']:''; ?>" >
                <?php echo form_error('Microchip_or_Tattoo','<p class="help-block">','</p>'); ?>
            </div> 

			 <div class="form-group">
                <input type="text" name="Pet breed" placeholder="Pet breed" value="<?php echo !empty($user['Pet_breed'])?$user['Pet_breed']:''; ?>" required>
                <?php echo form_error('AIN','<p class="help-block">','</p>'); ?>
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
			<label>Date of birth of Pet</label><br>
                <input type="date" name="DOB" placeholder="DOB" value="<?php echo !empty($user['DOB'])?$user['DOB']:''; ?>" required>
                <?php echo form_error('DOB','<p class="help-block">','</p>'); ?>
            </div>

			<div class="form-group">
                <input type="text" name="color" placeholder="color" value="<?php echo !empty($user['color'])?$user['color']:''; ?>" required>
                <?php echo form_error('color','<p class="help-block">','</p>'); ?>
            </div>

			<div class="form-group">
                <input type="text" name="Body Markings" placeholder="Body Markings" value="<?php echo !empty($user['color'])?$user['color']:''; ?>" required>
                <?php echo form_error('color','<p class="help-block">','</p>'); ?>
            </div>

			<div class="form-group">
			<label>Date of last rabies vaccination</label><br>
                <input type="date" name="DOB" placeholder="	Date of last rabies vaccination" value="<?php echo !empty($user['DOB'])?$user['DOB']:''; ?>" required>
                <?php echo form_error('DOB','<p class="help-block">','</p>'); ?>
            </div>

			<div class="form-group">
			<label>Date of last 7 in 1 vaccination</label><br>
                <input type="date" name="DOB" placeholder="Date of last 7 in 1 vaccination" value="<?php echo !empty($user['DOB'])?$user['DOB']:''; ?>" required>
                <?php echo form_error('DOB','<p class="help-block">','</p>'); ?>
            </div>

			<div class="form-group">
			<label>Date of last De-worming</label><br>
                <input type="date" name="DOB" placeholder="Date of last De-worming" value="<?php echo !empty($user['DOB'])?$user['DOB']:''; ?>" required>
                <?php echo form_error('DOB','<p class="help-block">','</p>'); ?>
    







            
			
			
			
			 
			
			
         


			

				
			


           
            <div class="send-button">
                <input type="submit" name="signupSubmit" value="SUBMIT">
            </div>
        </form>
      <!--  <p>Already have an account? <a href="<?php echo base_url('users/login'); ?>">Login here</a></p> -->
    </div>
</div>
</body>
</html>