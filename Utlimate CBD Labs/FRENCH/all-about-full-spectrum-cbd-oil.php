<?php 

$pagenm = $_SERVER['REQUEST_URI'];

include('includes/action.php');

?>

<!doctype html>

<html>

<head>

<meta charset="utf-8">

<title>Huile de CBD à Spectre Complet - Ultimate CBD Labs</title>

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
        	<p class="abt-dtlsHdng">Tout sur l'Huile de CBD à Spectre Complet</p>
            <p class="abt-Desc">Tout d'abord, avec autant de produits disponibles sur le marché, essayer de naviguer dans la terminologie du marché peut être un vrai cauchemar, alors expliquons ce que le terme Spectre Complet signifie vraiment:</p>
            <img src="images/all-abt-full-cbd-img.jpg" class="abt-full-img">
            <p class="abt-Desc">Les huiles CBD à Spectre Complet sont la forme de traitement du cannabis la plus couramment utilisée à des fins médicales. Le CBD à spectre complet est extrait de plantes qui contiennent également du THC, et contrairement aux isolats de CBD, le CBD à spectre complet est composé littéralement de centaines de cannabanoïdes trouvés dans la plante de marijuana. Le terme Spectre Complet signifie la gamme complète des composés qui sont produits dans la glande trichome, à part le THC et d'autres composés, le CBD est produit pour ses valeurs thérapeutiques.<br><br>
Les solutions à Spectre Complet pourraient inclure d'autres cannabinoïdes, créant un effet d'entourage. Fondamentalement, les composés peuvent être plus efficaces lorsqu'ils travaillent tous ensemble que seul. Le Spectre Complet contient tous les composés présents naturellement dans la plante, y compris, mais sans s'y limiter, les terpènes, d'autres cannabinoïdes et les huiles essentielles. Le processus laisse des graisses, des cires et des lipides indésirables.<br><br>
Lorsque nous parlons de CBD à spectre complet, nous parlons d'obtenir plus de 100 cannabinoïdes différents trouvés dans la plante de chanvre. Le THC et le CBD étant les plus abondants, mais vous trouverez également des éléments comme le CBG (Cannabigerol), le CBN (Cannabinol) et le CBC (Cannabichromene)<br><br>
Alors que la recherche se poursuit, de nombreuses études ont conclu qu'une huile de CBD à Spectre Complet est la voie à suivre pour le traitement de nombreuses conditions. Auparavant nous pensions que les isolats étaient plus efficaces que les solutions à spectre complet, mais cela s'avère inexact par la recherche, comme le montre une étude du Centre Lautenberg pour l'immunologie générale des tumeurs à Jérusalem. Dans cette étude, les patients recevant du CBD à spectre complet ont été plus soulagés que les mêmes sujets testés utilisant des isolats, maintenus à des doses cohérentes. </p>
            
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

