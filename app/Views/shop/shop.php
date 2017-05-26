<?php $this->layout('layout', ['title' => 'Boutique']) ?>

<?php $this->start('main_content') ?>
<?php //debug($categories) ?>
<?php //debug($products) ?>
<div style="height: 65px; background-color: black; margin-bottom: 50px;">

</div>
<br>
<h4 class="text-center">Tous les produits de Chez Victor ne sont pas présentés sur le site internet, venez les decouvrir en magasin!</h4>
<br>
<div class="container shop-container">

    <div class="row">
        <div  class="shop-cat shop-cat-all col-md-2 text-center">
           <a href="<?= $this->url('shop_shop');?>">
               <p class="">Tous les produits</p></a>
           </div>
           <?php foreach ($categories as $categorie): ?>
            <div  class="shop-cat col-md-2 text-center">
                <a href="<?= $this->url('shop_by_category',["id" => $categorie['id_categorie']]); ?>">
                    <p class=""><?php echo $categorie['name'] ?></p></a>
                </div>
            <?php endforeach ?>
        </div>

        <?php foreach (array_chunk($products, 3 , true) as $products) : ?>
            <div class="row">

                <?php
                foreach($products as $product) : ?>

                <div class="col-md-4 panel-product">

                    <div class="panel panel-default">
                      <div class="panel-heading">
                          <h3 class="panel-title"><?php echo $product['name'] ?></h3>
                      </div>
                      <div class="panel-body">
                        <img src="<?php echo $this->assetUrl($product['img']); ?>" class="img-responsive img-rounded img-product " alt="logo" />
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-8">
                                 <p><?php echo $product['description'] ?></p> 
                             </div>
                             <div class="col-md-4">
                                <p  class="text-right"><strong><?php echo $product['price']."€/".$product['quantity'] ?></strong></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    <?php endforeach; ?>
</div>
<?php endforeach; ?>
</div>
<div class="space-30"></div>

<div class="container">
    <h4 class="text-center">La carte des producteurs</h4>
    <div style="height:600px;width:100%;" id="js-map-container" class="map"></div>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDVvV3H3-rcwoX6X-Jq1PXMOhiF-6EyO-E"></script>
    <script type="text/javascript" src="<?= $this->assetUrl('js/googlemaps.js') ?>"></script>
    <div class="space-30"></div>
</div>
</div>


<?php $this->stop('main_content') ?>