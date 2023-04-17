<?php

class Product
{
    private $name;
    private $price;
    private $img;
    private $category;

    public function __construct(string $_name, $_price, $_category)
    {

        $this->name = $_name;
        $this->price = $_price;
        $this->category = $_category;

    }
}


