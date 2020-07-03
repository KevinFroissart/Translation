<?php 

$pagenm = $_SERVER['REQUEST_URI'];

include('includes/action.php');

?>

<!doctype html>

<html>

<head>

<meta charset="utf-8">

<title>Comment choisir l'huile de CBD? - Ultimate CBD Labs</title>

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
        <a href="index.php">Accueil</a> &gt; <span>À propos du CBD </span>
    </div>
</div>

<div class="inr-pro-bg">
	<div class="container">
    	<h1 class="prdct-hdng">À propos du <span>CBD</span></h1>
    </div>
</div>
<div class="about-sec">
	<div class="container">
    	<div class="abt-dtls-sec">
        	<p class="abt-dtlsHdng">Comment choisir l'huile de CBD?</p>
            
            <img src="images/what-to-choose-cbd-img.jpg" class="abt-full-img">
            <p class="abt-Desc">Les utilisateurs de CBD trouvent qu'il est mieux de commencer par une petite dose et d'augmenter progressivement la dose jusqu'à ce que l'effet souhaité soit atteint. Il est important de noter que certains CBD contiennent plus ou moins de THC, parfois pas de THC du tout, car le CBD et le THC ont des interactions différentes avec votre corps. Vous devez également déterminer si vous devez prendre un produit «uniquement» au CBD, ou quelque chose qui contient également du THC, et à cette fin, quelle dose de THC devrait l'accompagner. Il existe également de nombreuses options pour prendre du CBD. Que ce soit en le fumant, en le vaporisant, en prenant des gélules ou une goutte quotidienne sous la langue... il existe de nombreuses façons de prendre du CBD. Le plus important est de trouver un produit et une marque de confiance!<br><br>
Une première étape importante consiste à trouver une entreprise qui peut vous fournir des produits de qualité à un prix raisonnable spécifique à ce que vous essayez de traiter. Par exemple, un spray oral appelé Sativex, qui est une combinaison de THC et de CBD, est déjà approuvé dans de nombreux pays pour traiter la douleur liée à la Sclérose en Plaques.</p>
            
        </div>
    </div>
</div>



<div class="sectionSix">

	<div class="container">

    	<p class="comnHdng">Restez à jour sur les dernières offres! </p>

        <p class="s3-subHdng s6-subHdng">Rejoignez plus de 200 000 personnes qui reçoivent la série hebdomadaire d'e-mails éducatifs Ultimate CBD Labs.<br class="forDesk"> Avantages spéciaux et offres spéciales inclus.</p>

        <div class="email-field">

        	<input type="email" placeholder="Entrez Votre Email">

            <a href="" class="sign-up">S'inscrire <img src="images/sign-arw.png" alt="Sign Up"></a>

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

