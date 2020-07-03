<?php 

$pagenm = $_SERVER['REQUEST_URI'];

include('includes/action.php');

?>

<!doctype html>

<html>

<head>

<meta charset="utf-8">

<title>The Extraction of CBD - Ultimate CBD Labs</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="description" content="There are a few of ways to extract CBD from the marijuana plant, the most common being using a type of solvent, such as CO2, a liquid solvent or an oil solvent." />
<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">



<link rel="stylesheet" type="text/css" href="css/style.css">

<link rel="stylesheet" type="text/css" href="css/media.css">

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
        	<p class="abt-dtlsHdng">The Extraction of CBD</p>
            <p class="abt-Desc">To properly extract CBD rich oils, you have to start with quality CBD rich plant materials.  There are benefits and drawbacks to each method.  There are many safe and effective ways of extracting CBD from the marijuana plant, let's discuss a few:</p>
            <img src="images/extraction-cbd-img.jpg" class="abt-full-img">
            <p class="abt-Desc">There are a few of ways to extract CBD from the marijuana plant, the most common being using a type of solvent, such as CO2, a liquid solvent or an oil solvent.  This is done to take advantage of the therapeutic properties of the CBD, while not subjecting the user to the "highs" of the THC compound.<br><br>
Liquid solvents find the flowers and trim of the marijuana plant put into a container.  Then a solvent such as butane, isopropyl alcohol, hexane, or ethanol is run through the materials, and the remaining liquid after this process is your CBD oil.  This process is the most common of the three.<br><br>
CO2 extraction:		With the assistance of a special machine, using three chambers, the plant materials are separated into a third chamber, with the first chamber containing CO2 (commonly Dry Ice) and the second containting your plant materials.</p>
            
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

</body>

</html>

