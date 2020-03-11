<!DOCTYPE html>
<html lang="en">  
<head>
<title>Pet veterinary chart </title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900" 	type="text/css" media="all">

<!-- Stylesheet file -->
<link href="<?php echo base_url('assets/css/style.css'); ?>" rel='stylesheet' type='text/css' />
</head>
<body>

<h1>Pet veterinary chart </h1>


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

		  <label>Pet Details </label>
			
			<div class="form-group">
                <input type="text" name=" Pet Name " placeholder="Pet Name" value="<?php echo !empty($user['Pet_Name'])?$user['Pet_Name']:''; ?>" required>
                <?php echo form_error('Pet_Name','<p class="help-block">','</p>'); ?>
            </div>
			<div class="form-group">
                <input type="text" name="Breed " placeholder="Breed" value="<?php echo !empty($user['Pet_Name'])?$user['Pet_Name']:''; ?>" required>
                <?php echo form_error('Pet_Name','<p class="help-block">','</p>'); ?>
            </div>
			<div class="form-group">
                <input type="text" name="Colour " placeholder="Colour" value="<?php echo !empty($user['Pet_Name'])?$user['Pet_Name']:''; ?>" required>
                <?php echo form_error('Pet_Name','<p class="help-block">','</p>'); ?>
            </div>
			<div class="form-group">
                <input type="text" name="ID mark if any" placeholder="ID mark if any" value="<?php echo !empty($user['Pet_Name'])?$user['Pet_Name']:''; ?>" required>
                <?php echo form_error('Pet_Name','<p class="help-block">','</p>'); ?>
            </div>
			<div class="form-group">
                <input type="text" name="Age " placeholder="Age" value="<?php echo !empty($user['Pet_Name'])?$user['Pet_Name']:''; ?>" required>
                <?php echo form_error('Pet_Name','<p class="help-block">','</p>'); ?>
            </div>
			

			<div class="form-group">
                <input type="text" name="Recommended Immunization Schedule " placeholder="Recommended Immunization Schedule" value="<?php echo !empty($user['Pet_Name'])?$user['Pet_Name']:''; ?>" required>
                <?php echo form_error('Pet_Name','<p class="help-block">','</p>'); ?>
            </div>
			



			<div class="form-group">
				<input type="text" name="Immunization Dates"   placeholder="Immunization Dates" value="" required>
			</div>
			<tr>
							<LABEL>Immunization Dates</LABEL>
							<BR>
							<BR>

							<table>
							 
							<tr>
							<td align="center"><b>Vaccine</b></td>
							<td align="center"><b>Immunization Date 1 </b></td>
							<td align="center"><b>Immunization Date 2</b></td>
							<td align="center"><b>Immunization Date 3</b></td>
							<td align="center"><b> Veterinarian</b></td>
							</tr>
							 
							<tr>
							<td>Rabies</td>
							<td><input type="text" name="" maxlength="30" /></td>
							<td><input type="text" name="" maxlength="30" /></td>
							<td><input type="text" name="" maxlength="30" /></td>
							<td><input type="text" name="" maxlength="30" /></td>
							</tr>
							 
							<tr>
							<td>Parainuenza</td>
							<td><input type="text" name="" maxlength="30" /></td>
							<td><input type="text" name="" maxlength="30" /></td>
							<td><input type="text" name="" maxlength="30" /></td>
							<td><input type="text" name="" maxlength="30" /></td>
							</tr>
							 
							<tr>
							<td>Leptospirosis</td>
							<td><input type="text" name="" maxlength="30" /></td>
							<td><input type="text" name="" maxlength="30" /></td>
							<td><input type="text" name="" maxlength="30" /></td>
							<td><input type="text" name="" maxlength="30" /></td>
							</tr>
							 
							<tr>
							<td>Parainuenza</td>
							<td><input type="text" name="" maxlength="30" /></td>
							<td><input type="text" name="" maxlength="30" /></td>
							<td><input type="text" name="" maxlength="30" /></td>
							<td><input type="text" name="" maxlength="30" /></td>
							</tr>
							 

							</table>
							 
							</td>
							</tr>


            <div class="send-button">
                <input type="submit" name="signupSubmit" value="SUBMIT">
            </div>
        </form>
      <!--  <p>Already have an account? <a href="<?php echo base_url('users/login'); ?>">Login here</a></p> -->
    </div>
</div>
</body>
</html>