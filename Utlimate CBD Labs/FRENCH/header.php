<div class="top-strip">

	<div class="container">

    	<p class="top-txt">Livraison rapide et gratuite sur toutes les commandes au sein des États-Unis</p>

    </div>

</div>



<div class="top-fix-bar">

    <div class="header">

        <div class="container">

            <div class="header-left">

                <ul class="mainMenu">

                    <li><a href="/special"<?php if(strstr($pagenm,"index.php") == "index.php") {?> class="active" <?php } else { echo 'class=""'; } ?> title="Home">Accueil</a></li>

                    <li><a href="cbd-products.php"<?php if(strstr($pagenm,"cbd-products.php") == "cbd-products.php") {?> class="active" <?php } else { echo 'class=""'; } ?> title="CBD Products">Produits</a></li>

                    <li><a href="https://ultimatecbdlabs.com/blog/"<?php if(strstr($pagenm,"about-cbd.php") == "about-cbd.php") {?> class="active" <?php } else { echo 'class=""'; } ?> title="About CBD">À propos du CBD</a></li>

                </ul>

            </div>

            <img src="images/logo.png" class="logo" alt="Ultimate CBD Labs">

            <div class="header-right">

                <ul class="mainMenu">

                    <li><a href="faq.php"<?php if(strstr($pagenm,"faq.php") == "faq.php") {?> class="active" <?php } else { echo 'class=""'; } ?> title="Faq">Faq</a></li>

                    <li><a href="contact.php"<?php if(strstr($pagenm,"contact.php") == "contact.php") {?> class="active" <?php } else { echo 'class=""'; } ?> title="Contact Us">Contactez-nous </a></li>

                    <li><a href="cart.php"<?php if(strstr($pagenm,"cart.php") == "cart.php") {?> class="active" <?php } else { echo 'class=""'; } ?> title="Cart">Panier</a></li>

                </ul>

            </div>

            

            <div class="top-rit">

            	<a href="cart.php"><div class="cart-p"><img src="images/top-bar-ic-2.png" class="top-bar-ic-2" alt="img"><span class="cart-int">

                    <?php 

                    if (isset($_SESSION['coupon_cart']['product'])){

                        echo count($_SESSION['coupon_cart']['product']);

                    }else{

                        echo '0';

                    }?>

                        

                    </span></div></a>

            </div>

            

            

            <div class="mob-mnu-ic forMob">

                <button class="dl-trigger" id="mobMenuBtn">

                    <div class="bar1"></div>

                    <div class="bar2"></div>

                    <div class="bar3"></div>

                </button>

    		</div>

        </div>

    </div>

</div>



<div class="forMob"> 

    <ul class="mobilemenu">

        <li><a href="/">Accueil</a></li>

        <li><a href="cbd-products.php">Produits</a></li>

        <li><a href="https://ultimatecbdlabs.com/blog/">À propos du CBD</a></li>

        <li><a href="faq.php">Faq</a></li>

        <li><a href="contact.php">Contactez-nous</a></li>

    </ul>

</div>
<script type="application/ld+json">
{
 "@context": "http://schema.org",
   "@type": "WebSite",
     "url": "https://www.ultimatecbdlabs.com/",
       "potentialAction": {
        "@type": "SearchAction",
       "target": "https://www.ultimatecbdlabs.com/search?keywords={keywords}&TID=GS:searchbox",
       "query-input": "required name=keywords"
       }
       }
</script>