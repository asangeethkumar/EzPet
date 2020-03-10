<!DOCTYPE html>
<html lang="en">  
<head>
<title>vaccine</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900" 	type="text/css" media="all">

<!-- Stylesheet file -->
<link href="<?php echo base_url('assets/css/style.css'); ?>" rel='stylesheet' type='text/css' />
</head>
<body>

<h1>  </h1>	
<div class="container">

	<h2>Schedule Vaccination</h2>
	
	<br>
	
	
	<!-- Registration form -->
	<div class="regisFrm">
		<form action="" method="post">
			<div class="form-group">
				<input type="text" name="first_name"   placeholder="ENTER YOUR  NAME" value="" required>
			</div>
			<div class="form-group">
				<input type="email"name="email" placeholder="EMAIL"  pattern="[a-z0-9._%+-]+@[a-z]+\.[a-z]{2,}$" value="" required>
			</div>
			<div class="form-group">
				<input type="text" name="phone" pattern="[6-9]{1}[0-9]{9}" title="Phone number with 7-9 and remaing 9 digit with 0-9" placeholder="PHONE NUMBER" value="">
			</div>
			
			<div class="form-group ">
				  <label for="inputState">SELECT YOUR PET</label>
				  <select id="inputState" class="form-control" required >
					<option >DOG</option>
					<option>CAT</option>
					<option>FISH</option>
					<option>BIRDS</option>
				  </select>
			</div>
			<div class="form-group">
				<input type="text" name="first_name"   placeholder="ENTER PET NAME" value="" required>
			</div>
			 <div class="radio">

					<label>SELECT PET AGE</label>
						<input type="radio" name="gender" value="Male" >
						Adult
					</label>
					<label>
						<input type="radio" name="gender" value="Female" >
						Kitten
					</label>
			</div>
			<div class="form-group">
				<input type="text" name="first_name"   placeholder="ENTER PET PROBLEM" value="" required>
			</div>
			<tr>
							<LABEL>PESCRIPTION</LABEL>
							<BR>
							<BR>

							<table>
							 
							<tr>
							<td align="center"><b>Sl.No.</b></td>
							<td align="center"><b>VACCINE NAME</b></td>
							<td align="center"><b>Initial puppy vaccination</b></td>
							<td align="center"><b>Initial adult vaccination</b></td>
							<td align="center"><b>Recommendation</b></td>
							</tr>
							 
							<tr>
							<td>1</td>
							<td><input type="text" name="" maxlength="30" /></td>
							<td><input type="text" name="" maxlength="30" /></td>
							<td><input type="text" name="" maxlength="30" /></td>
							<td><input type="text" name="" maxlength="30" /></td>
							</tr>
							 
							<tr>
							<td>2</td>
							<td><input type="text" name="" maxlength="30" /></td>
							<td><input type="text" name="" maxlength="30" /></td>
							<td><input type="text" name="" maxlength="30" /></td>
							<td><input type="text" name="" maxlength="30" /></td>
							</tr>
							 
							<tr>
							<td>3</td>
							<td><input type="text" name="" maxlength="30" /></td>
							<td><input type="text" name="" maxlength="30" /></td>
							<td><input type="text" name="" maxlength="30" /></td>
							<td><input type="text" name="" maxlength="30" /></td>
							</tr>
							 
							<tr>
							<td>4</td>
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
	</div>
</div>
</body>
</html>