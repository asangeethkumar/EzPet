<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
.fa {
  padding: 20px;
  font-size: 30px;
  width: 30px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius: 50%;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background:#132063;
  color:white;
}

.fa-twitter {
  background:#132063;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}


.fa-instagram {
  background:#132063;
  color: white;
}

.fa-pinterest {
  background:#132063;
  color: white;
}

.fa-snapchat-ghost {
  background:#132063;
  color: white;
  text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
}

.fa-skype {
  background:#132063;
  color: white;
}

.fa-paw {
  background:#132063;
  color: white;
}

h3{
  background: #132063;
 
    padding: 5% 12%;
  color: white;
  align:"center";
}


img {

    border-radius: 50%;
  align="center" ;
}


</style>
 <script> 
        var Window; 
  
        // Function that open the new Window 
      
  
        // function that Closes the open Window 
        function windowClose() { 
		 
            Window.close(); 
			
        } 
    </script> /
</head>

<body style="background-color:#132063;">
<table align="right">
<td><button type="button"  onclick="windowClose()" class="close" aria-label="Close">
  <span class="close" aria-hidden="true">&times;</span>
  
</button></td>
</table>

<br>
<br>
<br>
<br>

						<?php
					
								 foreach($data as $row)
								  {
									  ?>
									  <?php
									     $s= $row->image;
										 // $si=$row->AIN;
										?>
										<?php
								  }
								  ?>
							
								  <table  align="center">
								  <tr>
									<th><img width="350" height="200"  style="width:200px" src="<?php echo base_url()."assets/images/".trim(str_replace(",", " ", $s));?>"></th>
									</tr>
									<tr>
									
										<td><?php echo    "<h3>" ."Share" ."&nbsp;"."&nbsp;".$row->Pet_Name."</h3>" ;?></td>
									</tr>
						
								</table>
									<?php
									?>
									
									
					
									
									
									
								

<!-- Add font awesome icons -->
<table align="center">

<td><a href="http://localhost/testsite/" class="fa fa-paw"  ></a></td>
<th><?php echo "<p>&nbsp; </p>"?></th>
<td><a href="https://www.facebook.com/" class="fa fa-facebook"></a></td>
<th><?php echo "<p>&nbsp; </p>"?></th>
<td><a href="https://twitter.com/" class="fa fa-twitter"></a></td>
<th><?php echo "<p>&nbsp; </p>"?></th>
<td><a href="https://www.instagram.com/" class="fa fa-instagram"></a></td>
<th><?php echo "<p>&nbsp; </p>"?></th>
<td><a href="#" class="fa fa-pinterest"></a></td>
<th><?php echo "<p>&nbsp; </p>"?></th>
<td><a href="#" class="fa fa-snapchat-ghost"></a></td>
<th><?php echo "<p>&nbsp; </p>"?></th>
<td><a href="#" class="fa fa-skype"></a></td>
<table>

      
</body>
</html> 