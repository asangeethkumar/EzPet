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
</style>
  <section class="colored-section" id="testimonials">

    <div id="testimonial-carousel" class="carousel slide" data-ride="false">
      <div class="carousel-inner">
        <div class="carousel-item active container-fluid">
          <h2 class="testimonial-text">Find a Pet For You</h2>
          <img class="testimonial-image" src="assets/images/1.jpg" alt="dog-profile">
       
		<em> <a href="<?php echo base_url('users/details/1');  ?>"   class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">GET A PET</a></em>
        </div>
		<div class="carousel-item container-fluid">
          <h2 class="testimonial-text">	Take Care of Your Pet </h2>
        <img class="testimonial-image" src="assets/images/8.jpg" alt="lady-profile">
         <!--  <em> <button type="button"  href="<?php echo base_url()."users/pethealth" ?>" class="btn btn-secondary">Schedule Veterinarian Appointment</button></em>-->
		   <em> <a href="<?php echo base_url('users/pethealth');  ?>"   class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Schedule Veterinarian Appointment</a></em>
        </div>
		<div class="carousel-item container-fluid">
          <h2 class="testimonial-text">	Get The Best Service for Your Pet </h2>
        <img class="testimonial-image" src="assets/images/mainBanner.jpg" alt="lady-profile">
		  <em> <a href="<?php echo base_url('users/petservices');  ?>"   class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Pet Services</a></em>
         <!--  <em> <button type="button" class="btn btn-secondary">Pet Services</button></em>-->
        </div>
		<div class="carousel-item container-fluid">
          <h2 class="testimonial-text">	Are You A Pet Industry Professional?  </h2>
        <img class="testimonial-image" src="assets/images/mainBanner1.jpg" alt="lady-profile">
		  <em> <a href="<?php echo base_url('users/forpros');  ?>"   class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">For Pros</a></em>
        <!--   <em> <button type="button" class="btn btn-secondary">For Pros</button></em>-->
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
        
           
			          <button class="btn btn-lg btn-block btn-outline-dark" type="button">GROOMING</button>
          
     
        </div>
      </div>

      <div class="pricing-column col-lg-4 col-md-4">
        <div class="card">
         <button class="btn btn-lg btn-block btn-outline-dark" type="button">TRAINING</button>
         
        </div>
      </div>

      <div class="pricing-column col-lg-4">
        <div class="card">
         <button class="btn btn-lg btn-block btn-outline-dark" type="button">DAY CARE</button>
      
        </div>
      </div>



    </div>
	 <div class="row">

      <div class="pricing-column col-lg-4 col-md-4">
        <div class="card">
			           <button class="btn btn-lg btn-block btn-outline-dark" type="button">CARE TAKERS</button>
         
     
        </div>
      </div>

      <div class="pricing-column col-lg-4 col-md-4">
        <div class="card">
          <button class="btn btn-lg btn-block btn-outline-dark" type="button">GO OUTDOORS</button>
         
        </div>
      </div>

      <div class="pricing-column col-lg-4">
        <div class="card">
           <button class="btn btn-lg btn-block btn-outline-dark" type="button">FUNERAL SERVICES</button>
		   
      
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
	  <button class="button">SHOP NOW</button>
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
				<div class="col-sm-3">
	
				<button class="buttons">SEE DETAILS</button>
				</div>
				
				<div class="col-sm-3">
	
				<button class="buttons">ADD TO CART</button>
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
				<div class="col-sm-3">
	
				<button class="buttons">SEE DETAILS</button>
				</div>
				
				<div class="col-sm-3">
	
				<button class="buttons">ADD TO CART</button>
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
				<div class="col-sm-3">
	
				<button class="buttons">SEE DETAILS</button>
				</div>
				
				<div class="col-sm-3">
	
				<button class="buttons">ADD TO CART</button>
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
				<div class="col-sm-3">
	
				<button class="buttons">SEE DETAILS</button>
				</div>
				
				<div class="col-sm-3">
	
				<button class="buttons">ADD TO CART</button>
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
				<div class="col-sm-3">
	
				<button class="buttons">SEE DETAILS</button>
				</div>
				
				<div class="col-sm-3">
	
				<button class="buttons">ADD TO CART</button>
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
				<div class="col-sm-3">
	
				<button class="buttons">SEE DETAILS</button>
				</div>
				
				<div class="col-sm-3">
	
				<button class="buttons">ADD TO CART</button>
				</div>
			
			</div>
            
          </div>
        </div>
      </div>





    </div>

  </section>




  </body>
  </html>


  <!-- Press -->

