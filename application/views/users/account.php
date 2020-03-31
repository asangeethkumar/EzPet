

<div class="showpets">
</br>
</br>
</br>
</br></br>
</br></br></br></br></br></br></br></br>
<h1> sugessted Pets for you</h1>
  <td><button class="button nextimage" onclick="javascript: sav[i++]">&#10094;</button>

	<?php  foreach ($data as $geth_index=>$geth) {  
	     
	 
	?>

	

<td><img id="<?php echo $geth_index?>" class="zoom w3-circle " src="<?php echo base_url()."assets/images/".trim(str_replace(",", " ", $geth->image_path));?>" alt="" border=3 height=500 width=200 style="padding:0 15px 0 15px;"></td>


	<?php } ?> 
  <td><button class="button nextimage" onclick="javascript: sav[i--]">&#10095;</button>
  <div class="showpet">
	      
	
	
	


	

</div>

	
</div>



