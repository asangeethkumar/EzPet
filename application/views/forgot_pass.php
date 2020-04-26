<!--<!DOCTYPE html>
<html>
<head>
<title>Login Form</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>

</head>-->




<!DOCTYPE html>
<html lang="en">  
<head>
<title>login</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900" 	type="text/css" media="all">

<!-- Stylesheet file -->
<link href="<?php echo base_url('assets/css/style.css'); ?>" rel='stylesheet' type='text/css' />
</head>
<body>

<h1> </h1>
<body>
<div class="container">
<div id="main">
<div id="login">
<?php echo @$error; ?>
<h2>Forgot Password</h2>
<br>

<form method="post" action=''>
		<label>Email ID :</label>
		<input type="email" name="email" id="name" placeholder=""/><br /><br />
		<!--<div class="form-group">
				<input type="email" name="email" placeholder="EMAIL" value="<?php echo !empty($user['email'])?$user['email']:''; ?>" required>
				<?php echo form_error('email','<p class="help-block">','</p>'); ?>
			</div>-->
	 <!--   <input type="submit" value="login" name="forgot_pass"/><br />-->
		<div class="send-button">
				<input type="submit" name="forgot_pass" value="submit">
			</div>

</form>
</div>
</div>
</div>
</body>
</html>
 