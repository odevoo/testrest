<?php

namespace Controller;

use \W\Controller\Controller;
use \Model\ProductModel;
use \Model\CategoryModel;
use \Model\NewsModel;

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
        debug($_FILES);
        debug($_POST);
        $product = new ProductModel ($_POST['category'], $_POST['name'], 'upload/'.$_FILES["file"]["name"], $_POST['desc'], $_POST['price'], $_POST['quantity'], $_POST['streetNumber'], $_POST['address'], $_POST['city'], $_POST['zip'], $_POST['lat'], $_POST['lng']);

         move_uploaded_file($_FILES["file"]["tmp_name"], "../public/assets/upload/" . $_FILES["file"]["name"]);

        $product->insert(['id_categorie' => $product->getIdcategory(), 'name' => $product->getName(), 'img' => $product->getImg(), 'description' => $product->getDescription(), 'price' => $product->getPrice(), 'quantity' => $product->getQuantity(), 'streetnumber' => $product->getStreetNumber(), 'address' => $product->getAddress(), 'city' => $product->getCity(), 'postcode' => $product->getPostalCode(), 'lng' => $product->getLng(), 'lat' => $product->getLat()]);
    }
    public function process_news()
    {
        debug($_FILES);
        debug($_POST);
        $news = new NewsModel($_POST['title'], 'upload/'.$_FILES["file"]["name"], $_POST['content']);
        move_uploaded_file($_FILES["file"]["tmp_name"], "../public/assets/upload/" . $_FILES["file"]["name"]);
        $news->insert(['title' => $news->getTitle(), 'img' => $news->getImg(), 'content' => $news->getContent()]);
        // $product = new ProductModel ($_POST['category'], $_POST['name'], 'upload/'.$newfilename, $_POST['desc'], $_POST['price'], $_POST['quantity'], $_POST['streetNumber'], $_POST['address'], $_POST['city'], $_POST['zip'], $_POST['lat'], $_POST['lng']);

        //  move_uploaded_file($_FILES["file"]["tmp_name"], "../public/assets/upload/" . $newfilename);

        // $product->insert(['id_categorie' => $product->getIdcategory(), 'name' => $product->getName(), 'img' => $product->getImg(), 'description' => $product->getDescription(), 'price' => $product->getPrice(), 'quantity' => $product->getQuantity(), 'streetnumber' => $product->getStreetNumber(), 'address' => $product->getAddress(), 'city' => $product->getCity(), 'postcode' => $product->getPostalCode(), 'lng' => $product->getLng(), 'lat' => $product->getLat()]);
    }

}