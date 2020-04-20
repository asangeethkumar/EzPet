
<!DOCTYPE html>
<?php
include_once "menuWithLogout.php";
?>
<br>
<br>
<br>
<br>
<html lang="en">  
<head>
<title>pet food</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="<?php echo base_url('assets/images/icons/favicon.ico'); ?>"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css"  href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css"  href="<?php echo base_url('assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css'); ?>">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css"  href="<?php echo base_url('assets/vendor/animate/animate.css'); ?>">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css"  href="<?php echo base_url('assets/vendor/css-hamburgers/hamburgers.min.css'); ?>">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/select2/select2.min.css'); ?>">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/util.css'); ?>" >
  <link rel="stylesheet" type="text/css"  href="<?php echo base_url('assets/css/mains.css'); ?>">
<!--===============================================================================================-->
</head>
<body>
<div class="limiter">

    <div class="container-login100">
      <div class="wrap-login100">
        


            <form class="login100-form validate-form"  action="" method="post" >
            <h1 align="center" >PET GROOMING </h1>
            <br>
            <br>
  
  <!-- Status message -->
  
  
  <!-- Registration form 
  <div class="regisFrm">
    <form action="" method="post">
    <div class="form-group">
    <div class="form-group ">
      <label for="inputState">Services</label>
      <select id="inputState" class="form-control" required >
       
        <option>brushing</option>
    <option>Cutting the fur</option>
    <option></option>
    <option>SEROLOGY</option>
    <option>CYTOLOGY & HISTOPATHOLOGY</option>
    <option>MICROBIOLOGY</option>
    <option>HORMONE ANALYSIS</option>
    <option>SPECIALISED TEST</option>
    <option>PANELS</option>
    <option>LIVE STOCK HERD HEALTH SCREENING TEST</option>
    <option>EXPORT TESTING SERVICES (PET TRAVEL TO ABROAD)</option>
    <option>LAB ANIMAL HEALTH MONITORING AND CLINICAL TRIAL TESTING</option>
      </select>
</div> -->
<div class="form-group">
        <input type="text" name="first_name"   placeholder="OWNER NAME" required>
        
      </div>

        <div class="form-group">
        <input type="text" name="pet_name"   placeholder="PET NAME" required>
        
      </div>
      <div class="form-group">
        <input type="text" name="pet_breed"   placeholder="PET Breed"  required>
    
      </div>
      <div class="form-group">
        <input type="text" name="phone" pattern="[6-9]{1}[0-9]{9}" 
       title="Phone number with 7-9 and remaing 9 digit with 0-9" placeholder="PHONE NUMBER">
      
      </div>
      <h2>SERVICES:</h2>
             
      <form action="/action_page.php">
  <input type="checkbox" id="brushing" name="brushing" value="brushing">
  <label for="brushing">BRUSHING</label><br>
  <input type="checkbox" id="cutting" name="cutting" value="cutting">
  <label for="cutting">Cutting the fur</label><br>
  <input type="checkbox" id="clipping" name="clipping" value="clipping">
  <label for="clipping">Clipping nails</label><br>
  <form action="/action_page.php">
  <input type="checkbox" id="cleaning" name="cleaning" value="cleaning">
  <label for="cleaning"> Cleaning ears</label><br>
  <input type="checkbox" id="bathing" name="bathing" value="bathing">
  <label for="bathing">Bathing</label><br>
  <input type="checkbox" id="drying" name="drying" value="drying">
  <label for="drying"> Drying</label><br>
  <input type="checkbox" id="styling" name="styling" value="styling">
  <label for="styling">Styling</label><br>
  
</form>
      
      <!--h2>Payment</h2>
      <label for="cname"></label>
            <input type="text" id="cname" name="cardname" placeholder="Name on Card"><emsp>
            <label for="ccnum"></label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="Credit/Debit card number">
            <label for="expmonth"></label>
            <input type="text" id="expmonth" name="expmonth" placeholder="Exp Month"><ensp>
            <div class="">
              <div class="">
                <label for="expyear"></label>
                <input type="text" id="expyear" name="expyear" placeholder="Exp Year">
              </div>
              <div class="col-50">
                <label for="cvv"></label>
                <input type="text" id="cvv" name="cvv" placeholder="CVV">
              </div>
          </div-->
      
  <div class="container-login100-form-btn">
            <button class="login100-form-btn" onclick="change()" id="submit" name="signupSubmit"  value="SUBMIT" type="submit">
              submit
            </button>

      </div>
    </form>
  </div>
</div>

<!--===============================================================================================-->  
  <script src="<?php echo base_url('assets/vendor/jquery/jquery-3.2.1.min.js'); ?>" ></script>
<!--===============================================================================================-->
  <script  src="<?php echo base_url('assets/vendor/bootstrap/js/popper.js'); ?>"  ></script>
  <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.min.js'); ?>"  ></script>
<!--===============================================================================================-->
  <script  src="<?php echo base_url('assets/vendor/select2/select2.min.js'); ?>"  ></script>
<!--===============================================================================================-->
  <script  src="<?php echo base_url('assets/vendor/tilt/tilt.jquery.min.js'); ?>"  ></script>
  <script >
    $('.js-tilt').tilt({
      scale: 1.1
    })
  </script>
<!--===============================================================================================-->
  <script  src="<?php echo base_url('assets/js/main.js'); ?>"  ></script>


</body>
</html>