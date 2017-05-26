<?php

namespace Controller;

use \W\Controller\Controller;
use \Model\ProductModel;
use \Model\CategoryModel;

class ShopController extends Controller
{

    /**
     * Page d'accueil par défaut
     */
    
    public function showShop()
    {
        $categories = new CategoryModel;
        $categoriesdata = $categories->findAll();
        $product = new ProductModel;
        $productdata = $product->findAll();
        $this->show('shop/shop', ['categories' => $categoriesdata, 'products' => $productdata]);
    }

    public function shopBycategory($id){
        $categories = new CategoryModel;
        $categoriesdata = $categories->findAll();
        $product = new ProductModel;
        $productdata = $product->productsBycategory($id);
        $this->show('shop/shop', ['categories' => $categoriesdata, 'products' => $productdata]);
    }
    
    public function getAllProducts() {
        $product = new ProductModel;
        $productdata['data'] = $product->findAll();
        return $this->showJson($productdata);
    }

}