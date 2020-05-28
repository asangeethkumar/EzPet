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
.btn-lg{
	background-color: #ddd;
  border: none;
  color: black;
  padding: 1rem 4rem;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  margin: 4px 2px;
  cursor: pointer;
	
	border-radius: 16px;
}

</style>
<?php
					
								 foreach($data as $row)
								  {
									  ?>
									  <?php
									     $s= $row->image;
										 $si=$row->AIN;
										 
											//echo $row->image;
										?>
								
								
		
									   
								   
  <div class="col-sm-4">

    <div class="columns">
       
		<div class="row-sm-2">	
		
     
			<img  a href="<?php echo base_url('users/details/'.$row->AIN);  ?>"   class="zoom w3-circle " src="<?php echo base_url()."assets/images/".trim(str_replace(",", " ", $row->image));?>" alt="" border=3 height=200 width=300 style="padding:0 15px 0 15px;">	
			<a align="center" href="<?php echo base_url('users/details/'.$row->AIN);  ?>"   class="btn btn-secondary btn-lg active" role="button" aria-pressed="true"><?php echo "$row->Pet_Name";?></a>
			</div>
       
		</div>
	</div>

	  

	
	
	  



										
								
									
								<?PHP
								  }
								  
								   ?>
								   
	