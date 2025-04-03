<?php

namespace app\models;

class Product extends Model {

    public function searchProducts($category) {
        $query = "SELECT * FROM products WHERE category LIKE :category";
        $data = [':category' => "%" . $category . "%"];
        return $this->query($query, $data);
    }
}
?>
