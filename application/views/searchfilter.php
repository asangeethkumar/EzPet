<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>

  <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?php echo base_url('assets/images/icons/favicon.ico'); ?>"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css"  href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css"  href="<?php echo base_url('assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css'); ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css"  href="<?php echo base_url('assets/vendor/animate/animate.css'); ?>">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css"  href="<?php echo base_url('assets/vendor/css-hamburgers/hamburgers.min.css'); ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/select2/select2.min.css'); ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/util.css'); ?>" >
	<link rel="stylesheet" type="text/css"  href="<?php echo base_url('assets/css/main.css'); ?>">
<!--===============================================================================================-->
</head>
 
  <style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 25%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 2px 7px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #f1f1f1;
}

.button {
  background-color: #404040; /* Green */
  border: none;
  color: white;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button2 {border-radius: 4px;}

  </style>
</head>
<body>



<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav hidden-xs">
      <h2>Serach and filters</h2>
	  
	  
	<form class="login100-form "  action="" method="post" >
						
						<br>
						<br>
						<div class="wrap-input100">
					<input class="input100" name="location"  type="search" placeholder="Search by location" aria-label="Search">
					<br>

				</div>
	  
						<div class="wrap-input100 " >
								<span class="focus-input100"></span>
								<label for="inputState"> SPECIES</label>
								<select name="species" class='input100' id="inputState"   >
									<option >Any</option>
									<option >DOG</option>
									<option>CAT</option>
									<option>FISH</option>
									<option>BIRDS</option>
								</select>
						</div>
						
						<div class="wrap-input100" >
						<span class="focus-input100"></span>
						<label for="inputState" >SIZE</label>
						<select  name="size" id="inputState" class='input100'  >
									<option>Any</option>
									<option>Small</option>
									<option>Medium</option>
									<option>Large</option>
									<option>Extra Large</option>
									
									
						</select>
					</div>
					
					
					<div class="wrap-input100 " >
						<span class="focus-input100"></span>
						<label for="inputState" >BREED</label>
						<select  name="breed" id="inputState" class='input100'  >
									<option>Any</option>
									<option>German Shepherd</option>
									<option>Golden Retriever</option>
									<option>Bull Dog</option>
									<option>Pug</option>
									<option>Poddle</option>
									
						</select>
					</div>
					
					
					<div class="wrap-input100 " >
						<span class="focus-input100"></span>
						<label for="inputState" >GENDER</label>
						<select  name="gender" id="inputState" class='input100'  >
									<option>Any</option>
									<option>Male</option>
									<option>Female</option>
									
						</select>
					</div>
					
					<div class="wrap-input100 " >
						<span class="focus-input100"></span>
						<label for="inputState" >AGE RANGE</label>
						<select  name="age" id="inputState" class='input100'  >
									<option>Any</option>
									<option>6-12 months</option>
									<option>1- 5 years</option>
									<option>5-10 years</option>
									
									
						</select>
					</div>
					
					
					<div class="wrap-input100 " >
						<span class="focus-input100"></span>
						<label for="inputState" >COAT LENGTH</label>
						<select  name="coat" id="inputState" class='input100'  >
						<option>Any</option>
									<option >Small</option>
									<option>Medium</option>
									<option>Large</option>
									<option>XL</option>
									<option>XXL</option>
									<option>XXXL</option>
									
						</select>
					</div>
					
					
				

				
				<div class="container-login100-form-btn">
						<button class="login100-form-btn" onclick="change()" id="submit" name="signupSubmit"  value="upload" type="submit">
							search
						</button>
						</div>
	  
</form>
    </div>
    <br>
    
    <div class="col-sm-9">
      

      <div class="row">
        <div class="col-sm-4">
         <div class="card">
			<img  class="zoom w3-circle " src="<?php echo base_url()."assets/images/".trim(str_replace(",", " ", $data[7]->image_path));?>" alt="" border=3 height=200 width=200 style="padding:0 15px 0 15px;"></td>
			<a href="<?php echo base_url('users/details/5');  ?>"   class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Browie</a>
	 
    </div>
        </div>
        <div class="col-sm-4">
         <div class="card">
	  <img  class="zoom w3-circle " src="<?php echo base_url()."assets/images/".trim(str_replace(",", " ", $data[0]->image_path));?>" alt="" border=3 height=200 width=200 style="padding:0 15px 0 15px;"></td>
	  <a href="<?php echo base_url('users/details/1');  ?>"   class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Jimmy</a>
	 
    </div>
        </div>
        <div class="col-sm-4">
         <div class="card">
	  <img  class="zoom w3-circle " src="<?php echo base_url()."assets/images/".trim(str_replace(",", " ", $data[3]->image_path));?>" alt="" border=3 height=200 width=200 style="padding:0 15px 0 15px;"></td>
	  <a href="<?php echo base_url('users/details/4');  ?>"   class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Scooby</a>
	 
    </div>
        </div>
      </div>
	  
	  <br>
	   <div class="row">
        <div class="col-sm-4">
          <div class="card">
	  <img  class="zoom w3-circle " src="<?php echo base_url()."assets/images/".trim(str_replace(",", " ", $data[4]->image_path));?>" alt="" border=3 height=200 width=200 style="padding:0 15px 0 15px;"></td>
	  <a href="<?php echo base_url('users/details/7893');  ?>"   class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Puppy</a>
	 
    </div>
        </div>
        <div class="col-sm-4">
         <div class="card">
	  <img  class="zoom w3-circle " src="<?php echo base_url()."assets/images/".trim(str_replace(",", " ", $data[14]->image_path));?>" alt="" border=3 height=200 width=200 style="padding:0 15px 0 15px;"></td>
	  <a href="<?php echo base_url('users/details/9');  ?>"   class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Catty</a>
	 
    </div>
        </div>
        <div class="col-sm-4">
        <div class="card">
	  <img  class="zoom w3-circle " src="<?php echo base_url()."assets/images/".trim(str_replace(",", " ", $data[8]->image_path));?>" alt="" border=3 height=200 width=200 style="padding:0 15px 0 15px;"></td>
	  <a href="<?php echo base_url('users/details/10');  ?>"   class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Brownie</a>
	 
    </div>
        </div>
      </div>
	    <br>
      <div class="row">
        <div class="col-sm-4">
         <div class="card">
	  <img  class="zoom w3-circle " src="<?php echo base_url()."assets/images/".trim(str_replace(",", " ", $data[9]->image_path));?>" alt="" border=3 height=200 width=200 style="padding:0 15px 0 15px;"></td>
	  <a href="<?php echo base_url('users/details/11');  ?>"   class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">snuppy</a>
	 
    </div>
        </div>
        <div class="col-sm-4">
          <div class="card">
	  <img  class="zoom w3-circle " src="<?php echo base_url()."assets/images/".trim(str_replace(",", " ", $data[2]->image_path));?>" alt="" border=3 height=200 width=200 style="padding:0 15px 0 15px;"></td>
	  <a href="<?php echo base_url('users/details/3');  ?>"   class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Tuffy</a>
	 
    </div>
        </div>
        <div class="col-sm-4">
         <div class="card">
	  <img  class="zoom w3-circle " src="<?php echo base_url()."assets/images/".trim(str_replace(",", " ", $data[13]->image_path));?>" alt="" border=3 height=200 width=200 style="padding:0 15px 0 15px;"></td>
	  <a href="<?php echo base_url('users/details/12');  ?>"   class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">smilye</a>
	 
    </div>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>
