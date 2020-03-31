<!DOCTYPE html>

<?php
include_once "menuWithLogout.php";
?><br><br>
<html lang="en">  
<head>
<title>Initial Order for New Pet</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900" 	type="text/css" media="all">

<!-- Stylesheet file -->
<link href="<?php echo base_url('assets/css/style.css'); ?>" rel='stylesheet' type='text/css' />
</head>
<body>

<h1>Initial Order for New Pet</h1>


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
				 <div class="form-group">
                <input type="text" name="images" placeholder="images" value="<?php echo !empty($user['images'])?$user['images']:''; ?>" required>
                <?php echo form_error('images','<p class="help-block">','</p>'); ?>
            </div>
				<div class="form-group">
                 <label>Images of pet</label>
                   <!--input type="file" class="form-control" id="userfile" name="userfile"-->
                   <input type="file" class="form-control" name="userfile"  value="<?php echo !empty($user['userfile'])?$user['userfile']:''; ?>" required>
                <?php echo form_error('userfile','<p class="help-block">','</p>'); ?>
                 
             <input type="submit" class="btn btn-primary" value="Upload">
           </div>

		   <div class="form-group">
                <input type="text" name="Cost" placeholder="Cost" value="<?php echo !empty($user['Cost'])?$user['Cost']:''; ?>" required>
                <?php echo form_error('Cost','<p class="help-block">','</p>'); ?>
            </div>

			 <div class="form-group">
                <input type="text" name="Adopton_pets" placeholder="Adoption pets" value="<?php echo !empty($user['Adopton_pets'])?$user['Adopton_pets']:''; ?>" required>
                <?php echo form_error('Adopton_pets','<p class="help-block">','</p>'); ?>
            </div>

			 <div class="form-group">
                <input type="text" name="Status" placeholder="Status" value="<?php echo !empty($user['Status'])?$user['Status']:''; ?>" required>
                <?php echo form_error('Status','<p class="help-block">','</p>'); ?>
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