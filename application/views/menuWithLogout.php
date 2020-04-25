<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>finding pet is now easier</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link href="<?php echo base_url('assets/css/style.css'); ?>" rel='stylesheet' type='text/css' />
	<link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel='stylesheet' type='text/css' />
</head>
<?php
        //$email;$comment;$captcha;
		$email = $password = $captcha = NULL;
        if(isset($_POST['email'])){
          $email=$_POST['email'];
        }
        if(isset($_POST['comment'])){
          $comment=$_POST['comment'];
        }
        if(isset($_POST['g-recaptcha-response'])){
          $captcha=$_POST['g-recaptcha-response'];
        }
        if(isset($captcha)){
          echo '<h2>Please check the the captcha form.</h2>';
          exit;
        }
        $secretKey = "6LeUYeIUAAAAALGLJbPXpRBvRnmKjrzInXFxw_hD";
        $ip = $_SERVER['REMOTE_ADDR'];
        // post request to server
        $url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . urlencode($secretKey) .  '&response=' . urlencode($captcha);
        $response = file_get_contents($url);
        $responseKeys = json_decode($response,true);
        // should return JSON with success as true
        if($responseKeys["success"]) {
                echo '<h2>Thanks for posting comment</h2>';
        } else {
                echo '<h2>You are spammer ! Get the @$%K out</h2>';
        }
?>	
<style>
.dropdown:hover>.dropdown-menu
   {
	display:block;
	
	}
.dropdown-toggle::after 
   { 
    content: none; 
	display:none;
	border:0;
	vertical-align: baseline;
	}

.bg-light
   {
    background-color: #fff!important;
	}

.dropdown-item:focus, .dropdown-item:hover
   {
    color: #16181b;
	text-decoration: none;
    background-color: #f8f9fa;
   }
.dropdown-item
   {
    transition: margin 0.1s;
    display: block;
    width: 100%;
  	padding:10px;
	border-bottom:1px solid #ccc !important;
    clear: both;
    font-weight: 400;
	font-size: 13px;
    color: #212529;
    text-align: inherit;
    white-space: nowrap;
    background-color: transparent;
    border: 0;
	}

#primary-menu ul li:hover>a 
	{
    color: #1abc9c;
   }
#primary-menu ul li>a {
    display: block;
    line-height: 22px;
    padding: 10px 10px 0 10px;
    color: #444;
    font-weight: 700;
    font-size: 13px;
    letter-spacing: 1px;
    text-transform: uppercase;
    font-family: Raleway,sans-serif;
    -webkit-transition: margin .4s ease,padding .4s ease;
    -o-transition: margin .4s ease,padding .4s ease;
    transition: margin .4s ease,padding .4s ease;
}
.bannerWrapper{
	height:400px;
}

.bannerWrapper img{
	width: 100%;
	height:400px;
    box-sizing: border-box;
}
.showpets{
		height:400px;
		    background-color: white;

		

}
.ml-auto{
	margin-left: 0% !important;
}



#primary-menu ul li>a:after{
	content: "\e114";
	position: relative;
    top: 1px;
    display: inline-block;
    font-family: 'Glyphicons Halflings';
    font-style: normal;
    font-weight: 400;
    line-height: 1;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}

.buttoncolor {
  background-color: black;

}
.button {
  background-color: #008CBA;
  border: none;
  color: white;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 24px;
  margin: 4px 2px;
  cursor: pointer;
}

* {
  box-sizing: border-box;
}

.zoom {
  padding: 50px;
  background-color: green;
  transition: transform .2s;
  width: 200px;
  height: 200px;
  margin: 0 auto;
}

.zoom:hover {
  -ms-transform: scale(1.5); /* IE 9 */
  -webkit-transform: scale(1.5); /* Safari 3-8 */
  transform: scale(1.5); 
}
</style>

  <section id="title">

    <!-- Nav Bar -->
        <nav class="navbar navbar-expand-lg bg-light fixed-top navbar-light" id="primary-menu">
            <a class="navbar-brand"  href="<?php echo base_url('users/account'); ?>">
			<img style="width:85px" src="<?php echo base_url('assets/images/logo.png'); ?>"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">

            <ul class="navbar-nav ml-auto">
			  <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Get A pet
					</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								<a class="dropdown-item" href='<?php echo base_url()."users/findapet"; ?>'>Find A Pet For You</a>
								<a class="dropdown-item" href='<?php echo base_url()."users/submenu"; ?>'>Pet Shelters (Adoption)</a>
								<a class="dropdown-item" href='<?php echo base_url()."users/breeder"; ?>'>Breeders</a>
								<a class="dropdown-item" href='<?php echo base_url()."users/puppy"; ?>'>International Puppy/Kitten Finder</a>
								<a class="dropdown-item" href='<?php echo base_url()."users/delv"; ?>'>Delivery & Transportation</a>
								<a class="dropdown-item" href='<?php echo base_url()."users/estimation"; ?>'>Cost of Pet Ownership Estimation</a>
								<a class="dropdown-item" href='<?php echo base_url()."users/ownpet"; ?>'>Are You Comfortable to Own a Pet?</a>
								<a class="dropdown-item" href='<?php echo base_url()."users/petchoose"; ?>'>What Pet to Choose?</a>
								<a class="dropdown-item" href='<?php echo base_url()."users/healthvacination"; ?>'>Initial Health Check & Vaccination</a>
								<a class="dropdown-item" href='<?php echo base_url()."Pet/Adaption"; ?>'>Early Adaptation – Build a pet-owner rapport</a>
								<a class="dropdown-item" href='<?php echo base_url()."users/dietchart"; ?>'>Transition Stage Nutrition </a>
								<a class="dropdown-item" href='<?php echo base_url()."users/orderpet"; ?>'>Initial Order for New Pet</a>
						</div>
				</li>
				
			  <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Pet Health
					</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

								<a class="dropdown-item" href='<?php echo base_url()."users/getc"; ?>'>Get Veterinary Consultation Online</a>
								<a class="dropdown-item" href='<?php echo base_url()."users/schedule"; ?>'>Schedule Veterinarian Appointment</a>
								<a class="dropdown-item" href='<?php echo base_url()."users/vaccine"; ?>'>Schedule Vaccination </a>
								<a class="dropdown-item" href='<?php echo base_url()."users/genetic"; ?>'>Genetic Test</a>
								<a class="dropdown-item" href='<?php echo base_url()."users/lab"; ?>'>Laboratory Diagnostics</a>
								<a class="dropdown-item" href='<?php echo base_url()."users/ultra"; ?>'>Ultrasound, X-ray, MRI</a>
								<a class="dropdown-item" href='<?php echo base_url()."users/insurance"; ?>'>Get Pet Insurance</a>

								
						</div>
				</li>
	
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Food&Pharmacy 
					</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								<a class="dropdown-item" href='<?php echo base_url()."users/food"; ?>'>Pet Food</a>
								<a class="dropdown-item" href='<?php echo base_url()."users/otc"; ?>'>OTC Medicines </a>
								<a class="dropdown-item" href='<?php echo base_url()."users/rx"; ?>'>Rx Medicines </a>
								<a class="dropdown-item" href='<?php echo base_url()."users/vitamins"; ?>'>Vitamins & Supplements</a>
								<a class="dropdown-item" href='<?php echo base_url()."users/diet"; ?>'>Prescription Diets</a>
								<a class="dropdown-item" href='<?php echo base_url()."users/treat"; ?>'>Treats & Chews </a>
								<a class="dropdown-item" href='<?php echo base_url()."users/dconsult"; ?>'>Dental Care</a>
								<a class="dropdown-item" href='<?php echo base_url()."users/mypres"; ?>'>My Prescriptions</a>
	</div>
				</li>
				
				 <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Pet  Services
					</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
										<a class="dropdown-item" href='<?php echo base_url()."users/grooming"; ?>'>Grooming</a>
								<a class="dropdown-item" href='<?php echo base_url()."users/petsitter"; ?>'>Pet Sitters</a>
								<a class="dropdown-item" href='<?php echo base_url()."users/dogwalker"; ?>'>Dog Walkers</a>
								<a class="dropdown-item" href='<?php echo base_url()."users/petdaycare"; ?>'>Pet Daycare</a>
								<a class="dropdown-item" href='<?php echo base_url()."users/pethostel"; ?>'>Pet Hotels</a>
								<a class="dropdown-item" href='<?php echo base_url()."users/pettaxi"; ?>'>Pet Taxi</a>
								<a class="dropdown-item" href='<?php echo base_url()."users/petclub"; ?>'>Pet Clubs</a>
								<a class="dropdown-item" href='<?php echo base_url()."users/pettraining"; ?>'>Pet Training </a>
								<a class="dropdown-item" href='<?php echo base_url()."users/dogplayground"; ?>'>Dog Playgrounds & Beaches</a>
								<a class="dropdown-item" href='<?php echo base_url()."users/globalpet"; ?>'>Global Pet - Travel With Pets</a>
								<a class="dropdown-item" href='<?php echo base_url()."users/funeral"; ?>'>Funeral Services & Cemeteries</a>
						
								
						</div>
				</li>
			
			
			
			
			
				 <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Pet  Merchandise
					</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
										<a class="dropdown-item" href='<?php echo base_url()."users/petfashionoutlet"; ?>'>Pet Fashion Outlet </a>
								<a class="dropdown-item" href='<?php echo base_url()."users/pettoys"; ?>'>Pet Toys</a>
								<a class="dropdown-item" href='<?php echo base_url()."users/dia"; ?>'>Diapers, Training Pads, etc.</a>
								<a class="dropdown-item" href='<?php echo base_url()."users/petbedding"; ?>'>Pet Bedding</a>
								<a class="dropdown-item" href='<?php echo base_url()."users/petsafety"; ?>'>Pet Safety</a>
								<a class="dropdown-item" href='<?php echo base_url()."users/accessories"; ?>'>Accessories</a>
								
						</div>
				</li>
			
			
			
				
				 <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Emergency!
					</a>
						
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">	
								<a class="dropdown-item" href="<?php echo base_url()."Pet/Emergency"?>">Veterinary Emergency Rooms 24/7!</a>
								<a class="dropdown-item" href="<?php echo base_url()."Pet/Consultation"?>">Get Emergency Consultation!</a>
								<a class="dropdown-item" href="<?php echo base_url()."Pet/CallHospital"?>">Call Mobile Hospital!</a>
								<a class="dropdown-item" href="<?php echo base_url()."Pet/Report"?>">Report Cruelty on Animals!</a>
								<a class="dropdown-item" href="<?php echo base_url()."Pet/LostPet"?>">Lost and Found Pets</a>
								
						</div>
				</li>
			
			
			
			
			
			
			
			
			
	
			

				  <li class="nav-item">
                    <a class="nav-link" href="">For Pros</a>
					
					
		
					
                </li>
				
		 <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						My Account 
					</a>
						<div class="dropdown-menu" id="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								<a class="dropdown-item" href='<?php echo base_url()."users/petregistration"; ?>'>Pet Information</a>
								<a class="dropdown-item" href='<?php echo base_url()."users/customer"; ?>' >Owner Information</a>
								<a class="dropdown-item" href='<?php echo base_url()."users/petchart" ?>'>Pet Veterinary Chart</a>
								<a class="dropdown-item" href='<?php echo base_url()."users/petlicense" ?>' >Pet License</a>
								<a class="dropdown-item" href='<?php echo base_url()."users/expenses"; ?>' >My Budget & Spending Statistics </a>
								<a class="dropdown-item" href='<?php echo base_url()."users/myorders"; ?>' >My Orders</a>

								<a class ="dropdown-item" href="<?php echo base_url()."users/logout" ?>" >LogOut</a>
									
					
                
						</div>
				</li>
			
				
            </ul>
            </ul>
            </div>
			
		
        </nav>
	</section>
	<section>

  
  



	</section>
	
	<body>


</body>

				 
</html>

