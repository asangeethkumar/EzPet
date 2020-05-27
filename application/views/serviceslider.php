<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title></title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat|Ubuntu" rel="stylesheet">

  <!-- CSS Stylesheets -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles.css">

  <!-- Font Awesome -->
  <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

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


/* Pricing Section */

#pricing {
  padding: 10% 15%;
}

.price-text {
  font-size: 3rem;
  line-height: 1.5;
}

.pricing-column {
  padding: 3% 3%;
}
.button {
  background-color: #ddd;
  border: none;
  color: black;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 16px;
}

.button:hover {
  background-color: #f1f1f1;
}




/* grooming Section */

#grooming {
  padding: 7% 10%;
}

.price-texts {
  font-size: 3rem;
  line-height: 1.5;
}

.pricing-columns {
  padding: 3% 3%;
  align:"center";
   border-radius: 16%;
}
.buttons {
  background-color: #ddd;
  border: none;
  color: black;
  padding: 5% 19%;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 16px;
}

.buttons:hover {
  background-color: #f1f1f1;
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
  padding: .5rem 2rem;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 16px;
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
</style>

  <section class="colored-section" id="testimonials">

    <div id="testimonial-carousel" class="carousel slide" data-ride="false">
      <div class="carousel-inner">
        <div class="carousel-item active container-fluid">
          <h2 class="testimonial-text">Pet Grooming </h2>
          <img class="testimonial-image" src="<?php echo base_url()."assets/petcare/17.jpg";?>" alt="dog-profile">
       
		<em> <a   href='<?php echo base_url()."users/grooming"; ?>'  class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">EXPLORE NOW</a></em>
        </div>
		
		
		<div class="carousel-item container-fluid">
          <h2 class="testimonial-text">Pet Sitters </h2>
        <img class="testimonial-image"  src="<?php echo base_url()."assets/petcare/18.jpg";?>" alt="lady-profile">
        
		   <em> <a   href='<?php echo base_url()."users/petsitter"; ?>'   class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">EXPLORE NOW</a></em>
        </div>
		
		
		<div class="carousel-item container-fluid">
          <h2 class="testimonial-text">Dog Walkers </h2>
        <img class="testimonial-image"  src="<?php echo base_url()."assets/petcare/19.jpg";?>" alt="lady-profile">
		
		  <em> <a    href='<?php echo base_url()."users/dogwalker"; ?>' class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">EXPLORE NOW</a></em>
        
        </div>
		
		
		<div class="carousel-item container-fluid">
          <h2 class="testimonial-text">	Pet Daycare</h2>
        <img class="testimonial-image"  src="<?php echo base_url()."assets/petcare/20.jpg";?>" alt="lady-profile">
		
		  <em> <a   href='<?php echo base_url()."users/petdaycare"; ?>'   class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">EXPLORE NOW</a></em>
      
        </div>
		
		
		<div class="carousel-item container-fluid">
          <h2 class="testimonial-text">	Pet Hotels</h2>
        <img class="testimonial-image"  src="<?php echo base_url()."assets/petcare/23.jpg";?>" alt="lady-profile">
		
		  <em> <a    href='<?php echo base_url()."users/pethostel"; ?>'   class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">EXPLORE NOW</a></em>
       
        </div>
		
		<div class="carousel-item container-fluid">
          <h2 class="testimonial-text">	Pet Taxi</h2>
        <img class="testimonial-image"  src="<?php echo base_url()."assets/petcare/24.jpg";?>" alt="lady-profile">
		
		  <em> <a  href='<?php echo base_url()."users/pettaxi"; ?>'   class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">EXPLORE NOW</a></em>
       
        </div>
		
		
		
		<div class="carousel-item container-fluid">
          <h2 class="testimonial-text">Pet Club </h2>
        <img class="testimonial-image"  src="<?php echo base_url()."assets/petcare/22.jpg";?>"alt="lady-profile">
		
		  <em> <a  href='<?php echo base_url()."users/petclub"; ?>'   class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">EXPLORE NOW</a></em>
       
        </div>
		
		
		<div class="carousel-item container-fluid">
          <h2 class="testimonial-text">	Pet Training</h2>
        <img class="testimonial-image"  src="<?php echo base_url()."assets/petcare/25.jpg";?>" alt="lady-profile">
		
		  <em> <a  href='<?php echo base_url()."users/pettraining"; ?>'   class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">EXPLORE NOW</a></em>
       
        </div>
		
		<div class="carousel-item container-fluid">
          <h2 class="testimonial-text">Dog Playgrounds & Beaches </h2>
        <img class="testimonial-image"  src="<?php echo base_url()."assets/petcare/26.jpg";?>"alt="lady-profile">
		
		
		  <em> <a  href='<?php echo base_url()."users/dogplayground"; ?>'  class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">EXPLORE NOW</a></em>
       
        </div>
		
		
		<div class="carousel-item container-fluid">
          <h2 class="testimonial-text">Global Pet- Travel with pets </h2>
        <img class="testimonial-image"  src="<?php echo base_url()."assets/petcare/27.jpg";?>"alt="lady-profile">
		
		  <em> <a   href='<?php echo base_url()."users/globalpet"; ?>'   class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">EXPLORE NOW</a></em>
       
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
  
  
  
  <section class="white-section" id="grooming">

    
    <div class="row">

      <div class="pricing-column col-lg-4 col-md-4">
        <div class="card">
        <a  href='<?php echo base_url()."users/grooming"; ?>'   class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">GROOMING</a>
           
			       <!--   <button class="btn btn-lg btn-block btn-outline-dark"  href='<?php echo base_url()."users/grooming"; ?>' type="button">GROOMING</button>-->
          
     
        </div>
      </div>

      <div class="pricing-column col-lg-4 col-md-4">
        <div class="card">
		 <a  href='<?php echo base_url()."users/pettraining"; ?>'   class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">TRAINING</a>
		
       <!--  <button class="btn btn-lg btn-block btn-outline-dark"  href='<?php echo base_url()."users/pettraining"; ?>' type="button">TRAINING</button>-->
         
        </div>
      </div>

      <div class="pricing-column col-lg-4">
        <div class="card">
		<a  href='<?php echo base_url()."users/petdaycare"; ?>'   class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">DAY CARE</a>
       <!--  <button class="btn btn-lg btn-block btn-outline-dark"  href='<?php echo base_url()."users/petdaycare"; ?>' type="button">DAY CARE</button>-->
      
        </div>
      </div>



    </div>
	 <div class="row">

      <div class="pricing-column col-lg-4 col-md-4">
        <div class="card">
		
		<a  href='#'   class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">CARE TAKERS</a>
			        <!--   <button class="btn btn-lg btn-block btn-outline-dark" type="button">CARE TAKERS</button>-->
         
     
        </div>
      </div>

      <div class="pricing-column col-lg-4 col-md-4">
        <div class="card">
		<a  href='#'   class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">GO OUTDOORS</a>
         <!-- <button class="btn btn-lg btn-block btn-outline-dark" type="button">GO OUTDOORS</button>-->
         
        </div>
      </div>

      <div class="pricing-column col-lg-4">
        <div class="card">
		
         <!--  <button class="btn btn-lg btn-block btn-outline-dark" href='<?php echo base_url()."users/funeral"; ?>' type="button">FUNERAL SERVICES</button>-->
		   
      <a   href='<?php echo base_url()."users/funeral"; ?>'   class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">FUNERAL SERVICES</a>
        </div>
      </div>



    </div>

  </section>
  
  
  
  <div class="container-fluid">
  <div class="row">
    <div class="col-sm-9">
      <h1 align="center">Looking for some cool Pet Merchandise?</h1> 
    </div>
    <div class="col-sm-3">
	<!--  <button class="btn btn-lg btn-block btn-outline-dark" type="button">SHOP NOW</button>-->
	 <!-- <button class="button">SHOP NOW</button>-->
	 <a   href='<?php echo base_url()."users/petmerchandise"; ?>'   class="btn btn-secondary btn-lgs active" role="button" aria-pressed="true">SHOP NOW</a>
    </div>
  </div>
</div>




<section class="white-section" id="grooming">

    <h1 align="center">GROOMING PACKAGES</h1>
    

    <div class="row">

      <div class="pricing-columns col-lg-12">
        <div class="cards">
        
          <div class="card-body">
            <h3  align="center">PACKAGE 1</h3>
			
			<br>
			
			
            <h3 align="center">DESCRIPTION OF THE  PACKAGE</h3>
			<br>
			<br>
				   <div class="row" align="center">
				<div class="col-sm-6">
	
				<button class="button">SEE DETAILS</button>
				</div>
				
				<div class="col-sm-6">
	
				<button class="button">ADD TO CART</button>
				</div>
			
			</div>
    
    </div>
  
            
          </div>
        </div>
      </div>





    </div>
	
	 <div class="row">

      <div class="pricing-columns col-lg-12">
        <div class="cards">
        
          <div class="card-body">
            <h3  align="center">PACKAGE 2</h3>
			
			<br>
			
			
            <h3 align="center">DESCRIPTION OF THE  PACKAGE</h3>
			<br>
			<br>
				   <div class="row" align="center">
				<div class="col-sm-6">
	
				<button class="button">SEE DETAILS</button>
				</div>
				
				<div class="col-sm-6">
	
				<button class="button">ADD TO CART</button>
				</div>
			
			</div>

            
          </div>
        </div>
      </div>





    </div>
	
	 <div class="row">

      <div class="pricing-columns col-lg-12">
        <div class="cards">
        
          <div class="card-body">
            <h3  align="center">PACKAGE 3</h3>
			
			<br>
			
			
            <h3 align="center">DESCRIPTION OF THE  PACKAGE</h3>
			<br>
			<br>
            <div class="row" align="center">
				<div class="col-sm-6">
	
				<button class="button">SEE DETAILS</button>
				</div>
				
				<div class="col-sm-6">
	
				<button class="button">ADD TO CART</button>
				</div>
			
			</div>
            
          </div>
        </div>
      </div>





    </div>

  </section>
  
  
  
  <section class="white-section" id="grooming">

    <h1 align="center">TRAINING PACKAGES</h1>
    

    <div class="row">

      <div class="pricing-columns col-lg-12">
        <div class="cards">
        
          <div class="card-body">
            <h3  align="center">PACKAGE 1</h3>
			
			<br>
			
			
            <h3 align="center">DESCRIPTION OF THE  PACKAGE</h3>
			<br>
			<br>
			   <div class="row" align="center">
				<div class="col-sm-6">
	
				<button class="button">SEE DETAILS</button>
				</div>
				
				<div class="col-sm-6">
	
				<button class="button">ADD TO CART</button>
				</div>
			
			</div>
            
          </div>
        </div>
      </div>





    </div>
	
	 <div class="row">

      <div class="pricing-columns col-lg-12">
        <div class="cards">
        
          <div class="card-body">
            <h3  align="center">PACKAGE 2</h3>
			
			<br>
			
			
            <h3 align="center">DESCRIPTION OF THE  PACKAGE</h3>
			<br>
			<br>
         <div class="row" align="center">
				<div class="col-sm-6">
	
				<button class="button">SEE DETAILS</button>
				</div>
				
				<div class="col-sm-6">
	
				<button class="button">ADD TO CART</button>
				</div>
			
			</div>
            
          </div>
        </div>
      </div>





    </div>
	
	 <div class="row">

      <div class="pricing-columns col-lg-12">
        <div class="cards">
        
          <div class="card-body">
            <h3  align="center">PACKAGE 3</h3>
			
			<br>
			
			
            <h3 align="center">DESCRIPTION OF THE  PACKAGE</h3>
			<br>
			<br>
         <div class="row" align="center">
				<div class="col-sm-6">
	
				<button class="button">SEE DETAILS</button>
				</div>
				
				<div class="col-sm-6">
	
				<button class="button">ADD TO CART</button>
				</div>
			
			</div>
            
          </div>
        </div>
      </div>





    </div>

  </section>




  <section class="" id="">
 <h1 align="center">FEATURED CARETAKERS</h1>
   <br>
<br>   
  <div class="row">
<div class="car" style="width: 13rem;">
  <img class="card-img-top"src="<?php echo base_url()."assets/petcare/10.jpg";?>"alt="Card image cap" height=200 width=200>
  
 
</div>
<div class="car" style="width: 13rem;">
  <img class="card-img-top" src="<?php echo base_url()."assets/petcare/11.jpg";?>" alt="Card image cap" height=200 width=200>
 
</div>
<div class="car" style="width: 13rem;">
  <img class="card-img-top" src="<?php echo base_url()."assets/petcare/12.jpg";?>" alt="Card image cap" height=200 width=200>
 
</div>
<div class="car" style="width: 13rem;">
  <img class="card-img-top" src="<?php echo base_url()."assets/petcare/13.jpg";?>" alt="Card image cap" height=200 width=200>
 
</div>
<div class="car" style="width: 13rem;">
  <img class="card-img-top" src="<?php echo base_url()."assets/petcare/14.jpg";?>" alt="Card image cap" height=200 width=200>
 
</div>
<div class="car" style="width: 13rem;">
  <img class="card-img-top" src="<?php echo base_url()."assets/petcare/15.jpg";?>" alt="Card image cap" height=200 width=200>
 
</div>
<div class="car" style="width: 13rem;">
  <img class="card-img-top" src="<?php echo base_url()."assets/petcare/16.jpg";?>" alt="Card image cap" height=200 width=200>
 
</div>
</div>
  
  
   



  </section>
  
  
  <br>
  <br>
  <br>
  <br>
  
  <div class="container-fluid">
  <div class="row">
    <div class="col-sm-9">
      <h1 align="center">Take your pet outdoors with us</h1> 
    </div>
    <div class="col-sm-3">
	<!--  <button class="btn btn-lg btn-block btn-outline-dark" type="button">SHOP NOW</button>-->
	<a   href=''   class="btn btn-secondary btn-lgs active" role="button" aria-pressed="true">CONTACT US</a>
	  <!--<button class="button">CONTACT US</button>-->
    </div>
	
	 
  </div>
</div>




<br>
<br>
<br>
<br>


<div class="container-fluid">
<h1 align="center">DAYCARE FACILITIES</h1> 
<br>
<br>
<br>
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
								<label for="inputState">DISTANCE</label>
								<select name="distance" class='input100' id="inputState"   >
									<option >Any</option>
									<option >5 miles</option>
									<option>15 miles</option>
									<option>25 miles</option>
									<option>35 miles</option>
								</select>
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
						<label for="inputState" >How soon do you need someone?</label>
						<select  name="need" id="inputState" class='input100'  >
									<option>Any</option>
									<option>Right now</option>
									<option>Within a week</option>
									<option>Within a month</option>
									
									
						</select>
					</div>
					
					
					<div class="wrap-input100 " >
						<span class="focus-input100"></span>
						<label for="inputState" >Able to provide</label>
						<select  name="able" id="inputState" class='input100'  >
									<option>Any</option>
									<option>sitting</option>
									<option>Boarding</option>
									<option>Walking</option>
									<option>GROOMING</option>
									<option>TRAINING</option>
									
						</select>
					</div>
					
					
					<div class="wrap-input100 " >
						<span class="focus-input100"></span>
						<label for="inputState" >Hourly Rate</label>
						<select  name="rate" id="inputState" class='input100'  >
									<option>Any</option>
									<option> <$10-$10 </option>
									<option>$10-$15</option>
									<option>$20-$35</option>
									<option>$40-$55</option>
									<option>$60-$75</option>
									
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
include "servicessearch.php";
?>
</div>-->
<div class="col-sm-9">
      

      <div class="row">
        <div class="col-sm-4">
         <div class="card">
			<img  class="zoom w3-circle " src="<?php echo base_url()."assets/petcare/9.jpg";?>" alt="" border=3 height=200 width=200 style="padding:0 15px 0 15px;"></td>
			
	 
    </div>
        </div>
        <div class="col-sm-4">
         <div class="card">
	<img  class="zoom w3-circle " src="<?php echo base_url()."assets/petcare/8.jpg";?>" alt="" border=3 height=200 width=200 style="padding:0 15px 0 15px;"></td>
	 
	 
    </div>
        </div>
        <div class="col-sm-4">
         <div class="card">
	<img  class="zoom w3-circle " src="<?php echo base_url()."assets/petcare/7.jpg";?>" alt="" border=3 height=200 width=200 style="padding:0 15px 0 15px;"></td>
	 
	 
    </div>
        </div>
      </div>
	  
	  <br>
	  <BR>
	   <div class="row">
        <div class="col-sm-4">
          <div class="card">
	 <img  class="zoom w3-circle " src="<?php echo base_url()."assets/petcare/6.jpg";?>" alt="" border=3 height=200 width=200 style="padding:0 15px 0 15px;"></td>
	  
	 
    </div>
        </div>
        <div class="col-sm-4">
         <div class="card">
	 <img  class="zoom w3-circle " src="<?php echo base_url()."assets/petcare/5.jpg";?>" alt="" border=3 height=200 width=200 style="padding:0 15px 0 15px;"></td>
	  
	 
    </div>
        </div>
        <div class="col-sm-4">
        <div class="card">
	  <img  class="zoom w3-circle " src="<?php echo base_url()."assets/petcare/4.jpg";?>" alt="" border=3 height=200 width=200 style="padding:0 15px 0 15px;"></td>
	 
	 
    </div>
        </div>
      </div>
	    <br>
		  <BR>
      <div class="row">
        <div class="col-sm-4">
         <div class="card">
	  <img  class="zoom w3-circle " src="<?php echo base_url()."assets/petcare/1.jpg";?>" alt="" border=3 height=200 width=200 style="padding:0 15px 0 15px;"></td>
	 
	 
    </div>
        </div>
        <div class="col-sm-4">
          <div class="card">
	 <img  class="zoom w3-circle " src="<?php echo base_url()."assets/petcare/2.jpg";?>" alt="" border=3 height=200 width=200 style="padding:0 15px 0 15px;"></td>
	 
	 
    </div>
        </div>
        <div class="col-sm-4">
         <div class="card">
	 <img  class="zoom w3-circle " src="<?php echo base_url()."assets/petcare/3.jpg";?>" alt="" border=3 height=200 width=200 style="padding:0 15px 0 15px;"></td>
	 
	 
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
<br>

 <div class="container-fluid">
  <div class="row">
    <div class="col-sm-9">
      <h1 align="center">Bid Adieu to your loved pet(Funeral Services)</h1> 
    </div>
    <div class="col-sm-3">
	<!--  <button class="btn btn-lg btn-block btn-outline-dark" type="button">SHOP NOW</button>-->
	
	<a   href='<?php echo base_url()."users/funeral"; ?>'   class="btn btn-secondary btn-lgs active" role="button" aria-pressed="true">CONTACT US</a>
	 
	 <!-- <button   class="button"  href='<?php echo base_url()."users/funeral"; ?>'>CONTACT US</button>-->
    </div>
  </div>
</div>








  </body>
  </html>


  <!-- Press -->

