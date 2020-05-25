
<?php
					
								 foreach($data as $row)
								  {
									  ?>
									  <?php
									     $s= $row->image;
											//echo $row->image;
										?>
								
								
		
									   
								   
     
	<div class="col-sm-3">
    <div class="row">
       
		<div class="col-sm-1">
         <div class="cards">
			<img  class="zoom w3-circle " src="<?php echo base_url()."assets/petcare/".trim(str_replace(",", " ", $row->image));?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;">		
			</div>
       
		</div>
	</div>
	
	  
	</div>
	
	
	  



										
								
									
								<?PHP
								  }
								  
								   ?>
								   
	
