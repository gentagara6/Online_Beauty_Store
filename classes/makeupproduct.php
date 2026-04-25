<?php
require_once 'product.php';

class MakeupProduct extends Product {
    private $shade;

    public function __construct($name, $price, $brand, $shade,$image) {
        //perdoret trashegimia
        parent::__construct($name, $price, $brand, $image);
        $this->shade = $shade;
    }

    public function getShade() {
        return $this->shade;  
    }

    public function setShade($shade) {
        $this->shade = $shade;
    }
}

?>