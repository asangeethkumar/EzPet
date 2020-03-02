


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Upload</title>
  </head>
  <body>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>



  <div class="container">
    <h2 class="text-center" style="margin-top: 30px;">View Images</h2>
    <br>
    <div class="row">
      <div class="col-lg-2"></div>
      <div class="col-lg-8">
      <!-- check whether there are images or not -->
      <?php if (count($images)): ?>
      <div class="card" style="margin-bottom: 100px;">
        <div class="card-body">
          <h5 class="card-title"><i class="fa fa-user-circle-o"></i> Stored Images</h5>
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Image ID</th>
                <th>Image Name</th>
                <th>Image</th>    
              </tr>      
            </thead>
            <tbody>
            <!-- start of foreach loop to display images -->
              <?php foreach($images as $row):?>
              <tr>
                <td><?php echo $row->image_id ?></td>
                <td><?php echo $row->image_name ?></td>
                <td><center><img class="thumbnail" style="height: 100px; width: 100px;" src="<?php echo base_url() ?>assets/images/<?php echo $row->image ?>"></center></td>
              </tr>
              <?php endforeach; ?> 
            <!-- end of foreach loop  -->
          </tbody>  
        </table>
      </div>
     </div>
    <?php else: ?>
    <!-- this text is shown when there are no images in the database -->
             <h4 style="color: red" class="text-center">No images in database</h4>
             <?php endif ?>
    </div>
    <div class="col-lg-2"></div>
    </div>
  </div>
  <!-- jQuery CDN -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script> 
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <!-- Bootstrap JS links -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
</body>
</html>