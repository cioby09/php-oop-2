<?php

include_once __DIR__ . "/products.php";

class Food extends Products
{
    public $type;
    public $taste;

    function __construct($_name, $_description, $_quantity, $_category, $_img, $_type, $_taste)
    {
        parent::__construct($_name, $_description, $_quantity, $_category, $_img);
        $this->type = $_type;
        $this->taste = $_taste;
    }
}
