

<a class="btn btn-primary" href="<?php echo base_url('index.php/users/registration'); ?>" role="button">Register</a>
<a class="btn btn-primary" href="<?php echo base_url('index.php/users/login'); ?>" role="button">Login</a>
<!--<link href="<?php echo base_url('assets/css/style.css'); ?>" rel='stylesheet' type='text/css' />-->
						
<!--<p><a href="<?php echo base_url('index.php/users/registration'); ?>">Register</a></p>-->

<div class="container">
	<h2>Login to Your Account</h2>
	
	<!-- Status message -->
	<script src='https://www.google.com/recaptcha/api.js' async defer></script>
	<?php 

		if(!empty($success_msg)){
			echo '<p class="status-msg success">'.$success_msg.'</p>';
		}elseif(!empty($error_msg)){
			echo '<p class="status-msg error">'.$error_msg.'</p>';
		}
	?>
	
	<!-- Login form -->
	<div class="regisFrm">
		<form action="" method="post">
			<div class="form-group">
				<input type="email" name="email" placeholder="EMAIL" required="">
				<?php echo form_error('email','<p class="help-block">','</p>'); ?>
			</div>
			<div class="form-group">
				<input type="password" name="password" placeholder="PASSWORD" required="">
				<div class="g-recaptcha" data-sitekey="6LeUYeIUAAAAAF_GwBgZFLeIYYWpuB3PUwBdbtq4"></div>
				<?php echo form_error('password','<p class="help-block">','</p>'); ?>
			</div>
			<div class="send-button">
				<input type="submit"  onclick="change()" id="submit" name="loginSubmit" value="LOGIN">
			</div>
		</form>
		<!--<p>Don't have an account? <a href="<?php echo base_url('index.php/users/registration'); ?>">Register</a></p>-->
		<p> <a href="<?php echo base_url('index.php/forms/forgot_pass'); ?>">Forgot Password?</a></p>
	</div>
</div>