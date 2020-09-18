<?php 

$pagenm = $_SERVER['REQUEST_URI'];

include('includes/action.php');

$p_info = $_SESSION['product_detail']['1006580'];

$pr1 = 3;

$pr2 = 7;

?>

<!doctype html>

<html>

<head>

<meta charset="utf-8">

<title>Achetez des Capsules de CBD pour la douleur | Gélules CBD 300mg - Ultimate CBD Labs</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="description" content="Buy the best CBD capsules for pain treatment of muscle and joint pain. Fast & free shipping on all orders across the U.S." />
<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">



<link rel="stylesheet" type="text/css" href="css/style.css">

<link rel="stylesheet" type="text/css" href="css/media.css">

<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css" >

<link href="https://fonts.googleapis.com/css?family=PT+Serif:400,700&display=swap" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="css/slick-theme.css" >
<?php include 'includes/head_scripts.php';?>

<script type="text/javascript">

    function accept() {

        $("input[name='product_id']").val('<?php echo $pr2;?>');

        $("input[name='productKol']").val('<?php echo $pr2;?>');

        $(".one_price").addClass('one_price_ext');

        $(".rec_price").removeClass('rec_price_ext');

        $.fancybox.close();

        $('.fancybox').fancybox.close;

        $('#recurring').prop('checked', true);

        $qty = $("#select-qty").val();

        $(".quantity").val($qty);

        $("input[name='show_popup']").val('showed');

        $('.checkout-terms').slideToggle();

        $('.addtocart-btn').attr("href", "javascript:void();")

        $('.addtocart-btn').removeClass('fancybox');

        $('.addtocart-btn').removeClass('fancybox.iframe');
		
		$("form").submit();

    }

    function decline() {

        $("input[name='product_id']").val('<?php echo $pr1;?>');

        $("input[name='productKol']").val('<?php echo $pr1;?>');

        $(".one_price").addClass('one_price_ext');

        $(".rec_price").removeClass('rec_price_ext');

        $.fancybox.close();

        $('.fancybox').fancybox.close;

        $('#recurring').prop('checked', false);

        $qty = $("#select-qty").val();

        $(".quantity").val($qty);

        $("form").submit();

    }

</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "Product",
  "name": "CBD Capsules",
  "image": [
    "https://www.ultimatecbdlabs.com/images/capsules-slide1.png",
    "https://www.ultimatecbdlabs.com/images/capsules-nav2.jpg",
    "https://www.ultimatecbdlabs.com/images/capsules-nav3.jpg"
   ],
  "description": "Formulated with essential cannabinoids extracted from pure hemp extract, the high potency CBD Capsules offers quick absorption and fast acting results.",
  "sku": "0",
  "mpn": "0",
  "brand": {
    "@type": "Thing",
    "name": "CBD Capsules"
  },
  "review": {
    "@type": "Review",
    "reviewRating": {
      "@type": "Rating",
      "ratingValue": "3",
      "bestRating": "5"
    },
    "author": {
      "@type": "Person",
      "name": "Alex K."
    }
  },
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "5",
    "reviewCount": "3"
  },
  "offers": {
    "@type": "Offer",
    "url": "https://www.ultimatecbdlabs.com/cbd-capsules.php",
    "priceCurrency": "USD",
    "price": "54.93",
    "priceValidUntil": "2020-12-31",
    "itemCondition": "https://schema.org/UsedCondition",
    "availability": "https://schema.org/InStock",
    "seller": {
      "@type": "Organization",
      "name": "Ultimate CBD Labs."
    }
  }
}
</script>
</head>



<body>
<?php include 'includes/after_body_start_scripts.php';?>
<?php include 'header.php';?>



<div class="prodBreadcrm">

    <div class="container">

        <a href="/">Accueil</a> > <a href="cbd-products.php">Produits </a> > <span>Gélules CBD</span>

    </div>

</div>



<div class="deailsSec1">

	<div class="container">

    	<h1 class="prod-nameHdng forMob">Gélules CBD <span>300MG</span> <span class="prc">| &nbsp;<span class="one_price">$<?php echo $p_info[$pr1]['price']; ?></span> <span class="rec_price rec_price_ext">$<?php echo $p_info[$pr2]['price']; ?></span></span></h1>

         <p class="prd-p1 forMob"><img src="images/stars.png" class="prd-stars" alt="Star Rating"></p>

    	<div class="prodSlider-Left">

        	<div class="slide-div slide-div2">

                <div>

                    <img src="images/capsules-slide1.png" class="prd-slide" alt="Best CBD Capsules">

                </div>

                <div>

                    <img src="images/capsules-slide2.jpg" class="prd-slide prd-slide2" alt="CBD Capsules Suplements Facts">

                </div>

                <div>

                    <img src="images/oil-slide3.jpg" class="prd-slide prd-slide2" alt="100% Organic">

                </div>

            </div>

            <div class="slider-nav">

                <div><img src="images/capsules-nav1.jpg" class="prd-nav" alt="CBD Capsules For Pain"></div>

                <div><img src="images/capsules-nav2.jpg" class="prd-nav" alt="Suplement Facts"></div>

                <div><img src="images/capsules-nav3.jpg" class="prd-nav" alt="Buy CBD Capsules"></div>

            </div>

        </div>

        <div class="prodDetls-Rght">

        	<p class="prod-nameHdng hide-mob">Gélules CBD <span>300MG</span> <span class="prc">| &nbsp;<span class="one_price">$<?php echo $p_info[$pr1]['price']; ?></span> <span class="rec_price rec_price_ext">$<?php echo $p_info[$pr2]['price']; ?></span></span></p>

            <p class="prd-p1 hide-mob"><img src="images/stars.png" class="prd-stars" alt="Star Rating"></p>

            <p class="prd-p2">Formulées avec des cannabinoïdes essentiels extraits d'extrait de chanvre pur, les gélules CBD haute puissance offrent une absorption et des résultats rapides.</p>
            <ul class="dtlsec-list">
            	<li>Mélange de Résistance Maximale 300MG</li>
                <li>Facile et Pratique à prendre</li>
                <li>Réduit le Stress & l'Anxiété</li>
                <li>Supporte des Modèles de Sommeil Sain</li>
                <li>Soulage les Douleurs Chroniques</li>
            </ul>

            <div class="clearall"></div>

            <p class="recurring_box"><input type="checkbox" id="recurring" name="recurring"> Économisez 15% maintenant et jusqu'à 40% sur de futures livraisons <a href="recurring_info.php" class="fancybox fancybox.iframe"><span class="c_quest">?</span></a>

            </p>

            <div class="col-12 checkout-terms" style="display: none;">

                Le programme de fidélité mensuel comprend l'inscription à notre programme mensuel de livraison automatique. Vous obtiendrez 15% de réduction sur la commande d'aujourd'hui et jusqu'à 40% de réduction sur un envoi mensuel continu d'une bouteille qui serait expédié dans les 7 jours avant que votre stock soit épuisé. Tous les 30 jours. Pour seulement $<?php echo $p_info[$pr2]['r_price']; ?> Chaque bouteille est considérée comme un approvisionnement de 30 jours.

            </div>

	        <select name="" class="select-qty" id="select-qty">

                <option value="">Quantité</option>

                <option value="1">1</option>

                <option value="2">2</option>

                <option value="3">3</option>

                <option value="4">4</option>

                <option value="5">5</option>

            </select>

            <div class="select-blk">

            	<form method="POST" action="">



                    <input type="hidden" name="show_popup" value="">



                    <input type="hidden" name="action" value="addproduct">



                    <input type="hidden" name="product_id" class="product_id" value="<?php echo $pr1?>">



                    <input type="hidden" name="quantity" class="quantity" value="1">



                    <input type="hidden" name="productKol" class="productKol" value="<?php echo $pr1?>">



                    <a href="javascript:void();" class="order-btn addtocart-btn">Ajouter au panier<img src="images/addcart-arw.png" alt="Add to cart"></a>





                </form>

                <p>Garantie de remboursement de 30 jours</p>

            </div>

        </div>

    </div>

</div>



<div class="sec-strip">

	<div class="container">

    	<ul>

        	<li>

            	<img src="images/strp-icon1.png" alt="Available Without Doctor's Prescription ">

                Disponible sans <br class="hide-mob"> ordonnance médicale 

            </li>

            <li>

            	<img src="images/strp-icon4.png" alt="Clinically Proven Therapist Recommended">

                Prouvé cliniquement <br> Recommandé par les Thérapeutes


            </li>

            <li>

            	<img src="images/strp-icon2.png" alt="100% Legal In All 50 States In USA ">

               100% Legal au sein <br class="hide-mob"> des 50 États aux USA 

            </li>

            <li>

            	<img src="images/strp-icon3.png" alt="Certified Organic THC-Free Products ">

                Certifié bio <br class="hide-mob"> Produits sans THC

            </li>

        </ul>

    </div>

</div>



<div class="sectionOne">
	<div class="container">
    	<div class="s1-left">
        	<p class="comnHdng">Gélules Ultimate CBD</p>
            <p class="comn-subHdng">Absorption Rapide | Relachement Prolongé | Haute Puissance</p>
            <img src="images/capsules-s1-img.png" class="s1-img forDesk">
            <img src="images/capsules-s1-img-mob.png" class="s1-img-mob forMob">
            <p class="comn-para"><b>Les Gélules de CBD</b> exploitent les avantages thérapeutiques du CBD, un composé sûr et non psychoactif présent dans les feuilles de chanvre. Le CBD a révélé avoir un impact positif sur des fonctions clés de notre corps, y compris des fonctions neuronales, physiques et psychologiques.</p>
            <p class="comn-para"><b>Les Gélules Ultimate CBD sont fabriquées à partir d'extrait de chanvre 100% légal, sûrs, cultivés et récoltés aux États-Unis, pour assurer une puissance élevée et des avantages maximaux pour la santé.</b></p>
            <ul class="s1-list">
            	<li><img src="images/prods1-icn11.png"><br>TAILLE / VOLUME<br> <span>60 ml</span></li>
                <li><img src="images/prods1-icn2.png"><br>CBD TOTAL<br> <span>5000 mg</span></li>
                <li><img src="images/prods1-icn22.png"><br>DOSE / PORTION<br> <span>83.3 mg / ml</span></li>
            </ul>
            <a href="cart.php" class="learn-btn">Commander <img src="images/learn-more-arw.png"></a>
        </div>
    </div>
</div>


<div class="deailsSec2">

	<div class="container">

    	<p class="comnHdng">Bénéfice des Gélules Ultimate CBD</p>

        <p class="comn-subHdng detls-subHdng">Re-Découvrez Les Joies D'Une Vie Équilibrée Avec Le CBD </p>

        <div class="clearall"></div>

        <img src="images/capsule-prod2.png" class="cbd-oil-prod2 hide-mob" alt="Buy CBD Capsules For Pain ">

        <img src="images/capsule-prod2-mob.png" class="cbd-oil-prod2-mob forMob" alt="Buy CBD Capsules For Pain">

        <div class="deailsSec2-rgt">

        	<ul>

            	<li>

                	<img src="images/dtls-s2-icon1.png" alt="Combats Body-Wide Inflammation">

                	<span>Combat les inflammations corporelles</span>

                    <p>Offre un soutien antioxydant et anti-inflammatoire au corps et à ses processus pour soutenir la santé et le bien-être en général.</p>

                </li>

                <li>

                	<img src="images/dtls-s2-icon2.png" alt="Reduces Stress & Anxiety">

                	<span>Réduit le stress & l'anxiété</span>

                    <p>Favorise une sensation de relaxation profonde en régulant positivement les modèles d'humeur pour réduire le stress et l'anxiété au quotidien</p>

                </li>

                <li>

                	<img src="images/dtls-s2-icon3.png" alt="Improves Mental Clarity & Focus">

                	<span>Améliore la clarté mentale & la concentration</span>

                    <p>Les propriétés neuro-protectrices du CBD soutiennent la santé cognitive, améliorant le rappel de la mémoire, la clarté, la vigilance et la concentration.</p>

                </li>

                <li>

                	<img src="images/dtls-s2-icon4.png" alt="Reduces Chronic Pains & Aches">

                	<span>Réduit les douleurs chroniques</span>

                    <p>En réduisant l'inflammation, en soutenant la santé des articulations et en réduisant la signalisation de la douleur, les gélules de CBD vous aident à vivre activement et sans douleur.</p>

                </li>

            </ul>

        </div>

        <div class="clearall"></div>

        <a href="cart.php" class="learn-btn">Commander <img src="images/learn-more-arw.png" alt="Order Now"></a>

    </div>

</div>

<div class="deailsSec3 capsules-s3">

	<div class="container">

    	<div class="detls3-lft">

            <p class="comnHdng">La science derrière le CBD</p>

            <p class="comn-subHdng">Découvrez le fonctionnement des gélules au CBD</p>

            <img src="images/science-banner-mob.jpg" class="science-banner-mob forMob" style="float:left; width:100%;" alt="Ultimate CBD Capsules">

            <p class="comn-para">Le système endocannabinoïde (SEC) régule tout, de la relaxation à l'alimentation, au sommeil, à l'inflammation et même à la fonction cognitive.<b>Le CBD a été médicalement prouvé pour réguler positivement votre SEC en traitant des problèmes tels que l'anxiété, l'insomnie, la douleur chronique, l'hypertension et même les problèmes cardiovasculaires.</b></p>

            <p class="cbd-workHdng">Gélules Ultimate CBD  - Formule Triple Action</p>

            <ul class="cbd-work-list">

            	<li>

                	<div class="steps">Étape 1</div>

                    <span>Stimuler une réponse SEC positive</span>

                    <p>Les cannabinoïdes régulent positivement la réponse SEC et anti-inflammatoire, offrant des avantages psychologiques, physiques et neurologiques.</p>

                </li>

                <li>

                	<div class="steps">Étape 2</div>

                    <span>Rétablit l'équilibre et le bien-être</span>

                    <p>La supplémentation régulière en Gélules Ultimate CBD aide à combler les lacunes nutritionnelles et favorise la santé et le bien-être en général.</p>

                </li>

                <li>

                	<div class="steps">Étape 3</div>

                    <span>Améliore l'immunité globale du corps</span>

                    <p>En interagissant avec les récepteurs CB2, le CBD aide à soutenir les cellules qui renforcent l'immunité afin de prévenir les problèmes de santé.</p>

                </li>

            </ul>

        </div>

    </div>

</div>



<div class="dtls-strip capsules-strip1">

	<div class="container">

    	<div class="strp-rgt">

        	<p class="strp-txt1">Commandez votre bouteille de<br>Gélules de CBD ajourd'hui</p>

            <p class="strp-txt2">Préparez-vous à découvrir les avantages cliniquement prouvés du CBD avec la teinture facile à utiliser et efficace dès aujourd'hui!</p>

            <a href="cart.php" class="learn-btn">Commander <img src="images/learn-more-arw.png" alt="Order Now"></a>

        </div>

    </div>

</div>



<div class="deailsSec4">

	<div class="container">

    	<p class="comnHdng">Pourquoi choisir les Gélules Ultimate CBD</p>

        <p class="comn-subHdng detls-subHdng">Notre promesse de pureté, de puissance et d'efficacité</p>

        <ul class="brand-logo-box">

        	<li>

            	<img src="images/brand-seal1-300.png" alt="Maximum Strength Formula">

                <span>Formule Force<br> Maximum</span>

                <div class="clearall"></div>

                <div class="bdr"></div>

                <p>Le plus puissant mélange de 500 mg de CBD pour assurer un maximum d'avantages pour la santé.</p>

            </li>

            <li>

            	<img src="images/brand-seal2-capsules.png" alt="Quick Absorption Extended Release ">

                <span>Absorption Rapide<br> Relachement Prolongé</span>

                <div class="clearall"></div>

                <div class="bdr"></div>

                <p>L'administration sublinguale garantit une administration rapide et la longévité des molécules de CBD dans la circulation sanguine.</p>

            </li>

            <li>

            	<img src="images/brand-seal3.png" alt="CO2 Extraction No THC / No High">

                <span>Extraction de CO2 <br> Pas de THC / Pas Psychotrope</span>

                <div class="clearall"></div>

                <div class="bdr"></div>

                <p>L'extraction critique de CO2 filtre tout le THC, garantissant les bénéfices sans les effets psychotropes.</p>

            </li>

            <li>

            	<img src="images/brand-seal4.png" alt="US Grown Organic Hemp">

                <span>Cultivé aux US<br> Chanvre biologique</span>

                <div class="clearall"></div>

                <div class="bdr"></div>

                <p>Formulé avec de l'extrait de chanvre sans pesticides, herbicides ou produits chimiques.</p>

            </li>

        </ul>

    </div>

</div>



<div class="dtls-strip capsules-strip2">

	<div class="container">

    	<div class="strp-left">

        	<p class="strp-txt1">Faites l'expérience d'un style de vie,<br> Équilibré, Actif & plus complet dès aujourd'hui</p>

            <p class="strp-txt2">Le CBD aide à soutenir le sommeil, la relaxation et le soulagement de la douleur pour vous aider à mieux vivre!</p>

            <a href="cart.php" class="learn-btn">Commander <img src="images/learn-more-arw.png" alt="Order Now"></a>

        </div>

    </div>

</div>







<div class="sectionFour">

	<div class="container">

    	<p class="comnHdng">La promesse des Laboratoires Ultimate CBD</p>

        <p class="comn-subHdng detls-subHdng">Extraction Éthique, Formulation Puissante et Emballage de Qualité</p>

        <ul class="s4-list">

        	<li>

            	<img src="images/seal1.png" alt="100% Organic ">

                100% Bio 

            </li>

            <li>

            	<img src="images/seal2.png" alt="Made In USA ">

                Fabriqué aux USA

            </li>

            <li>

            	<img src="images/seal3.png" alt="FDA Registered">

                Enregistré à la FDA
 

            </li>

            <li>

            	<img src="images/seal4.png" alt="No THC">

                Pas de THC 

            </li>

            <li>

					<img src="images/seal5.png" alt="Gluten Free">

                Sans Gluten 

            </li>

            <li>

            	<img src="images/seal6.png" alt="Vegan Friendly">

               	Compatible Vegan

            </li>

        </ul>

        <div class="moneybk-Dv">

        	<img src="images/money-bk-seal.png" class="money-bk-seal" alt="30 Days Money Back Guarantee">

            <span>Garantie de remboursement de 30 jours</span>

            <p>Chez Ultimate CBD Labs, nous nous engageons à fournir des produits de qualité pour vous aider à obtenir les résultats que vous méritez. Cependant, dans le cas peu probable où vous ne seriez pas satisfait des résultats, renvoyez simplement le produit dans les 30 jours pour un remboursement complet.<br><br>La garantie n'est valable que lorsque votre produit Ultimate CBD Labs est acheté directement auprès du fabricant.</p>

        </div>

    </div>

</div>


<div class="deailsSec5">

	<div class="container">

    	<p class="comnHdng">Personnes Réelles, Résultats Réels</p>

        <p class="comn-subHdng detls-subHdng">Témoignages de clients Ultimate CBD Labs</p>

        <div class="result-box">

            <div class="testi-row">

                <span>A</span>

                <p>J'avais peur que les gélules soient un peu grosses, mais elles sont parfaites, faciles à avaler. Je pense également qu'elles sont plus efficaces que celles que je prennais avant à coup sûr.</p>

                <div class="reslt-name"><img src="images/star.png" alt="Star Rating" class="rvw-star">Alex K.  &nbsp;  <img src="images/verified.png" alt="Verified Customer" class="verify"></div>

            </div>

            <div class="testi-row">

                <span>C</span>

                <p>Mon collègue m'a recommandé ce produit pour faire face au stress au bureau et je suis heureux d'avoir décidé de l'essayer. Ça a été très utile. Je recommanderais de prendre 2 doses, 1 gélule matin et soir.</p>

                <div class="reslt-name"><img src="images/star.png" alt="Star Rating" class="rvw-star">Camay  &nbsp;  <img src="images/verified.png" alt="Verified Customer" class="verify"></div>

            </div>

            <div class="testi-row">

                <span>O</span>

                <p>J'utilise des gélules de CBD depuis plus d'un mois et je peux dire avec confiance qu'elles ont très bien fonctionné pour réduire mes douleurs au dos et au cou. Je peux reprendre une marche active.</p>

                <div class="reslt-name"><img src="images/star.png" alt="Star Rating" class="rvw-star">Oliver  &nbsp;  <img src="images/verified.png" alt="Verified Customer" class="verify"></div>

            </div>

           

        </div>

    </div>

</div>



<div class="dtls-strip capsules-strip3">

	<div class="container">

    	<div class="strp-rgt strp-rgt-lst">

        	<p class="strp-txt1">Commandez votre bouteille de<br>Gélules Ultimate BCD</p>

            <p class="strp-txt2">Préparez-vous à découvrir les avantages cliniquement prouvés du CBD avec la teinture facile à utiliser et efficace dès aujourd'hui!</p>

            <a href="cart.php" class="learn-btn">Commander <img src="images/learn-more-arw.png" alt="Order Now"></a>

        </div>

    </div>

</div>



<?php include 'footer.php';?>

<?php include 'footer_js.php';?>

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

