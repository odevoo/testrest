<?php

namespace Controller;

use \W\Controller\Controller;
use \Model\ProductModel;
use \Model\CategoryModel;

class AdminController extends Controller
{

    /**
     * Page d'accueil par défaut
     */
    
    public function admin()
    {
        $this->show('admin/admin');
    }

    public function settings()
    {   
        $categories = new CategoryModel;
        $categoriesdata = $categories->findAll();
        $this->show('admin/settings', ['categories' => $categoriesdata]);
    }

    public function process_settings()
    {
        debug($_POST);
        $product = new ProductModel ($_POST['category'], $_POST['name'], $_POST['img'], $_POST['desc'], $_POST['price'], $_POST['quantity'], $_POST['streetNumber'], $_POST['address'], $_POST['city'], $_POST['zip'], $_POST['lat'], $_POST['lng']);

        $product->insert(['id_categorie' => $product->getIdcategory(), 'name' => $product->getName(), 'img' => $product->getImg(), 'description' => $product->getDescription(), 'quantity' => $product->getQuantity(), 'streetnumber' => $product->getStreetNumber(), 'address' => $product->getAddress(), 'city' => $product->getCity(), 'postcode' => $product->getPostalCode(), 'lng' => $product->getLng(), 'lat' => $product->getLat()]);
    }

}