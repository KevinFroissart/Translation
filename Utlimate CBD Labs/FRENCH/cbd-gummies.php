<?php 

$pagenm = $_SERVER['REQUEST_URI'];

include('includes/action.php');

$p_info = $_SESSION['product_detail']['1006580'];

$pr1 = 4;

$pr2 = 8;

?>

<!doctype html>

<html>

<head>

<meta charset="utf-8">

<title>Achetez des Bonbons au CBD | Bonbons Éxtraits de Chanvre | Bonbons au CBD pour la douleur</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="description" content="Finding great Hemp CBD gummies whether for pain, for sleep, or for anxiety can be tricky. Be anxious no more! Fast & free shipping on all orders across the U.S. Order now..." />
<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
<link rel="alternate" hreflang="en" href="https://www.ultimatecbdlabs.com/cbd-gummies.php" />
<link rel="alternate" hreflang="fr" href="https://www.ultimatecbdlabs.com/fr/cbd-gummies.php" />
<link rel="alternate" hreflang="de" href="https://www.ultimatecbdlabs.com/de/cbd-gummies.php" />
<link rel="alternate" hreflang="it" href="https://www.ultimatecbdlabs.com/it/cbd-gummies.php" />


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
  "name": "CBD Gummies",
  "image": [
    "https://www.ultimatecbdlabs.com/images/gummies-slide1.png",
    "https://www.ultimatecbdlabs.com/images/gummies-nav2.jpg",
    "https://www.ultimatecbdlabs.com/images/gummies-nav3.jpg"
   ],
  "description": "Gummy bear candies infused with essential cannabinoids extracted from pure hemp extract that offers a delicious way to get your daily dose of CBD.",
  "sku": "0",
  "mpn": "0",
  "brand": {
    "@type": "Thing",
    "name": "CBD Gummies"
  },
  "review": {
    "@type": "Review",
    "reviewRating": {
      "@type": "Rating",
      "ratingValue": "4",
      "bestRating": "5"
    },
    "author": {
      "@type": "Person",
      "name": "Jade S. "
    }
  },
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "5",
    "reviewCount": "4"
  },
  "offers": {
    "@type": "Offer",
    "url": "https://www.ultimatecbdlabs.com/cbd-gummies.php",
    "priceCurrency": "USD",
    "price": "54.94",
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

        <a href="/">Accueil</a> > <a href="cbd-products.php">Produits  </a> > <span>Bonbons CBD</span>

    </div>

</div>



<div class="deailsSec1">

	<div class="container">

    	<h1 class="prod-nameHdng forMob">Bonbons CBD <span>300MG</span> <span class="prc">| &nbsp;<span class="one_price">$<?php echo $p_info[$pr1]['price']; ?></span> <span class="rec_price rec_price_ext">$<?php echo $p_info[$pr2]['price']; ?></span></span></h1>

         <p class="prd-p1 forMob"><img src="images/stars.png" class="prd-stars" alt="Star Rating"></p>

    	<div class="prodSlider-Left">

        	<div class="slide-div slide-div2">

                    <div>

                        <img src="images/gummies-slide1.png" class="prd-slide" alt="Best CBD Gummies">

                    </div>

                    <div>

                        <img src="images/gummies-slide2.jpg" class="prd-slide prd-slide2" alt="Suplement Facts">

                    </div>

                    <div>

                        <img src="images/oil-slide3.jpg" class="prd-slide prd-slide2" alt="100% Organic">

                    </div>

                </div>

            <div class="slider-nav">

                    <div><img src="images/gummies-nav1.jpg" class="prd-nav" alt="Best CBD Gummies"></div>

                    <div><img src="images/gummies-nav2.jpg" class="prd-nav" alt="Suplements Facts"></div>

                    <div><img src="images/gummies-nav3.jpg" class="prd-nav" alt="Buy CBD Gummies"></div>

                </div>

        </div>

        <div class="prodDetls-Rght">

        	<p class="prod-nameHdng hide-mob">Bonbons CBD <span>300MG</span> <span class="prc">| &nbsp;<span class="one_price">$<?php echo $p_info[$pr1]['price']; ?></span> <span class="rec_price rec_price_ext">$<?php echo $p_info[$pr2]['price']; ?></span></span></p>

            <p class="prd-p1 hide-mob"><img src="images/stars.png" class="prd-stars" alt="START"></p>

            <p class="prd-p2">Oursons gélifiés infusés de cannabinoïdes extraits d'extrait de chanvre pur qui offrent un moyen délicieux d'obtenir votre dose quotidienne de CBD.</p>
            <ul class="dtlsec-list">
                <li>Mélange de Résistance Maximale 300MG</li>
                <li>Délicieux Oursons Facile à Mâcher</li>
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



                <a href="javascript:void();" class="order-btn addtocart-btn">Ajouter au panier<img src="images/addcart-arw.png" alt="Add To Cart"></a>





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

            	<img src="images/strp-icon1.png" alt="Available Without Doctor's Prescription">

                Disponible sans <br class="hide-mob"> ordonnance médicale 

            </li>

            <li>

            	<img src="images/strp-icon4.png" alt="Clinically Proven Therapist Recommended">

                Prouvé cliniquement <br> Recommandé par les Thérapeutes 

            </li>

            <li>

            	<img src="images/strp-icon2.png" alt="100% Legal In All 50 States In USA">

               100% Legal au sein <br class="hide-mob"> des 50 États aux USA  

            </li>

            <li>

            	<img src="images/strp-icon3.png" alt="Certified Organic THC-Free Products">

                Certifié bio <br class="hide-mob"> Produits sans THC 

            </li>

        </ul>

    </div>

</div>



<div class="sectionOne">

	<div class="container">

    	<div class="s1-left">

        	<p class="comnHdng">Bonbons Ultimate CBD</p>

            <p class="comn-subHdng">Saveurs Délicieuses | Action Rapide | Haute Puissance</p>

            <img src="images/gummies-s1-img.png" alt="Ultimate CBD Gummies" class="s1-img forDesk">

            <img src="images/gummies-s1-img-mob.png" alt="Ultimate CBD Gummies" class="s1-img-mob forMob">

            <p class="comn-para"><b>Les Bonbons Ultimate CBD</b> exploitent les avantages thérapeutiques du CBD, un composé sûr et non psychoactif présent dans les feuilles de chanvre. Le CBD a révélé avoir un impact positif sur des fonctions clés de notre corps, y compris des fonctions neuronales, physiques et psychologiques.</p>

            <p class="comn-para"><b>Les Bonbons Ultimate CBD sont fabriquées à partir d'extrait de chanvre 100% légal, sûrs, cultivés et récoltés aux États-Unis, pour assurer une puissance élevée et des avantages maximaux pour la santé.</b></p>

            <ul class="s1-list">
            	<li><img src="images/prods1-icn11.png"><br>TAILLE / VOLUME<br> <span>60 ml</span></li>
                <li><img src="images/prods1-icn2.png"><br>CBD TOTAL<br> <span>5000 mg</span></li>
                <li><img src="images/prods1-icn22.png"><br>DOSE / PORTION<br> <span>83.3 mg / ml</span></li>
            </ul>



                <a href="cart.php" class="learn-btn">Commander <img src="images/learn-more-arw.png" alt="Order Now"></a>



            

        </div>

    </div>

</div>


<div class="deailsSec2">

	<div class="container">

    	<p class="comnHdng">Bénéfice des Bonbons Ultimate CBD</p>

        <p class="comn-subHdng detls-subHdng">Re-Découvrez Les Joies D'Une Vie Équilibrée Avec Le CBD </p>

        <div class="clearall"></div>

        <img src="images/gummies-prod2.png" alt="Buy CBD Gummies" class="cbd-oil-prod2 hide-mob">

        <img src="images/gummies-prod2-mob.png" class="cbd-oil-prod2-mob forMob" alt="Buy CBD Gummies">

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

                    <p>Favorise une sensation de relaxation profonde en régulant positivement les modèles d'humeur pour réduire le stress et l'anxiété au quotidien.</p>

                </li>

                <li>

                	<img src="images/dtls-s2-icon3.png" alt="Improves Mental Clarity & Focus">

                	<span>Améliore la clarté mentale & la concentration</span>

                    <p>Les propriétés neuro-protectrices du CBD soutiennent la santé cognitive, améliorant le rappel de la mémoire, la clarté, la vigilance et la concentration.</p>

                </li>

                <li>

                	<img src="images/dtls-s2-icon4.png" alt="Reduces Chronic Pains & Aches">

                	<span>Réduit les douleurs chroniques</span>

                    
          <p>En réduisant l'inflammation, en soutenant la santé des articulations et en réduisant la signalisation de la douleur, 
            <a href="https://www.ultimatecbdlabs.com/cbd-gummies.php">les Bonbons au CBD</a> 
            vous aident à vivre activement et sans douleur.</p>

                </li>

            </ul>

        </div>

        <div class="clearall"></div>

        <a href="cart.php" class="learn-btn">Commander <img src="images/learn-more-arw.png" alt="Order Now"></a>

    </div>

</div>


<div class="deailsSec3">

	<div class="container">

    	<div class="detls3-lft">

            <p class="comnHdng">La science derrière le CBD</p>

            <p class="comn-subHdng">Découvrez le fonctionnement des gélules au CBD</p>

            <img src="images/science-banner-mob.jpg" class="science-banner-mob forMob" style="float:left; width:100%;" alt="Hemp Extract Gummies">

            <p class="comn-para">Le système endocannabinoïde (SEC) régule tout, de la relaxation à l'alimentation, au sommeil, à l'inflammation et même à la fonction cognitive.<b>Le CBD a été médicalement prouvé pour réguler positivement votre SEC en traitant des problèmes tels que l'anxiété, l'insomnie, la douleur chronique, l'hypertension et même les problèmes cardiovasculaires.</b></p>

            <p class="cbd-workHdng">Bonbons Ultimate CBD  - Formule Triple Action</p>

            <ul class="cbd-work-list">

            	<li>

                	<div class="steps">Étape 1</div>

                    <span>Stimuler une réponse SEC positive</span>

                    <p>Les cannabinoïdes régulent positivement la réponse SEC et anti-inflammatoire, offrant des avantages psychologiques, physiques et neurologiques.</p>

                </li>

                <li>

                	<div class="steps">Étape 2</div>

                    <span>Rétablit l'équilibre et le bien-être</span>

                    
          <p>La supplémentation régulière <a href="https://www.nytimes.com/interactive/2019/05/14/magazine/cbd-cannabis-cure.html" target="_blank" rel="nofollow">en Bonbons au CBD</a> aide à combler les lacunes nutritionnelles et favorise la santé et le bien-être en général.</p>

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



<div class="dtls-strip gummies-strip1">

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

    	<p class="comnHdng">Pourquoi choisir les Bonbons Ultimate CBD</p>

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

            	<img src="images/brand-seal2-gummies.png" alt="Delicious Flavor Easy To Take">

                <span>Saveurs Délicieuses<br> Facile à Prendre</span>

                <div class="clearall"></div>

                <div class="bdr"></div>

                <p>Les bonbons au CBD infusés sont délicieux, ce qui les rends plus facile à prendre dans votre routine quotidienne.</p>

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



<div class="dtls-strip dtls-strip2">

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

            	<img src="images/seal1.png" alt="100% Organic">

                100% Bio 

            </li>

            <li>

            	<img src="images/seal2.png" alt="Made In USA">

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

        	<img src="images/money-bk-seal.png" alt="30 Days Money Back Guarantee" class="money-bk-seal">

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

                <span>J</span>

                <p>Les Bonbons au CBD d'Ultimate CBD Labs sont mes favoris. Ils sont délicieux et vraiment faciles à prendre - sans qu'ils soient trop mous. C'est un bon produit si vous cherchez une façon savoureuse d'obtenir votre dose quotidienne de CBD.</p>

                <div class="reslt-name"><img src="images/star.png" alt="Star" class="rvw-star">Jade S. &nbsp;  <img src="images/verified.png" alt="Verified Customer" class="verify"></div>

            </div>

            <div class="testi-row">

                <span>D</span>

                <p>Je ne suis pas très à l'aise avec les gélules ou les huiles. J'ai donc décidé d'essayer les bonbons et ai été satisfait jusqu'à maintenant. Ça m'a vraiment aidé avec mon anxiété et m'a permis de mieux dormir la nuit. Ça a bon goût, ce n'est pas trop sucré.</p>

                <div class="reslt-name"><img src="images/star.png" alt="Star" class="rvw-star">Delara  &nbsp;  <img src="images/verified.png" alt="Verified Customer" class="verify"></div>

            </div>

            <div class="testi-row">

                <span>C</span>

                <p>Je les ai acheté à cause de la quantité d'anxiété que j'ai par moments. Je n'ai même pas vraiment pensé à ma douleur à l'épaule gauche, mais ça soulage aussi cette douleur. Ça aide avec l'anxiété, ça ne vous débarrassera évidemment pas de votre anxiété mais ça vous aide vraiment à mieux la gérer. Je recommande!</p>

                <div class="reslt-name"><img src="images/star.png" alt="Star" class="rvw-star">Chandler K.  &nbsp;  <img src="images/verified.png" alt="Verified Customer" class="verify"></div>

            </div>

            <div class="testi-row">

                <span>G</span>

                <p>Ils sont si bons. Cinq étoiles pour le goût, quatre pour l'efficacité. J'en commanderais certainement plus.</p> 

                <div class="reslt-name"><img src="images/star.png" alt="Star" class="rvw-star">George Allesi  &nbsp;  <img src="images/verified.png" alt="Verified Customer" class="verify"></div>

            </div>

        </div>

    </div>

</div>



<div class="dtls-strip dtls-strip3">

	<div class="container">

    	<div class="strp-rgt strp-rgt-lst">

        	<p class="strp-txt1">Commandez votre bouteille de<br>Bonbons Ultimate BCD</p>

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

