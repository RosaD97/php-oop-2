<?php
require_once __DIR__. '/../Traits/Dimension.php';


class Toy extends Product
{
    use Dimension;
    private $features;

    public function __construct($_id, $_name, $_price, $_category, $_img, $_features, $_dimension)
    {
        parent::__construct($_id, $_name, $_price, $_category, $_img);
        $this->set_info($_features, $_dimension);
    }
    public function set_info($_features, $_dimension)
    {
        $this->features = $_features;
        $this->dimension = $_dimension;
    }


        // features
        public function get_features()
        {
            return $this->features;
        }
        public function set_name($_features)
        {
            $this->features = $_features;
        }
    
}