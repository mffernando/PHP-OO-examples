<?php
//Company
class Company
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
}

//Product
class Product
{
    //public $description;
    //public $price;
    private $description;
    private $price;
    private $company;

    //constructor method
    public function __construct($description, $price, Company $company)
    {
        $this->description = $description;
        $this->price = $price;
        $this->company = $company;
    }

    //Details
    public function getDetails()
    {
        return "Product {$this->description} cousts {$this->price} dollars. 
                Published by {$this->company->getName()}.";
    }
}

$company1 = new Company('Company B');
$product1 = new Product('book', 50, $company1);

//var_dump($product1);
echo $product1->getDetails();