<?php

class Accessory extends Product
{
    public $material;
    public $dimension;

    public function __construct(string $_name, int $_price, string $_category,string $_material, string $_dimension)
    {
        parent::__construct($_name, $_price, $_category);
        $this->set_info($_material, $_dimension);
    }
    public function set_info($_material, $_dimension)
    {
        $this->material = $_material;
        $this->dimension = $_dimension;
    }
}