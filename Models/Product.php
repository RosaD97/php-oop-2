<?php

class Product
{
    public $name;
    public $price;
    public $category;

    public function __construct(string $_name, int $_price, string $_category)
    {

        $this->name = $_name;
        $this->price = $_price;
        $this->category = $_category;
    }
}


