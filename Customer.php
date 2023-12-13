<!-- Customer.php -->

<?php

class Customer {
    public $customerId;
    public $name;
    public $email;

    public function displayInfo() {
        echo "Customer ID: $this->customerId\n";
        echo "Name: $this->name\n";
        echo "Email: $this->email\n";
    }
}
