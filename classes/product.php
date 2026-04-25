<?php

class Product {

    private $name;
    private $price;
    private $category;
    private $image;
    
    //Konstruktori i klases
    public function __construct($name, $price, $category,$image) {
        $this->name = $name;
        $this->price = $price;
        $this->category = $category;
        $this->image = $image;
    }

    // Get Funksionet
    public function getName() {
        return $this->name;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getCategory() {
        return $this->category;
    }
    public function getImage(){
        return $this->image;
    }

    // Set Funksionet
    public function setName($name) {
        $this->name = $name;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

    public function setCategory($category) {
        $this->category = $category;
    }

    public function setImage($image){
        $this->image =  $image;
    }
}
?>