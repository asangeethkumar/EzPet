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
                     <h3>Login In</h3>
                  <form method="post" action="http://localhost/codeigniterexamples/index.php/signin">                                             
                      <div class="form-group">                       
                       <label for="userName">Username</label> <input type="text" class="form-control" id="userName" name="userName" value="<?php echo set_value('userName'); ?>">
                       <?php echo form_error('userName'); ?>                       
       </div>
       
       <div class="form-group">
        <label for="password"> Password </label> <input type="password" class="form-control" id="password" name="password" value="<?php echo set_value('password'); ?>"> 
        <?php echo form_error('password'); ?>
        
       </div>
                   
                   <button class="btn btn-success" type="submit">LOGIN</button>
      
      </form>
     </div>
             </div>
         </div>               
     </div>
 </div>        
</body>
</html> 