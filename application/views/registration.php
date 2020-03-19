<!--<p><a href="<?php echo base_url('index.php/users/login'); ?>">Login here</a></p>-->

						<!--<a href="<?php echo base_url('index.php/users/registration'); ?>">Register</a>
						<a href="<?php echo base_url('index.php/users/login'); ?>">login</a>-->
						<a class="btn btn-primary" href="<?php echo base_url('index.php/users/registration'); ?>" role="button">Register</a>
						<a class="btn btn-primary" href="<?php echo base_url('index.php/users/login'); ?>" role="button">Login</a>
						
						
								
							


<div class="container">
<script src='https://www.google.com/recaptcha/api.js' async defer></script>
	<h2>Create a New Account</h2>
	
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
			<div class="form-group">
				<input type="text" name="first_name"   placeholder="FIRST NAME" value="<?php echo !empty($user['first_name'])?$user['first_name']:''; ?>" required>
				<?php echo form_error('first_name','<p class="help-block">','</p>'); ?>
			</div>
			<div class="form-group">
				<input type="text" name="last_name"  placeholder="LAST NAME" value="<?php echo !empty($user['last_name'])?$user['last_name']:''; ?>" required>
				<?php echo form_error('last_name','<p class="help-block">','</p>'); ?>
			</div>
			<div class="form-group">
				<input type="email"name="email" placeholder="EMAIL"  pattern="[a-z0-9._%+-]+@[a-z]+\.[a-z]{2,}$" value="<?php echo !empty($user['email'])?$user['email']:''; ?>" required>
				<?php echo form_error('email','<p class="help-block">','</p>'); ?>
			</div>
			<div class="form-group">
				<input type="password" name="password" placeholder="PASSWORD" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"required>
				<?php echo form_error('password','<p class="help-block">','</p>'); ?>
			</div>
			<div class="form-group">
				<input type="password" name="conf_password" placeholder="CONFIRM PASSWORD" required>
				<?php echo form_error('conf_password','<p class="help-block">','</p>'); ?>
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
				<input type="text" name="phone" pattern="[6-9]{1}[0-9]{9}" 
       title="Phone number with 7-9 and remaing 9 digit with 0-9" placeholder="PHONE NUMBER" value="<?php echo !empty($user['phone'])?$user['phone']:''; ?>">
				<?php echo form_error('phone','<p class="help-block">','</p>'); ?>
			</div>
			<div class="g-recaptcha" data-sitekey="6LeUYeIUAAAAAF_GwBgZFLeIYYWpuB3PUwBdbtq4"></div>
			<div class="send-button">
				<input type="submit" name="signupSubmit" value="CREATE ACCOUNT">
			</div>
		</form>
		<p>Already have an account? <a href="<?php echo base_url('index.php/users/login'); ?>">Login here</a></p>
	</div>
</div>