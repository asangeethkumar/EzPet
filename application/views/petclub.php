<!DOCTYPE html>
<html lang="en">  
<head>
<title>PetClub</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900" 	type="text/css" media="all">

<!-- Stylesheet file -->
<link href="<?php echo base_url('assets/css/style.css'); ?>" rel='stylesheet' type='text/css' />
</head>
<body>

<h1>  </h1>	
<div class="container">

	<h2>PetClub</h2>
	
	<!-- Status message -->
	<?php 
		if(!empty($success_msg)){
			echo '<p class="status-msg success">'.$success_msg.'</p>';
		}elseif(!empty($error_msg)){
			echo '<p class="status-msg error">'.$error_msg.'</p>';
		}
	?>
			<div class="form-group">
				<input type="text" name="first_name"   placeholder="PET NAME" value="<?php echo !empty($user['first_name'])?$user['first_name']:''; ?>" required>
				<?php echo form_error('first_name','<p class="help-block">','</p>'); ?>
			</div>
			<div class="form-group">
				<input type="text" name="first_name"   placeholder="PET Breed" value="<?php echo !empty($user['first_name'])?$user['first_name']:''; ?>" required>
				<?php echo form_error('first_name','<p class="help-block">','</p>'); ?>
			</div>
				<div class="form-group">
				<input type="text" name="first_name"   placeholder="PET food type" value="<?php echo !empty($user['first_name'])?$user['first_name']:''; ?>" required>
				<?php echo form_error('first_name','<p class="help-block">','</p>'); ?>
			</div>
		
		
			<h3>Payment</h3>
			<label for="cname"></label>
            <input type="text" id="cname" name="cardname" placeholder="Name on Card"><emsp>
            <label for="ccnum"></label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="Credit/Debit card number">
            <label for="expmonth"></label>
            <input type="text" id="expmonth" name="expmonth" placeholder="Exp Month"><ensp>
            <div class="">
              <div class="">
                <label for="expyear"></label>
                <input type="text" id="expyear" name="expyear" placeholder="Exp Year">
              </div>
              <div class="col-50">
                <label for="cvv"></label>
                <input type="text" id="cvv" name="cvv" placeholder="CVV">
              </div>
          </div>

			
			<div class="send-button">
				<input type="submit" name="signupSubmit" value="SUBMIT">
			</div>
		</form>
	</div>
</div>
</body>
</html>