<!DOCTYPE html>
<?php
include_once "menuWithLogout.php";
?><br><br>
<html lang="en">  
<head>
<title>Delivery and Transport</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900" 	type="text/css" media="all">

<!-- Stylesheet file -->
<link href="<?php echo base_url('assets/css/style.css'); ?>" rel='stylesheet' type='text/css' />
</head>
<body>

<h1>Delivery and Transport</h1>


<div class="container">
    <h2>Fill the Details</h2>
	
    <!-- Status message -->
    <?php  
        if(!empty($success_msg)){ 
            echo '<p class="status-msg success">'.$success_msg.'</p>'; 
        }elseif(!empty($error_msg)){ 
            echo '<p class="status-msg error">'.$error_msg.'</p>'; 
        } 
    ?>
	
    <!-- Registration form -->
    <div class="regisFrm">
        <form action="" method="post">
		 
			<!-- <div class="form-group">
                 <label>Image</label>
                   <!--input type="file" class="form-control" id="userfile" name="userfile"-->
          <!--         <input type="file" class="form-control" name="userfile"  value="<?php echo !empty($user['userfile'])?$user['userfile']:''; ?>" required>
                <?php echo form_error('userfile','<p class="help-block">','</p>'); ?>
                 
             <!--  <input type="submit" class="btn btn-primary" value="Upload">-->
          <!-- </div> -->

		   <div class="form-group">
                <input type="text" name="Full_Name" placeholder="Full NAME" value="<?php echo !empty($user['Full_Name'])?$user['Full_Name']:''; ?>" required>
                <?php echo form_error('Full_Name','<p class="help-block">','</p>'); ?>
            </div>

			<div class="form-group">
                <input type="text" name="address" placeholder="ADDRESS" value="<?php echo !empty($user['address'])?$user['address']:''; ?>" required>
                <?php echo form_error('address','<p class="help-block">','</p>'); ?>
            </div>

			<div class="form-group">
                <input type="text" name="phone" placeholder=" PHONE NUMBER" value="<?php echo !empty($user['phone'])?$user['phone']:''; ?>">
                <?php echo form_error('phone','<p class="help-block">','</p>'); ?>
            </div>

			  <div class="form-group">
                <input type="email" name="email" placeholder="EMAIL" value="<?php echo !empty($user['email'])?$user['email']:''; ?>" required>
                <?php echo form_error('email','<p class="help-block">','</p>'); ?>
            </div>


			<div class="form-group">
                <input type="text" name="shipping_address" placeholder="SHIPPING ADDRESS" value="<?php echo !empty($user['shipping_address'])?$user['shipping_address']:''; ?>" required>
                <?php echo form_error('shipping_address','<p class="help-block">','</p>'); ?>
            </div>
			<div class="form-group">
                <input type="text" name="alt_address" placeholder="ALTERNATIVE ADDRESS" value="<?php echo !empty($user['alt_address'])?$user['alt_address']:''; ?>" required>
                <?php echo form_error('alt_address','<p class="help-block">','</p>'); ?>
            </div>

			<div class="form-group">
                <input type="text" name="delivery_charges" placeholder="DELIVERY CHARGES" value="<?php echo !empty($user['delivery_charges'])?$user['delivery_charges']:''; ?>" required>
                <?php echo form_error('delivery_charges','<p class="help-block">','</p>'); ?>
            </div>
			
			 <div class="form-group">
			 <table class="form-address-table payment-form-table" style="border:0" cellPadding="4" cellSpacing="0">
              <tbody>
                <tr>
                  <th colSpan="2" style="text-align:left">
                    Payment Method
                  </th>
                </tr>
                <tr>
                  <td valign="top" style="min-width:50px;vertical-align:top" rowspan="2">
                    <input type="radio" class="paymentTypeRadios" id="input_3_paymentType_credit" name="q3_myProducts3[paymentType]" value="credit" />
                    <label for="input_3_paymentType_credit">
                      <div style="display:inline-block;padding-right:4px">
                        <img src="https://cdn.jotfor.ms/images/blank.gif" class="paypalpro_img paypalpro_visa" style="display:inline-block;vertical-align:middle" alt="visa" />
                        <img src="https://cdn.jotfor.ms/images/blank.gif" class="paypalpro_img paypalpro_mc" style="display:inline-block;vertical-align:middle" alt="mc" />
                        <img src="https://cdn.jotfor.ms/images/blank.gif" class="paypalpro_img paypalpro_amex" style="display:inline-block;vertical-align:middle" alt="amex" />
                        <img src="https://cdn.jotfor.ms/images/blank.gif" class="paypalpro_img paypalpro_dc" style="display:inline-block;vertical-align:middle" alt="dc" />
                      </div>
                    </label>
                  </td>
                  <td align="left" valign="top" style="padding-bottom:2px !important;text-align:left;vertical-align:top">
                    <input type="radio" class="paymentTypeRadios" id="input_3_paymentType_express" name="q3_myProducts3[paymentType]" checked="" value="express" />
                    <label for="input_3_paymentType_express"> <img style="vertical-align:middle" src="https://www.paypalobjects.com/webstatic/en_US/i/buttons/pp-acceptance-small.png" alt="PayPal" /> </label>
                  </td>
                </tr>
              </tbody>
            </table>
            <table style="display:none;border:0" id="creditCardTable" class="form-address-table payment-form-table" cellPadding="0" cellSpacing="0">
              <tbody>
                <tr>
                  <th colSpan="2" style="text-align:left;margin-top:20px;display:table" id="ccTitle3">
                    Credit Card
                  </th>
                </tr>
                <tr>
                  <td width="50%">
                    <span class="form-sub-label-container " style="vertical-align:top">
                      <label class="form-sub-label" for="input_3_cc_firstName" id="sublabel_cc_firstName" style="min-height:13px;margin:0 0 3px 0" aria-hidden="false"> First Name </label>
                      <input type="text" id="input_3_cc_firstName" name="q3_myProducts3[cc_firstName]" class="form-textbox cc_firstName" size="20" value="" data-component="cc_firstName" />
                    </span>
                  </td>
                  <td width="50%">
                    <span class="form-sub-label-container " style="vertical-align:top">
                      <label class="form-sub-label" for="input_3_cc_lastName" id="sublabel_cc_lastName" style="min-height:13px;margin:0 0 3px 0" aria-hidden="false"> Last Name </label>
                      <input type="text" id="input_3_cc_lastName" name="q3_myProducts3[cc_lastName]" class="form-textbox cc_lastName" size="20" value="" data-component="cc_lastName" />
                    </span>
                  </td>
                </tr>
                <tr>
                  <td width="50%">
                    <span class="form-sub-label-container " style="vertical-align:top">
                      <label class="form-sub-label" for="input_3_cc_number" id="sublabel_cc_number" style="min-height:13px;margin:0 0 3px 0" aria-hidden="false"> Credit Card Number </label>
                      <input type="number" id="input_3_cc_number" name="q3_myProducts3[cc_number]" class="form-textbox cc_number" autoComplete="off" size="20" value="" data-component="cc_number" />
                    </span>
                  </td>
                  <td width="50%">
                    <span class="form-sub-label-container " style="vertical-align:top">
                      <label class="form-sub-label" for="input_3_cc_ccv" id="sublabel_cc_ccv" style="min-height:13px;margin:0 0 3px 0" aria-hidden="false"> Security Code </label>
                      <input type="number" id="input_3_cc_ccv" name="q3_myProducts3[cc_ccv]" class="form-textbox cc_ccv" autoComplete="off" style="width:52px" value="" data-component="cc_ccv" />
                    </span>
                  </td>
                </tr>
                <tr>
                  <td width="50%">
                    <span class="form-sub-label-container " style="vertical-align:top">
                      <label class="form-sub-label" for="input_3_cc_exp_month" id="sublabel_cc_exp_month" style="min-height:13px;margin:0 0 3px 0" aria-hidden="false"> Expiration Month </label>
                      <select class="form-dropdown cc_exp_month" name="q3_myProducts3[cc_exp_month]" id="input_3_cc_exp_month" data-component="cc_exp_month">
                        <option>  </option>
                        <option value="January"> January </option>
                        <option value="February"> February </option>
                        <option value="March"> March </option>
                        <option value="April"> April </option>
                        <option value="May"> May </option>
                        <option value="June"> June </option>
                        <option value="July"> July </option>
                        <option value="August"> August </option>
                        <option value="September"> September </option>
                        <option value="October"> October </option>
                        <option value="November"> November </option>
                        <option value="December"> December </option>
                      </select>
                    </span>
                  </td>
                  <td width="50%">
                    <span class="form-sub-label-container " style="vertical-align:top">
                      <label class="form-sub-label" for="input_3_cc_exp_year" id="sublabel_cc_exp_year" style="min-height:13px;margin:0 0 3px 0" aria-hidden="false"> Expiration Year </label>
                      <select class="form-dropdown cc_exp_year" name="q3_myProducts3[cc_exp_year]" id="input_3_cc_exp_year" data-component="cc_exp_year">
                        <option>  </option>
                        <option value="2020"> 2020 </option>
                        <option value="2021"> 2021 </option>
                        <option value="2022"> 2022 </option>
                        <option value="2023"> 2023 </option>
                        <option value="2024"> 2024 </option>
                        <option value="2025"> 2025 </option>
                        <option value="2026"> 2026 </option>
                        <option value="2027"> 2027 </option>
                        <option value="2028"> 2028 </option>
                        <option value="2029"> 2029 </option>
                      </select>
                    </span>
                  </td>
                </tr>
                <tr>
                  
				
				</div>

			
			

			
			

            
			
			
			

			

			
			


           
            <div class="send-button">
                <input type="submit" name="signupSubmit" value="SUBMIT">
            </div>
        </form>
      <!--  <p>Already have an account? <a href="<?php echo base_url('users/login'); ?>">Login here</a></p> -->
    </div>
</div>
</body>
</html>