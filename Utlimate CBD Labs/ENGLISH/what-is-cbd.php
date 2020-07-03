<?php 

$pagenm = $_SERVER['REQUEST_URI'];

include('includes/action.php');

?>

<!doctype html>

<html>

<head>

<meta charset="utf-8">

<title>What Is CBD? - Ultimate CBD Labs</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="description" content="CBD (Cannabidiol) is one of 113 cannabanoids present in the Marijuana plant, and accounts for up to 40% of the plant's..." />
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
        	<p class="abt-dtlsHdng">What Is CBD</p>
            <p class="abt-Desc">For starters, CBD is truly the "it" product of the moment.  Over recent years, CBD has been used increasingly to treat a number of medical conditions.....but what it CBD?  Let's take a look:</p>
            <img src="images/what-is-cbd-img.jpg" class="abt-full-img">
            <p class="abt-Desc">CBD (Cannabidiol) is one of 113 cannabanoids present in the Marijuana plant, and accounts for up to 40% of the plant's makeup.  CBD can be administered in various ways including inhaling smoke or vapors, as an aerosol,  by mouth, and as a liquid solution such as a topical. It is often used to impart a feeling of relaxation and calm, however unlike it's cousin THC it does not create a psychoactive effect.<br><br>
            
            CBD has many health benefits, as cited below, and has even been approved recently by the FDA in a pill form called Epidiolex.  It has even been cited as a great way to manage anxiety syptoms, telling the body to calm down and reminding your nervous system that you are safe.  While it is still recommended to maintain a healthy lifestyle while using CBD, and while it is not a cure-all, CBD research is picking up, and all signs point to great things when using CBD for health related issues.<br><br>
            Discovered in the 1940's, but left on the sidelines until recently, CBD has been booming in every sense in recent years. Preliminary studies conclude via clinical research that CBD can have a direct impact on many areas including studies of pain, movement disorders, cognition and anxiety.  From Epilepsy to anxiety, fibromialgia to general pain...studies suggest that CBD has the potential to assist with so many conditions.  A good example is one study in rats found that CBD injections reduced pain response to surgical incision, while another rat study found that an oral CBD treatment significantly reduced sciatic nerve pain and inflamation.<br><br>

While these studies continue, people are not waiting for further positive results, and feel strongly that the time is now for CBD treatments in multiple forms.</p>
            
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

