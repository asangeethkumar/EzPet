<!DOCTYPE html>
<?php
include_once "menuWithLogout.php";
?><br><br>
<html lang="en">  
<head>
<title>Initial Health Check & Vaccination</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900" 	type="text/css" media="all">

<!-- Stylesheet file -->
<link href="<?php echo base_url('assets/css/style.css'); ?>" rel='stylesheet' type='text/css' />
</head>
<body>

<h1>Initial Health Check & Vaccination</h1>


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
                <input type="text" name="petname" placeholder="petname" value="<?php echo !empty($user['petname'])?$user['petname']:''; ?>" required>
                <?php echo form_error('petname','<p class="help-block">','</p>'); ?>
            </div>

			<div class="form-group">
			<label>Date of vaccination</label><br>
                <input type="date" name="DOB" placeholder="DOB" value="<?php echo !empty($user['DOB'])?$user['DOB']:''; ?>" required>
                <?php echo form_error('DOB','<p class="help-block">','</p>'); ?>
            </div>

			<div class="form-group">
			<label>Date of last 7 in 1 vaccination</label><br>
                <input type="date" name="DOB_vacination" placeholder="Date of last 7 in 1 vaccination" value="<?php echo !empty($user['DOB_vacination'])?$user['DOB_vacination']:''; ?>" required>
                <?php echo form_error('DOB_vacination','<p class="help-block">','</p>'); ?>
            </div>

			<div class="form-group">

			<label>list of vaccination</label><br> 
    
	<select>
		<option value="">rabbis</option><br>
		<option value=""> Parvovirus</option><br>
		<option value="">Distemper</option><br>
		<option value="">
			Canine Parainfluenza Virus 
		</option>
		<option value="">Canine Influenza Virus (CIV)</option>
	</select><br>
	</div>


	<div class="form-group">
                <input type="text" name="Monitoring" placeholder="Monitoring" value="<?php echo !empty($user['Monitoring'])?$user['Monitoring']:''; ?>" required>
                <?php echo form_error('Monitoring','<p class="help-block">','</p>'); ?>
            </div>


	<div class="form-group">
		<label>Slot booking for vaccination</label><br>
                <input type="date" name="DOB_bookvac" placeholder="Date of last 7 in 1 vaccination" value="<?php echo !empty($user['DOB_bookvac'])?$user['DOB_bookvac']:''; ?>" required>
                <?php echo form_error('DOB_bookvac','<p class="help-block">','</p>'); ?>
            </div>


			
			<div class="form-group">
                <input type="text" name="preferred_Doctor" placeholder="preferred Doctor" value="<?php echo !empty($user['preferred_Doctor'])?$user['preferred_Doctor']:''; ?>" required>
                <?php echo form_error('preferred_Doctor','<p class="help-block">','</p>'); ?>
            </div>

			<div class="form-group">
                <input type="text" name="hospital_preferred" placeholder="hospital preferred" value="<?php echo !empty($user['hospital_preferred'])?$user['hospital_preferred']:''; ?>" required>
                <?php echo form_error('hospital_preferred','<p class="help-block">','</p>'); ?>
            </div>



			<div class="form-group">
                <label>availability </label>
                <?php 
                if(!empty($user['availability']) && $user['availability'] == 'no'){ 
                    $fcheck = 'checked="checked"'; 
                    $mcheck = ''; 
                }else{ 
                    $mcheck = 'checked="checked"'; 
                    $fcheck = ''; 
                } 
                ?>
                <div class="radio">
                    <label>
                        <input type="radio" name="availability" value="yes" <?php echo $mcheck; ?>>
						yes
                    </label>
                    <label>
                        <input type="radio" name="availability" value="no" <?php echo $fcheck; ?>>
                        no
                    </label>
                </div>
            

			  <div class="send-button">
                <input type="submit" name="signupSubmit" value="SUBMIT">
            </div>
        </form>
      <!--  <p>Already have an account? <a href="<?php echo base_url('users/login'); ?>">Login here</a></p> -->
			 
		
			</body>
			</html>
