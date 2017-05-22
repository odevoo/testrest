<?php $this->layout('layout', ['title' => 'Boutique']) ?>

<?php $this->start('main_content') ?>
<?php //debug($categories) ?>
<?php //debug($products) ?>
<div style="height: 65px; background-color: black; margin-bottom: 50px;">
    
</div>
<div class="container">

    <div class="row">
        <div style="margin-bottom: 30px;" class="col-md-2 text-center">
             <a href="<?= $this->url('shop_shop');?>">
             <p class="">Tous les produits</p></a>
        </div>
        <?php foreach ($categories as $categorie): ?>
            <div style="margin-bottom: 30px;" class="col-md-2 text-center">
                <a href="<?= $this->url('shop_by_category',["id" => $categorie['id_categorie']]); ?>">
                <p class=""><?php echo $categorie['name'] ?></p></a>
            </div>
        <?php endforeach ?>
    </div>

    <?php foreach (array_chunk($products, 3 , true) as $products) : ?>
        <div class="row">

            <?php
            foreach($products as $product) : ?>

            <div class="col-md-4">
                
                <div class="panel panel-default">
                  <div class="panel-heading">
                  <h3 class="panel-title"><?php echo $product['name'] ?></h3>
                </div>
                <div class="panel-body">
                    <img src="<?php echo $this->assetUrl($product['img']); ?>" class="img-responsive img-rounded " alt="logo" />
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
<?php $this->stop('main_content') ?>