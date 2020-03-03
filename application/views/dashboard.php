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
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link href="<?php echo base_url('assets/css/style.css'); ?>" rel='stylesheet' type='text/css' />
	<link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel='stylesheet' type='text/css' />
</head>

<style>

.showpets{
		height:400px;
		    background-color: white;
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

<div class="showpets">
	
	</br><br><br>
 <table   align="center" >


    <tr>
	    	  <td><button class="button" onclick="plusDivs(-1)">&#10094;</button></td>

			<td>	<img class="zoom w3-circle" src="<?php echo base_url('assets/images/1.jpg'); ?>" alt="" border=3 height=200 width=200 style="padding:0 15px 0 15px;"></img> </td>

			<td>	<img class="zoom w3-circle" src="<?php echo base_url('assets/images/2.jpg'); ?>" alt="" border=3 height=200 width=200 style="padding:0 15px 0 15px;"></img> </td>

			<td>	<img class="zoom w3-circle" src="<?php echo base_url('assets/images/3.jpg'); ?>" alt="" border=3 height=200 width=200 style="padding:0 15px 0 15px;"></img> </td>

			<td>	<img class="zoom w3-circle" src="<?php echo base_url('assets/images/4.jpg'); ?>" alt="" border=3 height=200 width=200 style="padding:0 15px 0 15px;"></img> </td>

			<td>	<img class="zoom w3-circle" src="<?php echo base_url('assets/images/5.jpg'); ?>" alt="" border=3 height=200 width=200 style="padding:0 15px 0 15px;"></img> </td>

			<td>	<img class="zoom w3-circle" src="<?php echo base_url('assets/images/6.jpg'); ?>" alt="" border=3 height=200 width=200 style="padding:0 15px 0 15px;"></img> </td>
			
			<td>	<img class="zoom w3-circle" src="<?php echo base_url('assets/images/7.jpg'); ?>" alt="" border=3 height=200 width=200 style="padding:0 15px 0 15px;"></img> </td>
  <td><button class="button" onclick="plusDivs(1)">&#10095;</button>
</td>
  	 </tr>
        
</table>
	</br><br><br>
	</br><br><br>

</div>