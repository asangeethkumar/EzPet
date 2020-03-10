	
<!DOCTYPE html>
<html lang="en">  
<head>
<title>apponitment</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900" 	type="text/css" media="all">

<!-- Stylesheet file -->
<link href="<?php echo base_url('assets/css/style.css'); ?>" rel='stylesheet' type='text/css' />
</head>
<body>

<h1>  </h1>	

<div class="container">

	<h2>Schedule Veterinarian Appointment</h2>
	<BR>
	
	<!-- Registration form -->
	<div class="regisFrm">
		<form action="" method="post">
			<div class="form-group">
				<label>SELECT THE DATE</label>
				<input type="date" name="first_name"   placeholder="select the date" value="" required>
			</div>
			<BR>
			<div class="form-group">
      <label for="inputState">SELECT THE SLOT</label>
      <select id="inputState" class="form-control" required >
        <option >8:00AM to 12:00 pm </option>
        <option>1:00PM to 4:00 pm</option>
		<option>5:00PM to 6:00 pm</option>
		
      </select>
</div>
<br>
<div class="form-group">
	<label> PLEASE CONFIRM THAT YOU WOULD LIKE TO REQUEST THE FOLLOWING  APPOINTMENT</label>
				<input type="text" name="first_name"   placeholder="" value="" required>
			</div>
			<div class="form-group">
	
				<input type="text" name="first_name"   placeholder="ENTER YOUR NAME" value="" required>
			</div>



			<div class="form-group">
				<input type="email"name="email" placeholder="EMAIL"  pattern="[a-z0-9._%+-]+@[a-z]+\.[a-z]{2,}$" value="<?php echo !empty($user['email'])?$user['email']:''; ?>" required>
				<?php echo form_error('email','<p class="help-block">','</p>'); ?>
			</div>
			<div class="form-group">
				<input type="text" name="phone" pattern="[6-9]{1}[0-9]{9}" 
       title="Phone number with 7-9 and remaing 9 digit with 0-9" placeholder="PHONE NUMBER" value="<?php echo !empty($user['phone'])?$user['phone']:''; ?>">
				<?php echo form_error('phone','<p class="help-block">','</p>'); ?>
			</div>
			<div class="form-group ">
      <label for="inputState"> PET SPECIES</label>
      <select id="inputState" class="form-control" required >
        <option >DOG</option>
        <option>CAT</option>
		<option>FISH</option>
		<option>BIRDS</option>
      </select>
</div>
<div class="form-group">
<input type="text" name="first_name"   placeholder="ENTER PET  NAME" value="" required>
			</div>
			<div class="radio">

					<label>SELECT PET GENDER</label>
						<input type="radio" name="gender" value="Male" >
						Male
					</label>
					<label>
						<input type="radio" name="gender" value="Female" >
						Female
					</label>
				</div>
				

			<div class="form-group">
      <label for="inputState">SELECT CONCERN</label>
      <select id="inputState" class="form-control" required >
        <option >ENQUIRY</option>
        <option>DAILY VISIT</option>
		<option>DISEASE</option>
		<option>OPERATION</option>
      </select>
</div>
<div class="form-group">
			<input type="text" name="question"   placeholder=" YOUR LOCATION" value="" required>
			</div>


<div class="form-group">
      <label for="inputState" >SELECT PAYMENT TYPE</label>
      <select id="inputState" class="form-control" required >
        <option >CREDIT/DEBIT CARD </option>
        <option>NET BANKING</option>
		<option>CASH ON DELIVERY</option>
		<option>GOOGLE PAY</option>
		<option>PHONE PAY</option>
		<option>PAY PAL</option>
      </select>
</div>


			
			
			<div class="send-button">
				<input type="submit" name="signupSubmit" value="BOOK APPOINTMENT">
			</div>
		</form>
	</div>
</div>