<style>
.columns {
  float: left;
  width: 30%;
  padding: 1% 15%;
  
  height: 300px; /* Should be removed. Only for demonstration */
  
}

/* Clear floats after the columns */
.rows:after {
  content: "";
  display: table;
  
  clear: both;
}
</style>
<?php
					
								 foreach($data as $row)
								  {
									  ?>
									  <?php
									     $s= $row->image;
											//echo $row->image;
										?>
								
								
		
									   
								   
     
	<div class="col-sm-4">

    <div class="columns">
       
		<div class="row-sm-2">
			<img  class="zoom w3-circle " src="<?php echo base_url()."assets/petcare/".trim(str_replace(",", " ", $row->image));?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;">		
			</div>
       
		</div>
	</div>
	
	  
	
	
	
	  



										
								
									
								<?PHP
								  }
								  
								   ?>
								   
	
