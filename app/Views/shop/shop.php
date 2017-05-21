<?php $this->layout('layout', ['title' => 'Boutique']) ?>

<?php $this->start('main_content') ?>
<?php debug($categories) ?>
<?php //debug($products) ?>
<div class="container">

    <div class="row">
        <div class="col-md-1">

        </div>
        <?php foreach ($categories as $categorie): ?>
            <div class="col-md-2">
                <a href="<?= $this->url('shop_by_category',["id" => $categorie['id_categorie']]); ?>">
                <button class="btn btn-lg btn-primary"><?php echo $categorie['name'] ?></button></a>
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
                    <p><?php echo $product['description'] ?></p>
                </div>
            </div>
        </div>


    <?php endforeach; ?>
</div>
<?php endforeach; ?>


</div>
<?php $this->stop('main_content') ?>