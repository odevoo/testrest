<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title><?= $this->e($title) ?></title>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="<?= $this->assetUrl('css/style.css') ?>">
	<link rel="stylesheet" href="<?= $this->assetUrl('css/flexslider.css') ?>">
	<link rel="stylesheet" href="<?= $this->assetUrl('revolution/css/layers.css') ?>">
	<link rel="stylesheet" href="<?= $this->assetUrl('revolution/css/navigation.css') ?>">
	<link rel="stylesheet" href="<?= $this->assetUrl('revolution/css/settings.css') ?>">
</head>
<body>
		


        <header class="header header-top-transparent">
            

            <!--main navigation-->
            <nav class="navbar navbar-default navbar-static-top sticky-header">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="<?= $this->url('default_home');?>">

                            <img src="<?= $this->assetUrl('images/logo-blanc.png') ?>" alt="logo" class="logo-default logo img-responsive">
                            <img src="<?= $this->assetUrl('images/logo.png') ?>" alt="logo" class="logo-scroll logo img-responsive">

                        </a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="<?= $this->url('default_home');?>">Le Restaurant</a></li>
                            <li><a href="<?= $this->url('shop_shop');?>">La Boutique</a></li>
                            <!-- <li><a href="#">News</a></li> -->
                            <li><a href="<?= $this->url('default_home');?>">informations</a></li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div><!--/.container-fluid -->
            </nav>
        </header>





		<section>
			<?= $this->section('main_content') ?>
		</section>

 <div class="cta-skin contact-info">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 margin-b-30">
                        <i class="ion-email"></i>
                        <div class="overflow-hidden">
                            <h4>Email</h4>
                            <p class="lead">
                                chezvictor75@gmail.com
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-4 margin-b-30">
                        <i class="ion-email"></i>
                        <div class="overflow-hidden">
                            <h4>Telephone</h4>
                            <p class="lead">
                                01 01 01 01 01
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-4 margin-b-30">
                        <i class="ion-map"></i>
                        <div class="overflow-hidden">
                            <h4>Adresse</h4>
                            <p class="lead">
                                73 rue Pernety, 75014 Paris
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 margin-b-30">
                        <!-- <img class="margin-b-20" src="assets/images/logo-light.png" alt=""> -->
                        <p>
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                        </p>
                        <!-- <h5><a href="#">Read More...</a></h5> -->
                    </div>
                    <div class="col-md-3 margin-b-30">
                        <h3>Actualités récentes</h3>
                        <ul class="list-unstyled recent-post">
                            <li class="clearfix">
                                <a href="#">
                                   <!--  <img src="assets/images/a1.jpg" alt="" width="70"> -->
                                </a>
                                <div class="post-content">
                                    <h5><a href="#">Ouverture</a></h5>
                                    <span>1 Avril 2017</span>
                                </div>
                            </li>
                            <li class="clearfix">
                                <a href="#">
                                    <!-- <img src="assets/images/a2.jpg" alt="" width="70"> -->
                                </a>
                                <div class="post-content">
                                    <h5><a href="#">Nouvel arrivage</a></h5>
                                    <span>2 Avril 2017</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 margin-b-30">
                        <h3>Horaires</h3>
                        <p><span class="text-color">lundi: </span>8h - 18h</p>
                        <p><span class="text-color">Mardi:</span> 8h - 18h</p>
                        <p><span class="text-color">Mercredi :</span> 8h - 18h</p>
                        <p><span class="text-color">Jeudi:</span> 8h - 18h</p>
                        <p><span class="text-color">Vendredi:</span> 8h - 18h</p>
                        <p><span class="text-color">Samedi:</span> 8h - 18h</p>
                        <p><span class="text-color">Dimanche:</span> 8h - 18h</p>
                    </div>
                    <div class="col-md-3 margin-b-30">
                        <h3>Réseaux sociaux</h3>
                        <p class="lead">
                           <!--  Ipsum Street, Lorem Tower, MO, Columbia, 302012 -->
                        </p>
                        <!-- <p class="lead"><a href="#">+01 1800 100 1000</a></p>
                        <p><a href="#">info@resto.com</a></p> -->
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <ul class="list-inline f-social">
                            <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                            <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                            <li><a href="#"><i class="ion-social-linkedin"></i></a></li>
                            <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                            <li><a href="#"><i class="ion-social-instagram"></i></a></li>
                        </ul>
                        <span>&copy; Copyright 2017. Chez Victor</span>
                    </div>
                </div>
            </div>
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