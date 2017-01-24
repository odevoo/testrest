<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title><?= $this->e($title) ?></title>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="<?= $this->assetUrl('css/style.css') ?>">
	<link rel="stylesheet" href="<?= $this->assetUrl('css/flexslider.css') ?>">
</head>
<body>
		


        <header class="header header-top-transparent">
            <!--top bar-->
            <div class="top-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 hidden-xs">
                            <ul class="list-inline">
                                <li><a href="javascript:void(0)"><i class="ion-ios-telephone"></i> +01 1800 495 593</a></li>
                                <li><a href="javascript:void(0)"><i class="ion-email"></i> support@resto.com</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-6 text-right">
                            <ul class="list-inline level-2">
                                <!--<li class="b-table"><a href="#" class=" waves-float waves-button">Book a table</a></li>
                                <li class="lang"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Lang <i class="ion-ios-arrow-down"></i></a>
                                    <ul class="dropdown-menu lang-dropdown">
                                        <li><a href="javascript:void(0)"><img class="flag" src="assets/images/spanish.png" alt="Spanish">Spanish</a></li>
                                        <li><a href="javascript:void(0)"><img class="flag" src="assets/images/italy.png" alt="Italian">Italian</a></li>
                                        <li><a href="javascript:void(0)"><img class="flag" src="assets/images/german.png" alt="German">German</a></li>
                                        <li><a href="javascript:void(0)"><img class="flag" src="assets/images/fr.png" alt="French">French</a></li>
                                        <li><a href="javascript:void(0)"><span><img class="flag" src="assets/images/usa-flag.png" alt="English">English</span></a></li>
                                        <li><a href="javascript:void(0)"><img class="flag" src="assets/images/jp.png" alt="Japanise">Japanise</a></li>
                                        <li><a href="javascript:void(0)"><img class="flag" src="assets/images/in.png" alt="Hindi">Hindi</a></li>
                                    </ul>
                                </li>
                            </ul>-->
                        </div>
                    </div>
                </div>
            </div>
            <!--end top bar-->
            <!--cart menu side panel-->
            <!--<aside id="cartNavmenu" class="navmenu navmenu-inverse navmenu-fixed-right offcanvas">
                <div class="cart-inner">
                    <h4>Your cart (3)</h4>
                    <hr>
                    <ul class="list-unstyled cart-list margin-b-30">
                        <li class="clearfix">
                            <div class="cart-thumb">
                                <a href="#">
                                    <img src="assets/images/img-1.jpg" alt="" class="img-responsive" width="90">
                                </a>
                            </div>
                            <div class="cart-content">
                                <span class="close"><i class="ion-close"></i></span>
                                <h5>Bonanaza family pack</h5>
                                <p><span class="price">$48.00</span>  x 2</p>
                            </div>
                        </li>
                        <li class="clearfix">
                            <div class="cart-thumb">
                                <a href="#">
                                    <img src="assets/images/img-2.jpg" alt="" class="img-responsive" width="90">
                                </a>
                            </div>
                            <div class="cart-content">
                                <span class="close"><i class="ion-close"></i></span>
                                <h5>Bonanaza family pack</h5>
                                <p><span class="price">$48.00</span>  x 2</p>
                            </div>
                        </li>
                        <li class="clearfix">
                            <div class="cart-thumb">
                                <a href="#">
                                    <img src="assets/images/img-3.jpg" alt="" class="img-responsive" width="90">
                                </a>
                            </div>
                            <div class="cart-content">
                                <span class="close"><i class="ion-close"></i></span>
                                <h5>Bonanaza family pack</h5>
                                <p><span class="price">$48.00</span>  x 2</p>
                            </div>
                        </li>
                        <li>
                            <div class="text-center">
                                <a href="shop-checkout.html" class="btn btn-default">Checkout</a>
                                <a href="shop-cart.html" class="btn btn-primary">View Cart</a>
                            </div>
                        </li>
                    </ul>                       
                </div>
            </aside>-->

            <!--main navigation-->
            <nav class="navbar navbar-default navbar-static-top sticky-header">
                <div class="container">

                    <!--cart icon-->
                    <div class="pull-right cart-nav">
                        <a href="javascript:void(0)" data-toggle="offcanvas" data-target="#cartNavmenu" data-canvas="body"><i class="ion-ios-cart"></i> <span class="badge">3</span></a>
                    </div>
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.html">

                            <img src="<?= $this->assetUrl('images/logo.png') ?>" alt="logo" class="logo-default">
                            <img src="<?= $this->assetUrl('images/logo.png') ?>" alt="logo" class="logo-scroll">

                        </a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown active">
                                <a href="#" class="dropdown-toggle js-activated" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Home <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="index.html">V1 - Default slider</a></li>
                                    <li><a href="index-video.html">V2 - Video background</a></li>
                                    <li><a href="index-parallax-static.html">V3 - parallax Static</a></li>                                   
                                    <li><a href="index-left-navbar.html">V4 - left navbar</a></li>
                                    <li><a href="index-right-navbar.html">V5 - right navbar</a></li>                                 
                                    <li><a href="index-boxed.html">V6 - Boxed version</a></li>
                                    <li><a href="one-page.html">V7 - One Page</a></li>
                                    <li class="dropdown-submenu">
                                        <a tabindex="-1" href="#">Menu Levels </a>
                                        <ul class="dropdown-menu">
                                            <li class="dropdown-submenu">
                                                <a tabindex="-1" href="#">menu level 2 </a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#"> menu level 3</a></li>
                                                    <li><a href="#"> menu level 3</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle js-activated" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Menu <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="menu-simple.html">Menu simple</a></li>
                                    <li><a href="menu-tiles.html">Menu tiles</a></li>
                                    <li><a href="menu-grid.html">Menu grid</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle js-activated" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="blog-rightsidebar.html">Right sidebar</a></li>
                                    <li><a href="blog-leftsidebar.html">Left sidebar</a></li>
                                    <li><a href="blog-masonry.html">Masonry</a></li>
                                    <li><a href="blog-fullwidth.html">Full width</a></li>
                                    <li><a href="blog-post.html">Single Page</a></li>
                                </ul>
                            </li>
                            <li><a href="reservation.html">Reservation</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle js-activated" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="gallery.html">Gallery</a></li>
                                    <li><a href="contact.html">Contact us</a></li>
                                    <li><a href="login-register.html">Login Register</a></li>
                                    <li><a href="page-full-width.html">Page Full Width</a></li>
                                    <li><a href="error-404.html">Error 404</a></li>
                                    <li><a href="page-left-sidebar.html">Page left sidebar</a></li>
                                    <li><a href="typography.html">Typography</a></li>
                                    <li><a href="elements.html">Eelements</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle js-activated" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Shop <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="shop-products.html">Products</a></li>
                                    <li><a href="shop-cart.html">Cart</a></li>
                                    <li><a href="shop-checkout.html">Checkout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div><!--/.container-fluid -->
            </nav>
        </header>





		<section>
			<?= $this->section('main_content') ?>
		</section>

		<footer>
		</footer>
	
	<script type="text/javascript" src="<?= $this->assetUrl('js/jquery.flexslider-min.js') ?>"></script>
	<script type="text/javascript" src="<?= $this->assetUrl('js/bootstrap-hover-dropdown.min.js') ?>"></script>
	<script type="text/javascript" src="<?= $this->assetUrl('js/jquery.countdown.min.js') ?>"></script>
	<script type="text/javascript" src="<?= $this->assetUrl('js/jquery.easing.min.js') ?>"></script>
	<script type="text/javascript" src="<?= $this->assetUrl('js/jquery.stellar.min.js') ?>"></script>
	<script type="text/javascript" src="<?= $this->assetUrl('js/jquery.sticky.js') ?>"></script>
	<script type="text/javascript" src="<?= $this->assetUrl('js/template-custom.js') ?>"></script>


	<!-- REVOLUTION -->

	<script type="text/javascript" src="<?= $this->assetUrl('revolution/js/jquery.themepunch.tools.min.js') ?>"></script>
        <script type="text/javascript" src="<?= $this->assetUrl('revolution/js/jquery.themepunch.revolution.min.js') ?>"></script>
        <script type="text/javascript" src="<?= $this->assetUrl('revolution/js/revolution.extension.video.min.js') ?>"></script>
        <script type="text/javascript" src="<?= $this->assetUrl('revolution/js/revolution.extension.slideanims.min.js') ?>"></script>
        <script type="text/javascript" src="<?= $this->assetUrl('revolution/js/revolution.extension.layeranimation.min.js') ?>"></script>
        <script type="text/javascript" src="<?= $this->assetUrl('revolution/js/revolution.extension.navigation.min.js') ?>"></script>
        <script type="text/javascript" src="<?= $this->assetUrl('revolution/js/revolution.extension.parallax.min.js') ?>"></script>
        <script>
            jQuery(document).ready(function () {
                jQuery("#slider1").revolution({
                    sliderType: "standard",
                    jsFileLocation: "../../revolution/js/",
                    sliderLayout: "fullscreen",
                    dottedOverlay: "none",
                    delay: 9000,
                    navigation: {
                        arrows: {enable: true}
                    },
                    parallax: {
                        type: "on",
                        levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 50, 55, 60, 65, 70, 75, 80, 85],
                        origo: "enterpoint",
                        speed: 400,
                        bgparallax: "on",
                        disable_onmobile: "off"
                    },
                    gridwidth: 1170,
                    gridheight: 600
                });
            });
        </script>

        <!-- END REVOLUTUION -->

</body>
</html>