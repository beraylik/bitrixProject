
<?if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
?>
<?use Bitrix\Main\Localization\Loc;
    use Bitrix\Main\Page\Asset;
    Loc::loadMessages(__FILE__);
?>

<!DOCTYPE HTML>
<html lang="<?=LANGUAGE_ID?>">
<head>
    <?$APPLICATION->ShowTitle();?>
    <?$APPLICATION->ShowHead();?>

    <?Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/_include/js/jquery.js", true);?>
    <?Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/_include/js/modernizr.custom.28468.js", true);?>
    <?Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/_include/js/jquery.cslider.js", true);?>
    <?Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/_include/js/owl.carousel.js", true);?>
    <?Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/_include/js/move-top.js", true);?>
    <?Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/_include/js/easing.js", true);?>

    <?Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."template_styles.css");?>
    <?Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/_include/css/owl.carousel.css");?>
    <?Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/_include/css/slider.css");?>
    <?Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/_include/css/producctviewgallery.css");?>

    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700' rel='stylesheet' type='text/css'>


    <script type="text/javascript">
        $(function() {
            $('#da-slider').cslider();
        });
    </script>

    <script>
        $(document).ready(function() {
            $("#owl-demo").owlCarousel({
                items : 4,
                lazyLoad : true,
                autoPlay : true,
                navigation : true,
                navigationText : ["",""],
                rewindNav : false,
                scrollPerPage : false,
                pagination : false,
                paginationNumbers: false,
            });

        });
    </script>

    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
            });
        });
    </script>
</head>
<body>
<?$APPLICATION->ShowPanel();?>
<!-- start header -->
<div class="header_bg">
    <div class="wrap">
        <div class="header">
            <div class="logo">
                <?if(!CSite::InDir('/')):?><a href="/"><?endif;?>
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "COMPONENT_TEMPLATE" => ".default",
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => SITE_TEMPLATE_PATH."/include_areas/logo.php"
                        )
                    );?>
                <?if(!CSite::InDir('/')):?></a><?endif;?>
            </div>
            <div class="h_icon">
                <ul class="icon1 sub-icon1">
                    <li><a class="active-icon c1" href="#"><i>$300</i></a>
                        <ul class="sub-icon1 list">
                            <li><h3>shopping cart empty</h3><a href=""></a></li>
                            <li><p>if items in your wishlit are missing, <a href="contact.html">contact us</a> to view them</p></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="h_search">
                <form>
                    <input type="text" value="">
                    <input type="submit" value="">
                </form>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
<div class="header_btm">
    <div class="wrap">
        <div class="header_sub">
            <div class="h_menu">
                <ul>
                    <li class="active"><a href="index.html">Home</a></li> |
                    <li><a href="sale.html">sale</a></li> |
                    <li><a href="handbags.html">handbags</a></li> |
                    <li><a href="accessories.html">accessories</a></li> |
                    <li><a href="wallets.html">wallets</a></li> |
                    <li><a href="sale.html">sale</a></li> |
                    <li><a href="index.html">mens store</a></li> |
                    <li><a href="shoes.html">shoes</a></li> |
                    <li><a href="sale.html">vintage</a></li> |
                    <li><a href="service.html">services</a></li> |
                    <li><a href="contact.html">Contact us</a></li>
                </ul>
            </div>
            <div class="top-nav">
                <nav class="nav">
                    <a href="#" id="w3-menu-trigger"> </a>
                    <ul class="nav-list" style="">
                        <li class="nav-item"><a class="active" href="index.html">Home</a></li>
                        <li class="nav-item"><a href="sale.html">Sale</a></li>
                        <li class="nav-item"><a href="handbags.html">Handbags</a></li>
                        <li class="nav-item"><a href="accessories.html">Accessories</a></li>
                        <li class="nav-item"><a href="shoes.html">Shoes</a></li>
                        <li class="nav-item"><a href="service.html">Services</a></li>
                        <li class="nav-item"><a href="contact.html">Contact</a></li>
                    </ul>
                </nav>
                <div class="search_box">
                    <form>
                        <input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}"><input type="submit" value="">
                    </form>
                </div>
                <div class="clear"> </div>
                <script src="_include/js/responsive.menu.js"></script>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
<!-- start slider -->
<div id="da-slider" class="da-slider">
    <div class="da-slide">
        <h2>welcome to aditii</h2>
        <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane.</p>
        <a href="details.html" class="da-link">shop now</a>
        <div class="da-img"><img src="<?=SITE_TEMPLATE_PATH;?>/images/slider1.png" alt="image01" /></div>
    </div>
    <div class="da-slide">
        <h2>Easy management</h2>
        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
        <a href="details.html" class="da-link">shop now</a>
        <div class="da-img"><img src="<?=SITE_TEMPLATE_PATH;?>/images/slider2.png" alt="image01" /></div>
    </div>
    <div class="da-slide">
        <h2>Revolution</h2>
        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
        <a href="details.html" class="da-link">shop now</a>
        <div class="da-img"><img src="<?=SITE_TEMPLATE_PATH;?>/images/slider3.png" alt="image01" /></div>
    </div>
    <div class="da-slide">
        <h2>Quality Control</h2>
        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
        <a href="details.html" class="da-link">shop now</a>
        <div class="da-img"><img src="<?=SITE_TEMPLATE_PATH;?>/images/slider4.png" alt="image01" /></div>
    </div>
    <nav class="da-arrows">
        <span class="da-arrows-prev"></span>
        <span class="da-arrows-next"></span>
    </nav>
</div>
</div>
<!----start-cursual---->
<div class="wrap">
    <!----start-img-cursual---->
    <div id="owl-demo" class="owl-carousel">
        <div class="item" onclick="location.href='details.html';">
            <div class="cau_left">
                <img class="lazyOwl" data-src="<?=SITE_TEMPLATE_PATH;?>/images/c1.jpg" alt="Lazy Owl Image">
            </div>
            <div class="cau_left">
                <h4><a href="details.html">branded shoes</a></h4>
                <a href="details.html" class="btn">shop</a>
            </div>
        </div>
        <div class="item" onclick="location.href='details.html';">
            <div class="cau_left">
                <img class="lazyOwl" data-src="<?=SITE_TEMPLATE_PATH;?>/images/c2.jpg" alt="Lazy Owl Image">
            </div>
            <div class="cau_left">
                <h4><a href="details.html">branded tees</a></h4>
                <a href="details.html" class="btn">shop</a>
            </div>
        </div>
        <div class="item" onclick="location.href='details.html';">
            <div class="cau_left">
                <img class="lazyOwl" data-src="<?=SITE_TEMPLATE_PATH;?>/images/c3.jpg" alt="Lazy Owl Image">
            </div>
            <div class="cau_left">
                <h4><a href="details.html">branded jeens</a></h4>
                <a href="details.html" class="btn">shop</a>
            </div>
        </div>
        <div class="item" onclick="location.href='details.html';">
            <div class="cau_left">
                <img class="lazyOwl" data-src="<?=SITE_TEMPLATE_PATH;?>/images/c2.jpg" alt="Lazy Owl Image">
            </div>
            <div class="cau_left">
                <h4><a href="details.html">branded tees</a></h4>
                <a href="details.html" class="btn">shop</a>
            </div>
        </div>
        <div class="item" onclick="location.href='details.html';">
            <div class="cau_left">
                <img class="lazyOwl" data-src="<?=SITE_TEMPLATE_PATH;?>/images/c1.jpg" alt="Lazy Owl Image">
            </div>
            <div class="cau_left">
                <h4><a href="details.html">branded shoes</a></h4>
                <a href="details.html" class="btn">shop</a>
            </div>
        </div>
        <div class="item" onclick="location.href='details.html';">
            <div class="cau_left">
                <img class="lazyOwl" data-src="<?=SITE_TEMPLATE_PATH;?>/images/c2.jpg" alt="Lazy Owl Image">
            </div>
            <div class="cau_left">
                <h4><a href="details.html">branded tees</a></h4>
                <a href="details.html" class="btn">shop</a>
            </div>
        </div>
        <div class="item" onclick="location.href='details.html';">
            <div class="cau_left">
                <img class="lazyOwl" data-src="<?=SITE_TEMPLATE_PATH;?>/images/c3.jpg" alt="Lazy Owl Image">
            </div>
            <div class="cau_left">
                <h4><a href="details.html">branded jeens</a></h4>
                <a href="details.html" class="btn">shop</a>
            </div>
        </div>
    </div>
    <!----//End-img-cursual---->
</div>
