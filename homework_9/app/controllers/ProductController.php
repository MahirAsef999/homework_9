<?php

namespace app\controllers;

use app\models\Product;

class ProductController {

    
    public function getAllProducts() {
        $product = new Product();
        $products = $product->getAllProducts();
        echo json_encode($products);  
    }

    
    public function getProductByID($id) {
        $product = new Product();
        $productDetails = $product->getProductById($id);
        echo json_encode($productDetails);  
    }
  
    public function productsView() {
        $product = new Product();
        $products = $product->getAllProducts();
        include '../public/views/homework9.html';  
    }

    public function productDetailsView($id) {
        $product = new Product();
        $productDetails = $product->getProductById($id);
        include '../public/views/productDetails.php';  
    }
}
?>
