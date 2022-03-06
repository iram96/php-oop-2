<?php

class Product {

    public $name;
    public $price;
    public $barcode;
    public $stock;
    public $brand;
    public $infos;
    public $pettype;
    
    public function __construct($name, $price, $barcode, $stock, $brand, $infos,$pettype) {

        $this->setName($name);
        $this->setPrice($price);
        $this->setBrand($barcode);
        $this->setStock($stock);
        $this->setBrand($brand);
        $this->setInfos($infos);
        $this->setPettype($pettype);
        
        

    }

    public function setName($name){
        $this->name = $name;
    }
    public function getName(){
       return $this->name;
    }
    public function setPrice($price){
        $this->price = $price;
    }
    public function getPrice(){
       return $this->price;
    }
    public function setBarcode($barcode){
        $this->barcode = $barcode;
    }
    public function getBarcode(){
       return $this->barcode;
    }
    public function setStock($stock){
        $this->stock = $stock;
    }
    public function getStock(){
       return $this->stock;
    }
    public function setBrand($brand){
        $this->brand = $brand;
    }
    public function getBrand(){
       return $this->brand;
    }
    public function setInfos($infos){
        $this->infos = $infos;
    }
    public function getInfos(){
        return $this->infos;
    }
    public function setPettype($pettype){
        $this->pettype = $pettype;
    }
    public function getPettype(){
       return $this->pettype;
    }


    
}