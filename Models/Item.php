<?php
require_once __DIR__ . '/Category.php';
require_once __DIR__ . '/Products.php';

class Item{
    private $product;
    private $category;
    public function __construct(Product $product, Category $category)
    {
        // usare parents::
        $this->product = $product;
        $this->category = $category;
    }
    public function get_product()
    {
        return $this->product;
    }
    public function get_category()
    {
        return $this->category;
    }
    public function get_type()
    {
        return $this->type;
    }
    public function get_description()
    {
        return $this->description;
    }

}


?>