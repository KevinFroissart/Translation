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
      <title>Buy CBD Lube - Ultimate CBD Labs</title>
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
            <a href="index.php">Home</a> > <a href="products.php">Products </a> > <span>CBD Pleasure Gel</span>
         </div>
      </div>
      <div class="deailsSec1">
         <div class="container">
            <h1 class="prod-nameHdng forMob">CBD Gel <span>100 MG</span> <span class="prc">| &nbsp;<span class="one_price">$<?php echo $p_info[$pr1]['price']; ?></span> <span class="rec_price rec_price_ext">$<?php echo $p_info[$pr2]['price']; ?></span></span></h1>
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
               <p class="prod-nameHdng hide-mob">CBD Pleasure Gel <span>100 MG</span> <span class="prc">| &nbsp;<span class="one_price">$<?php echo $p_info[$pr1]['price']; ?></span> <span class="rec_price rec_price_ext">$<?php echo $p_info[$pr2]['price']; ?></span></span></p>
               <p class="prd-p1 hide-mob"><img src="images/stars.png" class="prd-stars" alt="Star"></p>
               <p class="prd-p2">The only CBD Enriched Lubricant that can be used by men, women or couples to boost sexual comfort, performance & pleasure.</p>
               <ul class="dtlsec-list">
                  <li>Stimulates Arousal & Desire</li>
                  <li>Increases Comfort During Sex</li>
                  <li>Enhances Sexual Performance</li>
                  <li>Intensifies Orgasms & Pleasure</li>
                  <li>100% Safe For Intimate Skin</li>
               </ul>
               <div class="clearall"></div>
               <p class="recurring_box"><input type="checkbox" id="recurring" name="recurring"> Save 15% now and up to 40% on future deliveries <a href="recurring_info.php" class="fancybox fancybox.iframe"><span class="c_quest">?</span></a>
                  </p>
                 
               <div class="col-12 checkout-terms" style="display: none;">
                  Monthly loyalty program includes enrolment in our monthly auto-ship program, You will get 15% off todays order and up to 40% off a monthly continuing 1 bottle shipment that would be shipped out within 7 days of when you are scheduled to run out. Every 30 days thereafter. For Just $<?php echo $p_info[$pr2]['r_price']; ?> Each bottle is considered a 30 day supply.
               </div>
               <select name="" class="select-qty" id="select-qty">
                  <option value="">Select Quantity</option>
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
                     <a href="javascript:void();" class="order-btn addtocart-btn">Add To Cart<img src="images/addcart-arw.png" alt="Add To Cart"></a>
                  </form>
                  <p>30 Day Money Back Guarantee</p>
               </div>
            </div>
         </div>
      </div>
      <div class="sec-strip">
         <div class="container">
            <ul>
               <li>
                  <img src="images/strp-icon3.png" alt="100% Plant Based Gel Formula">
                  100% Plant Based <br class="hide-mob"> Gel Formula  
               </li>
               <li>
                  <img src="images/strp-icon5.png" alt="Works For Both Men & Women">
                  Works For Both <br> Men & Women 
               </li>
               <li>
                  <img src="images/strp-icon6.png" alt="Free From Coconut Oil ">
                  Free From <br class="hide-mob"> Coconut Oil 
               </li>
               <li>
                  <img src="images/strp-icon7.png">
                  Fast Action <br class="hide-mob"> Pleasure Formula
               </li>
            </ul>
         </div>
      </div>
      <div class="sectionOne">
         <div class="container">
            <div class="s1-left">
               <p class="comnHdng">Ultimate CBD Pleasure Gel</p>
               <p class="comn-subHdng">Fast Acting | Safe For Play | Maximum Pleasure</p>
               <img src="images/gel-s1-img.png" class="s1-img forDesk">
               <img src="images/gel-s1-img-mob.png" class="s1-img-mob forMob">
               <p class="comn-para">No matter where you find yourself on the sexual pleasure spectrum- flying solo or with your partner, <b>CBD Pleasure Gel</b> is sure to enhance your comfort & heighten your pleasure. Infused with CBD, the gel reduces inflammation, increases blood flow to the sexual organs, and decreases pain signalling.</p>
               <p class="comn-para"><b>CBD Pleasure Gel</b> helps increase comfort, increase arousal, stimulates sexual sensitivity and improves sexual performance making orgasms fuller, more intense, and easy to access.</p>
               <ul class="s1-list">
                  <li><img src="images/prods1-icn44.png"><br>SIZE / VOLUME<br> <span>50 ml</span></li>
                  <li><img src="images/prods1-icn2.png"><br>TOTAL CBD<br> <span>100 mg</span></li>
                  <li><img src="images/prods1-icn55.png"><br>PRODUCT TYPE<br> <span>All Natural</span></li>
               </ul>
               <a href="cart.php" class="learn-btn">Order Now <img src="images/learn-more-arw.png"></a>
            </div>
         </div>
      </div>
      <div class="deailsSec2">
         <div class="container">
            <p class="comnHdng">Benefits Of CBD Gel</p>
            <p class="comn-subHdng detls-subHdng">Experience Pleasure, Comfort & Satisfaction With CBD Pleasure Gel</p>
            <div class="clearall"></div>
            <img src="images/gel-prod2.png" class="cbd-oil-prod2 hide-mob">
            <img src="images/gel-prod2-mob.png" class="cbd-oil-prod2-mob forMob">
            <div class="deailsSec2-rgt">
               <ul>
                  <li>
                     <img src="images/gel-s2-icon1.png">
                     <span>Stimulates Arousal &amp; Desire</span>
                     <p>Increases sexual arousal and desire for you and your partner ensuring more satisfying sexual encounters.</p>
                  </li>
                  <li>
                     <img src="images/gel-s2-icon2.png">
                     <span>Increases Comfort During Sex</span>
                     <p>Reduces inflammation and pain signalling to reduce pain & increase comfort during sexual intercourse.</p>
                  </li>
                  <li>
                     <img src="images/gel-s2-icon3.png">
                     <span>Enhances Sexual Performance</span>
                     <p>Boosts staying power and delays climax to help you and your partner enjoy extended sessions.</p>
                  </li>
                  <li>
                     <img src="images/gel-s2-icon4.png">
                     <span>Intensifies Orgasms &amp; Pleasure</span>
                     <p>Gives easy access to heightened pleasure and intense orgasms, taking your sex life and satisfaction to the next level.</p>
                  </li>
               </ul>
            </div>
            <div class="clearall"></div>
            <a href="cart.php" class="learn-btn">Order Now <img src="images/learn-more-arw.png"></a>
         </div>
      </div>
      <div class="deailsSec3 plsr-gel-s3">
         <div class="container">
            <div class="detls3-lft">
               <p class="comnHdng">How CBD Pleasure Gel Works To</p>
               <p class="comn-subHdng">Reduce Pain &amp; Increase Pleasure</p>
               <img src="images/gel-science-banner-mob.jpg" class="science-banner-mob forMob">
               <p class="comn-para">The CBD Pleasure Gel from Ultimate CBD Labs is infused with a blend of ingredients that stimulate sexual arousal, improve natural lubrication and reduce skin inflammation. This helps with pain reduction, longer sexual encounters, and elevated pleasure levels. </p>
               <ul class="cbd-work-list">
                  <li>
                     <div class="steps">Step 1</div>
                     <span>Stimulates Natural Lubrication</span>
                     <p>Increased lubrication has been linked to reduced pain during and after sex, while also heightening sensation for women.</p>
                  </li>
                  <li>
                     <div class="steps">Step 2</div>
                     <span>Reduces Inflammation</span>
                     <p>Herbal extracts soothe and cool the skin to enhance sexual comfort which leads to longer and more pleasurable encounters.</p>
                  </li>
                  <li>
                     <div class="steps">Step 3</div>
                     <span>Boosts Blood Flow To Sexual Organs</span>
                     <p>Aids in erection quality and frequency, improving sexual confidence, stamina, staying power and performance in men.</p>
                  </li>
                  <li>
                     <div class="steps">Step 4</div>
                     <span>Decreases Pain Signaling</span>
                     <p>Reduced pain signaling also improves comfort and relaxation during sex, that enables longer sexual encounters for both men &amp; women.</p>
                  </li>
               </ul>
            </div>
         </div>
      </div>
      <div class="dtls-strip gel-strip1">
         <div class="container">
            <div class="strp-rgt strp-rgt-lst">
               <p class="strp-txt1">Supercharge You Sex Life Today</p>
               <p class="strp-txt2 gel-strp-txt2">The only CBD Enriched Lubricant that can be used by men, women or couples to boost sexual comfort, performance &amp; pleasure.</p>
               <a href="cart.php" class="learn-btn">Order Now <img src="images/learn-more-arw.png"></a>
            </div>
         </div>
      </div>
      <div class="deailsSec4">
         <div class="container">
            <p class="comnHdng">100% All Natural Ingredient Matrix</p>
            <p class="comn-subHdng detls-subHdng">For Comfort, Pleasure & Performance</p>
            <ul class="brand-logo-box">
               <li>
                  <img src="images/gel-ingdnt1.jpg" class="gel-ingdnt-img">
                  <span>CBD Hemp<br>Extract</span>
                  <div class="clearall"></div>
                  <div class="bdr"></div>
                  <p>Reduces inflammation & pain signaling for greater comfort during sex.</p>
               </li>
               <li>
                  <img src="images/gel-ingdnt2.jpg" class="gel-ingdnt-img">
                  <span>Honeysuckle<br>Flower Extract</span>
                  <div class="clearall"></div>
                  <div class="bdr"></div>
                  <p>Soothes the skin to stimulates heightened sensation and arousal.</p>
               </li>
               <li>
                  <img src="images/gel-ingdnt3.jpg" class="gel-ingdnt-img">
                  <span>Ginger<br>Extract</span>
                  <div class="clearall"></div>
                  <div class="bdr"></div>
                  <p>Reduces skin inflammation, to reduce pain during & after sex.</p>
               </li>
               <li>
                  <img src="images/gel-ingdnt4.jpg" class="gel-ingdnt-img">
                  <span>Olive Leaf<br>Extract</span>
                  <div class="clearall"></div>
                  <div class="bdr"></div>
                  <p>Helps with natural lubrication in women & to increase circulation for men.</p>
               </li>
            </ul>
         </div>
      </div>
      <div class="dtls-strip gel-strip2">
         <div class="container">
            <div class="strp-left">
               <p class="strp-txt1">Order Your Bottle of<br> CBD Pleasure Gel Today</p>
               <p class="strp-txt2">Take your sex life to the next level and enjoy sexual encounters that are satisfying and intense.</p>
               <a href="cart.php" class="learn-btn">Order Now <img src="images/learn-more-arw.png"></a>
            </div>
         </div>
      </div>
      <div class="sectionFour">
         <div class="container">
            <p class="comnHdng">The Ultimate CBD Labs Promise</p>
            <p class="comn-subHdng detls-subHdng">Ethical Extraction, Powerful Formulation, & Quality Packaging</p>
            <ul class="s4-list">
               <li>
                  <img src="images/seal1.png">
                  100% Organic 
               </li>
               <li>
                  <img src="images/seal2.png">
                  Made In USA
               </li>
               <li>
                  <img src="images/seal3.png">
                  FDA Registered 
               </li>
               <li>
                  <img src="images/seal4.png">
                  No THC 
               </li>
               <li>
                  <img src="images/seal5.png">
                  Gluten Free 
               </li>
               <li>
                  <img src="images/seal6.png">
                  Vegan Friendly 
               </li>
            </ul>
            <div class="moneybk-Dv">
               <img src="images/money-bk-seal.png" class="money-bk-seal">
               <span>30 Days Money Back Guarantee</span>
               <p>At Ultimate CBD Labs we are committed to delivering quality products to help you get the results that you deserve. However, in the unlikely case that you are not happy with the results, just return the product within 30 days for a full refund.<br><br>The guarantee is only valid when Ultimate CBD Labs is purchased directly from the manufacturer.</p>
            </div>
         </div>
      </div>
      <div class="deailsSec5">
         <div class="container">
            <p class="comnHdng">Real People. Real Results</p>
            <p class="comn-subHdng detls-subHdng">Success Stories of Ultimate CBD Labs Customers</p>
            <div class="result-box">
               <div class="testi-row">
                  <span>M</span>
                  <h3>Greater pleasure & comfort!</h3>
                  <p>I have been using this gel for about 2 months and I can confidently say it has completely eliminated the pain that I used to feel during and after sexual intercourse. I am finally able to enjoy better sex with my boyfriend.</p>
                  <div class="reslt-name"><img src="images/star.png" alt="Star Rating" class="rvw-star">by MK &nbsp;  <img src="images/verified.png" alt="Verified Customer" class="verify"></div>
               </div>
               <div class="testi-row">
                  <span>A</span>
                  <h3>Both my wife and I love it!</h3>
                  <p>We found this online and ordered it. It arrived in 4 days promptly and safely via post. The Gel is like none other that we have used from the "popular brands", apart from the lubrication, it really elevates stimulation and arousal to a whole new level! Highly recommended</p>
                  <div class="reslt-name"><img src="images/star.png" alt="Star Rating" class="rvw-star">by Anonymous &nbsp;  <img src="images/verified.png" alt="Verified Customer" class="verify"></div>
               </div>
               <div class="testi-row">
                  <span>C</span>
                  <h3>Complete Orgasm Amplifier</h3>
                  <p>I am pretty hooked to using this gel with my sex toys, not only does it enhance comfort but also helps me enjoy truly earth-shattering orgasms! Unlike other lubes, no redness, no infections & no stains.</p>
                  <div class="reslt-name"><img src="images/star.png" alt="Star Rating" class="rvw-star">Chelsie K. &nbsp;  <img src="images/verified.png" alt="Verified Cutomer" class="verify"></div>
               </div>
               <div class="testi-row">
                  <span>J</span>
                  <h3>I can last all night!</h3>
                  <p>Just a few drops to lube up and my libido and staying power skyrocket, allowing me to have harder erections, more stamina and pleasure my wife like never before. More than me, my wife keeps it handy on the nightstand.</p>
                  <div class="reslt-name"><img src="images/star.png" alt="Star Rating" class="rvw-star">JH &nbsp;  <img src="images/verified.png" alt="Verified Customer" class="verify"></div>
               </div>
            </div>
         </div>
      </div>
      <div class="dtls-strip gel-strip3">
         <div class="container">
            <div class="strp-rgt strp-rgt-lst">
               <p class="strp-txt1">Supercharge You Sex Life Today</p>
               <p class="strp-txt2 gel-strp-txt2">The only CBD Enriched Lubricant that can be used by men, women or couples to boost sexual comfort, performance &amp; pleasure.</p>
               <a href="cart.php" class="learn-btn">Order Now <img src="images/learn-more-arw.png"></a>
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