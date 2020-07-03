<?php 

$pagenm = $_SERVER['REQUEST_URI'];

include('includes/action.php');

?>

<!doctype html>

<html>

<head>

<meta charset="utf-8">

<title>Produits CBD - Ultimate CBD Labs</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="description" content="Are you looking for the absolute best CBD products?  Ultimate CBD Labs has you covered. Choose from organic, natural and 100% legal CBD products and..." />
<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">



<link rel="stylesheet" type="text/css" href="css/style.css">

<link rel="stylesheet" type="text/css" href="css/media.css">
<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css" >

<link href="https://fonts.googleapis.com/css?family=PT+Serif:400,700&display=swap" rel="stylesheet">
<?php include 'includes/head_scripts.php';?>

<style>
.sectionThree
{
	padding:40px 0;
}
.sectionThree .buy1_get1_img
{
	margin-bottom: 20px;
}
</style>

</head>



<body>
<?php include 'includes/after_body_start_scripts.php';?>
<?php include 'header.php';?>



<div class="prodBreadcrm">

    <div class="container">

        <a href="/">Acceuil</a> &gt; <span>Produits </span>

    </div>

</div>



<div class="sectionThree products-sec">
	<div class="container">
    	<img src="images/buy1_get1.png" class="buy1_get1_img">
    	<p class="comnHdng">Produits populaires</p>
        <p class="s3-subHdng">Choisissez Parmi Notre Gamme CBD & Commencez Votre Voyage Vers Une Meilleure Santé </p>
        <ul class="prod-list">
        	<li>
            	<img src="images/prod1.png" class="cbd-prod">
                <span>Huile CBD</span>
                <p>500MG</p>
                <a href="cbd-oil.php" class="learn-btn shop-btn">Commander <img src="images/learn-more-arw.png"></a>
            </li>
            <li>
            	<img src="images/prod4.png" class="cbd-prod">
                <span>Bonbons CBD</span>
                <p>300MG</p>
                <a href="cbd-gummies.php" class="learn-btn shop-btn">Commander <img src="images/learn-more-arw.png"></a>
            </li>
            <li>
            	<img src="images/prod3.png" class="cbd-prod">
                <span>Gélules CBD</span>
                <p>300MG</p>
                <a href="cbd-capsules.php" class="learn-btn shop-btn">Commander <img src="images/learn-more-arw.png"></a>
            </li>
            <li>
            	<img src="images/prod2.png" class="cbd-prod">
                <span>Gel Plaisir CBD</span>
                <p>100MG</p>
                <a href="cbd-lube-pleasure-gel.php" class="learn-btn shop-btn">Commander <img src="images/learn-more-arw.png"></a>
            </li>
        </ul>
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

<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '750127752137681');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=750127752137681&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

</body>

</html>

