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

<title>Buy CBD Gummies Online | Hemp Extract Gummies | CBD Gummies For Pain</title>

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

        <a href="/">Home</a> > <a href="cbd-products.php">Products </a> > <span>CBD Gummies</span>

    </div>

</div>



<div class="deailsSec1">

	<div class="container">

    	<h1 class="prod-nameHdng forMob">CBD Gummies <span>300MG</span> <span class="prc">| &nbsp;<span class="one_price">$<?php echo $p_info[$pr1]['price']; ?></span> <span class="rec_price rec_price_ext">$<?php echo $p_info[$pr2]['price']; ?></span></span></h1>

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

        	<p class="prod-nameHdng hide-mob">CBD Gummies <span>300MG</span> <span class="prc">| &nbsp;<span class="one_price">$<?php echo $p_info[$pr1]['price']; ?></span> <span class="rec_price rec_price_ext">$<?php echo $p_info[$pr2]['price']; ?></span></span></p>

            <p class="prd-p1 hide-mob"><img src="images/stars.png" class="prd-stars" alt="START"></p>

            <p class="prd-p2">Gummy bear candies infused with essential cannabinoids extracted from pure hemp extract that offers a delicious way to get your daily dose of CBD.</p>
            <ul class="dtlsec-list">
                <li>Maximum Strength 300MG Formula</li>
                <li>Delicious Easy To Chew Gummies</li>
                <li>Reduces Stress & Anxiety</li>
                <li>Supports Healthy Sleep Patterns</li>
                <li>Alleviates Chronic Pains & Aches</li>
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

            	<img src="images/strp-icon1.png" alt="Available Without Doctor's Prescription">

                Available Without <br class="hide-mob"> Doctor's Prescription 

            </li>

            <li>

            	<img src="images/strp-icon4.png" alt="Clinically Proven Therapist Recommended">

                Clinically Proven <br> Therapist Recommended 

            </li>

            <li>

            	<img src="images/strp-icon2.png" alt="100% Legal In All 50 States In USA">

               100% Legal In <br class="hide-mob"> All 50 States In USA 

            </li>

            <li>

            	<img src="images/strp-icon3.png" alt="Certified Organic THC-Free Products">

                Certified Organic <br class="hide-mob"> THC-Free Products 

            </li>

        </ul>

    </div>

</div>



<div class="sectionOne">

	<div class="container">

    	<div class="s1-left">

        	<p class="comnHdng">Ultimate CBD Gummies</p>

            <p class="comn-subHdng">Delicious Flavors | Quick Action | High Potency</p>

            <img src="images/gummies-s1-img.png" alt="Ultimate CBD Gummies" class="s1-img forDesk">

            <img src="images/gummies-s1-img-mob.png" alt="Ultimate CBD Gummies" class="s1-img-mob forMob">

            <p class="comn-para"><b>Ultimate CBD Gummies</b> harnesses the therapeutic benefits of CBD, a safe & non-psychoactive compound found in hemp leaves. CBD has been found to have a positive impact on key body functions including neurological, physical & psychological.</p>

            <p class="comn-para"><b>Ultimate CBD Gummies made from 100% legal, safe & US grown and harvested hemp extract, to ensure high potency & maximum health benefits.</b></p>

            <ul class="s1-list">
            	<li><img src="images/prods1-icn11.png"><br>SIZE / VOLUME<br> <span>60 ml</span></li>
                <li><img src="images/prods1-icn2.png"><br>TOTAL CBD<br> <span>5000 mg</span></li>
                <li><img src="images/prods1-icn33.png"><br>DOSE / SERVING<br> <span>83.3 mg / ml</span></li>
            </ul>



                <a href="cart.php" class="learn-btn">Order Now <img src="images/learn-more-arw.png" alt="Order Now"></a>



            

        </div>

    </div>

</div>


<div class="deailsSec2">

	<div class="container">

    	<p class="comnHdng">Benefits Of Ultimate CBD Gummies</p>

        <p class="comn-subHdng detls-subHdng">Re-Discover The Joy Of Balanced Living With CBD </p>

        <div class="clearall"></div>

        <img src="images/gummies-prod2.png" alt="Buy CBD Gummies" class="cbd-oil-prod2 hide-mob">

        <img src="images/gummies-prod2-mob.png" class="cbd-oil-prod2-mob forMob" alt="Buy CBD Gummies">

        <div class="deailsSec2-rgt">

        	<ul>

            	<li>

                	<img src="images/dtls-s2-icon1.png" alt="Combats Body-Wide Inflammation">

                	<span>Combats Body-Wide Inflammation</span>

                    <p>Offers anti-oxidant & anti-inflammatory support to the body and its processes to support overall health and wellness.</p>

                </li>

                <li>

                	<img src="images/dtls-s2-icon2.png" alt="Reduces Stress & Anxiety">

                	<span>Reduces Stress & Anxiety</span>

                    <p>Promotes a feeling of deep relaxation by positively regulating mood patterns to reduce daily stress and anxiety.</p>

                </li>

                <li>

                	<img src="images/dtls-s2-icon3.png" alt="Improves Mental Clarity & Focus">

                	<span>Improves Mental Clarity & Focus</span>

                    <p>CBD's neuro-protective properties support cognitive health, improving memory recall, clarity, alertness & concentration.</p>

                </li>

                <li>

                	<img src="images/dtls-s2-icon4.png" alt="Reduces Chronic Pains & Aches">

                	<span>Reduces Chronic Pains & Aches</span>

                    
          <p>By reducing inflammation, supporting joint health & reducing pain-signalling, 
            <a href="https://www.ultimatecbdlabs.com/cbd-gummies.php">CBD Gummies</a> 
            helps you live-pain free & active.</p>

                </li>

            </ul>

        </div>

        <div class="clearall"></div>

        <a href="cart.php" class="learn-btn">Order Now <img src="images/learn-more-arw.png" alt="Order Now"></a>

    </div>

</div>


<div class="deailsSec3">

	<div class="container">

    	<div class="detls3-lft">

            <p class="comnHdng">The Science Behind CBD</p>

            <p class="comn-subHdng">Learn How CBD Gummies Works</p>

            <img src="images/science-banner-mob.jpg" class="science-banner-mob forMob" style="float:left; width:100%;" alt="Hemp Extract Gummies">

            <p class="comn-para">The endocannabinoid system (ECS) regulates everything from relaxation to eating, sleeping, inflammation and even cognitive function.<b>CBD has been medically proven to positively regulate your ECS addressing issues such as anxiety, insomnia, chronic pain, hypertension, and even cardiovascular issues.</b></p>

            <p class="cbd-workHdng">Ultimate CBD Gummies - Triple Action Formula</p>

            <ul class="cbd-work-list">

            	<li>

                	<div class="steps">Step 1</div>

                    <span>Stimulate Positive ECS Response</span>

                    <p>The cannabinoids positively regulate the ECS & anti-inflammatory response, offering psychological, physical & neurological benefits.</p>

                </li>

                <li>

                	<div class="steps">Step 2</div>

                    <span>Restores Balance & Wellness</span>

                    
          <p>Regular Ultimate <a href="https://www.nytimes.com/interactive/2019/05/14/magazine/cbd-cannabis-cure.html" target="_blank" rel="nofollow">CBD 
            Gummies</a> supplementation helps fill nutritional gaps and supports 
            overall health & wellness.</p>

                </li>

                <li>

                	<div class="steps">Step 3</div>

                    <span>Improves Overall Body Immunity</span>

                    <p>By interacting with the CB2 receptors, CBD helps support cells that boost immunity to prevent health ailments.</p>

                </li>

            </ul>

        </div>

    </div>

</div>



<div class="dtls-strip gummies-strip1">

	<div class="container">

    	<div class="strp-rgt">

        	<p class="strp-txt1">Order Your Bottle Of<br>Ultimate CBD Gummies</p>

            <p class="strp-txt2">Get ready to experience clinically proven benefits of CBD with the easy-to-use & effective tincture today!</p>

            <a href="cart.php" class="learn-btn">Order Now <img src="images/learn-more-arw.png" alt="Order Now"></a>

        </div>

    </div>

</div>



<div class="deailsSec4">

	<div class="container">

    	<p class="comnHdng">Why Choose Ultimate CBD Gummies</p>

        <p class="comn-subHdng detls-subHdng">Our Promise to Purity, Potency & Effectiveness</p>

        <ul class="brand-logo-box">

        	<li>

            	<img src="images/brand-seal1-300.png" alt="Maximum Strength Formula">

                <span>Maximum Strength<br> Formula</span>

                <div class="clearall"></div>

                <div class="bdr"></div>

                <p>Highest potency blend of 500 Mg CBD to ensure maximum health benefits.</p>

            </li>

            <li>

            	<img src="images/brand-seal2-gummies.png" alt="Delicious Flavor Easy To Take">

                <span>Delicious Flavor<br> Easy To Take</span>

                <div class="clearall"></div>

                <div class="bdr"></div>

                <p>The CBD infused gummies are delicious which make it easy to take in your daily routine.</p>

            </li>

            <li>

            	<img src="images/brand-seal3.png" alt="CO2 Extraction No THC / No High">

                <span>CO2 Extraction <br> No THC / No High</span>

                <div class="clearall"></div>

                <div class="bdr"></div>

                <p>Super-critical CO2 extraction filters all THC guaranteeing the benefits without the high.</p>

            </li>

            <li>

            	<img src="images/brand-seal4.png" alt="US Grown Organic Hemp">

                <span>US Grown<br> Organic Hemp</span>

                <div class="clearall"></div>

                <div class="bdr"></div>

                <p>Formulated with hemp extract thats free from pesticides, herbicides or chemicals.</p>

            </li>

        </ul>

    </div>

</div>



<div class="dtls-strip dtls-strip2">

	<div class="container">

    	<div class="strp-left">

        	<p class="strp-txt1">Experience A Balanced,<br> Active & Fuller Lifestyle Today</p>

            <p class="strp-txt2">CBD helps support sleep, relaxation & pain relief to help you live better!</p>

            <a href="cart.php" class="learn-btn">Order Now <img src="images/learn-more-arw.png" alt="Order Now"></a>

        </div>

    </div>

</div>



<div class="sectionFour">

	<div class="container">

    	<p class="comnHdng">The Ultimate CBD Labs Promise</p>

        <p class="comn-subHdng detls-subHdng">Ethical Extraction, Powerful Formulation, & Quality Packaging</p>

        <ul class="s4-list">

        	<li>

            	<img src="images/seal1.png" alt="100% Organic">

                100% Organic 

            </li>

            <li>

            	<img src="images/seal2.png" alt="Made In USA">

                Made In USA

            </li>

            <li>

            	<img src="images/seal3.png" alt="FDA Registered">

                FDA Registered 

            </li>

            <li>

            	<img src="images/seal4.png" alt="No THC">

                No THC 

            </li>

            <li>

            	<img src="images/seal5.png" alt="Gluten Free">

                Gluten Free 

            </li>

            <li>

            	<img src="images/seal6.png" alt="Vegan Friendly">

               	Vegan Friendly 

            </li>

        </ul>

        <div class="moneybk-Dv">

        	<img src="images/money-bk-seal.png" alt="30 Days Money Back Guarantee" class="money-bk-seal">

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

                <span>J</span>

                <p>The CBD gummies from Ultimate CBD Labs are my favorite. They are really delicious and easy to take - without being too chewy. Great product if you are looking for a tasty way of getting your daily dose of CBD.</p>

                <div class="reslt-name"><img src="images/star.png" alt="Star" class="rvw-star">Jade S. &nbsp;  <img src="images/verified.png" alt="Verified Customer" class="verify"></div>

            </div>

            <div class="testi-row">

                <span>D</span>

                <p>I am not very comfortable with capsules or oils so I decided to give the gummies a try and have been satisfied so far. It has helped me with my anxiety for sure while also helping me sleep better at night. The taste it great, not too sugary.</p>

                <div class="reslt-name"><img src="images/star.png" alt="Star" class="rvw-star">Delara  &nbsp;  <img src="images/verified.png" alt="Verified Customer" class="verify"></div>

            </div>

            <div class="testi-row">

                <span>C</span>

                <p>Purchased these because of the high amount of anxiety I have at times. Didn't even really think anything about my left shoulder pain but it eases that pain as well. Helps with anxiety, obviously wont get rid of anxiety but helps you manage it definitely. Recommended!</p>

                <div class="reslt-name"><img src="images/star.png" alt="Star" class="rvw-star">Chandler K.  &nbsp;  <img src="images/verified.png" alt="Verified Customer" class="verify"></div>

            </div>

            <div class="testi-row">

                <span>G</span>

                <p>These taste so good. Five stars for taste, four stars for effectiveness. Would definitely be ordering more.</p>

                <div class="reslt-name"><img src="images/star.png" alt="Star" class="rvw-star">George Allesi  &nbsp;  <img src="images/verified.png" alt="Verified Customer" class="verify"></div>

            </div>

        </div>

    </div>

</div>



<div class="dtls-strip dtls-strip3">

	<div class="container">

    	<div class="strp-rgt strp-rgt-lst">

        	<p class="strp-txt1">Order Your Bottle Of<br>Ultimate CBD Gummies</p>

            <p class="strp-txt2">Get ready to experience clinically proven benefits of CBD with the easy-to-use & effective tincture today!</p>

            <a href="cart.php" class="learn-btn">Order Now <img src="images/learn-more-arw.png" alt="Order Now"></a>

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

