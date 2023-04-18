<?php
require_once __DIR__. '/../Traits/Dimension.php';

class Accessory extends Product
{

    use Dimension;
    private $material;

    public function __construct($_id, $_name, $_price, $_category, $_img, $_material, $_dimension)
    {
        parent::__construct($_id, $_name, $_price, $_category, $_img);
        $this->set_info($_material, $_dimension);
    }
    public function set_info($_material, $_dimension)
    {
        $this->material = $_material;
        $this->dimension = $_dimension;
    }

        // material
        public function get_material()
        {
            return $this->material;
        }
        public function set_material($_material)
        {
            $this->material = $_material;
        }
    
}