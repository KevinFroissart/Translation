<?php 

$pagenm = $_SERVER['REQUEST_URI'];

include('includes/action.php');

?>

<!doctype html>

<html>

<head>

<meta charset="utf-8">

<title>Qu'est-ce que le CBD? - Ultimate CBD Labs</title>

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
        	<p class="abt-dtlsHdng">Qu'est-ce que le CBD</p>
            <p class="abt-Desc">Pour commencer, le CBD est vraiment "le" produit du moment. Au cours des dernières années, le CBD a été de plus en plus utilisé pour traiter un certain nombre de conditions médicales.....mais qu'est-ce que le CBD? Nous allons jeter un coup d'oeil:</p>
            <img src="images/what-is-cbd-img.jpg" class="abt-full-img">
            <p class="abt-Desc">Le CBD (Cannabidiol) est l'un des 113 cannabanoïdes présents dans la plante de marijuana et représente jusqu'à 40% de la composition de la plante. Le CBD peut être administré de diverses manières, notamment en inhalant de la fumée ou des vapeurs, sous forme d'aérosol, par voie orale et sous forme de solution liquide telle qu'un topique. Il est souvent utilisé pour conférer une sensation de détente et de calme, mais contrairement à son cousin le THC, il ne créer pas d'effet psychoactif.<br><br>
            
            Le CBD a de nombreux avantages pour la santé, comme indiqué ci-dessous, et a même été récemment approuvé par la FDA sous forme de pilule appelée Epidiolex. Il a même été cité comme un excellent moyen de gérer les symptômes d'anxiété en disant au corps de se calmer et en rappelant à votre système nerveux que vous êtes en sécurité. Bien qu'il soit toujours recommandé de maintenir un mode de vie sain tout en utilisant le CBD, et bien qu'il ne s'agisse pas d'un remède universel, la recherche sur le CBD reprend, et tous les signes indiquent de bonnes choses lors de l'utilisation du CBD pour faire face à des problèmes de santé.<br><br>
            Découvert dans les années 40, mais laissé à l'écart jusqu'à récemment, le CBD a explosé dans tous les sens au cours des dernières années. Des études préliminaires concluent via la recherche clinique que le CBD peut avoir un impact direct sur de nombreux domaines, notamment les études sur la douleur, les troubles du mouvement, la cognition et l'anxiété. De l'épilepsie à l'anxiété, de la fibromialgie à la douleur générale ... des études suggèrent que le CBD a le potentiel d'aider dans de nombreuses conditions. Un bon exemple est une étude chez le rat qui a révélé que les injections de CBD réduisaient la réponse à la douleur lors d'une incision chirurgicale, tandis qu'une autre étude chez le rat a révélé qu'un traitement par CBD par voie orale réduisait considérablement la douleur et l'inflammation du nerf sciatique.<br><br>

Alors que ces études se poursuivent, les gens n'attendent pas d'autres résultats positifs et sont convaincus que le moment est maintenant venu pour les traitements au CBD sous plusieurs formes.</p>
            
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

