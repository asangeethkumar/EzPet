<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>finding pet is now easier</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <link href="<?php echo base_url('assets/css/style.css'); ?>" rel='stylesheet' type='text/css' />
  <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel='stylesheet' type='text/css' />
 
</head>

 <a href='<?php echo base_url()."index.php/"; ?>'>Video Upload</a> 

<style>
	.dropdown:hover>.dropdown-menu{
	display:block;
	
	}
	 .dropdown-toggle::after { 
            content: none; 
			display:none;
			border:0;
			vertical-align: baseline;
	 }

.bg-light {
    background-color: #fff!important;
}

.dropdown-item:focus, .dropdown-item:hover {
    color: #16181b;
	
    text-decoration: none;
    background-color: #f8f9fa;
}
.dropdown-item {
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

#primary-menu ul li:hover>a {
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



</style>


  <section id="title">

    <!-- Nav Bar -->
        <nav class="navbar navbar-expand-lg bg-light fixed-top navbar-light" id="primary-menu">
            <a class="navbar-brand" href="">
			<img style="width:100px" src="<?php echo base_url('assets/images/logo.png'); ?>"></a>
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
								<a class="dropdown-item" href="#">Find A Pet For You</a>
								<a class="dropdown-item" href="#">Pet Shelters (Adoption)</a>
								<a class="dropdown-item" href="#">Breeders</a>
								<a class="dropdown-item" href="#">International Puppy/Kitten Finder</a>
								<a class="dropdown-item" href="#">Delivery & Transportation</a>
								<a class="dropdown-item" href="#">Cost of Pet Ownership Estimation</a>
								<a class="dropdown-item" href="#">Are You Comfortable to Own a Pet?</a>
								<a class="dropdown-item" href="#">What Pet to Choose?</a>
								<a class="dropdown-item" href="#">Initial Health Check & Vaccination</a>
								<a class="dropdown-item" href="#">Early Adaptation – Build a pet-owner rapport</a>
								<a class="dropdown-item" href="#">Transition Stage Nutrition </a>
								<a class="dropdown-item" href="#">Initial Order for New Pet</a>
						</div>
				</li>
			
			
			
					
			  <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Pet Health
					</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								<a class="dropdown-item" href="#">Get Veterinary Consultation Online</a>
								<a class="dropdown-item" href="#">Schedule Veterinarian Appointment</a>
								<a class="dropdown-item" href="#">Schedule Vaccination </a>
								<a class="dropdown-item" href="#">Genetic Test</a>
								<a class="dropdown-item" href="#">Laboratory Diagnostics</a>
								<a class="dropdown-item" href="#">Ultrasound, X-ray, MRI</a>
								<a class="dropdown-item" href="#">Get Pet Insurance</a>
								
						</div>
				</li>
			
			
			
						
			  <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Food&Pharmacy 
					</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								<a class="dropdown-item" href="#">Pet Food</a>
								<a class="dropdown-item" href="#">OTC Medicines </a>
								<a class="dropdown-item" href="#">Rx Medicines </a>
								<a class="dropdown-item" href="#">Vitamins & Supplements</a>
								<a class="dropdown-item" href="#">Prescription Diets</a>
								<a class="dropdown-item" href="#">Treats & Chews </a>
								<a class="dropdown-item" href="#">Dental Care</a>
								<a class="dropdown-item" href="#">My Prescriptions</a>
								
						</div>
				</li>
			
			
				 <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Pet  Services
					</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								<a class="dropdown-item" href="#">Grooming</a>
								<a class="dropdown-item" href="#">Pet Sitters</a>
								<a class="dropdown-item" href="#">Dog Walkers</a>
								<a class="dropdown-item" href="#">Pet Daycare</a>
								<a class="dropdown-item" href="#">Pet Hotels</a>
								<a class="dropdown-item" href="#">Pet Taxi</a>
								<a class="dropdown-item" href="#">Pet Clubs</a>
								<a class="dropdown-item" href="#">Pet Training </a>
								<a class="dropdown-item" href="#">Dog Playgrounds & Beaches</a>
								<a class="dropdown-item" href="#">Global Pet - Travel With Pets</a>
								<a class="dropdown-item" href="#">Funeral Services & Cemeteries</a>
						
								
						</div>
				</li>
			
			
			
			
			
				 <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Pet  Merchandise
					</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								<a class="dropdown-item" href="#">Pet Fashion Outlet </a>
								<a class="dropdown-item" href="#">Pet Toys</a>
								<a class="dropdown-item" href="#">Diapers, Training Pads, etc.</a>
								<a class="dropdown-item" href="#">Pet Bedding</a>
								<a class="dropdown-item" href="#">Pet Safety</a>
								<a class="dropdown-item" href="#">Accessories</a>
								
						</div>
				</li>
			
			
			
				
				 <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Emergency!
					</a>
						
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">	
								<a class="dropdown-item" href="#">Veterinary Emergency Rooms 24/7!</a>
								<a class="dropdown-item" href="#">Get Emergency Consultation!</a>
								<a class="dropdown-item" href="#">Call Mobile Hospital!</a>
								<a class="dropdown-item" href="#">Report Cruelty on Animals!</a>
								<a class="dropdown-item" href="#">Lost and Found Pets</a>
								
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
								<a class="dropdown-item" href="Pet/info">Pet Information</a>
								<a class="dropdown-item" href="Pet/owner">Owner Information</a>
								<a class="dropdown-item" href="Pet/veterinary">Pet Veterinary Chart</a>
								<a class="dropdown-item" href="Pet/license">Pet License</a>
								<a class="dropdown-item" href="user/budget">My Budget & Spending Statistics </a>
								<a class="dropdown-item" href="user/orders">My Orders</a>
								<a class ="dropdown-item" href="users/login">Login</a>
	
					
                
						</div>
				</li>
			
				
					
				 
				
	
				
				
            </ul>
            </ul>
            </div>
        </nav>
	</section>
	<section>
	<div class="bannerWrapper"><img src="<?php echo base_url('assets/images/mainBanner.jpg'); ?>">
</div>
	</section>
	
	<body>


</body>

				 
</html>

