<?php 

$pagenm = $_SERVER['REQUEST_URI'];

include('includes/action.php');

?>

<!doctype html>

<html>

<head>

<meta charset="utf-8">

<title>L'extraction du CBD - Ultimate CBD Labs</title>

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
        	<p class="abt-dtlsHdng">L'extraction du CBD</p>
            <p class="abt-Desc">Pour extraire correctement les huiles riches en CBD, vous devez commencer par des matières végétales riches en CBD de qualité. Il y a des avantages et des inconvénients à chaque méthode. Il existe de nombreuses façons sûres et efficaces d'extraire le CBD de la plante de marijuana, parlons de certaines d'entre elles:</p>
            <img src="images/extraction-cbd-img.jpg" class="abt-full-img">
            <p class="abt-Desc">Il existe plusieurs façons d'extraire le CBD de la plante de marijuana, la plus courante étant d'utiliser un type de solvant, comme le CO2, un solvant liquide ou un solvant huileux. C'est fait pour tirer parti des propriétés thérapeutiques du CBD, tout en ne soumettant pas l'utilisateur aux «psychotropes» du composé THC.<br><br>
Les solvants liquides trouvent les fleurs et les garnitures de la plante de marijuana mises dans un récipient. Ensuite, un solvant tel que le butane, l'alcool isopropylique, l'hexane ou l'éthanol traverse les matériaux. Le liquide restant après ce processus est votre huile de CBD. Ce processus est le plus courant des trois.<br><br>
Extraction de CO2: à l'aide d'une machine spéciale, en utilisant trois chambres, les matières végétales sont séparées dans la troisième chambre, la première chambre contenant du CO2 (généralement de la glace carbonique) et la seconde contenant vos matières végétales.</p>
            
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

