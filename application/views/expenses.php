<!DOCTYPE html>

<?php
include_once "menuWithLogout.php";
?><br><br>
<html lang="en">  
<head>
<title>My Budget & Spending Statistics </title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900" 	type="text/css" media="all">

<!-- Stylesheet file -->
<link href="<?php echo base_url('assets/css/style.css'); ?>" rel='stylesheet' type='text/css' />
</head>
<body>

<h1>My Budget & Spending Statistics </h1>


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
                <input type="text" name="income" placeholder="INCOME" value="<?php echo !empty($user['income'])?$user['income']:''; ?>" required>
                <?php echo form_error('income','<p class="help-block">','</p>'); ?>
            </div>

			 <div class="form-group">
                <input type="text" name="expenses" placeholder="EXPENSES" value="<?php echo !empty($user['expenses'])?$user['expenses']:''; ?>" required>
                <?php echo form_error('expenses','<p class="help-block">','</p>'); ?>
            </div>

			 <div class="form-group">
                <input type="text" name="savings" placeholder="SAVINGS" value="<?php echo !empty($user['savings'])?$user['savings']:''; ?>" required>
                <?php echo form_error('savings','<p class="help-block">','</p>'); ?>
            </div>

			 <div class="form-group">
                <input type="text" name="total" placeholder="total" value="<?php echo !empty($user['total'])?$user['total']:''; ?>" required>
                <?php echo form_error('total','<p class="help-block">','</p>'); ?>
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