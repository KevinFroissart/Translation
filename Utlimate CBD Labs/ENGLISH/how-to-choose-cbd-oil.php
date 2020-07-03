<?php 

$pagenm = $_SERVER['REQUEST_URI'];

include('includes/action.php');

?>

<!doctype html>

<html>

<head>

<meta charset="utf-8">

<title>How To Choose CBD Oil? - Ultimate CBD Labs</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="description" content="An important first step is finding a company that can provide you quality product at a reasonable price specific to the condition you are trying to..." />
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
        	<p class="abt-dtlsHdng">How To Choose CBD Oil?</p>
            
            <img src="images/what-to-choose-cbd-img.jpg" class="abt-full-img">
            <p class="abt-Desc">CBD users find that starting with a small dose, and gradually increasing the dosage until your desired effect is achieved is the way to go.  It is important to note that some CBD comes with more or less THC, sometimes no THC at all, as CBD and THC have different interactions with your body.  You must also consider if you should be taking a CBD "only" product, or something that also contains THC, and to that end, what dose of THC should accompany it.  There are also many options for taking CBD.  From smoking it, vaping it, or taking capsules or a sub lingual daily drop....there are many ways to take CBD.  The most important thing is to find a product and a brand that you trust!<br><br>
An imortant first step is finding a company that can provide you quality product at a reasonable price specific to the condition you are trying to treat. For example an oral spray called Sativex, which is a combination of THC and CBD, is already approved in many countries to treat pain related to MS.</p>
            
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

