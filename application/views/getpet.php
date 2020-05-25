<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title></title>

  <!-- Google Fonts -->
 

  <!-- CSS Stylesheets -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  

  <!-- Font Awesome -->
 

  <!-- Bootstrap Scripts -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

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


</head>

<body>
<style>
#testimonials {
  background-color: #ef8172;
  padding: 5% 15%;
  test-align:center;
}

.testimonial-text {
  font-size: 3rem;
  line-height: 1.5;
}

.testimonial-image {
  width: 30%;
  border-radius: 100%;
  margin: 20px;
}
.carousel-item{
	 padding: 7% 15%;
}

#press {
  background-color: #ef8172;
  padding-bottom: 3%;
}

.carousel-inner {
    left: 150;
}

.press-logo {
  width: 15%;
  margin: 20px 20px 50px;
}
.cards {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 2px solid rgba(0,0,0,.125);
    border-radius: 5rem;
}




.button {
    background-color: #ddd;
    border: none;
    color: black;
    padding: 1rem 8rem;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 10px;
}



.btn-lgs{
	background-color: #ddd;
  border: none;
  color: black;
  padding: 1rem 4rem;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  margin: 4px 2px;
  cursor: pointer;
	
	border-radius: 16px;
}


/* featured */
.car {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    
    border-radius: 5rem;
}

.card-img-top {
    width: 70%;
	 padding: 5% 5%;
    border-top-left-radius: calc(.25rem - 1px);
    border-top-right-radius: calc(.25rem - 1px);
}

.button {
    background-color: #ddd;
    border: none;
    color: black;
    padding: 1rem 8rem;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 10px;
}



 /* Style the input field */
  #myInput {
    padding: 20px;
    margin-top: -6px;
    border: 0;
    border-radius: 0;
    background: #f1f1f1;
  }
  .filter{
	  align:center;
	 padding: 9% 25%;
  }
    .container-fluid {
    padding: 60px 50px;
  }
</style>


  
    <section class="colored-section" id="testimonials">

    <div id="testimonial-carousel" class="carousel slide" data-ride="false">
      <div class="carousel-inner">
        <div class="carousel-item active container-fluid">
          <h2 class="testimonial-text">Todays's featured pets</h2>
          <img class="testimonial-image" src="<?php echo base_url()."assets/images/1.jpg";?>" alt="dog-profile">
       
		<em> <a href="<?php echo base_url('users/details/1');  ?>"   class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">GET THIS PET</a></em>
        </div>
		
		
		<div class="carousel-item container-fluid">
          <h2 class="testimonial-text">Todays's featured pets</h2>
        <img class="testimonial-image"  src="<?php echo base_url()."assets/images/8.jpg";?>"  alt="lady-profile">
        
		   <em> <a href="<?php echo base_url('users/details/5');  ?>"   class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">GET THIS PET</a></em>
        </div>
		
		
		
		<div class="carousel-item container-fluid">
          <h2 class="testimonial-text">	 Todays's featured pets</h2>
        <img class="testimonial-image"  src="<?php echo base_url()."assets/images/4.jpg";?>"  alt="lady-profile">
		  <em> <a href="<?php echo base_url('users/details/4');  ?>"   class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">GET THIS PET</a></em>
         
        </div>
		
		
		
		<div class="carousel-item container-fluid">
          <h2 class="testimonial-text">	Todays's featured pets </h2>
        <img class="testimonial-image"  src="<?php echo base_url()."assets/images/5.jpg";?>"  alt="lady-profile">
		  <em> <a href="<?php echo base_url('users/details/7893');  ?>"   class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">GET THIS PET</a></em>
        
        </div>
		
		
		
		<div class="carousel-item container-fluid">
          <h2 class="testimonial-text">	Todays's featured pets </h2>
        <img class="testimonial-image"  src="<?php echo base_url()."assets/images/15.jpg";?>"  alt="lady-profile">
		  <em> <a href="<?php echo base_url('users/details/9');  ?>"   class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">GET THIS PET</a></em>
        
        </div>
		
		
		<div class="carousel-item container-fluid">
          <h2 class="testimonial-text">	Todays's featured pets </h2>
        <img class="testimonial-image"  src="<?php echo base_url()."assets/images/9.jpg";?>"  alt="lady-profile">
		  <em> <a href="<?php echo base_url('users/details/10');  ?>"   class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">GET THIS PET</a></em>
        
        </div>
		
		
      </div>
      <a class="carousel-control-prev" href="#testimonial-carousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#testimonial-carousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon"></span>
      </a>
    </div>

  </section>
  

  
  
  
  <form class="form-inline" >
  <section class="filter">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-primary dropdown-toggle" type="submit">Find a dog </button>
	 <button class="btn btn-primary dropdown-toggle" type="submit">Find a cat</button>
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Find Other Pets
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <input class="form-control" id="myInput" type="text" placeholder="Search..">
      <li><a href="#">Rabbits</a></li>
      <li><a href="#">Small&Furry</a></li>
      <li><a href="#">Scales,Fins,&Other</a></li>
      <li><a href="#">Birds</a></li>
      <li><a href="#">Horses</a></li>
      <li><a href="#">Barnyard</a></li>
    </ul>
	</section>
  </form>




  <section class="" id="">
 <h1 align="center">PETS AVALIABLE IN YOUR AREA</h1>
   <br>
<br>   
  <div class="row">
<div class="car" style="width: 13rem;">
  <img class="card-img-top"src="<?php echo base_url()."assets/petcare/77.jpg";?>"alt="Card image cap" height=200 width=300>
 
</div>
<div class="car" style="width: 13rem;">
  <img class="card-img-top" src="<?php echo base_url()."assets/petcare/78.jpg";?>" alt="Card image cap" height=200 width=300>
 
</div>
<div class="car" style="width: 13rem;">
  <img class="card-img-top" src="<?php echo base_url()."assets/petcare/79.jpg";?>" alt="Card image cap" height=200 width=300>
 
</div>
<div class="car" style="width: 13rem;">
  <img class="card-img-top" src="<?php echo base_url()."assets/petcare/80.jpg";?>" alt="Card image cap" height=200 width=300>
 
</div>
<div class="car" style="width: 13rem;">
  <img class="card-img-top" src="<?php echo base_url()."assets/petcare/81.jpg";?>" alt="Card image cap" height=200 width=300>
 
</div>
<div class="car" style="width: 13rem;">
  <img class="card-img-top" src="<?php echo base_url()."assets/petcare/82.jpg";?>" alt="Card image cap" height=200 width=300>
 
</div>
<div class="car" style="width: 13rem;">
  <img class="card-img-top" src="<?php echo base_url()."assets/petcare/83.jpg";?>" alt="Card image cap" height=200 width=300>
 
</div>
</div>
  
  
   



  </section>





<br>
<br>
<br>
<br>


<div class="container-fluid">

<br>
<br>
<br>
  <div class="row content">
    <div class="col-sm-3 sidenav hidden-xs">
      <h2>Serach and filters</h2>
	  
	  
	<form class="login100-form "  action="" method="post" >
						
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
    
  
	        <!--
<div class="col-sm-9">
<?php
include "petsearch.php";
?>
</div>-->
	    
    <div class="col-sm-9">
      

      <div class="row">
        <div class="col-sm-4">
         <div class="card">
			<img  class="zoom w3-circle " src="<?php echo base_url()."assets/images/84.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
			<a href="<?php echo base_url('users/details/14');  ?>"   class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Jack</a>
	 
    </div>
        </div>
        <div class="col-sm-4">
         <div class="card">
	  <img  class="zoom w3-circle " src="<?php echo base_url()."assets/images/85.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
	  <a href="<?php echo base_url('users/details/15');  ?>"   class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Duke</a>
	 
    </div>
        </div>
        <div class="col-sm-4">
         <div class="card">
	  <img  class="zoom w3-circle " src="<?php echo base_url()."assets/images/86.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
	  <a href="<?php echo base_url('users/details/16');  ?>"   class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Lucky</a>
	 
    </div>
        </div>
      </div>
	  
	  <br>
	   <div class="row">
        <div class="col-sm-4">
          <div class="card">
	  <img  class="zoom w3-circle " src="<?php echo base_url()."assets/images/87.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
	  <a href="<?php echo base_url('users/details/17');  ?>"   class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Rocky</a>
	 
    </div>
        </div>
        <div class="col-sm-4">
         <div class="card">
	  <img  class="zoom w3-circle " src="<?php echo base_url()."assets/images/88.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
	  <a href="<?php echo base_url('users/details/18');  ?>"   class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Cutty</a>
	 
    </div>
        </div>
        <div class="col-sm-4">
        <div class="card">
	  <img  class="zoom w3-circle " src="<?php echo base_url()."assets/images/89.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
	  <a href="<?php echo base_url('users/details/19');  ?>"   class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">patch</a>
	 
    </div>
        </div>
      </div>
	    <br>
      <div class="row">
        <div class="col-sm-4">
         <div class="card">
	  <img  class="zoom w3-circle " src="<?php echo base_url()."assets/images/90.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
	  <a href="<?php echo base_url('users/details/20');  ?>"   class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">snuppy</a>
	 
    </div>
        </div>
        <div class="col-sm-4">
          <div class="card">
	  <img  class="zoom w3-circle " src="<?php echo base_url()."assets/images/91.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
	  <a href="<?php echo base_url('users/details/21');  ?>"   class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Princess</a>
	 
    </div>
        </div>
        <div class="col-sm-4">
         <div class="card">
	  <img  class="zoom w3-circle " src="<?php echo base_url()."assets/images/92.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
	  <a href="<?php echo base_url('users/details/22');  ?>"   class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Bear</a>
	 
    </div>
        </div>
      </div>
    </div>
	
	
	
	
	
	
  </div>
</div>

<br>
<br>




  <section >
 <h1 align="center">PETS VIEWED BY IN YOUR AREA</h1>
   <br>
<br>   
  <div class="row">
<div class="car" style="width: 13rem;">
  <img class="card-img-top"src="<?php echo base_url()."assets/petcare/93.jpg";?>"alt="Card image cap" height=200 width=300>
 
</div>
<div class="car" style="width: 13rem;">
  <img class="card-img-top" src="<?php echo base_url()."assets/petcare/94.jpg";?>" alt="Card image cap" height=200 width=300>
 
</div>
<div class="car" style="width: 13rem;">
  <img class="card-img-top" src="<?php echo base_url()."assets/petcare/95.jpg";?>" alt="Card image cap" height=200 width=300>
 
</div>
<div class="car" style="width: 13rem;">
  <img class="card-img-top" src="<?php echo base_url()."assets/petcare/96.jpg";?>" alt="Card image cap" height=200 width=300>
 
</div>
<div class="car" style="width: 13rem;">
  <img class="card-img-top" src="<?php echo base_url()."assets/petcare/97.jpg";?>" alt="Card image cap" height=200 width=300>
 
</div>
<div class="car" style="width: 13rem;">
  <img class="card-img-top" src="<?php echo base_url()."assets/petcare/98.jpg";?>" alt="Card image cap" height=200 width=300>
 
</div>
<div class="car" style="width: 13rem;">
  <img class="card-img-top" src="<?php echo base_url()."assets/petcare/99.jpg";?>" alt="Card image cap" height=200 width=300>
 
</div>
</div>
  
  
   



  </section>



<br>
<br>
<br>


<div class="container-fluid">

<br>
<br>
<br>
  <div class="row content">
    <div class="col-sm-3 sidenav hidden-xs">
      
    </div>
    <br>
    
    <div class="col-sm-9">
      

      <div class="row">
        <div class="col-sm-4">
         <div class="card">
			<img  class="zoom w3-circle " src="<?php echo base_url()."assets/petcare/100.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
		<a href="<?php echo base_url('users/details/13');  ?>"   class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Max</a>
	 
    </div>
        </div>
        <div class="col-sm-4">
         <div class="card">
	<img  class="zoom w3-circle " src="<?php echo base_url()."assets/petcare/101.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
	 <a href="<?php echo base_url('users/details/23');  ?>"   class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Sam</a>
	 
    </div>
        </div>
        <div class="col-sm-4">
         <div class="card">
	<img  class="zoom w3-circle " src="<?php echo base_url()."assets/petcare/102.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
	 <a href="<?php echo base_url('users/details/24');  ?>"   class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Dony</a>
	 
    </div>
        </div>
      </div>
	  
	  <br>
	  <BR>
	   <div class="row">
        <div class="col-sm-4">
          <div class="card">
	 <img  class="zoom w3-circle " src="<?php echo base_url()."assets/petcare/103.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
	  <a href="<?php echo base_url('users/details/25');  ?>"   class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Duck</a>
	 
    </div>
        </div>
        <div class="col-sm-4">
         <div class="card">
	 <img  class="zoom w3-circle " src="<?php echo base_url()."assets/petcare/104.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
	  <a href="<?php echo base_url('users/details/26');  ?>"   class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Puppy</a>
	 
    </div>
        </div>
        <div class="col-sm-4">
        <div class="card">
	  <img  class="zoom w3-circle " src="<?php echo base_url()."assets/petcare/105.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
	 <a href="<?php echo base_url('users/details/27');  ?>"   class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Copper</a>
	 
    </div>
        </div>
      </div>
	    <br>
		  <BR>
      <div class="row">
        <div class="col-sm-4">
         <div class="card">
	  <img  class="zoom w3-circle " src="<?php echo base_url()."assets/petcare/106.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
	 <a href="<?php echo base_url('users/details/28');  ?>"   class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Sassy</a>
	 
    </div>
        </div>
        <div class="col-sm-4">
          <div class="card">
	 <img  class="zoom w3-circle " src="<?php echo base_url()."assets/petcare/107.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
	 <a href="<?php echo base_url('users/details/29');  ?>"   class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Lucy</a>
	 
    </div>
        </div>
        <div class="col-sm-4">
         <div class="card">
	 <img  class="zoom w3-circle " src="<?php echo base_url()."assets/petcare/108.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
	 <a href="<?php echo base_url('users/details/30');  ?>"   class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Buddy</a>
	 
    </div>
        </div>
      </div>
    </div>
  </div>
</div>
<br>
<br>

  <div class="cads">
        
          <div class="card-body">

			
			
            <h3 align="center">LATEST ARTICLES ON PET HEALTH</h3>
			<br>
			<br>
         <div class="row" align="center">
				<div class="col-sm-6">
	
				<button class="button">ARTICLE 1</button>
				</div>
				
				<div class="col-sm-6">
	
				<button class="button">ARTICLE 2</button>
				</div>
			
			</div>
            
          </div>
        </div>





<div class="container-fluid">

<br>
<br>
<br>
  <div class="row content">
    <div class="col-sm-3 ">
       <div class="col-sm-3">
         <div class="card">
	 <img  class="" src="<?php echo base_url()."assets/petcare/109.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
	 
	 
    </div>
        </div>
		
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
	<br>
	
		
		  <div class="col-sm-3">
         <div class="card">
	 <img  class="" src="<?php echo base_url()."assets/petcare/110.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
	 
	 
    </div>
        </div>
		
		
		
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		
		
	

		
		  <div class="col-sm-3">
         <div class="card">
	 <img  class="" src="<?php echo base_url()."assets/petcare/111.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
	 
	 
    </div>
        </div>
    </div>
    <br>
    
    <div class="col-sm-9">
      

      <div class="row">
        <div class="col-sm-4">
         <div class="card">
			<img  class="" src="<?php echo base_url()."assets/petcare/112.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
			
	 
    </div>
        </div>
        <div class="col-sm-4">
         <div class="card">
	<img  class="" src="<?php echo base_url()."assets/petcare/113.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
	 
	 
    </div>
        </div>
        <div class="col-sm-4">
         <div class="card">
	<img  class="" src="<?php echo base_url()."assets/petcare/114.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
	 
	 
    </div>
        </div>
      </div>
	  
	  <br>
	  <BR>
	   <div class="row">
        <div class="col-sm-4">
          <div class="card">
	 <img  class="" src="<?php echo base_url()."assets/petcare/115.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
	  
	 
    </div>
        </div>
        <div class="col-sm-4">
         <div class="card">
	 <img  class="" src="<?php echo base_url()."assets/petcare/116.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
	  
	 
    </div>
        </div>
        <div class="col-sm-4">
        <div class="card">
	  <img  class="" src="<?php echo base_url()."assets/petcare/117.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
	 
	 
    </div>
        </div>
      </div>
	    <br>
		  <BR>
      <div class="row">
        <div class="col-sm-4">
         <div class="card">
	  <img  class="" src="<?php echo base_url()."assets/petcare/118.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
	 
	 
    </div>
        </div>
        <div class="col-sm-4">
          <div class="card">
	 <img  class="" src="<?php echo base_url()."assets/petcare/119.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
	 
	 
    </div>
        </div>
        <div class="col-sm-4">
         <div class="card">
	 <img  class="" src="<?php echo base_url()."assets/petcare/120.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
	 
	 
    </div>
        </div>
      </div>
    </div>
  </div>
</div>
<br>
<br>
<br>
<br>


  <div class="container-fluid">
  <div class="row">
    <div class="col-sm-9">
      <h1 align="center">Get your pet a Medical Consultation</h1> 
    </div>
    <div class="col-sm-3">
	
	 <a   href='<?php echo base_url()."users/getc"; ?>'   class="btn btn-secondary btn-lgs active" role="button" aria-pressed="true">GET DETAILS</a>
    </div>
  </div>
</div>




  </body>
  </html>


  <!-- Press -->

