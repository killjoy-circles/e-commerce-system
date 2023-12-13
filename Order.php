<!-- Order.php -->

<?php

class Order {
    public $orderId;
    public $product;
    public $customer;
    public $quantity;

    public function displayInfo() {
        echo "Order ID: $this->orderId\n";
        $this->product->displayInfo();
        $this->customer->displayInfo();
        echo "Quantity: $this->quantity\n";
    }
}
