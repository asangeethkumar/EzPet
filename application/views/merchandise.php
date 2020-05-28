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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


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
</style>
<script type="text/javascript">
$(document).ready(function () {
	$(".submit").click(function(event) {
event.preventDefault();
	
    jquery.ajax({
        type:"POST",
        url:"<?php echo base_url(); ?>users/petmerchant",
        data:dataString,

        success:function (data) {
            $('#users').html(data);
        }

    });
    event.preventDefault();
});
</script>
 
  
    <section class="colored-section" id="testimonials">

    <div id="testimonial-carousel" class="carousel slide" data-ride="false">
      <div class="carousel-inner">
        <div class="carousel-item active container-fluid">
          <h2 class="testimonial-text">Pet FashionOulet </h2>
          <img class="testimonial-image" src="<?php echo base_url()."assets/petcare/123.jpg";?>" alt="dog-profile">
       
		<em> <a href='<?php echo base_url()."users/petfashionoutlet"; ?>'    class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">SHOP NOW</a></em>
        </div>
		
		
		<div class="carousel-item container-fluid">
          <h2 class="testimonial-text">Pet Toys</h2>
        <img class="testimonial-image"  src="<?php echo base_url()."assets/petcare/121.jpg";?>"  alt="lady-profile">
        
		   <em> <a    href='<?php echo base_url()."users/pettoys"; ?>'  class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">SHOP NOW</a></em>
        </div>
		
		
		
		<div class="carousel-item container-fluid">
          <h2 class="testimonial-text">	 Diapers, Training Pads, etc.</h2>
        <img class="testimonial-image"  src="<?php echo base_url()."assets/petcare/127.jpg";?>"  alt="lady-profile">
		  <em> <a     href='<?php echo base_url()."users/dia"; ?>' class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">SHOP NOW</a></em>
         
        </div>
		
		
		
		<div class="carousel-item container-fluid">
          <h2 class="testimonial-text">pet Bedding</h2>
        <img class="testimonial-image"  src="<?php echo base_url()."assets/petcare/143.jpg";?>"  alt="lady-profile">
		  <em> <a    href='<?php echo base_url()."users/petbedding"; ?>' class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">SHOP NOW</a></em>
        
        </div>
		
		
		
		<div class="carousel-item container-fluid">
          <h2 class="testimonial-text">	Pet Safety </h2>
        <img class="testimonial-image"  src="<?php echo base_url()."assets/petcare/142.jpg";?>"  alt="lady-profile">
		  <em> <a     href='<?php echo base_url()."users/petsafety"; ?>' class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">SHOP NOW</a></em>
        
        </div>
		
		
		<div class="carousel-item container-fluid">
          <h2 class="testimonial-text">	Pet Accessories </h2>
        <img class="testimonial-image"  src="<?php echo base_url()."assets/petcare/185.jpg";?>"  alt="lady-profile">
		  <em> <a     href='<?php echo base_url()."users/accessories"; ?>'  class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">SHOP NOW</a></em>
        
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

  
  <section class="white-section" id="grooming">

    
    <div class="row">

      <div class="pricing-column col-lg-4 col-md-4">
        <div class="card">
        <a  href='<?php echo base_url()."users/petfashionoutlet"; ?>'   class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">FASHION</a>
           
             <!--   <button class="btn btn-lg btn-block btn-outline-dark"  href='<?php echo base_url()."users/grooming"; ?>' type="button">GROOMING</button>-->
          
     
        </div>
      </div>

      <div class="pricing-column col-lg-4 col-md-4">
        <div class="card">
     <a  href='<?php echo base_url()."users/pettoys"; ?>'   class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">TOYS</a>
    
       <!--  <button class="btn btn-lg btn-block btn-outline-dark"  href='<?php echo base_url()."users/pettraining"; ?>' type="button">TRAINING</button>-->
         
        </div>
      </div>

      <div class="pricing-column col-lg-4">
        <div class="card">
    <a  href='<?php echo base_url()."users/petbedding"; ?>'   class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">BEDDING</a>
       <!--  <button class="btn btn-lg btn-block btn-outline-dark"  href='<?php echo base_url()."users/petdaycare"; ?>' type="button">DAY CARE</button>-->
      
        </div>
      </div>



    </div>
   <div class="row">

      <div class="pricing-column col-lg-4 col-md-4">
        <div class="card">
    
    <a  href='<?php echo base_url()."users/accessories"; ?>'   class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">ACCESSORIES</a>
              <!--   <button class="btn btn-lg btn-block btn-outline-dark" type="button">CARE TAKERS</button>-->
         
     
        </div>
      </div>

      <div class="pricing-column col-lg-4 col-md-4">
        <div class="card">
    <a  href=''     class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">HYGIENE</a>
         <!-- <button class="btn btn-lg btn-block btn-outline-dark" type="button">GO OUTDOORS</button>-->
         
        </div>
      </div>

      <div class="pricing-column col-lg-4">
        <div class="card">
    
         <!--  <button class="btn btn-lg btn-block btn-outline-dark" href='<?php echo base_url()."users/funeral"; ?>' type="button">FUNERAL SERVICES</button>-->
       
      <a   href='<?php echo base_url()."users/petsafety"; ?>'   class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">SAFETY</a>
        </div>
      </div>



    </div>

  </section>
  
<br>
<br>

  <section class="" id="">
 <h1 align="center">RECOMMENDED FOR YOU</h1>
   <br>
<br>   
  <div class="row">
<div class="car" style="width: 13rem;">
  <img class="card-img-top"src="<?php echo base_url()."assets/petcare/121.jpg";?>"alt="Card image cap" height=200 width=300>
 
</div>
<div class="car" style="width: 13rem;">
  <img class="card-img-top" src="<?php echo base_url()."assets/petcare/122.jpg";?>" alt="Card image cap" height=200 width=300>
 
</div>
<div class="car" style="width: 13rem;">
  <img class="card-img-top" src="<?php echo base_url()."assets/petcare/123.jpg";?>" alt="Card image cap" height=200 width=300>
 
</div>
<div class="car" style="width: 13rem;">
  <img class="card-img-top" src="<?php echo base_url()."assets/petcare/124.jpg";?>" alt="Card image cap" height=200 width=300>
 
</div>
<div class="car" style="width: 13rem;">
  <img class="card-img-top" src="<?php echo base_url()."assets/petcare/125.jpg";?>" alt="Card image cap" height=200 width=300>
 
</div>
<div class="car" style="width: 13rem;">
  <img class="card-img-top" src="<?php echo base_url()."assets/petcare/126.jpg";?>" alt="Card image cap" height=200 width=300>
 
</div>
<div class="car" style="width: 13rem;">
  <img class="card-img-top" src="<?php echo base_url()."assets/petcare/127.jpg";?>" alt="Card image cap" height=200 width=300>
 
</div>
</div>
  
  
   



  </section>


<br>
<br>










<div class="container-fluid">
<h1 align="center"></h1> 
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
					<input class="input100" name="location"  type="search" placeholder="Search by  Name" aria-label="Search">
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
						<label for="inputState" >PET GENDER</label>
						<select  name="gender" id="inputState" class='input100'  >
									<option>Any</option>
									<option>Male</option>
									<option>Female</option>
									
									
						</select>
					</div>
						
						<div class="wrap-input100" >
						<span class="focus-input100"></span>
						<label for="inputState" >PRODUCT TYPE</label>
						<select  name="product" id="inputState" class='input100'  >
									<option>Any</option>
									<option>Accessories</option>
									<option>Pet toys</option>
									<option>Pet bedding</option>
									<option>Pet diapers</option>
									<option>Pet Fashion Outlet</option>
									
									
									
						</select>
					</div>
					
					
					
					
					
					<div class="wrap-input100 " >
						<span class="focus-input100"></span>
						<label for="inputState" >BRANDS</label>
						<select  name="gender" id="inputState" class='input100'  >
									<option>Any</option>
									<option>9 Lives</option>
									<option>Acana</option>
									<option>Alpo</option>
									<option>Bil jac</option>
									<option>Blackwood</option>
									
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
					<?php
						//include "merchandisesearch.php";
						//$this->load->view('merchandisesearch',$result);
						if($this->input->post('signupSubmit'))
		
							// If registration request is submitted 
      
						{
			
			
								
								$name=$this->input->post('location'); 
								$spe=$this->input->post('species');
								$gender =$this->input->post('gender');
								$pro=$this->input->post('product');
								
								$brand=$this->input->post('brand');
								
								
								
								$this->EzPet_model->displaymerchandise($name,$spe,$gender,$pro,$brand);
								
								$result['data']=$this->EzPet_model->displaymerchandise($name,$spe,$gender,$pro,$brand);
								$this->load->view('merchandisesearch',$result);			
			
						}
						
						else
						{
							?>
							
							<div class="col-sm-12">
      

									<div class="row">
										<div class="col-sm-4">
											<div class="card">
											
												<img  class="zoom w3-circle " src="<?php echo base_url()."assets/petcare/135.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
												
											</div>
										</div>
										
										<div class="col-sm-4">
											<div class="card">
											
												<img  class="zoom w3-circle " src="<?php echo base_url()."assets/petcare/137.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
												
											</div>
										</div>
										
										<div class="col-sm-4">
											<div class="card">
											
												<img  class="zoom w3-circle " src="<?php echo base_url()."assets/petcare/140.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
									 
									 
											</div>
										</div>
									</div>
									  
									<br>
									<BR>
									
									
									<div class="row">
									
										<div class="col-sm-4">
											<div class="card">
											
												<img  class="zoom w3-circle " src="<?php echo base_url()."assets/petcare/155.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
									  
											</div>
										</div>
										
										<div class="col-sm-4">
											<div class="card">
											
												<img  class="zoom w3-circle " src="<?php echo base_url()."assets/petcare/132.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
									  
											</div>
										</div>
										
										<div class="col-sm-4">
											<div class="card">
											
												<img  class="zoom w3-circle " src="<?php echo base_url()."assets/petcare/131.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
									 
											</div>
										</div>
									</div>
									
									<br>
									<BR>
									
									<div class="row">
									
										<div class="col-sm-4">
											<div class="card">
											
												<img  class="zoom w3-circle " src="<?php echo base_url()."assets/petcare/151.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
									
											</div>
										</div>
										
										<div class="col-sm-4">
											<div class="card">
												
												<img  class="zoom w3-circle " src="<?php echo base_url()."assets/petcare/147.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
									 
											</div>
										</div>
										
										<div class="col-sm-4">
											<div class="card">
											
												<img  class="zoom w3-circle " src="<?php echo base_url()."assets/petcare/145.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
									 
											</div>
										</div>
									</div>
							</div>
							
							
							
							
							
							
							
							
				<?php
						}
						
					?>
			</div>

  </div>
</div>



<br>
<br>
<br>


<br>
<br>



  <section class="" id="">
 <h1 align="center">FEATURED/ON-SALE PRODUCTS</h1>
   <br>
<br>   
  <div class="row">
<div class="car" style="width: 13rem;">
  <img class="card-img-top"src="<?php echo base_url()."assets/petcare/128.jpg";?>"alt="Card image cap" height=200 width=300>
 
</div>
<div class="car" style="width: 13rem;">
  <img class="card-img-top" src="<?php echo base_url()."assets/petcare/129.jpg";?>" alt="Card image cap" height=200 width=300>
 
</div>
<div class="car" style="width: 13rem;">
  <img class="card-img-top" src="<?php echo base_url()."assets/petcare/130.jpg";?>" alt="Card image cap" height=200 width=300>
 
</div>
<div class="car" style="width: 13rem;">
  <img class="card-img-top" src="<?php echo base_url()."assets/petcare/131.jpg";?>" alt="Card image cap" height=200 width=300>
 
</div>
<div class="car" style="width: 13rem;">
  <img class="card-img-top" src="<?php echo base_url()."assets/petcare/132.jpg";?>" alt="Card image cap" height=200 width=300>
 
</div>
<div class="car" style="width: 13rem;">
  <img class="card-img-top" src="<?php echo base_url()."assets/petcare/135.jpg";?>" alt="Card image cap" height=200 width=300>
 
</div>
<div class="car" style="width: 13rem;">
  <img class="card-img-top" src="<?php echo base_url()."assets/petcare/134.jpg";?>" alt="Card image cap" height=200 width=300>
 
</div>
</div>
  
  
   



  </section>




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
      <img  class="zoom w3-circle " src="<?php echo base_url()."assets/petcare/136.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
   
    </div>
        </div>
        <div class="col-sm-4">
         <div class="card">
  <img  class="zoom w3-circle " src="<?php echo base_url()."assets/petcare/141.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
   
   
    </div>
        </div>
        <div class="col-sm-4">
         <div class="card">
  <img  class="zoom w3-circle " src="<?php echo base_url()."assets/petcare/137.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
   
   
    </div>
        </div>
      </div>
    
    <br>
    <BR>
     <div class="row">
        <div class="col-sm-4">
          <div class="card">
   <img  class="zoom w3-circle " src="<?php echo base_url()."assets/petcare/138.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
    
   
    </div>
        </div>
        <div class="col-sm-4">
         <div class="card">
   <img  class="zoom w3-circle " src="<?php echo base_url()."assets/petcare/139.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
    
   
    </div>
        </div>
        <div class="col-sm-4">
        <div class="card">
    <img  class="zoom w3-circle " src="<?php echo base_url()."assets/petcare/140.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
   
   
    </div>
        </div>
      </div>
      <br>
      <BR>
   
    </div>
        </div>
      </div>
    </div>
  </div>
</div>
<br>
<br>


  <section class="" id="">
 <h1 align="center">RECENTLY VIEWED BY YOU</h1>
   <br>
<br>   
  <div class="row">
<div class="car" style="width: 13rem;">
  <img class="card-img-top"src="<?php echo base_url()."assets/petcare/142.jpg";?>"alt="Card image cap" height=200 width=300>
 
</div>
<div class="car" style="width: 13rem;">
  <img class="card-img-top" src="<?php echo base_url()."assets/petcare/143.jpg";?>" alt="Card image cap" height=200 width=300>
 
</div>
<div class="car" style="width: 13rem;">
  <img class="card-img-top" src="<?php echo base_url()."assets/petcare/144.jpg";?>" alt="Card image cap" height=200 width=300>
 
</div>
<div class="car" style="width: 13rem;">
  <img class="card-img-top" src="<?php echo base_url()."assets/petcare/145.jpg";?>" alt="Card image cap" height=200 width=300>
 
</div>
<div class="car" style="width: 13rem;">
  <img class="card-img-top" src="<?php echo base_url()."assets/petcare/146.jpg";?>" alt="Card image cap" height=200 width=300>
 
</div>
<div class="car" style="width: 13rem;">
  <img class="card-img-top" src="<?php echo base_url()."assets/petcare/147.jpg";?>" alt="Card image cap" height=200 width=300>
 
</div>
<div class="car" style="width: 13rem;">
  <img class="card-img-top" src="<?php echo base_url()."assets/petcare/148.jpg";?>" alt="Card image cap" height=200 width=300>
 
</div>
</div>
  
  




  </section>


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
      <img  class="zoom w3-circle " src="<?php echo base_url()."assets/petcare/149.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
   
    </div>
        </div>
        <div class="col-sm-4">
         <div class="card">
  <img  class="zoom w3-circle " src="<?php echo base_url()."assets/petcare/150.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
   
   
    </div>
        </div>
        <div class="col-sm-4">
         <div class="card">
  <img  class="zoom w3-circle " src="<?php echo base_url()."assets/petcare/151.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
   
   
    </div>
        </div>
      </div>
    
    <br>
    <BR>
     <div class="row">
        <div class="col-sm-4">
          <div class="card">
   <img  class="zoom w3-circle " src="<?php echo base_url()."assets/petcare/152.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
    
   
    </div>
        </div>
        <div class="col-sm-4">
         <div class="card">
   <img  class="zoom w3-circle " src="<?php echo base_url()."assets/petcare/153.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
    
   
    </div>
        </div>
        <div class="col-sm-4">
        <div class="card">
    <img  class="zoom w3-circle " src="<?php echo base_url()."assets/petcare/155.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
   
   
    </div>
        </div>
      </div>
      <br>
      <BR>
   
    </div>
        </div>
      </div>
    </div>
  </div>
</div>

   <br>
   <br>
  <section class="" id="">
 <h1 align="center">LOOKING TO FEED YOUR PET</h1>
   <br>
<br>   
  <div class="row">
<div class="car" style="width: 13rem;">
  <img class="card-img-top"src="<?php echo base_url()."assets/petcare/156.jpg";?>"alt="Card image cap" height=200 width=300>
 
</div>
<div class="car" style="width: 13rem;">
  <img class="card-img-top" src="<?php echo base_url()."assets/petcare/157.jpg";?>" alt="Card image cap" height=200 width=300>
 
</div>
<div class="car" style="width: 13rem;">
  <img class="card-img-top" src="<?php echo base_url()."assets/petcare/158.jpg";?>" alt="Card image cap" height=200 width=300>
 
</div>
<div class="car" style="width: 13rem;">
  <img class="card-img-top" src="<?php echo base_url()."assets/petcare/159.jpg";?>" alt="Card image cap" height=200 width=300>
 
</div>
<div class="car" style="width: 13rem;">
  <img class="card-img-top" src="<?php echo base_url()."assets/petcare/160.jpg";?>" alt="Card image cap" height=200 width=300>
 
</div>
<div class="car" style="width: 13rem;">
  <img class="card-img-top" src="<?php echo base_url()."assets/petcare/170.jpg";?>" alt="Card image cap" height=200 width=300>
 
</div>
<div class="car" style="width: 13rem;">
  <img class="card-img-top" src="<?php echo base_url()."assets/petcare/171.jpg";?>" alt="Card image cap" height=200 width=300>
 
</div>
</div>
  
  
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
      <img  class="zoom w3-circle " src="<?php echo base_url()."assets/petcare/172.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
   
    </div>
        </div>
        <div class="col-sm-4">
         <div class="card">
  <img  class="zoom w3-circle " src="<?php echo base_url()."assets/petcare/173.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
   
   
    </div>
        </div>
        <div class="col-sm-4">
         <div class="card">
  <img  class="zoom w3-circle " src="<?php echo base_url()."assets/petcare/174.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
   
   
    </div>
        </div>
      </div>
    
    <br>
    <BR>
     <div class="row">
        <div class="col-sm-4">
          <div class="card">
   <img  class="zoom w3-circle " src="<?php echo base_url()."assets/petcare/175.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
    
   
    </div>
        </div>
        <div class="col-sm-4">
         <div class="card">
   <img  class="zoom w3-circle " src="<?php echo base_url()."assets/petcare/176.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
    
   
    </div>
        </div>
        <div class="col-sm-4">
        <div class="card">
    <img  class="zoom w3-circle " src="<?php echo base_url()."assets/petcare/177.jpg";?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;"></td>
   
   
    </div>
        </div>
      </div>
      <br>
      <BR>
   
    </div>
        </div>
      </div>
    </div>
  </div>
</div>






<br>
   <br>
  <section class="" id="">
 <h1 align="center">MEDICINES FOR  YOUR PET</h1>
   <br>
<br>   
  <div class="row">
<div class="car" style="width: 13rem;">
  <img class="card-img-top"src="<?php echo base_url()."assets/petcare/178.jpg";?>"alt="Card image cap" height=200 width=300>
 
</div>
<div class="car" style="width: 13rem;">
  <img class="card-img-top" src="<?php echo base_url()."assets/petcare/179.jpg";?>" alt="Card image cap" height=200 width=300>
 
</div>
<div class="car" style="width: 13rem;">
  <img class="card-img-top" src="<?php echo base_url()."assets/petcare/180.jpg";?>" alt="Card image cap" height=200 width=300>
 
</div>
<div class="car" style="width: 13rem;">
  <img class="card-img-top" src="<?php echo base_url()."assets/petcare/181.jpg";?>" alt="Card image cap" height=200 width=300>
 
</div>
<div class="car" style="width: 13rem;">
  <img class="card-img-top" src="<?php echo base_url()."assets/petcare/182.jpg";?>" alt="Card image cap" height=200 width=300>
 
</div>
<div class="car" style="width: 13rem;">
  <img class="card-img-top" src="<?php echo base_url()."assets/petcare/183.jpg";?>" alt="Card image cap" height=200 width=300>
 
</div>
<div class="car" style="width: 13rem;">
  <img class="card-img-top" src="<?php echo base_url()."assets/petcare/184.jpg";?>" alt="Card image cap" height=200 width=300>
 
</div>
</div>
  
  
<br>
<br>
<br>
<br>

  </section>

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