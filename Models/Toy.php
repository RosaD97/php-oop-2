<?php

class Toy extends Product
{
    private $features;
    private $dimension;

    public function __construct(string $_name, int $_price, string $_category, string $_features, string $_dimension)
    {
        parent::__construct($_name, $_price, $_category);
        $this->set_info($_features, $_dimension);
    }
    public function set_info($_features, $_dimension)
    {
        $this->features = $_features;
        $this->dimension = $_dimension;
    }
}