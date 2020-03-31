<!DOCTYPE html>
<?php
include_once "menuWithLogout.php";
?><br><br>
<html lang="en">  
<head>
<title>Pet License </title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900" 	type="text/css" media="all">

<!-- Stylesheet file -->
<link href="<?php echo base_url('assets/css/style.css'); ?>" rel='stylesheet' type='text/css' />
</head>
<body>

<h1>Pet License </h1>


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
                <input type="number_format" name="License_No" placeholder="	License No" value="<?php echo !empty($user['License_No'])?$user['License_No']:''; ?>" required>
                <?php echo form_error('License_No','<p class="help-block">','</p>'); ?>
            </div> 

			 <div class="form-group">
                <input type="number_format" name="Year" placeholder="Year" value="<?php echo !empty($user['Year'])?$user['Year']:''; ?>" required>
                <?php echo form_error('Year','<p class="help-block">','</p>'); ?>
            </div> 

			<div class="form-group">
                <input type="text" name="Applicant_Category" placeholder="Applicant Category (Individual / Institution). Since major Pet dog is a home owner, Select Individual." value="<?php echo !empty($user['Applicant_Category'])?$user['Applicant_Category']:''; ?>" required>
                <?php echo form_error('Applicant_Category','<p class="help-block">','</p>'); ?>
            </div>

			<div class="form-group">
                <input type="text" name="Ward_Name" placeholder="Ward Name " value="<?php echo !empty($user['Ward_Name'])?$user['Ward_Name']:''; ?>" required>
                <?php echo form_error('Ward_Name','<p class="help-block">','</p>'); ?>
            </div>

			<div class="form-group">
                <input type="text" name="Owners_Name" placeholder="Owners Name" value="<?php echo !empty($user['Owners_Name'])?$user['Owners_Name']:''; ?>" required>
                <?php echo form_error('Owners_Name','<p class="help-block">','</p>'); ?>
            </div>
			<div class="form-group">
                <input type="text" name="Applicant_name" placeholder="Applicant name " value="<?php echo !empty($user['Applicant_name'])?$user['Applicant_name']:''; ?>" required>
                <?php echo form_error('Applicant_name','<p class="help-block">','</p>'); ?>
            </div>

			<div class="form-group">
                <input type="text" name="Address_Pets_Owner_Institution" placeholder="Address of Pets Owner / Institution" value="<?php echo !empty($user['Address_Pets_Owner_Institution'])?$user['Address_Pets_Owner_Institution']:''; ?>" required>
                <?php echo form_error('Address_Pets_Owner_Institution','<p class="help-block">','</p>'); ?>
            </div>

			<label>Pet Dog Details </label>
			
			<div class="form-group">
                <input type="text" name="Pet_Name" placeholder="Pet Name" value="<?php echo !empty($user['Pet_Name'])?$user['Pet_Name']:''; ?>" required>
                <?php echo form_error('Pet_Name','<p class="help-block">','</p>'); ?>
            </div>
			<div class="form-group">
                <input type="text" name="Breed" placeholder="Breed" value="<?php echo !empty($user['Breed'])?$user['Breed']:''; ?>" required>
                <?php echo form_error('Breed','<p class="help-block">','</p>'); ?>
            </div>
			<div class="form-group">
                <input type="text" name="Colour" placeholder="Colour" value="<?php echo !empty($user['Colour'])?$user['Colour']:''; ?>" required>
                <?php echo form_error('Colour','<p class="help-block">','</p>'); ?>
            </div>
			<div class="form-group">
                <input type="text" name="ID_mark_ifany" placeholder="ID mark if any" value="<?php echo !empty($user['ID_mark_ifany'])?$user['ID_mark_ifany']:''; ?>" required>
                <?php echo form_error('ID_mark_ifany','<p class="help-block">','</p>'); ?>
            </div>
			<div class="form-group">
                <input type="text" name="Age" placeholder="Age" value="<?php echo !empty($user['Age'])?$user['Age']:''; ?>" required>
                <?php echo form_error('Age','<p class="help-block">','</p>'); ?>
            </div>
			<div class="form-group">
			<label>Date when owner brought</label>
                <input type="Date" name="Date_brought" placeholder="Date when owner brought / Purchased OR Transferred by another owner" value="<?php echo !empty($user['Date_brought'])?$user['Date_brought']:''; ?>" required>
                <?php echo form_error('Pet_Name','<p class="help-block">','</p>'); ?>
            </div>
			<div class="form-group">
                <input type="text" name="Veterinary_Doctors_name" placeholder="Veterinary Doctors name" value="<?php echo !empty($user['Veterinary_Doctors_name'])?$user['Veterinary_Doctors_name']:''; ?>" required>
                <?php echo form_error('Veterinary_Doctors_name','<p class="help-block">','</p>'); ?>
            </div>

			<div class="form-group">
			<label>Date of ARV Vaccination</label>
                <input type="Date" name="Date_ARV" placeholder="Date of ARV Vaccination" value="<?php echo !empty($user['Date_ARV'])?$user['Date_ARV']:''; ?>" required>
                <?php echo form_error('Date_ARV','<p class="help-block">','</p>'); ?>
            </div>

			<div class="form-group">
                <input type="text" name="Stray_Dog_Adopted" placeholder="Stray Dog Adopted" value="<?php echo !empty($user['Stray_Dog_Adopted'])?$user['Stray_Dog_Adopted']:''; ?>" required>
                <?php echo form_error('Stray_Dog_Adopted','<p class="help-block">','</p>'); ?>
            </div>

			<div class="form-group">
                <input type="text" name="Puppy_owners_place" placeholder="If Puppy took birth at owners place" value="<?php echo !empty($user['Puppy_owners_place'])?$user['Puppy_owners_place']:''; ?>" required>
                <?php echo form_error('Puppy_owners_place','<p class="help-block">','</p>'); ?>
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