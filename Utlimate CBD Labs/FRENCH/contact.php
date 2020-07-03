<?php 

$pagenm = $_SERVER['REQUEST_URI'];

include('includes/action.php');

?>

<!doctype html>

<html>

<head>

<meta charset="utf-8">

<title>Contactez-nous - Ultimate CBD Labs</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="description" content="For any questions about our products, your order, or CBD in general, please contact our customer service team using the contact info form or by emailing support@ultimatecbdlabs.com." />
<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">



<link rel="stylesheet" type="text/css" href="css/style.css">

<link rel="stylesheet" type="text/css" href="css/media.css">

<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css" >

<link href="https://fonts.googleapis.com/css?family=PT+Serif:400,700&display=swap" rel="stylesheet">

<?php include 'includes/head_scripts.php';?>

<!-- Global site tag (gtag.js) - Google Ads: 689503734 -->

<script async src="https://www.googletagmanager.com/gtag/js?id=AW-689503734"></script>

<script>

  window.dataLayer = window.dataLayer || [];

  function gtag(){dataLayer.push(arguments);}

  gtag('js', new Date());



  gtag('config', 'AW-689503734');

</script>


</head>



<body>

<?php include 'includes/after_body_start_scripts.php';?>

<?php include 'header.php';?>



<div class="prodBreadcrm">

    <div class="container">

        <a href="/">Accueil</a> &gt; <span>Contactez-nous </span>

    </div>

</div>



<div class="contact-sec">

	<div class="container">

    	<div class="cntct-lft">

        	<h1 class="cntct-hdng">Informations de contact</h1>

            <p class="cntct-txt1">Chez Ultimate CBD Labs, ce qui compte le plus pour nous c'est la satisfaction de nos clients. Pour toute question concernant nos produits, votre commande ou le CBD en général, veuillez contacter notre service client en utilisant les informations ci-dessous: </p>

            <ul class="cntct-list">

            	<li>
                	<img src="images/adress-icon1.png">
                    <span>Addresse</span>
                    <p>Ultimate CBD Labs<br> PO Box 30111-119 Salt Lake City UT 84130</p>
                </li>

                <li>

                	<img src="images/sms-icon.png" alt="Email">

                    <span>Email</span>

                    <p>support@ultimatecbdlabs.com</p>

                </li>

                <li>
                	<img src="images/call-icon.png">
                    <span>Téléphone</span>
                    <p>+866 327 1250</p>
                </li>
            </ul>

        </div>

        <div class="cntct-rght">

        	<p class="msgbx-txt">Prenez contact avec nous</p>

            <div class="msg-frmfild">

            	<img src="images/ic1.jpg" alt="Full Name">

            	<input type="text" placeholder="Nom & Prénom">

            </div>

            <div class="msg-frmfild">

            	<img src="images/ic2.jpg" alt="Phone Number">

            	<input type="text" placeholder="Numéro de Téléphone">

            </div>

            <div class="msg-frmfild">

            	<img src="images/ic3.jpg" alt="Email">

            	<input type="text" placeholder="Email">

            </div>

            <div class="msg-frmfild msg-areafild">

            	<img src="images/ic3.jpg" alt="Message">

            	<textarea placeholder="Message"></textarea>

            </div>

            <input type="submit" value="Envoyer" class="submit">

        </div>

    </div>

</div>





<?php include 'footer.php';?>
<?php include 'footer_js.php';?>








<script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>

<script type="text/javascript" src="js/jquery.accordion.js"></script>

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

</body>

</html>

