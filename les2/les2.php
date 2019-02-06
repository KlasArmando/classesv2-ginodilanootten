<?php
/**
 * Created by PhpStorm.
 * User: Gino
 * Date: 6-2-2019
 * Time: 09:42
 */

class Products{

    public $name;
    public $price;

    public function __construct($name, $price)
    {
        $this->name  = $name;
        $this->price = $price;
    }

}


$product1 = new Products($name = "Instruct", $price ="25,-");

echo "<table border='1'>";
echo "<tr><th>Product Name</th><th>Price</th></tr>";
echo "<tr><td>$product1->name</td><td>$product1->price</td></tr>";
echo "</table>";

echo "<hr>";

class Klanten {
    public $name;
    public $customer_number;
    public $age;

    public function __construct($name, $age, $customer_number)
    {
        $this->name  = $name;
        $this->age  = $age;
        $this->customer_number = $customer_number;
    }
}

$klanten1 = new Klanten($name = "Henk", $age = "23", $customer_number = "1");

echo "<table border='1'>";
echo "<tr><th>Klant Nummer</th><th>Klant Naam</th><th>Leeftijd</th></tr>";
echo "<tr><td>$klanten1->customer_number</td><td>$klanten1->name</td><td>$klanten1->age</td></tr>";
echo "</table>";
