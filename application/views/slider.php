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
</style>




 








  <section class="colored-section" id="testimonials">

    <div id="testimonial-carousel" class="carousel slide" data-ride="false">
      <div class="carousel-inner">
        <div class="carousel-item active container-fluid">
          <h2 class="testimonial-text">Find a Pet For You</h2>
          <img class="testimonial-image" src="<?php echo base_url()."assets/images/1.jpg";?>" alt="dog-profile">
       
		<em> <a href="<?php echo base_url('users/details/1');  ?>"   class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">GET A PET</a></em>
        </div>
		
		
		<div class="carousel-item container-fluid">
          <h2 class="testimonial-text">	Take Care of Your Pet </h2>
        <img class="testimonial-image"  src="<?php echo base_url()."assets/images/8.jpg";?>"  alt="lady-profile">
        
		   <em> <a href="<?php echo base_url('users/schedule');  ?>"   class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Schedule Veterinarian Appointment</a></em>
        </div>
		
		
		
		<div class="carousel-item container-fluid">
          <h2 class="testimonial-text">	Get The Best Service for Your Pet </h2>
        <img class="testimonial-image"  src="<?php echo base_url()."assets/images/mainBanner.jpg";?>"  alt="lady-profile">
		  <em> <a href="<?php echo base_url('users/petservices');  ?>"   class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Pet Services</a></em>
         
        </div>
		
		
		
		<div class="carousel-item container-fluid">
          <h2 class="testimonial-text">	Are You A Pet Industry Professional?  </h2>
        <img class="testimonial-image"  src="<?php echo base_url()."assets/images/mainBanner1.jpg";?>"  alt="lady-profile">
		  <em> <a href="<?php echo base_url('users/propet');  ?>"   class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">For Pros</a></em>
        
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
  <br>
  </body>
  </html>


  <!-- Press -->

