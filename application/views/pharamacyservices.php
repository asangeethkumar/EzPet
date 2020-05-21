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
/*slider*/
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

  .container-fluid {
    padding: 60px 50px;
  }
.container-fluids {
    padding: 9% 37%;
  }




</style>

  <section class="colored-section" id="testimonials">

    <div id="testimonial-carousel" class="carousel slide" data-ride="false">
      <div class="carousel-inner">
        <div class="carousel-item active container-fluid">
          <h2 class="testimonial-text">Schedule Veterinarian Appointment</h2>
          <img class="testimonial-image" src="<?php echo base_url()."assets/petcare/198.jpg";?>" alt="dog-profile">
       
		<em> <a   href='<?php echo base_url()."users/schedule"; ?>'  class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">CONSULT NOW</a></em>
        </div>
		
		
		<div class="carousel-item container-fluid">
          <h2 class="testimonial-text">Dental Care Appointment</h2>
        <img class="testimonial-image"  src="<?php echo base_url()."assets/petcare/197.jpg";?>" alt="lady-profile">
        
		   <em> <a   href='<?php echo base_url()."users/dconsult"; ?>'   class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">CONSULT NOW</a></em>
        </div>
		
		
		<div class="carousel-item container-fluid">
          <h2 class="testimonial-text">Prescription Diets</h2>
        <img class="testimonial-image"  src="<?php echo base_url()."assets/petcare/35.jpg";?>" alt="lady-profile">
		
		  <em> <a    href='<?php echo base_url()."users/diet"; ?>' class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">CONSULT NOW</a></em>
        
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
        <a  href='<?php echo base_url()."users/schedule"; ?>'   class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">CONSULTATION</a>
           
			      
          
     
        </div>
      </div>

      <div class="pricing-column col-lg-4 col-md-4">
        <div class="card">
		 <a  href='<?php echo base_url()."users/vaccine"; ?>'   class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">VACCINATION</a>
		
      
         
        </div>
      </div>

      <div class="pricing-column col-lg-4">
        <div class="card">
		<a  href='<?php echo base_url()."users/genetic"; ?>'   class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">TEST</a>
       
      
        </div>
      </div>



    </div>
	 <div class="row">

      <div class="pricing-column col-lg-4 col-md-4">
        <div class="card">
		
		<a  href='<?php echo base_url()."users/lab"; ?>'   class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">DIAGNOSTICS</a>
			       
         
     
        </div>
      </div>

      <div class="pricing-column col-lg-4 col-md-4">
        <div class="card">
		<a  href='<?php echo base_url()."users/ultra"; ?>'   class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">X-RAY,MRI..</a>
         
         
        </div>
      </div>

      <div class="pricing-column col-lg-4">
        <div class="card">
		
         
		   
      <a   href='<?php echo base_url()."users/insurance"; ?>'   class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">INSURANCE</a>
        </div>
      </div>



    </div>

  </section>
  
  
  
  <div class="container-fluid">
  <div class="row">
    <div class="col-sm-9">
      <h1 align="center">Get your pet a Medical Consultation</h1> 
    </div>
    <div class="col-sm-3">
	
	 <a   href='<?php echo base_url()."users/getc"; ?>'   class="btn btn-secondary btn-lgs active" role="button" aria-pressed="true">CONSULT  NOW</a>
    </div>
  </div>
</div>



<div class="container-fluid">
<h1 align="center">AVALIABLE VETERINARIANS</h1>
<br>
<br>
<br>
  <div class="row content">
    <div class="col-sm-3 sidenav hidden-xs">
       <div class="col-sm-4">
         <div class="card">
	 <img  class=" " src="<?php echo base_url()."assets/petcare/189.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
	 
	 
    </div>
        </div>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br><br>
		<br>
		<br>
	
		
		
		
		  <div class="col-sm-4">
         <div class="card">
	 <img  class="" src="<?php echo base_url()."assets/petcare/190.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
	 
	 
    </div>
        </div>
		
		
	
		<br>
		<br>
			<br>
		<br>
		<br>
		<br><br>
		<br>
		<br>
		<br>
		<br>
		
	
		
		  <div class="col-sm-4">
         <div class="card">
	 <img  class=" " src="<?php echo base_url()."assets/petcare/191.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
	 
	 
    </div>
        </div>
    </div>
    <br>
    
    <div class="col-sm-9">
      

      <div class="row">
        <div class="col-sm-4">
         <div class="card">
			<img  class=" " src="<?php echo base_url()."assets/petcare/192.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
			
	 
    </div>
        </div>
        <div class="col-sm-4">
         <div class="card">
	<img  class="" src="<?php echo base_url()."assets/petcare/193.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
	 
	 
    </div>
        </div>
        <div class="col-sm-4">
         <div class="card">
	<img  class="" src="<?php echo base_url()."assets/petcare/194.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
	 
	 
    </div>
        </div>
      </div>
	  
	  <br>
	  <BR>
	   <div class="row">
        <div class="col-sm-4">
          <div class="card">
	 <img  class="" src="<?php echo base_url()."assets/petcare/201.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
	  
	 
    </div>
        </div>
        <div class="col-sm-4">
         <div class="card">
	 <img  class=" " src="<?php echo base_url()."assets/petcare/196.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
	  
	 
    </div>
        </div>
        <div class="col-sm-4">
        <div class="card">
	  <img  class="" src="<?php echo base_url()."assets/petcare/197.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
	 
	 
    </div>
        </div>
      </div>
	    <br>
		  <BR>
      <div class="row">
        <div class="col-sm-4">
         <div class="card">
	  <img  class=" " src="<?php echo base_url()."assets/petcare/198.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
	 
	 
    </div>
        </div>
        <div class="col-sm-4">
          <div class="card">
	 <img  class="" src="<?php echo base_url()."assets/petcare/199.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
	 
	 
    </div>
        </div>
        <div class="col-sm-4">
         <div class="card">
	 <img  class="" src="<?php echo base_url()."assets/petcare/200.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
	 
	 
    </div>
        </div>
      </div>
    </div>
  </div>
</div>


  

  
  
  <div class="container-fluid">
<h1 align="center">GET YOUR PET A HEALTH INSURANCE</h1>
<br>
<br>
<br>
  <div class="row content">
    <div class="col-sm-3 sidenav hidden-xs">
       <div class="col-sm-4">
         <div class="card">
	 <img  class=" " src="<?php echo base_url()."assets/petcare/202.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
	 
	 
    </div>
        </div>
		<br>
		<br>
			<br>
		<br>
		<br>
		<br><br>
		<br>
		<br>
		<br>
		<br>
		
		  <div class="col-sm-4">
         <div class="card">
	 <img  class="" src="<?php echo base_url()."assets/petcare/203.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
	 
	 
    </div>
        </div>
		
		

		<br>
			<br>
		<br>
		<br>
		<br><br>
		<br>
		<br>
		<br>
		<br>
		<br>
	
		
		  <div class="col-sm-4">
         <div class="card">
	 <img  class=" " src="<?php echo base_url()."assets/petcare/204.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
	 
	 
    </div>
        </div>
    </div>
    <br>
    
    <div class="col-sm-9">
      

      <div class="row">
        <div class="col-sm-4">
         <div class="card">
			<img  class=" " src="<?php echo base_url()."assets/petcare/205.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
			
	 
    </div>
        </div>
        <div class="col-sm-4">
         <div class="card">
	<img  class="" src="<?php echo base_url()."assets/petcare/206.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
	 
	 
    </div>
        </div>
        <div class="col-sm-4">
         <div class="card">
	<img  class="" src="<?php echo base_url()."assets/petcare/207.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
	 
	 
    </div>
        </div>
      </div>
	  
	  <br>
	  <BR>
	   <div class="row">
        <div class="col-sm-4">
          <div class="card">
	 <img  class="" src="<?php echo base_url()."assets/petcare/208.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
	  
	 
    </div>
        </div>
        <div class="col-sm-4">
         <div class="card">
	 <img  class=" " src="<?php echo base_url()."assets/petcare/209.png";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
	  
	 
    </div>
        </div>
        <div class="col-sm-4">
        <div class="card">
	  <img  class="" src="<?php echo base_url()."assets/petcare/210.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
	 
	 
    </div>
        </div>
      </div>
	    <br>
		  <BR>
      <div class="row">
        <div class="col-sm-4">
         <div class="card">
	  <img  class=" " src="<?php echo base_url()."assets/petcare/211.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
	 
	 
    </div>
        </div>
        <div class="col-sm-4">
          <div class="card">
	 <img  class="" src="<?php echo base_url()."assets/petcare/212.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
	 
	 
    </div>
        </div>
        <div class="col-sm-4">
         <div class="card">
	 <img  class="" src="<?php echo base_url()."assets/petcare/213.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
	 
	 
    </div>
        </div>
      </div>
    </div>
  </div>
</div>



<br>
<br>




  <section class="" id="">
 <h1 align="center">MEDICINES FOR YOUR PET</h1>
   <br>
<br>   
  <div class="row">
<div class="car" style="width: 13rem;">
  <img class="card-img-top"src="<?php echo base_url()."assets/petcare/40.jpg";?>"alt="Card image cap" height=100 width=200>
  
 
</div>
<div class="car" style="width: 13rem;">
  <img class="card-img-top" src="<?php echo base_url()."assets/petcare/41.jpg";?>" alt="Card image cap" height=100 width=200>
 
</div>
<div class="car" style="width: 13rem;">
  <img class="card-img-top" src="<?php echo base_url()."assets/petcare/42.jpg";?>" alt="Card image cap" height=100 width=200>
 
</div>
<div class="car" style="width: 13rem;">
  <img class="card-img-top" src="<?php echo base_url()."assets/petcare/43.jpg";?>" alt="Card image cap" height=100 width=200>
 
</div>
<div class="car" style="width: 13rem;">
  <img class="card-img-top" src="<?php echo base_url()."assets/petcare/44.jpg";?>" alt="Card image cap" height=100 width=200>
 
</div>
<div class="car" style="width: 13rem;">
  <img class="card-img-top" src="<?php echo base_url()."assets/petcare/45.jpg";?>" alt="Card image cap" height=100 width=200>
 
</div>
<div class="car" style="width: 13rem;">
  <img class="card-img-top" src="<?php echo base_url()."assets/petcare/46.jpg";?>" alt="Card image cap" height=100 width=200>
 
</div>
</div>
  
  
   



  </section>
  
  
  
  
  
  
  <section class="" id="">
 
   <br>
<br>   
  <div class="row">
<div class="car" style="width: 13rem;">
  <img class="card-img-top"src="<?php echo base_url()."assets/petcare/47.jpg";?>"alt="Card image cap" height=100 width=200>
  
 
</div>
<div class="car" style="width: 13rem;">
  <img class="card-img-top" src="<?php echo base_url()."assets/petcare/48.jpg";?>" alt="Card image cap" height=100 width=200>
 
</div>
<div class="car" style="width: 13rem;">
  <img class="card-img-top" src="<?php echo base_url()."assets/petcare/49.jpg";?>" alt="Card image cap" height=100 width=200>
 
</div>
<div class="car" style="width: 13rem;">
  <img class="card-img-top" src="<?php echo base_url()."assets/petcare/50.jpg";?>" alt="Card image cap" height=100 width=200>
 
</div>
<div class="car" style="width: 13rem;">
  <img class="card-img-top" src="<?php echo base_url()."assets/petcare/51.jpg";?>" alt="Card image cap" height=100 width=200>
 
</div>
<div class="car" style="width: 13rem;">
  <img class="card-img-top" src="<?php echo base_url()."assets/petcare/52.jpg";?>" alt="Card image cap" height=100 width=200>
 
</div>
<div class="car" style="width: 13rem;">
  <img class="card-img-top" src="<?php echo base_url()."assets/petcare/53.jpg";?>" alt="Card image cap" height=100 width=200>
 
</div>
</div>
  
  
   



  </section>
  
  
  
  
  
  <section class="" id="">

   <br>
<br>   
  <div class="row">
<div class="car" style="width: 13rem;">
  <img class="card-img-top"src="<?php echo base_url()."assets/petcare/54.jpg";?>"alt="Card image cap" height=100 width=200>
  
 
</div>
<div class="car" style="width: 13rem;">
  <img class="card-img-top" src="<?php echo base_url()."assets/petcare/55.jpg";?>" alt="Card image cap" height=100 width=200>
 
</div>
<div class="car" style="width: 13rem;">
  <img class="card-img-top" src="<?php echo base_url()."assets/petcare/56.jpg";?>" alt="Card image cap" height=100 width=200>
 
</div>
<div class="car" style="width: 13rem;">
  <img class="card-img-top" src="<?php echo base_url()."assets/petcare/57.jpg";?>" alt="Card image cap" height=100 width=200>
 
</div>
<div class="car" style="width: 13rem;">
  <img class="card-img-top" src="<?php echo base_url()."assets/petcare/214.jpg";?>" alt="Card image cap" height=100 width=200>
 
</div>
<div class="car" style="width: 13rem;">
  <img class="card-img-top" src="<?php echo base_url()."assets/petcare/215.jpg";?>" alt="Card image cap" height=100 width=200>
 
</div>
<div class="car" style="width: 13rem;">
  <img class="card-img-top" src="<?php echo base_url()."assets/petcare/216.jpg";?>" alt="Card image cap" height=100 width=200>
 
</div>
</div>
  
  
   



  </section>
  
  
  
  
  <section class="" id="">
 
   <br>
<br>   
  <div class="row">
<div class="car" style="width: 13rem;">
  <img class="card-img-top"src="<?php echo base_url()."assets/petcare/217.jpg";?>"alt="Card image cap" height=100 width=200>
  
 
</div>
<div class="car" style="width: 13rem;">
  <img class="card-img-top" src="<?php echo base_url()."assets/petcare/218.jpg";?>" alt="Card image cap" height=100 width=200>
 
</div>
<div class="car" style="width: 13rem;">
  <img class="card-img-top" src="<?php echo base_url()."assets/petcare/219.jpg";?>" alt="Card image cap" height=100 width=200>
 
</div>
<div class="car" style="width: 13rem;">
  <img class="card-img-top" src="<?php echo base_url()."assets/petcare/220.jpg";?>" alt="Card image cap" height=100 width=200>
 
</div>
<div class="car" style="width: 13rem;">
  <img class="card-img-top" src="<?php echo base_url()."assets/petcare/221.jpg";?>" alt="Card image cap" height=100 width=200>
 
</div>
<div class="car" style="width: 13rem;">
  <img class="card-img-top" src="<?php echo base_url()."assets/petcare/222.jpg";?>" alt="Card image cap" height=100 width=200>
 
</div>
<div class="car" style="width: 13rem;">
  <img class="card-img-top" src="<?php echo base_url()."assets/petcare/223.jpg";?>" alt="Card image cap" height=100 width=200>
 
</div>
</div>
  
  
   



  </section>
  
  <br>
  <br>



<br>
<br>
<br>

  <div class="container-fluid">
<h1 align="center">DIAGNOSIS AND TESTS</h1>
<br>
<br>
<br>
  <div class="row content">
    <div class="col-sm-3 sidenav hidden-xs">
       <div class="col-sm-4">
         <div class="card">
	 <img  class=" " src="<?php echo base_url()."assets/petcare/224.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
	 
	 
    </div>
        </div>
	
		<br>
			<br>
		<br>
		<br>
		<br><br>
		<br>
		<br>
		<br>
		<br>
		<br>
		
		  <div class="col-sm-4">
         <div class="card">
	 <img  class="" src="<?php echo base_url()."assets/petcare/225.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
	 
	 
    </div>
        </div>
		
		
	
		<br>
			<br>
		<br>
		<br>
		<br><br>
		<br>
		<br>
		<br>
		<br>
		<br>	
		
		  <div class="col-sm-4">
         <div class="card">
	 <img  class=" " src="<?php echo base_url()."assets/petcare/226.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
	 
	 
    </div>
        </div>
    </div>
    <br>
    
    <div class="col-sm-9">
      

      <div class="row">
        <div class="col-sm-4">
         <div class="card">
			<img  class=" " src="<?php echo base_url()."assets/petcare/227.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
			
	 
    </div>
        </div>
        <div class="col-sm-4">
         <div class="card">
	<img  class="" src="<?php echo base_url()."assets/petcare/228.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
	 
	 
    </div>
        </div>
        <div class="col-sm-4">
         <div class="card">
	<img  class="" src="<?php echo base_url()."assets/petcare/229.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
	 
	 
    </div>
        </div>
      </div>
	  
	  <br>
	  <BR>
	   <div class="row">
        <div class="col-sm-4">
          <div class="card">
	 <img  class="" src="<?php echo base_url()."assets/petcare/230.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
	  
	 
    </div>
        </div>
        <div class="col-sm-4">
         <div class="card">
	 <img  class=" " src="<?php echo base_url()."assets/petcare/231.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
	  
	 
    </div>
        </div>
        <div class="col-sm-4">
        <div class="card">
	  <img  class="" src="<?php echo base_url()."assets/petcare/232.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
	 
	 
    </div>
        </div>
      </div>
	    <br>
		  <BR>
      <div class="row">
        <div class="col-sm-4">
         <div class="card">
	  <img  class=" " src="<?php echo base_url()."assets/petcare/234.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
	 
	 
    </div>
        </div>
        <div class="col-sm-4">
          <div class="card">
	 <img  class="" src="<?php echo base_url()."assets/petcare/235.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
	 
	 
    </div>
        </div>
        <div class="col-sm-4">
         <div class="card">
	 <img  class="" src="<?php echo base_url()."assets/petcare/236.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
	 
	 
    </div>
        </div>
      </div>
    </div>
  </div>
</div>





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










  </body>
  </html>


  <!-- Press -->

