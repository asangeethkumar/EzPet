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
          <h2 class="testimonial-text">Pet Food</h2>
          <img class="testimonial-image" src="<?php echo base_url()."assets/petcare/237.jpg";?>" alt="dog-profile">
       
		<em> <a   href='<?php echo base_url()."users/food"; ?>'  class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">SHOP NOW</a></em>
        </div>
		
		
		<div class="carousel-item container-fluid">
          <h2 class="testimonial-text">Pet Dental products</h2>
        <img class="testimonial-image"  src="<?php echo base_url()."assets/petcare/238.jpg";?>" alt="lady-profile">
        
		   <em> <a   href='<?php echo base_url()."users/dental"; ?>'   class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">SHOP NOW</a></em>
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
        <a  href='<?php echo base_url()."users/food"; ?>'   class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">PET FOOD</a>
           
			      
          
     
        </div>
      </div>

      <div class="pricing-column col-lg-4 col-md-4">
        <div class="card">
		 <a  href='<?php echo base_url()."users/otc"; ?>'   class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">OTC MEDICINES</a>
		
      
         
        </div>
      </div>

      <div class="pricing-column col-lg-4">
        <div class="card">
		<a  href='<?php echo base_url()."users/rx"; ?>'   class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">RX MEDICINES</a>
       
      
        </div>
      </div>



    </div>
	 <div class="row">

      <div class="pricing-column col-lg-4 col-md-4">
        <div class="card">
		
		<a  href='<?php echo base_url()."users/vitamins"; ?>'   class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">SUPPLEMENTS</a>
			       
         
     
        </div>
      </div>

      <div class="pricing-column col-lg-4 col-md-4">
        <div class="card">
		<a  href='<?php echo base_url()."users/treat"; ?>'   class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">TREAT AND CHEWS</a>
         
         
        </div>
      </div>

      <div class="pricing-column col-lg-4">
        <div class="card">
		
         
		   
      <a   href='<?php echo base_url()."users/diet"; ?>'   class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">DIET PLANS</a>
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
<h1 align="center">PET FOOD</h1> 
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
					<input class="input100" name="location"  type="search" placeholder="Search by Food Name" aria-label="Search">
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
						<label for="inputState" >PRODUCT TYPE</label>
						<select  name="product" id="inputState" class='input100'  >
									<option>Any</option>
									<option>Veg</option>
									<option>Non Veg</option>
									
									
									
						</select>
					</div>
					
					
					<div class="wrap-input100 " >
						<span class="focus-input100"></span>
						<label for="inputState" >PHYSICAL FOOD FORM</label>
						<select  name="food" id="inputState" class='input100'  >
									<option>Any</option>
									<option>Dry</option>
									<option>Wet</option>
									<option>Frozen</option>
									<option>Freeze-Dried</option>
									<option>Liquid</option>
									
						</select>
					</div>
					
					
					<div class="wrap-input100 " >
						<span class="focus-input100"></span>
						<label for="inputState" >BRANDS</label>
						<select  name="brand" id="inputState" class='input100'  >
									<option>Any</option>
									<option>9 Lives</option>
									<option>Acana</option>
									<option>Alpo</option>
									<option>Bil jac</option>
									<option>Blackwood</option>
									
						</select>
					</div>
					
					
					<div class="wrap-input100 " >
						<span class="focus-input100"></span>
						<label for="inputState" >SPECIAL DIETS</label>
						<select  name="diet" id="inputState" class='input100'  >
									<option>Any</option>
									<option>Grain free</option>
									<option>Raw food</option>
									<option>Weight control</option>
									<option>Prescription Diet</option>
									
									
						</select>
					</div>
					
					
				

				
				<div class="container-login100-form-btn">
						<button class="login100-form-btn" onclick="change()" id="submit" name="signupSubmit"  value="upload" type="submit">
							search
						</button>
						</div>
	  
</form>
    </div>
<!--
<div class="col-sm-9">
<?php
include "foodsearch.php";
?>
</div>-->
<div class="col-sm-9">
      

      <div class="row">
        <div class="col-sm-4">
         <div class="card">
			<img  class="zoom w3-circle " src="<?php echo base_url()."assets/petcare/59.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
			
	 
    </div>
        </div>
        <div class="col-sm-4">
         <div class="card">
	<img  class="zoom w3-circle " src="<?php echo base_url()."assets/petcare/58.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
	 
	 
    </div>
        </div>
        <div class="col-sm-4">
         <div class="card">
	<img  class="zoom w3-circle " src="<?php echo base_url()."assets/petcare/60.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
	 
	 
    </div>
        </div>
      </div>
	  
	  <br>
	  <BR>
	   <div class="row">
        <div class="col-sm-4">
          <div class="card">
	 <img  class="zoom w3-circle " src="<?php echo base_url()."assets/petcare/70.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
	  
	 
    </div>
        </div>
        <div class="col-sm-4">
         <div class="card">
	 <img  class="zoom w3-circle " src="<?php echo base_url()."assets/petcare/71.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
	  
	 
    </div>
        </div>
        <div class="col-sm-4">
        <div class="card">
	  <img  class="zoom w3-circle " src="<?php echo base_url()."assets/petcare/72.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
	 
	 
    </div>
        </div>
      </div>
	    <br>
		  <BR>
      <div class="row">
        <div class="col-sm-4">
         <div class="card">
	  <img  class="zoom w3-circle " src="<?php echo base_url()."assets/petcare/73.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
	 
	 
    </div>
        </div>
        <div class="col-sm-4">
          <div class="card">
	 <img  class="zoom w3-circle " src="<?php echo base_url()."assets/petcare/74.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
	 
	 
    </div>
        </div>
        <div class="col-sm-4">
         <div class="card">
	 <img  class="zoom w3-circle " src="<?php echo base_url()."assets/petcare/75.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
	 
	 
    </div>
        </div>
      </div>
    </div>
  </div>
</div>


<br>
<br>
<br>





<div class="container-fluid">
<h1 align="center">MEDICINES FOR YOUR PET</h1> 
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
					<input class="input100" name="location"  type="search" placeholder="Search by Medicine" aria-label="Search">
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
						
						
						<div class="wrap-input100 " >
						<span class="focus-input100"></span>
						<label for="inputState" >BRANDS</label>
						<select  name="brand" id="inputState" class='input100'  >
									<option>Any</option>
									<option>Bio Groom</option>
									<option>Intas</option>
									<option>Pet Mankind</option>
									<option>Pet Naturals</option>
									<option>Virbac</option>
									
						</select>
					</div>
						
						<div class="wrap-input100" >
						<span class="focus-input100"></span>
						<label for="inputState" >HEALTH CONSIDERATION</label>
						<select  name="health" id="inputState" class='input100'  >
									<option>Any</option>
									<option>Aggression control</option>
									<option>Anti-inflammatory</option>
									<option>Anti-Lick</option>
									<option>Anti bacterial and Anti fungal</option>
									<option>Claming</option>
									<option>Diarrhea</option>
									<option>Ear care</option>
									<option>Eye and rential health</option>
									
									
						</select>
					</div>
					
					
					<div class="wrap-input100 " >
						<span class="focus-input100"></span>
						<label for="inputState" >VOLUME</label>
						<select  name="volume" id="inputState" class='input100'  >
									<option>Any</option>
									<option>30 ml</option>
									<option>50 ml</option>
									<option>100 ml</option>
									<option>200 ml</option>
									
									
						</select>
					</div>
					
					
					<div class="wrap-input100 " >
						<span class="focus-input100"></span>
						<label for="inputState" >QUANTITY</label>
						<select  name="quantity" id="inputState" class='input100'  >
									<option>Any</option>
									<option>60 tabs</option>
									<option>160 tabs</option>
									<option>Extra</option>
									<option>12 tabs</option>
									<option>20 tabs</option>
									
						</select>
					</div>
					
					
					
					
				

				
				<div class="container-login100-form-btn">
						<button class="login100-form-btn" onclick="change()" id="submit" name="msignupSubmit"  value="upload" type="submit">
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
			<img  class="zoom w3-circle " src="<?php echo base_url()."assets/petcare/49.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
			
	 
    </div>
        </div>
        <div class="col-sm-4">
         <div class="card">
	<img  class="zoom w3-circle " src="<?php echo base_url()."assets/petcare/50.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
	 
	 
    </div>
        </div>
        <div class="col-sm-4">
         <div class="card">
	<img  class="zoom w3-circle " src="<?php echo base_url()."assets/petcare/51.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
	 
	 
    </div>
        </div>
      </div>
	  
	  <br>
	  <BR>
	   <div class="row">
        <div class="col-sm-4">
          <div class="card">
	 <img  class="zoom w3-circle " src="<?php echo base_url()."assets/petcare/52.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
	  
	 
    </div>
        </div>
        <div class="col-sm-4">
         <div class="card">
	 <img  class="zoom w3-circle " src="<?php echo base_url()."assets/petcare/53.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
	  
	 
    </div>
        </div>
        <div class="col-sm-4">
        <div class="card">
	  <img  class="zoom w3-circle " src="<?php echo base_url()."assets/petcare/54.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
	 
	 
    </div>
        </div>
      </div>
	    <br>
		  <BR>
      <div class="row">
        <div class="col-sm-4">
         <div class="card">
	  <img  class="zoom w3-circle " src="<?php echo base_url()."assets/petcare/55.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
	 
	 
    </div>
        </div>
        <div class="col-sm-4">
          <div class="card">
	 <img  class="zoom w3-circle " src="<?php echo base_url()."assets/petcare/56.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
	 
	 
    </div>
        </div>
        <div class="col-sm-4">
         <div class="card">
	 <img  class="zoom w3-circle " src="<?php echo base_url()."assets/petcare/57.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
	 
	 
    </div>
        </div>
      </div>
    </div>
  </div>
</div>





<br>
<br>
<br>



<div class="container-fluid">
<h1 align="center">VITAMINS AND SUPPLEMENTS</h1> 
<br>
<br>
<br>
  <div class="row content">
    <div class="col-sm-3 sidenav hidden-xs">
      <h2>Serach and filters</h2>
	  
	  
	<form class="login100-form "  action="" method="post" >
						
						<br>
						<br>
						<br>
						<div class="wrap-input100">
					<input class="input100" name="location"  type="search" placeholder="Search by Vitamin" aria-label="Search">
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
						
						
						<div class="wrap-input100 " >
						<span class="focus-input100"></span>
						<label for="inputState" >BRANDS</label>
						<select  name="brand" id="inputState" class='input100'  >
									<option>Any</option>
									<option>Bio Groom</option>
									<option>Intas</option>
									<option>Pet Mankind</option>
									<option>Pet Naturals</option>
									<option>Virbac</option>
									
						</select>
					</div>
						
						<div class="wrap-input100" >
						<span class="focus-input100"></span>
						<label for="inputState" >HEALTH CONSIDERATION</label>
						<select  name="health" id="inputState" class='input100'  >
									<option>Any</option>
									<option>Aggression control</option>
									<option>Anti-inflammatory</option>
									<option>Anti-Lick</option>
									<option>Anti bacterial and Anti fungal</option>
									<option>Claming</option>
									<option>Diarrhea</option>
									<option>Ear care</option>
									<option>Eye and rential health</option>
									
									
						</select>
					</div>
					
					
					<div class="wrap-input100 " >
						<span class="focus-input100"></span>
						<label for="inputState" >VOLUME</label>
						<select  name="volume" id="inputState" class='input100'  >
									<option>Any</option>
									<option>30 ml</option>
									<option>50 ml</option>
									<option>100 ml</option>
									<option>200 ml</option>
									
									
						</select>
					</div>
					
					
					<div class="wrap-input100 " >
						<span class="focus-input100"></span>
						<label for="inputState" >QUANTITY</label>
						<select  name="quantity" id="inputState" class='input100'  >
									<option>Any</option>
									<option>60 tabs</option>
									<option>160 tabs</option>
									<option>Extra</option>
									<option>12 tabs</option>
									<option>20 tabs</option>
									
						</select>
					</div>
					<div class="wrap-input100 " >
						<span class="focus-input100"></span>
						<label for="inputState" >COMPOSITIONS</label>
						<select  name="compositions" id="inputState" class='input100'  >
									<option>any</option>
									<option>Drops</option>
									<option>injection</option>
									<option>Oil</option>
									<option>Powder</option>
									<option>Supplement</option>
									<option>Syrup</option>
									<option>Tablets</option>
									
						</select>
					</div>
					
					
				
					
				

				
				<div class="container-login100-form-btn">
						<button class="login100-form-btn" onclick="change()" id="submit" name="vsignupSubmit"  value="upload" type="submit">
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
			<img  class="zoom w3-circle " src="<?php echo base_url()."assets/petcare/40.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
			
	 
    </div>
        </div>
        <div class="col-sm-4">
         <div class="card">
	<img  class="zoom w3-circle " src="<?php echo base_url()."assets/petcare/41.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
	 
	 
    </div>
        </div>
        <div class="col-sm-4">
         <div class="card">
	<img  class="zoom w3-circle " src="<?php echo base_url()."assets/petcare/42.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
	 
	 
    </div>
        </div>
      </div>
	  
	  <br>
	  <BR>
	   <div class="row">
        <div class="col-sm-4">
          <div class="card">
	 <img  class="zoom w3-circle " src="<?php echo base_url()."assets/petcare/43.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
	  
	 
    </div>
        </div>
        <div class="col-sm-4">
         <div class="card">
	 <img  class="zoom w3-circle " src="<?php echo base_url()."assets/petcare/44.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
	  
	 
    </div>
        </div>
        <div class="col-sm-4">
        <div class="card">
	  <img  class="zoom w3-circle " src="<?php echo base_url()."assets/petcare/45.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
	 
	 
    </div>
        </div>
      </div>
	    <br>
		  <BR>
      <div class="row">
        <div class="col-sm-4">
         <div class="card">
	  <img  class="zoom w3-circle " src="<?php echo base_url()."assets/petcare/46.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
	 
	 
    </div>
        </div>
        <div class="col-sm-4">
          <div class="card">
	 <img  class="zoom w3-circle " src="<?php echo base_url()."assets/petcare/47.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
	 
	 
    </div>
        </div>
        <div class="col-sm-4">
         <div class="card">
	 <img  class="zoom w3-circle " src="<?php echo base_url()."assets/petcare/48.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
	 
	 
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








<div class="container-fluid">
<h1 align="center">DIET PLANS</h1>
<br>
<br>
<br>
  <div class="row content">
    <div class="col-sm-3 sidenav hidden-xs">
       <div class="col-sm-4">
         <div class="card">
	 <img  class=" " src="<?php echo base_url()."assets/petcare/28.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
	 
	 
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
		
		  <div class="col-sm-4">
         <div class="card">
	 <img  class="" src="<?php echo base_url()."assets/petcare/29.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
	 
	 
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
	<br>
		
		  <div class="col-sm-4">
         <div class="card">
	 <img  class=" " src="<?php echo base_url()."assets/petcare/30.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
	 
	 
    </div>
        </div>
    </div>
    <br>
    
    <div class="col-sm-9">
      

      <div class="row">
        <div class="col-sm-4">
         <div class="card">
			<img  class=" " src="<?php echo base_url()."assets/petcare/31.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
			
	 
    </div>
        </div>
        <div class="col-sm-4">
         <div class="card">
	<img  class="" src="<?php echo base_url()."assets/petcare/32.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
	 
	 
    </div>
        </div>
        <div class="col-sm-4">
         <div class="card">
	<img  class="" src="<?php echo base_url()."assets/petcare/33.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
	 
	 
    </div>
        </div>
      </div>
	  
	  <br>
	  <BR>
	   <div class="row">
        <div class="col-sm-4">
          <div class="card">
	 <img  class="" src="<?php echo base_url()."assets/petcare/34.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
	  
	 
    </div>
        </div>
        <div class="col-sm-4">
         <div class="card">
	 <img  class=" " src="<?php echo base_url()."assets/petcare/35.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
	  
	 
    </div>
        </div>
        <div class="col-sm-4">
        <div class="card">
	  <img  class="" src="<?php echo base_url()."assets/petcare/36.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
	 
	 
    </div>
        </div>
      </div>
	    <br>
		  <BR>
      <div class="row">
        <div class="col-sm-4">
         <div class="card">
	  <img  class=" " src="<?php echo base_url()."assets/petcare/37.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
	 
	 
    </div>
        </div>
        <div class="col-sm-4">
          <div class="card">
	 <img  class="" src="<?php echo base_url()."assets/petcare/38.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
	 
	 
    </div>
        </div>
        <div class="col-sm-4">
         <div class="card">
	 <img  class="" src="<?php echo base_url()."assets/petcare/39.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
	 
	 
    </div>
        </div>
      </div>
    </div>
  </div>
</div>




  </body>
  </html>


  <!-- Press -->

