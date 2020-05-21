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

	<link rel="stylesheet" type="text/css"  href="<?php echo base_url('assets/css/main.css'); ?>">
</head>

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
            <a class="navbar-brand" href="<?php echo base_url('dashboard'); ?>">
			<img style="width:85px" src="<?php echo base_url('assets/images/logo.png'); ?>"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">

            <ul class="navbar-nav ml-auto">
			  
			  
			  
			  
				<li class="nav-item dropdown">
						
								<a  href="<?php echo base_url('dashboard');?>" >HOME</a>
					
				</li>
				<!--<li class="nav-item dropdown">
						
								<a  href="<?php echo base_url()."users/myaccount" ?>" >MY ACCOUNT</a>
					
				</li>-->
				
				
				
				<li class="nav-item dropdown">
						
								<a  href="<?php echo base_url()."users/getapet" ?>" > GET A PET</a>
					
				</li>
				
				<li class="nav-item dropdown">
						
								<a  href="<?php echo base_url()."users/pethealth" ?>" > PET HEALTH</a>
					
				</li>
				
				
				
				<li class="nav-item dropdown">
						
								<a  href="<?php echo base_url()."users/foodandph" ?>" >FOOD&PHARMACY </a>
					
				</li>
				
				
				 <li class="nav-item dropdown">
						
								<a  href="<?php echo base_url()."users/petservices" ?>" >PET SERVICES</a>
					
				</li>
				
				 <li class="nav-item dropdown">
					
								<a  href="<?php echo base_url()."users/petmerchant" ?>" >PET MERCHANDISE</a>
					
				</li>

				<!-- <li class="nav-item dropdown">
					
								<a  href="<?php echo base_url()."users/forpros" ?>" >FOR PROS</a>
					
				</li>	--> 
				
						
				 <li >
					
								<a  href="<?php echo base_url()."users/login" ?>" >LOGIN</a>
						
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

