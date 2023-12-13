<!-- Product.php -->

<?php

class Product {
    public $productId;
    public $name;
    public $price;

    public function displayInfo() {
        echo "Product ID: $this->productId\n";
        echo "Name: $this->name\n";
        echo "Price: $this->price\n";
    }
}
