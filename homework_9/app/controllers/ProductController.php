<?php

namespace app\controllers;

use app\models\Product;

class ProductController {

    // Fetch all products for API or view
    public function getAllProducts() {
        $product = new Product();
        $products = $product->getAllProducts();
        echo json_encode($products);  // For API response
    }

    // Fetch a specific product by ID
    public function getProductByID($id) {
        $product = new Product();
        $productDetails = $product->getProductById($id);
        echo json_encode($productDetails);  // For API response
    }

    // Show all products in the frontend view
    public function productsView() {
        $product = new Product();
        $products = $product->getAllProducts();
        include '../public/views/homework9.html';  // Pass products to the view
    }

    // Show a single product's details in the frontend view
    public function productDetailsView($id) {
        $product = new Product();
        $productDetails = $product->getProductById($id);
        include '../public/views/productDetails.php';  // Product details page
    }
}
?>
