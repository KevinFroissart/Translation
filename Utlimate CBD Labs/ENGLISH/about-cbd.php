<?php 

$pagenm = $_SERVER['REQUEST_URI'];

include('includes/action.php');

?>

<!doctype html>

<html>

<head>

<meta charset="utf-8">

<title>About CBD - Ultimate CBD Labs</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="description" content="Learn all about CBD and the amazing benefits, and applications as well as how to choose and use it. Ultimate CBD Labs offers the highest grade, best CBD..." />
<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">



<link rel="stylesheet" type="text/css" href="css/style.css">

<link rel="stylesheet" type="text/css" href="css/media.css">

<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css" >

<link href="https://fonts.googleapis.com/css?family=PT+Serif:400,700&display=swap" rel="stylesheet">

<?php include 'includes/head_scripts.php';?>

</head>



<body>


<?php include 'includes/after_body_start_scripts.php';?>
<?php include 'header.php';?>



<div class="prodBreadcrm">

    <div class="container">

        <a href="/">Home</a> &gt; <span>About CBD </span>

    </div>

</div>



<div class="inr-pro-bg">

	<div class="container">

    	<h1 class="prdct-hdng">About <span>CBD</span></h1>

    </div>

</div>

<div class="about-sec">

	<div class="container">
<div class="abt-sec-row">
        	<p class="abtHdng">What Is CBD</p>
            <img src="images/abt-sec-img1.png" class="abt-sec-img">
            <p class="abt-Desc">For starters, CBD is truly the "it" product of the moment.  Over recent years, CBD has been used increasingly to treat a number of medical conditions.....but what it CBD?  Let's take a look:<br><br>
            CBD (Cannabidiol) is one of 113 cannabanoids present in the Marijuana plant, and accounts for up to 40% of the
plant's makeup. CBD can be administered in various ways including inhaling smoke or vapors, as an aerosol, by
mouth, and as a liquid solution such as a topical. Discovered in the 1940's, but left on the sidelines until recently, CBD has been booming in every sense in recent years. Preliminary studies conclude via clinical research that CBD can have a direct impact on many areas including studies of pain, movement disorders, cognition and anxiety. From Epilepsy to anxiety, fibromialgia to general pain...studies suggest that CBD has the potential to assist with so many conditions. </p>
            <div class="clearall"></div>
            <a href="what-is-cbd.php" class="learn-btn read-more">Read More <img src="images/learn-more-arw.png"></a>
        </div>
        <div class="abt-sec-row">
        	<p class="abtHdng">How To Choose CBD Oil?</p>
            <img src="images/abt-sec-img2.png" class="abt-sec-img">
            <p class="abt-Desc">CBD users find that starting with a small dose, and gradually increasing the dosage until your desired effect is
achieved is the way to go. It is important to note that some CBD comes with more or less THC, sometimes no THC
at all, as CBD and THC have different interactions with your body. You must also consider if you should be taking
a CBD "only" product, or something that also contains THC, and to that end, what dose of THC should accompany
it. There are also many options for taking CBD. From smoking it, vaping it, or taking capsules or a sub lingual
daily drop....there are many ways to take CBD. The most important thing is to find a product and a brand that you
trust!</p>
            <div class="clearall"></div>
            <a href="how-to-choose-cbd-oil.php" class="learn-btn read-more">Read More <img src="images/learn-more-arw.png"></a>
        </div>
        <div class="abt-sec-row">
        	<p class="abtHdng">All About Full Spectrum CBD Oil</p>
            <img src="images/abt-sec-img3.png" class="abt-sec-img">
            <p class="abt-Desc">Firstly, with so many products available on the market now, trying to navigate market terminology can be a bit of a nightmare, so let us explain what the term Full Spectrum really means:<br><br>
            Full Spectrum CBD oils are the most commonly used form of cannabis treatment for medical purposes. Full
spectrum CBD is extracted from plants that also contain THC, and unlike CBD isolates, Full Spectrum CBD is
made up of literally hundreds of cannabanoids found in the marijuana plant. The term Full Spectrum means the full
range of compounds that are produced within the trichome gland, aside from THC and other compounds, CBD is
produced for it's therapeutic values.</p>
            <div class="clearall"></div>
            <a href="all-about-full-spectrum-cbd-oil.php" class="learn-btn read-more">Read More <img src="images/learn-more-arw.png"></a>
        </div>
        <div class="abt-sec-row">
        	<p class="abtHdng">The Extraction of CBD</p>
            <img src="images/abt-sec-img4.png" class="abt-sec-img">
            <p class="abt-Desc">To properly extract CBD rich oils, you have to start with quality CBD rich plant materials.  There are benefits and drawbacks to each method.  There are many safe and effective ways of extracting CBD from the marijuana plant, let's discuss a few:<br><br>
            There are a number of ways to extract CBD from the marijuana plant, the most common being using a type of
solvent, such as CO2, a liquid solvent or an oil solvent. This is done to take advantage of the therapeutic properties
of the CBD, while not subjecting the user to the "highs" of the THC compound.</p>
            <div class="clearall"></div>
            <a href="the-extraction-of-cbd.php" class="learn-btn read-more">Read More <img src="images/learn-more-arw.png"></a>
        </div>

    </div>

</div>





<div class="sectionSix">

	<div class="container">

    	<p class="comnHdng">Stay Updated On The Latest Deals! </p>

        <p class="s3-subHdng s6-subHdng">Join over 200,000 people who receive Ultimate CBD Labs weekly educational email series.<br class="forDesk"> Special insider perks and deals included.</p>

        <div class="email-field">

        	<input type="email" placeholder="Enter Your Email">

            <a href="" class="sign-up">Sign Up <img src="images/sign-arw.png" alt="Sign Up"></a>

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

