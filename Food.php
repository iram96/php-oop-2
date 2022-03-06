<?php
 
require_once __DIR__ . '/Product.php';

class Food extends Product {
    public $ingredients; 
    public $foodtype;
    public $weight;
    

    public function __construct($name, $price, $barcode, $stock, $brand, $infos,$pettype, $ingredients, $foodtype, $weight) {
        $this->setIngredients($ingredients);
        $this->setFoodtype($foodtype);
        $this->setWeight($weight);
        
        
        parent::__construct($name, $price, $barcode, $stock, $brand, $infos,$pettype);
        
        

    }
    public function setIngredients($ingredients){
        $this->ingredients = $ingredients;
    }
    public function getIngredients(){
       return $this->ingredients;
    }
    public function setFoodtype($foodtype){
        $this->foodtype = $foodtype;
    }
    public function getFoodtype(){
       return $this->foodtype;
    }
    public function setWeight($weight){
        $this->weight = $weight;
    }
    public function getWeight(){
       return $this->weight;
    }
    
}