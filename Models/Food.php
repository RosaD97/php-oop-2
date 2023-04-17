<?php

class Food extends Product
{
    private $peso;
    private $ingradients;

    public function __construct(string $_name, string $_price, string $_category, string $_peso, string $_ingredients)
    {
        parent::__construct($_name, $_price, $_category);
        $this->set_info($_peso, $_ingredients);
    }
    public function set_info($_peso, $_ingredients)
    {
        $this->peso = $_peso;
        $this->ingradients = $_ingredients;
    }
}
