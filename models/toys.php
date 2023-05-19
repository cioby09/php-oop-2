<?php

include_once __DIR__ . "/products.php";

class Toys extends Products
{
    public $type;
    public $material;

    function __construct($_name, $_description, $_quantity, $_price, $_category, $_img, $_type, $_material)
    {
        parent::__construct($_name, $_description, $_quantity, $_price, $_category, $_img);
        $this->type = $_type;
        $this->material = $_material;
    }
}
