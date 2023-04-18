<?php

trait Dimension
{
    private $dimension;

    // Dimension
    public function get_dimension()
    {
        return $this->dimension;
    }
    public function set_icon($_dimension)
    {
        $this->dimension = $_dimension;
    }
}
