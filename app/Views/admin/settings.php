<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <meta charset="UTF-8">
    <title>Settings</title>
</head>
<body>
    <div class="container">
        <div class="panel panel-default">
          <div class="panel-heading">
              <h3 class="panel-title">Ajout de produit</h3>
          </div>
          <div class="panel-body">
            <div class="container-fluid">

                <form action="<?= $this->url('admin_process_settings') ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="name">Nom</label>
                        <input class="form-control"  type="text" name="name" id="name" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="img">Image</label>
                        <input class="form-control"  type="file" name="file" id="img" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="desc">Description</label>
                        <textarea class="form-control" name="desc" id="desc" placeholder="" rows="10"></textarea>
                    </div>
                    <select class="form-control" name="category" id="category">
                        <option selected disabled value="">Sélectionnez une categorie</option>
                        <?php foreach ($categories as $category): ?>
                            <option value="<?= $category['id_categorie'] ?>"><?= $category['name'] ?></option>}
                        <?php endforeach; ?>
                    </select>
                    <div class="form-group">
                        <label for="price">Prix</label>
                        <input class="form-control"  type="text" name="price" id="price" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="quantity">Quantité</label>
                        <input class="form-control"  type="text" name="quantity" id="quantity" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="address">Adresse</label>
                        <input type="text" id="autocomplete"  onFocus="geolocate()" class="autocomplete form-control" name="" value="" placeholder="Adresse">
                    </div>
                    <input type="hidden" name="streetNumber" id="street_number"  value="">
                    <input type="hidden" name="address" id="route"  value="">
                    <input type="hidden" name="city" id="locality"  value="">
                    <input type="hidden" name="zip" id="postal_code"  value="">
                    <input type="hidden" name="lat" id="lat"  value="">
                    <input type="hidden" name="lng" id="lng"  value="">
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" name="btn" value="Ajouter produit">
                    </div>
                </form>

            </div>
        </div>
    </div>
            <div class="panel panel-default">
          <div class="panel-heading">
              <h3 class="panel-title">Ajout de news</h3>
          </div>
          <div class="panel-body">
            <div class="container-fluid">

                <form action="<?= $this->url('admin_process_news') ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="title">Titre</label>
                        <input class="form-control"  type="text" name="title" id="title" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="img">Image</label>
                        <input class="form-control"  type="file" name="file" id="img" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="content">Contenu</label>
                        <textarea class="form-control" name="content" id="content" placeholder="" rows="10"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" name="btn" value="Ajouter news">
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>


<script type="text/javascript" src="<?= $this->assetUrl('js/googleplace.js') ?>"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDVvV3H3-rcwoX6X-Jq1PXMOhiF-6EyO-E&signed_in=true&libraries=places&callback=initAutocomplete"
async defer></script>
</body>
</html>