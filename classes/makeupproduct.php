

<?php
require_once 'product.php';

class MakeupProduct extends Product {
    private $shade;

    public function __construct($name, $price, $category,$image,$shade) {
        //perdoret trashegimia
        parent::__construct($name, $price, $category, $image);
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