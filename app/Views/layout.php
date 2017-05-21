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
                        <a class="navbar-brand" href="index.html">

                            <img src="<?= $this->assetUrl('images/logo.png') ?>" alt="logo" class="logo-default logo">
                            <img src="<?= $this->assetUrl('images/logo.png') ?>" alt="logo" class="logo-scroll logo">

                        </a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#">Le Restaurant</a></li>
                            <li><a href="<?= $this->url('shop_shop');?>">La Boutique</a></li>
                            <!-- <li><a href="#">News</a></li> -->
                            <li><a href="#">informations</a></li>
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