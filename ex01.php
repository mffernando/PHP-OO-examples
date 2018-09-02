<?php
class Product
{
    //public $description;
    //public $price;
    private $description;
    private $price;

    //constructor method
    public function __construct($description, $price)
    {
        $this->description = $description;
        $this->price = $price;
    }

    //getters and setters [private]
    //public function setDescription($value)
    //{
    //    $this->description = $value;
    //}
    //public function setPrice($value)
    //{
    //    $this->price = $value;
    //}

    //public function getDescription()
    //{
    //    return $this->description;
    //}

    //public function getPrice()
    //{
    //    return $this->price;
    //}

    //public function getDetails()
    //{
    //    return "The product {$this->description} costs {$this->price} dollars!";
    //}
}

//with constructor method
$product1 = new Product('book', 50);
var_dump($product1);

//with get and set [private]
//$product1 = new Product;
//$product1->setDescription("Book");
//$product1->setPrice(50);
//echo $product1->getDetails();

//with public attributes [public]
//create new object
//$product1 = new Product;
//put a $description on the $product1
//$product1->description = 'book';
//$product1->price = 50;
//variable information
//empty $product1 -> object(Product)#1 (2) { ["description"]=> NULL ["price"]=> NULL } 
//product1 $description = book -> object(Product)#1 (2) { ["description"]=> string(4) "book" ["price"]=> NULL } 
//product1 $description = book $price = 50 -> object(Product)#1 (2) { ["description"]=> string(4) "book" ["price"]=> int(50) } 
//var_dump($product1);
//echo $product1->getDetails();