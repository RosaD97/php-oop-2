<?php
require_once __DIR__. '/../Traits/Name.php';

/**
 * Prodotto
 * 
 * @author Rosa Durantini
 */

class Product
{

    use Name;

    private $id;
    private $price;
    private $category;
    private $img;
    
    /**
     * __construct
     *
     * @param  int $_id
     * @param  string $_name
     * @param  float $_price
     * @param  Category $_category
     * @param  string $_img
     */
    public function __construct($_id, $_name, $_price, $_category, $_img)
    {
        $this->id = $_id;
        $this->img = $_img;
        $this->name = $_name;
        $this->set_price($_price);
        $this->category = $_category;
    }


    // Category    
    /**
     * get_category
     *
     * @return Category
     */
    public function get_category()
    {
        return $this->category;
    }
    public function set_category($_category)
    {
        $this->category = $_category;
    }

    // Price    
    /**
     * get_price
     *
     * @return float
     */
    public function get_price()
    {
        return $this->price;
    }
    public function set_price($_price)
    {
        if ($_price == 0){
            throw new Exception('Non puoi mettere zerooo');
        }
        $this->price = $_price;
    }

    // Img    
    /**
     * get_img
     *
     * @return string
     */
    public function get_img()
    {
        return $this->img;
    }
    public function set_img($_img)
    {
        $this->img = $_img;
    }


    /**
     * get_id
     *
     * @return int
     */
    public function get_id()
    {
        return $this->id;
    }
    public function set_id($_id)
    {
        $this->id = $_id;
    }
}
