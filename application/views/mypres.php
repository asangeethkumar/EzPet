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
<title>my pescription</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900" 	type="text/css" media="all">

<!-- Stylesheet file -->
<link href="<?php echo base_url('assets/css/style.css'); ?>" rel='stylesheet' type='text/css' />
</head>
<body>

<h1>  </h1>	
<div class="container">

	<h2>MY PESCRIPTION</h2>
	
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
				  <label for="inputState"> PET</label>
				  <select name="pet"  id="inputState" class="form-control" required >
				  <option>SELECT</option>
					<option >DOG</option>
					<option>CAT</option>
					<option>FISH</option>
					<option>BIRDS</option>
				  </select>
			</div>
			<div class="form-group">
				<input type="text" name="petname"   placeholder="ENTER PET NAME" value="" required>
			</div>
			<div class="form-group">
				<label>Pet Age: </label>
				<?php
				if(!empty($user['age']) && $user['age'] == 'Kitten'){
					$fcheck = 'checked="checked"';
					$mcheck = '';
				}else{
					$mcheck = 'checked="checked"';
					$fcheck = '';
				}
				?>
				<div class="radio">
					<label>
						<input type="radio" name="age" value="adult" <?php echo $mcheck; ?> required>
						Adult
					</label>
					<label>
						<input type="radio" name="age" value="kitten" <?php echo $fcheck; ?> required>
						Kitten 
					</label>
				</div>
			</div>
			<div class="form-group">
				<input type="text" name="problem"   placeholder="ENTER PET PROBLEM" value="" required>
			</div>
			<tr>
							<LABEL>PESCRIPTION</LABEL>
							<BR>
							<BR>

							<table>
							 
							<tr>
							<td align="center"><b>Sl.No.</b></td>
							<td align="center"><b>MEDICINE NAME</b></td>
							<td align="center"><b>BREAKFAST</b></td>
							<td align="center"><b>LUNCH</b></td>
							<td align="center"><b>DINNER</b></td>
							</tr>
							 
							<tr>
							<td>1</td>
							<td><input type="text" name="a" maxlength="30" /></td>
							<td><input type="text" name="b" maxlength="30" /></td>
							<td><input type="text" name="c" maxlength="30" /></td>
							<td><input type="text" name="d" maxlength="30" /></td>
							</tr>
							 
							<tr>
							<td>2</td>
							<td><input type="text" name="e" maxlength="30" /></td>
							<td><input type="text" name="f" maxlength="30" /></td>
							<td><input type="text" name="g" maxlength="30" /></td>
							<td><input type="text" name="h" maxlength="30" /></td>
							</tr>
							 
							<tr>
							<td>3</td>
							<td><input type="text" name="i" maxlength="30" /></td>
							<td><input type="text" name="j" maxlength="30" /></td>
							<td><input type="text" name="k" maxlength="30" /></td>
							<td><input type="text" name="l" maxlength="30" /></td>
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