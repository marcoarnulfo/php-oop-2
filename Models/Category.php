<?php
class Category{
    public $name;
    public $icon;

    public function __construct($name, $icon)
    {
        $this->name = $name;
        $this->icon = $icon;
    }
    public function get_name()
    {
        return $this->name;
    }
    public function get_icon()
    {
        return $this->icon;
    }
}
?>