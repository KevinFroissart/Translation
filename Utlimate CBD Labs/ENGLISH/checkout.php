<?php 
$pagenm = $_SERVER['REQUEST_URI'];
include_once 'includes/action.php';
include_once 'includes/language.php';
$cart = $_SESSION['coupon_cart']['product'];
$shipping_state = $_SESSION['coupon_cart']['shippingState'];
$billing_state = $_SESSION['coupon_cart']['billingState'];
if (empty($cart)) {
    header( 'Location: cbd-products.php');
    exit;
}
$total = 0.00;
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Ultimate CBD Labs</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">

<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/media.css">
<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css" >
<link href="https://fonts.googleapis.com/css?family=PT+Serif:400,700&display=swap" rel="stylesheet">
<?php include 'includes/head_scripts.php';?>
<script type="text/javascript" src="https://js.squareup.com/v2/paymentform"></script>
<!-- <script type="text/javascript" src="https://js.squareupsandbox.com/v2/paymentform"></script> -->

<link rel="stylesheet" type="text/css" href="css/mysqpaymentform.css">
<style type="text/css">
#avada_coupon_code{
    width: 70%;
    /*max-width: 250px;
    margin-left: 30px;*/
    height: 38px;
    margin-top: 10px;
}

.avada_coupon_fields{
    display: flex;
    width: 100%;
}
.cart-btn-3{
    padding: 11px 23px;
    line-height: 16px;
    font-size: 13px;
    background-color: #55942e;  
    float: right;
    border-radius: 40px;
    color: white;
    margin-top: 10px;
    cursor: pointer;
}
@media only screen and (max-width:768px){
#avada_coupon_code{
    width: 55%;
}
}

        
</style>
<script type="text/javascript">
	function getDate(days) {  
	var monthNames = new Array("Jan","Feb","Mach","Apr","May","Jun","Jul","Aug","Sep","October","Nov","Dec");    
	var now = new Date();   
	now.setDate(now.getDate() + days);   
	var nowString =  monthNames[now.getMonth()] + " " + now.getDate() + ", " + now.getFullYear();   
	document.write(nowString); 
	}
</script>
<link rel="stylesheet" type="text/css" href="includes/response.css">
</head>

<body>
<?php include 'includes/after_body_start_scripts.php';?>
<?php include 'header.php';?>
<?php string_header(0); ?>

<div class="prodBreadcrm">
    <div class="container">
        <a href="/">Home</a> &gt; <span>Checkout</span>
    </div>
</div>

<div class="checkout-sec">
	<div class="container">
    	<p class="comnHdng">Complete Your Order</p>
        <p class="s3-subHdng">You're One Step Away From Enjoying the Benefits of CBD!</p>
        
        <div class="chk-sec-block">
            <div class="chk-rit-prc-box show-mob">
                <p class="chk-head" id="summry-tog">Order Summary</p>
                
                <div class="summry-drower" style="display: none;">
                  <?php  
                  foreach ($cart as $key => $product) {
                      echo '<div class="chk-prc-sub-head">
                              <p class="chk-prc-p3">'.$product['quantity'].' x '.$product['product_name'].' - '.$product['dimension'].'</p>
                              <p class="chk-prc-p4">$'.number_format((float)$product['quantity'] * $product['amount'], 2, '.', '').'</p>
                            </div>';
                  $total += $product['quantity'] * $product['amount'];
                  }
                  ?>

                    <div class="chk-prc-sub-head border">
						<p class="chk-prc-p3">Shipping & Handling</p>
                        <p class="chk-prc-p4">$0.00</p>
                    </div>
                    <div class="chk-prc-sub-head">
						<p class="chk-prc-p3">Tax</p>
                        <p class="chk-prc-p4">$0.00</p>
                    </div>
                    <div class="chk-prc-total">
						<p class="chk-prc-p5">Total</p>
                        <p class="chk-prc-p6">$<?php echo $total ?></p>
                    </div>
                </div>
            </div>
          <form class="sendform" method="post" id="process_form">
          <input type="hidden" name="action" value="billingform">
        	<div class="chk-box-lft">
            	<p class="chk-head">Shipping Information</p>
                
                <div class="frmBox">
                    <div class="input-box hlf">
                        <img src="images/ic1.png" alt="" class="fldicon">
                        <input type="text" name="shippingFirstName" class="field-all" placeholder="First Name">
                    </div>
                    <div class="input-box hlf fr">
                        <img src="images/ic1.png" alt="" class="fldicon">
                        <input type="text" name="shippingLastName" class="field-all" placeholder="Last Name">
                    </div>
                    
                    <div class="input-box">
                        <img src="images/ic2.png" alt="ic1" class="fldicon">
                        <input type="text" name="shippingEmail" class="field-all" placeholder="E-mail">
                    </div>
                    
                    <div class="input-box">
                        <img src="images/ic3.png" alt="ic3" class="fldicon">
                        <input type="text" name="shippingPhone" class="field-all" placeholder="Phone Number">
                    </div>
                    
                    <div class="input-box">
                        <img src="images/ic4.png" alt="ic6" class="fldicon">
                        <input type="text" name="shippingAddress" class="field-all" placeholder="Address">
                    </div>
                    
                    <div class="input-box">
                        <img src="images/ic6.png" alt="ic7" class="fldicon">
                        <input type="text" name="shippingCity" class="field-all" placeholder="City">
                    </div>
                    
                    <div class="input-box">
                        <img src="images/ic4.png" alt="ic1" class="fldicon">
                        <select class="field-all" id="shipping_country" name="shippingCountry">
                          <option value=''>Select Country</option>
                          <?php
                          foreach($countryArray as $key => $value){
                              $selected = $shipping_country==$key ? "selected" : "";
                              echo "<option {$selected} value='{$key}'>{$value}</option>";
                          }
                          ?>
                        </select>
                    </div>
                    
                    <div class="input-box hlf">
                        <img src="images/ic5.png" alt="ic1" class="fldicon">
                        <select class="field-all" name="shippingState">
                          <option value="">Select State</option>
                          <?php
                          foreach($us_state_list as $key => $value){
                              $selected = $shipping_state==$key ? "selected" : "";
                              echo "<option class='us' {$selected} value='{$key}'>{$value}</option>";
                          }
                          foreach($ca_state_list as $key => $value){
                              $selected = $shipping_state==$key ? "selected" : "";
                              echo "<option class='ca' style='display:none;' {$selected} value='{$key}'>{$value}</option>";
                          }
                          ?>
                        </select>
                    </div>
                    
                    <div class="input-box hlf fr">
                        <img src="images/ic7.png" alt="ic7" class="fldicon">
                        <input type="text" id="shipping_zip" name="shippingZipPostal" class="field-all" placeholder="Zip Code" maxlength="5" onkeyup="javascript:this.value=this.value.replace(/\s/g, '')">
                        <!-- onkeyup="javascript:this.value=this.value.replace(/[^0-9]/g,&#39;&#39;)" -->
                    </div>
                    
               </div>
                
                <div class="chk-payment-box">
                	<p class="chk-head">Payment Information</p>
                    
                    <label class="fieldToggle">
                    <input type="checkbox" name="togData" id="togData" checked="checked">
                    <span class="togship"></span>
                    Billing address same as shipping address</label>
                    
                    <div class="shipaddress" style="display:none;">
                       <div class="input-box">
                            <img src="images/ic2.png" alt="ic1" class="fldicon">
                            <input type="text" name="billingEmail" class="field-all" placeholder="E-mail">
                        </div>
                        
                        <div class="input-box">
                            <img src="images/ic3.png" alt="ic3" class="fldicon">
                            <input type="text" name="billingPhone" class="field-all" placeholder="Phone Number">
                        </div>
                        
                        <div class="input-box">
                            <img src="images/ic4.png" alt="ic6" class="fldicon">
                            <input type="text" name="billingAddress" class="field-all" placeholder="Address">
                        </div>
                        
                        <div class="input-box">
                            <img src="images/ic6.png" alt="ic7" class="fldicon">
                            <input type="text" name="billingCity" class="field-all" placeholder="City">
                        </div>
                        
                        <div class="input-box">
                            <img src="images/ic4.png" alt="ic1" class="fldicon">
                            <select id="billing_country" name="billingCountry" class="field-all">
                              <option value=''>Secect Country</option>
                              <?php
                              foreach($countryArray as $key => $value){
                                  $selected = $billing_country==$key ? "selected" : "";
                                  echo "<option {$selected} value='{$key}'>{$value}</option>";
                              }
                              ?>
                            </select>
                        </div>
                        
                        <div class="input-box hlf">
                            <img src="images/ic5.png" alt="ic1" class="fldicon">
                            <select name="billingState" class="field-all">
                              <option value=''></option>
                              <?php
                              foreach($us_state_list as $key => $value){
                                  $selected = $billing_state==$key ? "selected" : "";
                                  echo "<option class='us' {$selected} value='{$key}'>{$value}</option>";
                              }
                              foreach($ca_state_list as $key => $value){
                                  $selected = $billing_state==$key ? "selected" : "";
                                  echo "<option class='ca' style='display:none;' {$selected} value='{$key}'>{$value}</option>";
                              }
                              ?>
                            </select>
                        </div>
                        
                        <div class="input-box hlf fr">
                            <img src="images/ic7.png" alt="ic7" class="fldicon">
                            <input type="text" id="billing_zip" name="billingZipPostal" class="field-all" onkeyup="javascript:this.value=this.value.replace(/\s/g, '')" placeholder="Zip Code">
                        </div>
                    </div>
                    
                    <div class="card-accept"> We Accept: <img src="images/cc-icon.png"></div>
                    
                    
                    <!-- <div class="input-box hlf payfld" style="padding:0;">
                        <select class="field-all" name="fields_expmonth">
                            <option>Exp. Month</option>
                            <option value="01">January</option>
                            <option value="02">February</option>
                            <option value="03">March</option>
                            <option value="04">April</option>
                            <option value="05">May</option>
                            <option value="06">June</option>
                            <option value="07">July</option>
                            <option value="08">August</option>
                            <option value="09">September</option>
                            <option value="10">October</option>
                            <option value="11">November</option>
                            <option value="12">December</option>
                        </select>
                    </div>
                    
                    <div class="input-box hlf fr payfld" style="padding:0;">
                        <select class="field-all" name="fields_expyear">
                            <option>Exp. Year</option>
                            <option value="19">2019</option>
                            <option value="20">2020</option>
                            <option value="21">2021</option>
                            <option value="22">2022</option>
                            <option value="23">2023</option>
                            <option value="24">2024</option>
                            <option value="25">2025</option>
                            <option value="26">2026</option>
                            <option value="27">2027</option>
                            <option value="28">2028</option>
                        </select>
                    </div>
                    
                    <div class="input-box payfld">
                        <input type="tel" name="cc_number" class="field-all" maxlength="16" placeholder="Credit Card Number">
                    </div>
                    
                    <div class="input-box hlf payfld cvv">
                        <input type="tel" name="cc_cvv" class="field-all" placeholder="CVV" maxlength="4">
                    </div>
                    <a href="cvv.php" class="whats-dis fancybox fancybox.iframe">What is this?</a> -->
                    <div class="cc-container form-container">
                        <div id="sq-card-number"></div>
                        <div class="third" id="sq-expiration-date"></div>
                        <div class="third" id="sq-cvv"></div>
                        <div class="third" id="sq-postal-code"></div>
                        <input type="hidden" name="nonce" value="" id="nonce">
                    </div>
                    <div class="cart-rit-price-row" style="float: left;width: 100%;">
                        <h2>Have A Promotional Code?</h2>

                        <div class="avada-coupon-fields">
                            <?php if (isset($_SESSION['couponeName'])) { ?>
                            <input type="text" name="coupon_code" class="field-all" id="avada_coupon_code" value="<?php echo $_SESSION['couponeName']; ?>" readonly placeholder="Coupon code" />
                            <div type="submit" class="fusion-apply-coupon fusion-button button-default fusion-button-default-size button apply_coupon cart-btn-3" id="apply_coupon2" value="Apply coupon">Coupon applied</div>
                            <?php } else{ ?>
                                <input type="text" name="coupon_code" class="field-all" id="avada_coupon_code"  value="" placeholder="Coupon code" />
                                <div type="submit" class="cart-btn-3" id="apply_coupon" value="Apply coupon">Apply coupon</div>
                                <?php }?>
                            

                        </div>
                        <div class="coupon_error" style="color: red;float: left;margin-left: 40px; display: none;margin-top: 5px;"></div>
                    </div>
                </div>
                
                <input type="submit" value="Complete Checkout" class="submit" onclick="submitCardClick(event)">
                <img src="images/chk-secu-logos.png" class="chk-secu-logos">
                <input type="hidden" name="billingSameAsShipping" value="yes">
            </div>
            </form>
            <div class="chk-box-rit">
            	<div class="chk-rit-prc-box show-desk">
                	<p class="chk-head">Order Summary</p>
                    <?php  
                  foreach ($cart as $key => $product) {
                      echo '<div class="chk-prc-sub-head">
                              <p class="chk-prc-p3" style="width: 70%;">'.$product['quantity'].' x '.$product['product_name'].' - '.$product['dimension'].'</p>
                              <p class="chk-prc-p4">$'.number_format((float)$product['quantity'] * $product['amount'], 2, '.', '').'</p>
                            </div>';
                  }
                  ?>
                    
                    
                    <div class="chk-prc-sub-head border">
						<p class="chk-prc-p3">Shipping & Handling</p>
                        <p class="chk-prc-p4">$0.00</p>
                    </div>
                    <div class="chk-prc-sub-head">
						<p class="chk-prc-p3">Tax</p>
                        <p class="chk-prc-p4">$0.00</p>
                    </div>
                    <?php if (isset($_SESSION['couponeName'])) { ?>
                      <div class="chk-prc-sub-head">
            <p class="chk-prc-p3">Discount: <?php echo $_SESSION['couponeName']; ?></p>
                        <p class="chk-prc-p4">$<?php echo number_format($_SESSION['coupon_cart']['totalfull']['totaldiscount'], 2, '.', '');?></p>
                    </div>
                    <?php } else{ ?><div class="chk-prc-sub-head cart-rit-price order-discount" style="display: none;">
            <p class="chk-prc-p3">Discount: <?php echo $_SESSION['couponeName']; ?></p><p class="chk-prc-p4">$0.00</p></div><?php }?>
                
                    <div class="chk-prc-total">
						<p class="chk-prc-p5">Total</p>
                        <p class="chk-prc-p6">$<?php echo number_format($total - $_SESSION['coupon_cart']['totalfull']['totaldiscount'], 2, '.', '');?></p>
                    </div>
                </div>
                
                <div class="chk-post-logo">
                    <img src="images/chk-post-logo.png" class="post-logo-img" alt="img">
                    Your Order Is Estimated To Arrive by <span class="red-c"><b><script type="text/javascript">getDate(5);</script></b></span>
                </div>
                
                <div class="chk-cust-box">
                	<p class="chk-cust-p1">Customer Testimonials</p>
                    <div class="chk-cust-row">
                    	<img src="images/model1.png" class="chk-fc-1">
                        <p class="chk-cust-p2">I have been using Ultimate CBD Oil for over a month now and can confidently say it has been a true ally. It has helped me start living or should I say re-living, an active life! Thank you!</p>
                        <p class="chk-cust-p3">Jessica Brooks <span>Verified Buyer</span> <img src="images/star.png" class="chk-star"></p>
                    </div>
                    <div class="chk-cust-row">
                    	<img src="images/model2.png" class="chk-fc-1">
                        <p class="chk-cust-p2">Ultimate CBD Gummies was recommended to me by my therapist and I am so glad I decided to give it a try! I also use the CBD Oil daily now. Highly Recommended</p>
                        <p class="chk-cust-p3">Rod Hebert <span>Verified Buyer</span> <img src="images/star.png" class="chk-star"></p>
                    </div>
                    
                </div>
                
            </div>
            
        </div>
        
    </div>
</div>

<div class="sectionSix">
	<div class="container">
    	<p class="comnHdng">Stay Updated On The Latest Deals! </p>
        <p class="s3-subHdng s6-subHdng">Join over 200,000 people who receive Ultimate CBD Labs weekly educational email series.<br class="forDesk"> Special insider perks and deals included.</p>
        <div class="email-field">
        	<input type="email" placeholder="Enter Your Email">
            <a href="" class="sign-up">Sign Up <img src="images/sign-arw.png"></a>
        </div>
    </div>
</div>





<?php include 'footer.php';?>


<script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>
<script type="text/javascript" src="js/jquery.fancybox.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  $('#shipping_country').change(function(){
    if($(this).val()=='US'){
      $('#shipping_zip').attr('maxlength', 5);
      $('.us').show();
      $('.ca').hide();
    }
    if($(this).val()=='CA'){
      $('#shipping_zip').attr('maxlength', 6);
      $('.ca').show();
      $('.us').hide();
    }
      
  });
});
$(document).ready(function(){
  $('#billing_country').change(function(){
    if($(this).val()=='US'){
      $('#billing_zip').attr('maxlength', 5);
      $('.us').show();
      $('.ca').hide();
    }
    if($(this).val()=='CA'){
      $('#billing_zip').attr('maxlength', 6);
      $('.ca').show();
      $('.us').hide();
    }
      
  });
});
$(document).ready(function(){		
  $("input[name='shippingFirstName']").attr('required', 'required');
  $("input[name='shippingLastName']").attr('required', 'required');
  $("input[name='shippingCity']").attr('required', 'required');
  $("input[name='shippingAddress']").attr('required', 'required');
  $("input[name='shippingZipPostal']").attr('required', 'required');
  $("input[name='shippingPhone']").attr('required', 'required');
  $("input[name='shippingEmail']").attr('required', 'required');
  $("select[name='shippingState']").attr('required', 'required');
  $("select[name='shippingCountry']").attr('required', 'required');
	$('.mob-mnu-ic, .mobilemenu li a').click(function(e) {
		$('.mobilemenu').slideToggle();
		$('.dl-trigger').toggleClass('dl-active');
	});
	$('.fieldToggle').click(function(){
		if($('#togData').prop("checked") == true){
			$('.shipaddress').slideUp();
      $('input[name=billingSameAsShipping]').val('yes');
      $("input[name='billingFirstName']").removeAttr('required');
      $("input[name='billingLastName']").removeAttr('required');
      $("input[name='billingCity']").removeAttr('required');
      $("input[name='billingAddress']").removeAttr('required');
      $("input[name='billingZipPostal']").removeAttr('required');
      $("select[name='billingState']").removeAttr('required');

		}
		else if($('#togData').prop("checked") == false){
		   $('.shipaddress').slideDown();
       $('input[name=billingSameAsShipping]').val('no');
       $("input[name='billingFirstName']").attr('required', 'required');
       $("input[name='billingLastName']").attr('required', 'required');
       $("input[name='billingCity']").attr('required', 'required');
       $("input[name='billingAddress']").attr('required', 'required');
       $("input[name='billingZipPostal']").attr('required', 'required');
       $("select[name='billingState']").attr('required', 'required');
		}
	});
		
	$('.fancybox').fancybox();
	
	$('#summry-tog').click(function(e) {
		$('.summry-drower').slideToggle();
		$('#summry-tog').toggleClass('open');
	});
});
	
$(document).scroll(function() {	
	if ($(this).scrollTop() > 110){
	   $('.top-fix-bar').addClass('fixed-nav');
	}else{
		$('.top-fix-bar').removeClass('fixed-nav');
	}
	
	if ($(this).scrollTop() > 10){
	   $('.mobilemenu').addClass('mobimenu-top');
	}else{
		$('.mobilemenu').removeClass('mobimenu-top');
	}
});	
</script>
<script type="text/javascript" src='https://cdn.jsdelivr.net/npm/jquery-validation@1.19.0/dist/jquery.validate.js'></script>
<script type="text/javascript" >
  const paymentForm = new SqPaymentForm({
           // Initialize the payment form elements
           
           //TODO: Replace with your sandbox application ID
           applicationId: "sq0idp-KYPaVncyDK41facYmOAoFQ",
           //applicationId: "sandbox-sq0idb--TZocO2QXe5CqYff-Grquw",
            // card: {
            //   elementId: 'sq-card',
            // },
            //autoBuild: false,

            inputClass: 'sq-input',
            inputStyles: [{
                fontSize: '14px',
                lineHeight: '24px',
                padding: '10px',
                placeholderColor: '#a0a0a0',
                backgroundColor: 'transparent',
            }],
            cardNumber: {
                  elementId: 'sq-card-number',
                  placeholder: 'Card Number'
              },
              cvv: {
                  elementId: 'sq-cvv',
                  placeholder: 'CVV'
              },
              expirationDate: {
                  elementId: 'sq-expiration-date',
                  placeholder: 'MM/YY'
              },
              postalCode: {
                  elementId: 'sq-postal-code',
                  placeholder: 'Postal'
              },
            callbacks: {
              cardNonceResponseReceived: function(errors, nonce, paymentData, contacts) {
                if (errors) {
              //   Log errors from nonce generation to the browser developer console.
                  console.error('Encountered errors on card nonce received:');
                  errors.forEach(function (error) {
                    console.error('  ' + error.message);
                    $('.sq-card-details').html(error.message);
                    $('.sq-card-details').css('color','#FF3E39');
                    setTimeout(() => {
                      $('.sq-card-details').css('color','#FFF');
                    }, 3000);
                  });
                  //alert('Encountered errors, check console for more details');
                  
                  return;
                } else {
                  //alert(The generated nonce is:\n${nonce});
                  
                    
                    $('#nonce').val(nonce);
                    if ($("#process_form").valid()){
                      $('#loading-indicator').show();
                      setTimeout(() => {
                        $('#btn_submit_form').hide();
                        $('#process_form').submit();
                      }, 1500);
                    }
                  
                }
              }
            }
         });

      function submitCardClick(event) {
            console.log('hi');
           // Don't submit the form until SqPaymentForm returns with a nonce
           event.preventDefault();
           if ($("#process_form").valid()){
           // Request a nonce from the SqPaymentForm object
           paymentForm.requestCardNonce();
         }
         }
// jQuery("#process_form").validate({
//     /* debug: true, */
//             rules: {
//                 shippingPhone: {
//                     required: true,
//                     maxlength: 10,
//                     number: true
//                 },
//                 shippingEmail: {
//                     required: true
//                 },
//                 shippingState: {
//                     required: true,
//                     minlength: 1,
//                 },
//                 shippingZipPostal: {
//                     required: true,
//                     minlength: 4,
//                     maxlength: 6
//                 },
//                 fields_expmonth: {
//                     required: true,
//                     number: true
//                 },
//                 fields_expyear: {
//                     required: true,
//                     number: true
//                 },
//                 cc_number: {
//                     required: true,
//                     number: true,
//                     minlength: 16,
//                     maxlength: 16
//                 },
//                 cc_cvv: {
//                     required: true,
//                     number: true,
//                     minlength: 3,
//                     maxlength: 4
//                 },
//                 agree_tc: {
//                     required: true,
//                 }
//             },
//             messages: {
//                 expmonth: "",
//                 expyear: "",
//                 cc_number: "",
//                 cvv: "",
//             },
//             submitHandler: function(form){
//                 $('#loading-indicator').show();
//                 form.submit();
//             }
//         });
        
    /* automatically populate card brand while the customer enters the number */
    $('input[name=cc_number]').change(function(){
        var $cc_number = $(this).val().substr(0, 1);
        if($cc_number == 3){
            $('select[name="card_type"]').val('amex').change();
        } else if($cc_number == 4){
            $('select[name="card_type"]').val('visa').change();
        } else if($cc_number == 5){
            $('select[name="card_type"]').val('mastercard').change();
        } else if($cc_number == 6){
            $('select[name="card_type"]').val('discover').change();
        }
    });
    /* automatically populate card brand while the customer enters the number */

jQuery(document).ready(function($){
    $("input[name='shippingZipPostal']").change(function() {
        var el = $(this);
        var country = $('#shipping_country').val();
        if (el.val().length == 5 || el.val().length == 6) {
            $.ajax({
                url: "https://zip.getziptastic.com/v2/"+country+"/" + el.val(),
                cache: false,
                dataType: "json",
                type: "GET",
                success: function(result, success) {
                    $("input[name='shippingCity']").val(result.city);
                    $("select[name='shippingState']").prepend( $('<option value="' + result.state_short + '" selected>' + result.state + '</option>'));
                }
            });
        }
    });
});
jQuery(document).ready(function($){
    $("input[name='billingZipPostal']").change(function() {
        var el = $(this);
        var country = $('#billing_country').val();
        if (el.val().length == 5 || el.val().length == 6) {
            $.ajax({
                url: "https://zip.getziptastic.com/v2/"+country+"/" + el.val(),
                cache: false,
                dataType: "json",
                type: "GET",
                success: function(result, success) {
                    $("input[name='billingCity']").val(result.city);
                    $("select[name='billingState']").prepend( $('<option value="' + result.state_short + '" selected>' + result.state + '</option>'));
                }
            });
        }
    });
});

    history.pushState(null, null, location.href);
    window.onpopstate = function(event) {
        history.go(1);
    };
</script>
<script type="text/javascript">
    jQuery(document).ready(function () {

        
        
        
        jQuery('#apply_coupon').click(function(e){
            e.preventDefault();
            if (jQuery(this).attr("applied")!="yes"){
            jQuery(".order-discount").hide();
            jQuery(".coupon_error").hide();
            var promo_code = jQuery('input[name=coupon_code]').val();
            console.log(promo_code);
            var total = <?php echo $total ?>;
            if(promo_code != ''){
                jQuery.ajax({
                    url: "ajax.php?" + getRand(),
                    type: "POST",
                    data: 'code=' + promo_code,
                    dataType: 'json',
                    success: function(response) {
                        console.log(response);
                        if (response.status=='fail'){
                            jQuery(".coupon_error").html(response.data.text);
                            jQuery(".coupon_error").show();
                            console.log('no');
                        }
                        else{
                            console.log('yes');
                            const couponeInfo = response.data.totalfull;
                            jQuery(".order-discount").show();
                            jQuery(".order-discount").html('Discount:' + response.data.coupon.code +' <span class="woocommerce-Price-currencySymbol">$'+couponeInfo.totaldiscount+'</span>');
                          
                            //jQuery(".order-total").html('<span class="woocommerce-Price-currencySymbol">$</span>'+ couponeInfo.totalfull);
                            //jQuery(".fusion-menu-cart").html('<span class="woocommerce-Price-currencySymbol">$</span>'+ couponeInfo.totalfull);
                            jQuery("#avada_coupon_code").attr("readonly","readonly");
                            jQuery('#apply_coupon').attr("applied","yes");
                            jQuery('#apply_coupon').html("Coupon applied");
                            ftotal = parseFloat(total-couponeInfo.totaldiscount);
                            //document.getElementById("coupoone_form").style.cssText = 'display:none !important';
                            jQuery('.chk-prc-p6').html("$"+ftotal.toFixed(2)+"");
                            
                        }
                        

                    }
                });
                return false;
            }else{
                return false;
            }
            }
        });
        
        function getRand() {
            min = 0;
            max = 999999999;
            str = Math.floor(Math.random() * (max - min)) + min;
            return str;
        }

    });

</script>
<p id="loading-indicator" class="wait-loader-container" style="display:none;">Processing...</p>

</body>
</html>
