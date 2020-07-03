<?php 

$pagenm = $_SERVER['REQUEST_URI'];

include('includes/action.php');

$cart = $_SESSION['coupon_cart']['product'];

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

<script type="text/javascript">

	function getDate(days) {  

	var monthNames = new Array("Jan","Feb","Mach","Apr","May","Jun","Jul","Aug","Sep","October","Nov","Dec");    

	var now = new Date();   

	now.setDate(now.getDate() + days);   

	var nowString =  monthNames[now.getMonth()] + " " + now.getDate() + ", " + now.getFullYear();   

	document.write(nowString); 

	}

    /* block returns back */

    history.pushState(null, null, location.href);

    window.onpopstate = function(event) {

        history.go(1);

    };

</script>

</head>



<body>
<?php include 'includes/after_body_start_scripts.php';?>
<?php include 'header.php';?>
<?php
            foreach ($cart as $key => $product) {
            $total += $product['quantity'] * $product['amount'];
            }


if ($total>0){
 ?>
<img src="https://www.emjcd.com/u?CID=1561318&TYPE=422565&CURRENCY=USD&AMOUNT=<?php echo $total; ?>&OID=<?php echo $_SESSION['customer_id']; ?>&METHOD=IMG&CJEVENT=<?php echo $_SESSION['cjevent']; ?>"  height="1" width="1" alt="">
<img src="https://checkaim.com/secure.php?mid=39&orderId=<?php echo $_SESSION['customer_id']; ?>&sale=<?php echo $total; ?>&auid=<?php echo $_SESSION['customer_id']; ?>" height="1" width="1" alt="">
<?php
    }$total = 0.00;
?>

<div class="prodBreadcrm">

    <div class="container">

        <a href="/">Accueil</a> &gt; <span>Merci </span>

    </div>

</div>



<div class="cart-sec">

	<div class="container">

		

        <div class="thankyou-box">

            <p class="thnk-p1">Nous vous remercions de votre commande!</p>

            <p class="thnk-p2">Toutes nos félicitations! Vous avez fait le premier pas vers une vie meilleure</p>

            <p class="thnk-p3">Numéro de commande:  <?php echo $_SESSION['customer_id']; ?></p>

            <p class="thnk-p3">Date de la commande:  <script type="text/javascript">getDate(0);</script></p>

            

            <div class="cart-heading-row">

                <div class="cart-col-1">Récapitulatif de la commande</div>

            </div>

            <div class="cart-heading-row" style="margin-top:0; background:#fff; color:#55942e;">

                <div class="cart-col-1">Article</div>

                <div class="cart-col-2">PRIX UNITAIRE</div>

                <div class="cart-col-3">QTÉ</div>

                <div class="cart-col-4">SOUS-TOTAL</div>

            </div>   

            <?php  

            foreach ($cart as $key => $product) {

                echo '<div class="cart-prd-row" id="'.$key.'">

                <div class="cart-col-1">

                    <img src="images/cart-prd-'.$product['id'].'.png" alt="" class="cart-prd-1">

                    <div class="cart-prd-name"><span>'.$product['product_name'].'</span> <br>'.$product['dimension'].'</div>

                </div>

                <div class="cart-col-2"><p class="unit-price">$<span class="amount'.$key.'">'.$product['amount'].'</span></p></div>

                <div class="cart-col-3"><p class="unit-price">'.$product['quantity'].'</p></div>

                <div class="cart-col-4"><p class="unit-price">$<span class="price'.$key.'">'.number_format((float)$product['quantity'] * $product['amount'], 2, '.', '').'</span></p></div>

            </div>';

            $total += $product['quantity'] * $product['amount'];

            $max_key = $key;

            }

            ?>

            

            <div class="cart-rit-price-row">

                <div class="cart-rit-price">Sous-Total: <span>$<?php echo number_format((float)$total, 2, '.', '') ?></span></div>

                <?php if (isset($_SESSION['couponeName'])) { ?><div class="cart-rit-price">Remise: <?php echo $_SESSION['couponeName']; ?><span>$<?php echo number_format($_SESSION['coupon_cart']['totalfull']['totaldiscount'], 2, '.', '');?></span></div>

                    <?php }?>

                <div class="cart-rit-price">Livraison & Service: <span>$0.00</span></div>

                <div class="cart-rit-price"><b>Total: <span>$<?php echo number_format((float)$total  - $_SESSION['coupon_cart']['totalfull']['totaldiscount'], 2, '.', '') ?></span></b></div>

            </div>

            

            <div class="clearall"></div>

            <div class="thank-personal-dtl">

            	<div class="thnk-p-dtl">

                	<p class="thnk-p-dtl-p1">Information de Livraison</p>

                    <ul class="thnk-ship-info">

                    	<li>Prénom:</li>

                        <li>Nom:</li>

                        <li>Ville:</li>

                        <li>Code Postal:</li>

                        <li>Région:</li>

						<li>Téléphone:</li>

                        <li>Email:</li>

                    </ul>

                    <ul class="thnk-ship-info-2">

                    	<li><?php echo $_SESSION['cart']['shippingFirstName'] ?></li>

                        <li><?php echo $_SESSION['cart']['shippingLastName'] ?></li>

                        <li><?php echo $_SESSION['cart']['shippingCity'] ?></li>

                        <li><?php echo $_SESSION['cart']['shippingZipPostal'] ?></li>

                        <li><?php echo $_SESSION['cart']['shippingState'] ?></li>

                        <li><?php echo $_SESSION['cart']['shippingPhone'] ?></li>

                        <li><?php echo $_SESSION['cart']['shippingEmail'] ?></li>

                    </ul>

                </div>

                

                <div class="thnk-p-dtl">

                	<p class="thnk-p-dtl-p1">Information de Payement</p>

                    <ul class="thnk-ship-info">

                    	<!-- <li>First Name:</li>

                        <li>Last Name:</li> -->

                        <li>Ville:</li>

                        <li>Code Postal:</li>

                        <li>Région:</li>

						<li>Téléphone:</li>

                        <li>Email:</li>

                    </ul>

                    <ul class="thnk-ship-info-2">

                    	<!-- <li><?php //echo $_SESSION['cart']['billingFirstName'] ?></li>

                        <li><?php //echo $_SESSION['cart']['billingLastName'] ?></li> -->

                        <li><?php echo $_SESSION['cart']['billingCity'] ?></li>

                        <li><?php echo $_SESSION['cart']['billingZipPostal'] ?></li>

                        <li><?php echo $_SESSION['cart']['billingState'] ?></li>

                        <li><?php echo $_SESSION['cart']['billingPhone'] ?></li>

                        <li><?php echo $_SESSION['cart']['billingEmail'] ?></li>

                    </ul>

                </div>

            </div>

       </div>

        

    </div>

</div>



<?php include 'footer.php';?>
<?php include 'footer_js.php';?>




<script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>

<script type="text/javascript">

$(document).ready(function(){		

	$('.mob-mnu-ic, .mobilemenu li a').click(function(e) {

		$('.mobilemenu').slideToggle();

		$('.dl-trigger').toggleClass('dl-active');

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

<?php session_destroy(); ?>

<script type="text/javascript">
    (function(d) {
        var params =
        {
            aid: "05f0006f-e558-4631-8d2d-94bfa80f0ce8",
            cb: (new Date()).getTime()
        };
        var qs = Object.keys(params).reduce(function(a, k){ a.push(k + '=' + encodeURIComponent(params[k])); return a},[]).join(String.fromCharCode(38));
        var i = d.createElement('iframe');
        i.style='width:1px;height:1px;display:none;';
        var p = 'https:' === d.location.protocol ? 'https' : 'http';
        i.src = p + '://px.content-ad.net/widget/conversion?' + qs;
        d.body.appendChild(i);
    })(document);
</script>

<img alt="Traffic Roots Conversion Pixel" src="//service.trafficroots.com/conversion/f53340b51b?click_id=your_click_id&amount=conversion_amount" style="display:none;">

<iframe src="https://ultimatecbd.endtrk.com/?nid=496&oid=15&transaction_id={s}&amount=AMOUNT" scrolling="no" frameborder="0" width="1" height="1"></iframe>
</body>

</html>

