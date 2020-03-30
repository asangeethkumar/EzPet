

<div class="showpets">
</br>
</br>
</br>
</br></br>
</br></br></br></br></br></br></br></br>
<h1> sugessted Pets for you</h1>
		    	<!--  <td><button class="button nextimage" onclick="return myFunction()">&#10094;</button></td>

	<?php  foreach ($data as $geth_index=>$geth) {  
	     
	 
	?>

	

<td><img id="<?php echo $geth_index?>" class="zoom w3-circle " src="<?php echo base_url()."assets/images/".trim(str_replace(",", " ", $geth->image_path));?>" alt="" border=3 height=500 width=200 style="padding:0 15px 0 15px;"></td>


	<?php } ?> 
  <td><button class="button nextimage" onclick="javascript: sav[i--]">&#10095;</button>-->
  <div class="showpet">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
	        <div class="carousel-inner" >
			
	<?php  for ($i = 3; $i < 10 ;$i++) { 
  ?>

<td><img id="<?php echo $i?>" class="zoom w3-circle " src="<?php echo base_url()."assets/images/".trim(str_replace(",", " ", $data[$i]->image_path));?>" alt="" border=3 height=200 width=200 style="padding:0 15px 0 15px;"></td>

	<?php } 
	?>
	
	
	

<a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

		    	  

	

</div>
<script type="text/javascript">
// Call carousel manually
$('#myCarouselCustom').carousel();

// Go to the previous item
$("#prevBtn").click(function(){
	$("#myCarouselCustom").carousel("prev");
});
// Go to the previous item
$("#nextBtn").click(function(){
	$("#myCarouselCustom").carousel("next");
});
</script>

	
</div>



