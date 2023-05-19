<?php

class Products
{
    public $name;
    public $description;
    public $quantity;
    public $price;
    public $category;
    public $img;

    function __construct($_name, $_description, $_quantity, $_price, $_category, $_img)
    {
        $this->name = $_name;
        $this->description = $_description;
        $this->quantity = $_quantity;
        $this->price = $_price;
        $this->category = $_category;
        $this->img = $_img;
    }
}
