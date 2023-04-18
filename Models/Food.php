<?php

class Food extends Product
{
    private $peso;
    private $ingredients;

    public function __construct($_id, $_name, $_price, $_category, $_img, $_peso, $_ingredients)
    {
        parent::__construct($_id, $_name, $_price, $_category, $_img);
        $this->set_info($_peso, $_ingredients);
    }
    public function set_info($_peso, $_ingredients)
    {
        $this->peso = $_peso;
        $this->ingredients = $_ingredients;
    }

    // Peso
    public function get_peso()
    {
        return $this->peso;
    }
    public function set_peso($_peso)
    {
        $this->peso = $_peso;
    }

    // ingredients
    public function get_ingredients()
    {
        return $this->ingredients;
    }
    public function set_ingredients($_ingredients)
    {
        $this->ingredients = $_ingredients;
    }
}
