<?php 

$pagenm = $_SERVER['REQUEST_URI'];

include('includes/action.php');

    $cart = $_SESSION['coupon_cart']['product'];

    if (empty($cart)) {

        header( 'Location: cbd-products.php');

        exit;

    }

  

    $total = 0.00;

    //echo "<pre>"; var_dump($_SESSION);exit;//,$_POST,$kol, $_SESSION['product_name']

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


<!-- <style type="text/css">

#avada_coupon_code{

    width: 70%;

    max-width: 250px;

    margin-left: 30px;

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

}



        

</style> -->


</head>



<body>
<?php include 'includes/after_body_start_scripts.php';?>
<?php include 'header.php';?>



<div class="prodBreadcrm">

    <div class="container">

        <a href="/">Home</a> &gt; <a href="cbd-products.php">Products</a>  &gt; <span>Cart </span>

    </div>

</div>



<div class="cart-sec">

	<div class="container">

		<p class="cart-p1">You have <span class="cart-int"><?php echo count($cart); ?></span> items in your order.</p>    

        

        <div class="cart-heading-row">

        	<div class="cart-col-1">ORDER SUMMARY</div>

            <div class="cart-col-2">UNIT PRICE</div>

            <div class="cart-col-3">QUANTITY</div>

            <div class="cart-col-4">SUB TOTAL</div>

        </div> 

        <form id="formcart" method="post" name="formcart">

            <input name="action" type="hidden" value="formcart">

            <?php  

            foreach ($cart as $key => $product) {

                echo '<div class="cart-prd-row" id="'.$key.'">

                <div class="cart-col-1">

                    <!--<img src="images/crs.png" class="crs">-->

                    <img src="images/cart-prd-'.$product['id'].'.png" alt="cart" class="cart-prd-1">

                    <div class="cart-prd-name"><span>'.$product['product_name'].'</span> <br>'.$product['dimension'].'</div>

                </div>

                <div class="cart-col-2"><p class="unit-price">$<span class="amount'.$key.'">'.$product['amount'].'</span></p></div>

                <div class="cart-col-3">

                    <div class="cart-qty-div" id="'.$product['id'].'">

                        <button type="button" class="sub qtyBtn"><img src="images/cart-minus.png"></button>

                           <input type="text" id="Quantity'.$product['id'].'" name="quantity" value="'.$product['quantity'].'" min="1" max="5" class="quantity-selector" readonly>

                        <button type="button" class="add qtyBtn"><img src="images/cart-plus.png"></button>

                    </div>

                </div>

                <div class="cart-col-4"><p class="unit-price">$<span class="price'.$key.'">'.number_format((float)$product['quantity'] * $product['amount'], 2, '.', '').'</span></p></div>

            </div>

            <input type="checkbox" style="display:none;" name="product_id['.$product['id'].']" value="'.$product['quantity'].'" checked="checked">';

            $total += $product['quantity'] * $product['amount'];

            $max_key = $key;

            }

            ?>

        </form>

        <div class="cart-rit-price-row">

        	<div class="cart-rit-price">Sub Total: <span class="total">$<?php echo number_format((float)$total, 2, '.', '') ?></span></div>

            <div class="cart-rit-price">Shipping & Handling: <span>$0.00</span></div>

            <div class="cart-rit-price"><b>Total: <span class="total">$<?php echo number_format((float)$total, 2, '.', '') ?></span></b></div>

        </div>

        

        <div class="cart-btn-row">

        	<a href="cbd-products.php" class="cart-btn-1">Countinue shopping</a>

        	<a onClick="submitfort()" class="cart-btn-2">Proceed to checkout</a>

        </div>

        

    </div>

</div>



<?php include 'footer.php';?>





<script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>

<script type="text/javascript">



var max_qty = 5;

var min_qty = 1;

var cart_int = parseInt($('.cart-int').text());

var form = $( "#formcart" );



$(document).ready(function(){

		

	$('.mob-mnu-ic, .mobilemenu li a').click(function(e) {

		$('.mobilemenu').slideToggle();

		$('.dl-trigger').toggleClass('dl-active');

	});

	function change_total() {

        var total = 0.00;

        var max_key = <?php echo $max_key?>;

        for (let i = 0; i <= max_key; i++) {

          if ($('.price'+i).text() != '') {

            total += parseFloat($('.price'+i).text());

          } 

        }

        $(".total").html('$'+total.toFixed(2));

    }

	$('.add').click(function () {

        var element_id = $(this).parent().parent().parent().attr('id');   

        var object = $(this).parent().attr('id'); 

        if ($(this).prev().val() < max_qty) {

    		if ($(this).prev().val() < max_qty) {

                $(this).prev().val(+$(this).prev().val() + 1);

                var price = parseFloat($(this).prev().val());

                var amount = parseFloat($('.amount'+element_id).text());

                $('.price'+element_id).text(String((price*amount).toFixed(2)));

                $("input[name='product_id["+object+"]']").val($(this).prev().val());

                updElem();

            }

        }

        change_total();

	});

	

	$('.sub').click(function () {

        var element_id = $(this).parent().parent().parent().attr('id');  

        var element = $(this).parent().parent().parent();

        var object = $(this).parent().attr('id');

		if ($(this).next().val() > min_qty) {

    		if ($(this).next().val() > min_qty) {

                $(this).next().val(+$(this).next().val() - 1);

                var price = parseFloat($(this).next().val());

                var amount = parseFloat($('.amount'+element_id).text());

                $('.price'+element_id).text(String((price*amount).toFixed(2)));

                $("input[name='product_id["+object+"]']").val($(this).next().val());

                //console.log(object);

                updElem();



            }

		}

        else{

            

            var cart_str = String(cart_int-1);

            $('.cart-int').text(cart_str);

            $("input[name='product_id["+object+"]']").removeAttr('checked');

            

            delelem(element,cart_str);

        }

        change_total();

	});

});

function delelem(element,cart_str){

    element.slideUp();

    id = element.attr('id');

    $('.price'+id).text('0.00');

    //console.log(id);

    //$('#productline-' + id).slideUp();

    $.ajax({

        url: "",

        type: "POST",

        data: '&action=delete&product=' + id,

        dataType: 'json',

        success: function(response) {

            var textcoupon = response.data.text;

        }

    });

    if (cart_str == '0') {

        document.location.href = 'cbd-products.php';

    }

}

function submitfort(){

    

    $( "#formcart" ).submit();

}

function updElem(){

    //e.preventDefault();

    $.ajax({

        type: "POST",

        url: "",

        data: form.serialize(),

        dataType: "html",

        cache: false,

        success: function(data) {

          //console.log(data);

        }

    });

}



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

<!-- <script type="text/javascript">

    jQuery(document).ready(function () {



        

        

        

        jQuery('#apply_coupon').click(function(e){

            e.preventDefault();

            if (jQuery(this).attr("applied")!="yes"){

            jQuery(".order-discount").hide();

            jQuery(".coupon_error").hide();

            var promo_code = jQuery('input[name=coupon_code]').val();

            console.log(promo_code);

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

                            //document.getElementById("coupoone_form").style.cssText = 'display:none !important';



                            

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



</script> -->

</body>

</html>

