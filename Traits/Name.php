<?php

trait Name
{
    private $name;


    /**
     * get_name
     *
     * @return string
     */
    public function get_name()
    {
        return $this->name;
    }
    public function set_name($_name)
    {
        $this->name = $_name;
    }
}
