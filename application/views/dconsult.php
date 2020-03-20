	
<!DOCTYPE html>
<?php
include_once "menuWithLogout.php";
?>
<br>
<br>
<br>
<br>

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


	<h2>Dental consultation Appointment</h2>
	<BR>
	
	<!-- Registration form -->
	<div class="regisFrm">
		<form action="" method="post">
			<div class="form-group">
				<label>SELECT THE DATE</label>
				<input type="date" name="date"   placeholder="select the date" value="" required>
			</div>
			
			<div class="form-group">
      <label for="inputState"> SLOT</label>
	  
      <select name="slot"  id="inputState" class="form-control" required >
	  <option>SELECT</option>
        <option >8:00AM to 12:00 pm </option>
        <option>1:00PM to 4:00 pm</option>
		<option>5:00PM to 6:00 pm</option>
		
      </select>
</div>

<div class="form-group">
	<label> PLEASE CONFIRM THAT YOU WOULD LIKE TO REQUEST THE FOLLOWING  APPOINTMENT</label>
				<input type="text" name="confirm"   placeholder="" value="" required>
			</div>
			<div class="form-group">
	
				<input type="text" name="first_name"   placeholder="ENTER YOUR NAME" value="" required>
			</div>



			<div class="form-group">
				<input type="email"name="email" placeholder="EMAIL"  pattern="[a-z0-9._%+-]+@[a-z]+\.[a-z]{2,}$" value="" required>
				
			</div>
			<div class="form-group">
				<input type="text" name="phone" pattern="[6-9]{1}[0-9]{9}" 
       title="Phone number with 7-9 and remaing 9 digit with 0-9" placeholder="PHONE NUMBER" value="" required >
				
			</div>
			<div class="form-group ">
      <label for="inputState"> PET</label>
      <select name ="pet" id="inputState" class="form-control" required >
	   <option>SELECT</option>
        <option >DOG</option>
        <option>CAT</option>
		<option>FISH</option>
		<option>BIRDS</option>
      </select>
</div>
<div class="form-group">
<input type="text" name="petname"   placeholder="ENTER PET  NAME" value="" required>
			</div>
			<div class="form-group">
				<label>Pet Gender: </label>
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
						<input type="radio" name="gender" value="Male" <?php echo $mcheck; ?> required>
						Male
					</label>
					<label>
						<input type="radio" name="gender" value="Female" <?php echo $fcheck; ?> required>
						Female
					</label>
				</div>
			</div>
				<div class="form-group">
			<input type="text" name="question"   placeholder=" TYPE YOUR CONCERN" value="" required>
			</div>

<div class="form-group">
			<input type="text" name="location"   placeholder=" YOUR LOCATION" value="" required>
			</div>


<div class="form-group">
      <label for="inputState" >SELECT PAYMENT TYPE</label>
      <select name="payment" id="inputState" class="form-control" required >
	  <option>SELECT</option>
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
			<br>
			<br>
			<a class="dropdown-item" href='<?php echo base_url()."users/dental"; ?>'>Dental Care Products</a>

		</form>
	</div>
</div>