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
  <!-- MODAL -->

  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Information importante</h4>
        </div>
        <div class="modal-body">
            Votre boutique & restaurant Chez Victor est actuellement en travaux.<br> 
            <strong>Ouverture prévue courant septembre 2017.</strong>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
        </div>
    </div>
</div>
</div>

<!-- END MODAL -->


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
                   <!--  <li><a href="<?= $this->url('shop_shop');?>">La Boutique</a></li> -->
                    <li><a href="#carteancre">Le Restaurant</a></li>

                    <!-- <li><a href="#">News</a></li> -->
                    <li><a href="#info">informations</a></li>
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
                <i class="ion-email"><img class="iconimg" src="<?= $this->assetUrl('images/envelope.png') ?>" alt=""></i>
                <div class="overflow-hidden">
                    <h4>Email</h4>
                    <p class="lead">
                        <a id="mailto" href="mailto:chezvictor75@gmail.com" title="">chezvictor75@gmail.com</a>
                    </p>
                </div>
            </div>
            <div class="col-sm-4 margin-b-30">
                <i class="ion-email"><img class="iconimg" src="<?= $this->assetUrl('images/phone-call.png') ?>" alt=""></i>
                <div class="overflow-hidden">
                    <h4>Téléphone</h4>
                    <p class="lead">
                        06 11 99 50 52
                    </p>
                </div>
            </div>
            <div class="col-sm-4 margin-b-30">
                <i class="ion-map"><img class="iconimg" src="<?= $this->assetUrl('images/house.png') ?>" alt=""></i>
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

            <div class="col-md-4 margin-b-30">
                <h3>Nos partenaires</h3>
                <p>
                    Votre magasin & restaurant Chez Victor est engagé et soutenu par:</p>
                    <p><strong>CERVIA</strong> (Centre Régional de Valorisation et d'Innovation Agricole et Alimentaire)</p>
                    <img class="img-partner img-responsive" src="<?= $this->assetUrl('images/logo_CERVIA.jpg') ?>" alt="">
                    <br>
                    <p><strong>Bon pour le climat</strong></p>
                    <img class="img-partner img-responsive" src="<?= $this->assetUrl('images/Logo-Bon-pour-le-climat.jpg') ?>" alt="">
                </div>
                <div class="col-md-4 margin-b-30">
                    <h3>Nos horaires</h3>
                    <p><span class="text-color">Lundi: </span>Fermé</p>
                    <p><span class="text-color">Mardi:</span> 12h - 20h</p>
                    <p><span class="text-color">Mercredi :</span> 12h - 20h</p>
                    <p><span class="text-color">Jeudi:</span> 12h - 20h</p>
                    <p><span class="text-color">Vendredi:</span> 12h - 20h</p>
                    <p><span class="text-color">Samedi:</span> 10h - 15h</p>
                    <p><span class="text-color">Dimanche:</span>Fermé</p>
                </div>
                <div class="col-md-4 margin-b-30">
                    <h3>Nous suivre</h3>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-1 icondiv">
                                <p><a href="https://www.facebook.com/chezvictor75/" target="_blank"><img class="" src="<?= $this->assetUrl('images/facebook.png') ?>" alt=""></a></p>
                            </div>
                            <div class="col-sm-1 icondiv">
                                <p><a href="https://www.instagram.com/chezvictor75/" target="_blank"><img class="" src="<?= $this->assetUrl('images/instagram.png') ?>" alt=""></a></p>
                            </div>
                            <div class="col-sm-1 icondiv">
                                <p><a href="https://twitter.com/chezvictor75" target="_blank"><img class="" src="<?= $this->assetUrl('images/twitter.png') ?>" alt=""></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-12 text-center">
<!--                         <ul class="list-inline f-social">
                            <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                            <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                            <li><a href="#"><i class="ion-social-linkedin"></i></a></li>
                            <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                            <li><a href="#"><i class="ion-social-instagram"></i></a></li>
                        </ul> -->
                        <span>&copy; Copyright 2017. Chez Victor <a href="<?= $this->url('mention') ?>" title="">Mentions légales</a></span>
                    </div>
                </div>
            </div>
        </footer>

        <script type="text/javascript" src="<?= $this->assetUrl('js/prochainement.js') ?>"></script>
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