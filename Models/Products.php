<?php

class Product extends Item{
private $name;
private $description;
private $img;
    public function __construct($name, $description, $img, $price)
    {
        $this->name = $name;
        $this->description = $description;
        $this->img = $img;
        $this->price = $price;
    }
    public function get_name()
    {
        return $this->name;
    }
    public function get_description()
    {
        return $this->description;
    }
    public function get_img()
    {
        return $this->img;
    }
    public function get_price()
    {
        return $this->price;
    }
}
?>