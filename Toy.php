<?php
 
require_once __DIR__ . '/Product.php';

class Toy extends Product {
    public $material; 
    public $height;
    public $weight;
    public $width;

    public function __construct($name, $price, $barcode, $stock, $brand, $infos,$pettype, $material, $height, $weight, $width) {
        $this->setMaterial($material);
        $this->setHeight($height);
        $this->setWeight($weight);
        $this->setWidth($width);
        
        parent::__construct($name, $price, $barcode, $stock, $brand, $infos,$pettype);
        
        

    }
    public function setMaterial($material){
        $this->material = $material;
    }
    public function getMaterial(){
       return $this->material;
    }
    public function setHeight($height){
        $this->height = $height;
    }
    public function getHeight(){
       return $this->height;
    }
    public function setWeight($weight){
        $this->weight = $weight;
    }
    public function getWeight(){
       return $this->weight;
    }
    public function setWidth($width){
        $this->width = $width;
    }
    public function getWidth(){
       return $this->width;
    }
}