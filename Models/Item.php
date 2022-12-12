<?php

class Item{
    private $name;
    private $category;
    private $type;
    private $description;
    private $price;
    public function __construct($name, $category, $type, $description, $price)
    {
        $this->name = $name;
        $this->category = $category;
        $this->type = $type;
        $this->description = $description;
        $this->price = $price;
    }
    /*
    public function set_name($name)
    {
        $this->name = $name;
    }
    */
    public function get_name()
    {
        return $this->name;
    }
    /*
    public function set_category($category)
    {
        $this->category = $category;
    }
    */
    public function get_category()
    {
        return $this->category;
    }
    /*
    public function set_type()
    {
        $this->type = $type;
    }
    */
    public function get_type()
    {
        return $this->type;
    }
    /*
    public function set_description($description)
    {
        $this->description = $description;
    }
    */
    public function get_description()
    {
        return $this->description;
    }
    /*
    public function set_price($price)
    {
        $this->price = $price;
    }
    */
    public function get_price()
    {
        return $this->price;
    }
}


?>