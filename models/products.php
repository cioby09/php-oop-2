<?php

class Products
{
    public $name;
    public $description;
    public $quantity;
    private $price;
    public $category;
    public $img;

    function __construct($_name, $_description, $_quantity, $_category, $_img)
    {
        $this->name = $_name;
        $this->description = $_description;
        $this->quantity = $_quantity;
        $this->category = $_category;
        $this->img = $_img;
    }

    public function setPrice($_price)
    {
        if ($_price < 0) {
            throw new Exception("Gratis");
        } else {
            $this->price = $_price;
        }
    }

    public function getPrice()
    {
        return $this->price;
    }
}
