<!DOCTYPE html>
<html lang="en">  
<head>
<title>COST ESTIMATION</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900" 	type="text/css" media="all">

<!-- Stylesheet file -->
<link href="<?php echo base_url('assets/css/style.css'); ?>" rel='stylesheet' type='text/css' />
</head>
<body>

<h1>COST ESTIMATION</h1>
 
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
                <input type="text" name="budget" placeholder="budget" value="<?php echo !empty($user['budget'])?$user['budget']:''; ?>" required>
                <?php echo form_error('budget','<p class="help-block">','</p>'); ?>
            </div>

			<div class="form-group">
                <input type="text" name="range" placeholder="range" value="<?php echo !empty($user['range'])?$user['range']:''; ?>" required>
                <?php echo form_error('range','<p class="help-block">','</p>'); ?>
            </div>

			<div class="form-group">
                <label>  Pet selection</label><br>
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
					<input type="checkbox" id="checkItem" name="Special_Status" value="1"<?php echo $mcheck; ?>> Dog<br>
					<input type="checkbox" id="checkItem" name="Special_Status" value="2"<?php echo $mcheck; ?>>cat<br>
					
					<input type="checkbox" id="checkItem" name="Special_Status" value="4"<?php echo $mcheck; ?>>birds<br>
					<input type="checkbox" id="checkItem" name="Special_Status" value="3"<?php echo $mcheck; ?>>orther<br>

					 </label>
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