<?php

class Product
{

    private $name;
    private $price;
    private $category;
    private $description;
    private $amount;

    public function __construct($name, $price, $category, $description, $amount)
    {
        $this->name = $name;
        $this->price = $price;
        $this->category = $category;
        $this->description = $description;
        $this->amount = $amount;
    }

    public function getName()
    {

        return $this->name;
    }

    public function getPrice()
    {
        return $this->price;
    }
}
