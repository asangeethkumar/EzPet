<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 25%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 2px 7px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #f1f1f1;
}

.button {
  background-color: #404040; /* Green */
  border: none;
  color: white;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button2 {border-radius: 4px;}


</style>
</head>
<body>

<?php ?>
<div class="row">
  <div class="column">
    <div class="card">
	  <img  class="zoom w3-circle " src="<?php echo base_url()."assets/images/".trim(str_replace(",", " ", $data[0]->image_path));?>" alt="" border=3 height=200 width=200 style="padding:0 15px 0 15px;"></td>

     <!--<button type="button" onclick="window.location.href ="<?php echo base_url('users/details'); ?>"" class="button button2">Jimmy</button>-->
	<!-- <a href= "<?php echo base_url('users/details'); ?>" class="button button2">Go to Google</a>-->
	<?php
	?>
	
	 <a href="<?php echo base_url('users/details/1');  ?>"   class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Jimmy</a>
	 <?php
	 ?>
	
    </div>
  </div>

  <div class="column">
    <div class="card">
	  <img  class="zoom w3-circle " src="<?php echo base_url()."assets/images/".trim(str_replace(",", " ", $data[7]->image_path));?>" alt="" border=3 height=200 width=200 style="padding:0 15px 0 15px;"></td>
	  <a href="<?php echo base_url('users/details/5');  ?>"   class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Browie</a>
	 
    </div>
  </div>
  
  <div class="column">
    <div class="card">
	  <img  class="zoom w3-circle " src="<?php echo base_url()."assets/images/".trim(str_replace(",", " ", $data[2]->image_path));?>" alt="" border=3 height=200 width=200 style="padding:0 15px 0 15px;"></td>
    
	 	  <a href="<?php echo base_url('users/details/3');  ?>"   class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Tuffy</a>
	
    </div>
  </div>
  
  <div class="column">
    <div class="card">
	  <img  class="zoom w3-circle " src="<?php echo base_url()."assets/images/".trim(str_replace(",", " ", $data[3]->image_path));?>" alt="" border=3 height=200 width=200 style="padding:0 15px 0 15px;"></td>
    
	  <a href="<?php echo base_url('users/details/4');  ?>"   class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">scooby</a>
	
    </div>
  </div>
</div>

</body>
</html>
