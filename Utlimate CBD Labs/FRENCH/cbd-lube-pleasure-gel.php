<?php //header("Location: https://www.ultimatecbdlabs.com/"); ?>
<?php 
   $pagenm = $_SERVER['REQUEST_URI'];
   
   include('includes/action.php');
   
   $p_info = $_SESSION['product_detail']['1006580'];
   
   $pr1 = 2;
   
   $pr2 = 6;
   
   ?>
<!doctype html>
<html>
   <head>
      <meta charset="utf-8">
      <title>Achetez du Lubirifiant CBD - Ultimate CBD Labs</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
      <meta name="description" content="Buy CBD lube to help increase comfort, elevate arousal, stimulate sexual sensitivity and improve sexual performance, producing fuller and more intense orgasms..." />
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
           "name": "CBD Gel",
           "image": [
             "https://www.ultimatecbdlabs.com/images/gel-slider1.png",
             "https://www.ultimatecbdlabs.com/images/gel-nav2.jpg",
             "https://www.ultimatecbdlabs.com/images/gel-nav3.jpg"
            ],
           "description": "The only CBD Enriched Gel that can be used by men, women or couples.",
           "sku": "0",
           "mpn": "0",
           "brand": {
             "@type": "Thing",
             "name": "CBD Gel"
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
               "name": "MK ."
             }
           },
           "aggregateRating": {
             "@type": "AggregateRating",
             "ratingValue": "5",
             "reviewCount": "4"
           },
           "offers": {
             "@type": "Offer",
             "url": "https://www.ultimatecbdlabs.com/cbd-lube-pleasure-gel.php",
             "priceCurrency": "USD",
             "price": "59.95",
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
            <a href="index.php">Acceuil</a> > <a href="products.php">Produits </a> > <span>Gel plaisir au CBD</span>
         </div>
      </div>
      <div class="deailsSec1">
         <div class="container">
            <h1 class="prod-nameHdng forMob">Gel au CBD <span>100 MG</span> <span class="prc">| &nbsp;<span class="one_price">$<?php echo $p_info[$pr1]['price']; ?></span> <span class="rec_price rec_price_ext">$<?php echo $p_info[$pr2]['price']; ?></span></span></h1>
            <p class="prd-p1 forMob"><img src="images/stars.png" class="prd-stars" alt="Star"></p>
            <div class="prodSlider-Left">
               <div class="slide-div slide-div2">
                  <div>
                     <img src="images/gel-slider1.png"class="prd-slide" alt="CBD Gel">
                  </div>
                  <div>
                     <img src="images/gel-slide2.jpg"class="prd-slide prd-slide2" alt="Ingredient">
                  </div>
                  <div>
                     <img src="images/oil-slide3.jpg"class="prd-slide prd-slide2" alt="100% Organic">
                  </div>
               </div>
               <div class="slider-nav">
                  <div><img src="images/gel-nav1.jpg" class="prd-nav" alt="CBD Gel"></div>
                  <div><img src="images/gel-nav2.jpg" class="prd-nav" alt="CBD Gel"></div>
                  <div><img src="images/gel-nav3.jpg" class="prd-nav" alt="Buy CBD Gel"></div>
               </div>
            </div>
            <div class="prodDetls-Rght">
               <p class="prod-nameHdng hide-mob">Gel plaisir au CBD <span>100 MG</span> <span class="prc">| &nbsp;<span class="one_price">$<?php echo $p_info[$pr1]['price']; ?></span> <span class="rec_price rec_price_ext">$<?php echo $p_info[$pr2]['price']; ?></span></span></p>
               <p class="prd-p1 hide-mob"><img src="images/stars.png" class="prd-stars" alt="Star"></p>
               <p class="prd-p2">Le seul lubrifiant enrichi au CBD qui peut être utilisé par les hommes, les femmes ou les couples pour améliorer le confort sexuel, les performances et le plaisir.</p>
               <ul class="dtlsec-list">
                  <li>Stimule l'excitation et le désir</li>
                  <li>Augmente le confort durant les rapports sexuels</li>
                  <li>Améliore les performances sexuelles</li>
                  <li>Intensifie les orgasmes et le plaisir</li>
                  <li>100% sans danger pour la peau des parties intimes</li>
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
                  <img src="images/strp-icon3.png" alt="100% Plant Based Gel Formula">
                  Gel à 100% à base <br class="hide-mob"> de plantes
               </li>
               <li>
                  <img src="images/strp-icon5.png" alt="Works For Both Men & Women">
                  Fonctionne pour les <br> Hommes et les Femmes 
               </li>
               <li>
                  <img src="images/strp-icon6.png" alt="Free From Coconut Oil ">
                  Sans huile <br class="hide-mob"> de coco 
               </li>
               <li>
                  <img src="images/strp-icon7.png">
                  Formule de plaisir <br class="hide-mob"> action rapide
               </li>
            </ul>
         </div>
      </div>
      <div class="sectionOne">
         <div class="container">
            <div class="s1-left">
               <p class="comnHdng">Gel Plaisir Ultimate CBD</p>
               <p class="comn-subHdng">Action rapide | Sans Danger | Plaisir maximum</p>
               <img src="images/gel-s1-img.png" class="s1-img forDesk">
               <img src="images/gel-s1-img-mob.png" class="s1-img-mob forMob">
               <p class="comn-para">Peu importe où vous vous trouvez sur le spectre du plaisir sexuel - la jouer solo ou avec un partenaire, <b>le Gel Plaisir au CBD</b>est sûr d'améliorer votre confort et d'augmenter votre plaisir. Infusé de CBD, le gel réduit l'inflammation, augmente le flux sanguin vers les organes sexuels et diminue la signalisation de la douleur.</p>
               <p class="comn-para"><b>Le Gel Plaisir au CBD</b> aide à augmenter le confort, à augmenter l'excitation, stimule la sensibilité sexuelle et améliore les performances sexuelles, rendant les orgasmes plus pleins, plus intenses et plus facilement atteignable.</p>
               <ul class="s1-list">
                  <li><img src="images/prods1-icn44.png"><br>TAILLE / VOLUME<br> <span>50 ml</span></li>
                  <li><img src="images/prods1-icn2.png"><br>CBD TOTAL<br> <span>100 mg</span></li>
                  <li><img src="images/prods1-icn55.png"><br>TYPE DE PRODUIT<br> <span>Entièrement Naturel</span></li>
               </ul>
               <a href="cart.php" class="learn-btn">Commander <img src="images/learn-more-arw.png"></a>
            </div>
         </div>
      </div>
      <div class="deailsSec2">
         <div class="container">
            <p class="comnHdng">Avantages du Gel au CBD</p>
            <p class="comn-subHdng detls-subHdng">Faites l'expérience du plaisir, du confort et de la satisfaction avec le Gel Plaisir au CBD</p>
            <div class="clearall"></div>
            <img src="images/gel-prod2.png" class="cbd-oil-prod2 hide-mob">
            <img src="images/gel-prod2-mob.png" class="cbd-oil-prod2-mob forMob">
            <div class="deailsSec2-rgt">
               <ul>
                  <li>
                     <img src="images/gel-s2-icon1.png">
                     <span>Stimule l'Excitation &amp; le Désire</span>
                     <p>Augmente l'excitation sexuelle et le désir pour vous et votre partenaire assurant des rencontres sexuelles plus satisfaisantes.</p>
                  </li>
                  <li>
                     <img src="images/gel-s2-icon2.png">
                     <span>Augmente le confort pendant les rapports sexuels</span>
                     <p>Réduit l'inflammation et la signalisation de la douleur pour réduire la douleur et augmenter le confort pendant les rapports sexuels.</p>
                  </li>
                  <li>
                     <img src="images/gel-s2-icon3.png">
                     <span>Améliore les performances sexuelles</span>
                     <p>Augmente la tenue et retarde l'apogée pour vous aider, vous et votre partenaire, à profiter de sessions prolongées.</p>
                  </li>
                  <li>
                     <img src="images/gel-s2-icon4.png">
                     <span>Intensifie les Orgasmes &amp; le Plaisir</span>
                     <p>Donne un accès facile à un plaisir accru et à des orgasmes intenses, faisant passer votre vie sexuelle et votre satisfaction au niveau supérieur.</p>
                  </li>
               </ul>
            </div>
            <div class="clearall"></div>
            <a href="cart.php" class="learn-btn">Commander <img src="images/learn-more-arw.png"></a>
         </div>
      </div>
      <div class="deailsSec3 plsr-gel-s3">
         <div class="container">
            <div class="detls3-lft">
               <p class="comnHdng">Comment fonctionne le Gel Plaisir au CBD pour</p>
               <p class="comn-subHdng">Réduire la Douleur &amp; Augmentez le plaisir</p>
               <img src="images/gel-science-banner-mob.jpg" class="science-banner-mob forMob">
               <p class="comn-para">Le Gel Plaisir au CBD de Ultimate CBD Labs est infusé avec un mélange d'ingrédients qui stimulent l'excitation sexuelle, améliorent la lubrification naturelle et réduisent l'inflammation de la peau. Cela aide à réduire la douleur, à prolonger les relations sexuelles et à augmenter le niveau de plaisir. </p>
               <ul class="cbd-work-list">
                  <li>
                     <div class="steps">Étape 1</div>
                     <span>Stimule la lubrification naturelle</span>
                     <p>Une lubrification accrue a été liée à une réduction de la douleur pendant et après les rapports sexuels, tout en augmentant la sensation chez les femmes.</p>
                  </li>
                  <li>
                     <div class="steps">Étape 2</div>
                     <span>Réduit l'inflammation</span>
                     <p>Les extraits de plantes apaisent et refroidissent la peau pour améliorer le confort sexuel, ce qui conduit à des rencontres plus longues et plus agréables.</p>
                  </li>
                  <li>
                     <div class="steps">Étape 3</div>
                     <span>Augmente le flux sanguin vers les organes sexuels</span>
                     <p>Aide à la qualité et à la fréquence de l'érection, améliore la confiance sexuelle, l'endurance, la résistance et la performance chez les hommes.</p>
                  </li>
                  <li>
                     <div class="steps">Étape 4</div>
                     <span>Diminue la signalisation de la douleur</span>
                     <p>La réduction de la signalisation de la douleur améliore également le confort et la relaxation pendant les rapports sexuels, ce qui permet des rencontres sexuelles plus longues pour les hommes &amp; ainsi que pour les femmes.</p>
                  </li>
               </ul>
            </div>
         </div>
      </div>
      <div class="dtls-strip gel-strip1">
         <div class="container">
            <div class="strp-rgt strp-rgt-lst">
               <p class="strp-txt1">Boostez votre vie sexuelle aujourd'hui</p>
               <p class="strp-txt2 gel-strp-txt2">Le seul lubrifiant enrichi au CBD qui peut être utilisé par les hommes, les femmes ou les couples pour améliorer le confort sexuel, les performances &amp; le plaisir.</p>
               <a href="cart.php" class="learn-btn">Commander <img src="images/learn-more-arw.png"></a>
            </div>
         </div>
      </div>
      <div class="deailsSec4">
         <div class="container">
            <p class="comnHdng">Matrice d'ingrédients 100% naturels</p>
            <p class="comn-subHdng detls-subHdng">Pour le confort, le plaisir et la performance</p>
            <ul class="brand-logo-box">
               <li>
                  <img src="images/gel-ingdnt1.jpg" class="gel-ingdnt-img">
                  <span>CBD Extrait<br>du Chanvre</span>
                  <div class="clearall"></div>
                  <div class="bdr"></div>
                  <p>Réduit l'inflammation et la signalisation de la douleur pour un plus grand confort pendant les rapports sexuels.</p>
               </li>
               <li>
                  <img src="images/gel-ingdnt2.jpg" class="gel-ingdnt-img">
                  <span>Extrait de Fleur<br>de Chèvrefeuille</span>
                  <div class="clearall"></div>
                  <div class="bdr"></div>
                  <p>Apaise la peau pour stimuler la sensation et l'excitation accrues.</p>
               </li>
               <li>
                  <img src="images/gel-ingdnt3.jpg" class="gel-ingdnt-img">
                  <span>Extrait de<br>Gingembre</span>
                  <div class="clearall"></div>
                  <div class="bdr"></div>
                  <p>Réduit l'inflammation cutanée pour réduire la douleur pendant et après les rapports sexuels.</p>
               </li>
               <li>
                  <img src="images/gel-ingdnt4.jpg" class="gel-ingdnt-img">
                  <span>Extrait de Feuille<br>d'Olivier</span>
                  <div class="clearall"></div>
                  <div class="bdr"></div>
                  <p>Aide à la lubrification naturelle chez les femmes et augmente la circulation chez les hommes.</p>
               </li>
            </ul>
         </div>
      </div>
      <div class="dtls-strip gel-strip2">
         <div class="container">
            <div class="strp-left">
               <p class="strp-txt1">Commandez votre bouteille de<br> Gel Plaisir au CBD dès aujourd'hui</p>
               <p class="strp-txt2">Faites passer votre vie sexuelle au niveau supérieur et profitez de rencontres sexuelles satisfaisantes et intenses.</p>
               <a href="cart.php" class="learn-btn">Commander <img src="images/learn-more-arw.png"></a>
            </div>
         </div>
      </div>
      <div class="sectionFour">
         <div class="container">
            <p class="comnHdng">La promesse des Laboratoires CBD</p>
            <p class="comn-subHdng detls-subHdng">Extraction Éthique, Formulation Puissante et Emballage de Qualité</p>
            <ul class="s4-list">
               <li>
                  <img src="images/seal1.png">
                  100% Bio 
               </li>
               <li>
                  <img src="images/seal2.png">
                  Fabriqué aux USA
               </li>
               <li>
                  <img src="images/seal3.png">
                  Enregistré à la FDA
               </li>
               <li>
                  <img src="images/seal4.png">
                  Pas de THC 
               </li>
               <li>
                  <img src="images/seal5.png">
                  Sans Gluten 
               </li>
               <li>
                  <img src="images/seal6.png">
                  Compatible Vegan 
               </li>
            </ul>
            <div class="moneybk-Dv">
               <img src="images/money-bk-seal.png" class="money-bk-seal">
               <span>Garantie de remboursement de 30 jours</span>
               <p>Chez Ultimate CBD Labs, nous nous engageons à fournir des produits de qualité pour vous aider à obtenir les résultats que vous méritez. Cependant, dans le cas peu probable où vous ne seriez pas satisfait des résultats, renvoyez simplement le produit dans les 30 jours pour un remboursement complet.<br><br>La garantie n'est valable que lorsque votre produit Ultimate CBD Labs est acheté directement auprès du fabricant.</p>
            </div>
         </div>
      </div>
      <div class="deailsSec5">
         <div class="container">
            <p class="comnHdng">Personnes Réelles, Résultats Réels</p>
            <p class="comn-subHdng detls-subHdng">Témoignages de clients de chez Ultimate CBD Labs</p>
            <div class="result-box">
               <div class="testi-row">
                  <span>M</span>
                  <h3>Plus de plaisir & de confort!</h3>
                  <p>J'utilise ce gel depuis environ 2 mois et je peux dire avec confiance qu'il a complètement éliminé la douleur que je ressentais pendant et après les rapports sexuels. Je peux enfin profiter d'un meilleur sexe avec mon petit ami.</p>
                  <div class="reslt-name"><img src="images/star.png" alt="Star Rating" class="rvw-star">by MK &nbsp;  <img src="images/verified.png" alt="Verified Customer" class="verify"></div>
               </div>
               <div class="testi-row">
                  <span>A</span>
                  <h3>Ma femme et moi l'adorons!</h3>
                  <p>Nous l'avons trouvé en ligne et l'avons commandé. Il est arrivé rapidement en 4 jours et en toute discrétion par la poste. Le Gel ne ressemble à aucun de ceux de "marques populaires" que nous avons utilisé. A part la lubrification, il élève vraiment la stimulation et l'excitation à un tout autre niveau! Hautement recommandé</p>
                  <div class="reslt-name"><img src="images/star.png" alt="Star Rating" class="rvw-star">by Anonymous &nbsp;  <img src="images/verified.png" alt="Verified Customer" class="verify"></div>
               </div>
               <div class="testi-row">
                  <span>C</span>
                  <h3>Un vrai amplificateur d'orgasme</h3>
                  <p>Je suis assez accro à l'utilisation de ce gel avec mes jouets sexuels, non seulement il améliore le confort mais m'aide également à profiter d'orgasmes vraiment bouleversants! Contrairement aux autres lubrifiants, aucune rougeur, aucune infection et aucune tache.</p>
                  <div class="reslt-name"><img src="images/star.png" alt="Star Rating" class="rvw-star">Chelsie K. &nbsp;  <img src="images/verified.png" alt="Verified Cutomer" class="verify"></div>
               </div>
               <div class="testi-row">
                  <span>J</span>
                  <h3>Je peux durer toute la nuit!</h3>
                  <p>Juste quelques gouttes pour lubrifier et ma libido et mon pouvoir de resistance montent en flèche, ce qui me permet d'avoir des érections plus dures, plus d'endurance et de plaisir pour ma femme comme jamais auparavant. Plus que moi, ma femme le garde à portée de main sur la table de nuit..</p>
                  <div class="reslt-name"><img src="images/star.png" alt="Star Rating" class="rvw-star">JH &nbsp;  <img src="images/verified.png" alt="Verified Customer" class="verify"></div>
               </div>
            </div>
         </div>
      </div>
      <div class="dtls-strip gel-strip3">
         <div class="container">
            <div class="strp-rgt strp-rgt-lst">
               <p class="strp-txt1">Boostez votre vie sexuelle aujourd'hui</p>
               <p class="strp-txt2 gel-strp-txt2">Le seul lubrifiant enrichi au CBD qui peut être utilisé par les hommes, les femmes ou les couples pour améliorer le confort sexuel, la performance &amp; le plaisir.</p>
               <a href="cart.php" class="learn-btn">Commander <img src="images/learn-more-arw.png"></a>
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