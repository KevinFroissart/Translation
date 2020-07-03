<?php 

$pagenm = $_SERVER['REQUEST_URI'];

include('includes/action.php');

?>

<!doctype html>

<html>

<head>

<meta charset="utf-8">

<title>Full Spectrum CBD Oil - Ultimate CBD Labs</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="description" content="Full Spectrum CBD oils are the most commonly used form of cannabis treatment for medical purposes. Full spectrum CBD is extracted from plants that..." />
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
        <a href="index.php">Home</a> &gt; <span>About CBD </span>
    </div>
</div>

<div class="inr-pro-bg">
	<div class="container">
    	<h1 class="prdct-hdng">About <span>CBD</span></h1>
    </div>
</div>
<div class="about-sec">
	<div class="container">
    	<div class="abt-dtls-sec">
        	<p class="abt-dtlsHdng">All About Full Spectrum CBD Oil</p>
            <p class="abt-Desc">Firstly, with so many products available on the market now, trying to navigate market terminology can be a bit of a nightmare, so let us explain what the term Full Spectrum really means:</p>
            <img src="images/all-abt-full-cbd-img.jpg" class="abt-full-img">
            <p class="abt-Desc">Full Spectrum CBD oils are the most commonly used form of cannabis treatment for medical purposes.  Full spectrum CBD is extracted from plants that also contain THC, and unlike CBD isolates, Full Spectrum CBD is made up of literally hundreds of cannabanoids found in the marijuana plant.  The term Full Spectrum means the full range of compounds that are produced within the trichome gland, aside from THC and other compounds, CBD is produced for it's therapeutic values.<br><br>
Full Spectrum solutions could include other cannabinoids, creating an entourage effect.  Basically put, the compounds may be more effective when all working together than without.  Full Spectrum contains all compounds natrually occuring in the plant, including but not limited to terpenes, other cannabinoids, and essential oils.  The process leaves behind undesired fats, waxes and lipids.<br><br>
When we talk about Full Spectrum CBD,  we are talking about getting more than 100 different cannabinoids found within the hemp plant.  THC and CBD being the most abundant, but you will also find things like CBG (Cannabigerol), CBN (Cannabinol), and CBC (Cannabichromene)<br><br>
As research continues, many studies have concluded that a full spectrum CBD oil is the way to go for the treatment of many conditions.  It was actually previously thought that isolates were more effective than full spectrum solutions, however this is proving to be inacurate through research, such as a study from the Lautenberg Center for General Tumor Immunology in Jerusalem.  In the study, patients given full spectrum CBD were provided more relief than those same test subjects using isolates, maintained with consistent doses. </p>
            
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

