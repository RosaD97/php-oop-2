<?php

class Food extends Product
{
    public $peso;
    public $ingredients;

    public function __construct(string $_name, int $_price, string $_category, int $_peso, array $_ingredients)
    {
        parent::__construct($_name, $_price, $_category);
        $this->set_info($_peso, $_ingredients);
    }
    public function set_info($_peso, $_ingredients)
    {
        $this->peso = $_peso;
        $this->ingredients = $_ingredients;
    }
}
