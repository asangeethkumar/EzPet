<!DOCTYPE html>
<?php
include_once "menu.php";
?>
<br>
<br>
<br>
<br>

<html lang="en">  
<head>
<title>PETINFO</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
<!--===============================================================================================-->
<style>
h4
{
	align="center" ;
	
	color:"gray";
	font-family: "Times New Roman", Times, serif;
	font-size: 20px;
	
}
h1
{
	font-family: "Tangerine";
}
h2
{
	align="center" ;
	font-family: "Comic Sans MS";
	color:"gray";
	
}
h3{
	font-family: "Times New Roman", Times, serif;
	font-size: 45px;
}
img {
  border-radius: 8px;
  align="center" ;
}


</style>
<!--<a data-config="commands=*;size=14;status=off;theme=logo;language=en;bgcolor=#2a92f3" id="skaip-buttons" href="http://www.skaip.org/">Skype</a><script src="//apps.skaip.org/buttons/widget/core.min.js" defer="defer"></script>-->
</head>
<body>
<div class="limiter">
		<div class="container-login100">
					
						<a href="<?php echo base_url('users/share/$');  ?>"   class="btn btn-primary btn-lg active" role="button" aria-pressed="true">share</a>
				<!--	<?php
					foreach($data as $row)
					{
									  
						$si=$row->AIN;
				
					}
					echo 	$row->AIN;	
		
					?>-->
					<!--<a  href="http://localhost:8080/" class="btn btn-primary btn-lg active" role="button" aria-pressed="true"> video calling</a></td>-->
			<div class="wrap-login100">
		
			
				<form class="login100-form validate-form"  action="" method="post" >
						<!--<h1 align="center" style= "font-family: Comic Sans MS ; color:gray">PET DETAILS </h1>
						<hr style="width:250%;text-align:left;margin-left:0;color:black">-->
						<br>
						
	
	
	

						<!--<img  class="zoom w3-circle " src="<?php echo base_url()."assets/images/".trim(str_replace(",", " ", $data[7]->image_path));?>" alt="" border=3 height=200 width=200 style="padding:0 15px 0 15px;"></td>-->
						
					<?php
					//print_r($result);
								 foreach($data as $row)
								  {
									  ?>
									  <?php
									     $s= $row->image;
										 $si=$row->AIN;
										?>
								
								
									<td ><img  width="350" height="200"  src="<?php echo base_url()."assets/images/".trim(str_replace(",", " ", $s));?>"><td>
								
										
									<!--<th><?php echo $row->AIN;	?></th>-->
										<!--<th><?php echo $si;	?></th>-->
												<!--<?php echo   "<h3>" .$row->AIN."</h3>"?>-->
												<?php echo   "<h3>" .$row->Pet_Name."</h3>"?>
												<?php echo "<br>" ?>
													<table>
															<th><?php echo "<p>&nbsp; </p>"?></th>
															<th><?php echo "<p>&nbsp; </p>"?></th>
															<th><?php echo "<p>&nbsp; </p>"?></th>
															<th><?php echo "<p>&nbsp; </p>"?></th>
															<th><?php echo "<p>&nbsp; </p>"?></th>
															<th><?php echo "<p>&nbsp; </p>"?></th>
															<th><?php echo "<p> &#9679;</p>"?></th>
															<th><?php echo "<h4>DOB:</h4>"?></th>
															<?php echo "<br>" ?>
															
															<th><?php echo "<h4>" .$row->DOB."</h4>"?></th>
													<table>
												<?php echo "<br>" ?>
										
												<hr style="width:300%;text-align:left;margin-left:0">
											<table>
										
												<th><?php echo "<h4>" .$row->gender."</h4>"?></th>
												
												<th><?php echo "<p>&nbsp; </p>"?></th>
												<th><?php echo "<p>&nbsp; </p>"?></th>
												<th><?php echo "<p> &#9679;</p>"?></th>
												<th><?php echo "<h4>" .$row->color."</h4>"?></th>
												<th><?php echo "<p>&nbsp; </p>"?></th>
												<th><?php echo "<p>&nbsp; </p>"?></th>
												<th><?php echo "<p> &#9679;</p>"?></th>
												<th><?php echo "<h4>Height:</h4>"?></th>
												<th><?php echo "<h4>" .$row->Height."</h4>"?></th>
												<th><?php echo "<p>&nbsp; </p>"?></th>
												<th><?php echo "<p>&nbsp; </p>"?></th>
												<th><?php echo "<p> &#9679;</p>"?></th>
												<th><?php echo "<h4>Weight:</h4>"?></th>
												<th><?php echo "<h4>" .$row->weight."</h4>"?></th>
			
											</table>
									
									<hr style="width:300%;text-align:left;margin-left:0">
									<?php echo "<br>" ?>
									<?php echo "<br>" ?>
									
									<?php echo "<h1> <b>About<b> </h1>" ?>
									
									<?php echo "<br>" ?>
									
									<?php echo "<h4><b>Health<b></h4>" ?>
									<table>
								    <th><?php echo "<h5><b>Spayed / neutered.<b></h5>" .$row->Spayed_or_Neutered?></th>
									<table>
									<?php echo "<br>" ?>
									<?php echo "<br>" ?>
									<?php echo "<h4><b>Special status</h4><b>" .$row->Special_Status?>
									<?php echo "<br>" ?>
									<?php echo "<br>" ?>
									<?php echo "<br>" ?>
									
									
									<hr style="width:300%;text-align:left;margin-left:0">
									<?php echo "<h1><b>Contact</h4><b>" ?>
									<?php echo "<br>" ?>
							
									<?php echo "<h4>" .$row->email."</h4>"?>
									<?php echo "<h4>" .$row->phone."</h4>"?>
								 
								<?PHP
								  }
								  
								   ?>
								
						
					

				
				</div>
			
			
		</form>
	</div>
</div>


					
<!--===============================================================================================-->	
	<script src="<?php echo base_url('assets/vendor/jquery/jquery-3.2.1.min.js'); ?>" ></script>
<!--===============================================================================================-->
	<script  src="<?php echo base_url('assets/vendor/bootstrap/js/popper.js'); ?>"  ></script>
	<script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.min.js'); ?>"  ></script>
<!--===============================================================================================-->
	<script  src="<?php echo base_url('assets/vendor/select2/select2.min.js'); ?>"  ></script>
<!--===============================================================================================-->
	<script  src="<?php echo base_url('assets/vendor/tilt/tilt.jquery.min.js'); ?>"  ></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script  src="<?php echo base_url('assets/js/main.js'); ?>"  ></script>

</body>
</html>
						