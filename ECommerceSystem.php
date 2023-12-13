<!-- ECommerceSystem.php -->

<?php

// Include class files
require_once 'Product.php';
require_once 'Customer.php';
require_once 'Order.php';

// Create products
$product1 = new Product();
$product1->productId = 1;
$product1->name = "Laptop";
$product1->price = 999.99;

$product2 = new Product();
$product2->productId = 2;
$product2->name = "Smartphone";
$product2->price = 499.99;

// Create customers
$customer1 = new Customer();
$customer1->customerId = 101;
$customer1->name = "Alice";
$customer1->email = "alice@example.com";

$customer2 = new Customer();
$customer2->customerId = 102;
$customer2->name = "Bob";
$customer2->email = "bob@example.com";

// Create orders
$order1 = new Order();
$order1->orderId = 1001;
$order1->product = $product1;
$order1->customer = $customer1;
$order1->quantity = 2;

$order2 = new Order();
$order2->orderId = 1002;
$order2->product = $product2;
$order2->customer = $customer2;
$order2->quantity = 1;

// Display information
echo "Order Information:\n";
$order1->displayInfo();
echo "\n";
$order2->displayInfo();
