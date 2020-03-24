<!DOCTYPE html>

<?php
include_once "menuWithLogout.php";
?><br><br>
<html lang="en">  
<head>
<title>MY ORDERS</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900" 	type="text/css" media="all">

<!-- Stylesheet file -->
<link href="<?php echo base_url('assets/css/style.css'); ?>" rel='stylesheet' type='text/css' />
</head>
<body>

<h1>MY ORDERS</h1>


<div class="container">
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
                <input type="email" name="email" placeholder="EMAIL" value="<?php echo !empty($user['email'])?$user['email']:''; ?>" required>
                <?php echo form_error('email','<p class="help-block">','</p>'); ?>
            </div>

			 <div class="form-group">
                <input type="text" name="Contact number" placeholder="CONTACT NUMBER" value="<?php echo !empty($user['Name'])?$user['Name']:''; ?>" required>
                <?php echo form_error('Pet_Name','<p class="help-block">','</p>'); ?>
            </div>

			<div class="form-group">
                <input type="text" name="my productsr" placeholder="my products" value="<?php echo !empty($user['Name'])?$user['Name']:''; ?>" required>
                <?php echo form_error('Pet_Name','<p class="help-block">','</p>'); ?>
            </div>

			<div class="form-group">
                <input type="text" name="total" placeholder="TOTAL" value="<?php echo !empty($user['Name'])?$user['Name']:''; ?>" required>
                <?php echo form_error('Pet_Name','<p class="help-block">','</p>'); ?>
            </div>

			<div class="form-group">
                <input type="text" name="billing address" placeholder="BILLING ADDRESS" value="<?php echo !empty($user['Name'])?$user['Name']:''; ?>" required>
                <?php echo form_error('Pet_Name','<p class="help-block">','</p>'); ?>
            </div>

			<div class="form-group">
                <label>	Is shipping address same as billing address?</label>
                <?php 
                if(!empty($user['Spayed_or_Neutered']) && $user['Spayed_or_Neutered'] == 'no'){ 
                    $fcheck = 'checked="checked"'; 
                    $mcheck = ''; 
                }else{ 
                    $mcheck = 'checked="checked"'; 
                    $fcheck = ''; 
                } 
                ?>
                <div class="radio">
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

			  <div class="send-button">
                <input type="submit" name="signupSubmit" value="SUBMIT">
            </div>
        </form>
      <!--  <p>Already have an account? <a href="<?php echo base_url('users/login'); ?>">Login here</a></p> -->
    </div>
</div>
</body>
</html>