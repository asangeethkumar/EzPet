<!DOCTYPE html>
<html lang="en">
<head>
    <link href="<?= base_url();?>css/bootstrap.css" rel="stylesheet">
    <style>
     .error{
      color:red;
     }
    </style>
</head>    
<body>
 <div class="container">
     <div class="row">
         <div class="col-md-6">
             <div class="row">
                 <div class="col-md-12">
                     <h3>Upload</h3>
                  <form method="post" enctype="multipart/form-data" >   
				  
               <input type="file" name="image" />
    <input type="submit" value="Upload">
      
               
      </form>
     </div>
             </div>
         </div>               
     </div>
 </div>        
</body>
</html> 