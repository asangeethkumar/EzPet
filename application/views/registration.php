<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet"  href="<?php echo base_url('assets/fonts/material-icon/css/material-design-iconic-font.min.css'); ?>">

    <link rel="stylesheet"  href="<?php echo base_url('assets/vendor/nouislider/nouislider.min.css'); ?>">

    <!-- Main css -->
    <link rel="stylesheet"  href="<?php echo base_url('assets/css/register.css'); ?>">
</head>
<body>

    <div class="main">

        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="<?php echo base_url('assets/images/22.jpg'); ?>" alt="">
                    <div class="signup-img-content">
                        <h2>Register now </h2>
                        <p>get your loved Pets !</p>
                    </div>
                </div>
                <div class="signup-form">
                    <form method="POST" class="register-form" id="register-form">
                        <div class="form-row">
                            <div class="form-group">
                                <div class="form-input">
                                    <label for="first_name" class="required">First name</label>
                                    <input type="text" name="first_name" id="first_name" />
                                </div>
                                <div class="form-input">
                                    <label for="last_name" class="required">Last name</label>
                                    <input type="text" name="last_name" id="last_name" />
                                </div>
                               
                                <div class="form-input">
                                    <label for="email" class="required">Email</label>
                                    <input type="text" name="email" id="email" />
                                </div>
                                <div class="form-input">
                                    <label for="phone_number" class="required">Phone number</label>
                                    <input type="text" name="phone_number" id="phone_number" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-select">

                                   
                                </div>
                              
                               
                            </div>
                        </div>
                       
                        <div class="form-submit">
                            <input type="submit" value="Submit" class="submit" id="submit" name="submit" />
                            <input type="submit" value="Reset" class="submit" id="reset" name="reset" />
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- JS -->
    <script  src="<?php echo base_url('assets/vendor/jquery/jquery.min.js'); ?>" ></script>
    <script  src="<?php echo base_url('assets/vendor/nouislider/nouislider.min.js'); ?>"  ></script>
    <script  src="<?php echo base_url('assets/vendor/wnumb/wNumb.js'); ?>"  ></script>
    <script  src="<?php echo base_url('assets/vendor/jquery-validation/dist/jquery.validate.min.js'); ?>" ></script>
    <script src="<?php echo base_url('assets/vendor/jquery-validation/dist/additional-methods.min.js'); ?>"  ></script>
    <script  src="<?php echo base_url('assets/js/register.js'); ?>"  ></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>