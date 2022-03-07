<?php

trait Address{

    protected $street;
    protected $city;
    protected $state;
    protected $postalCode;
    protected $country;

    public function setStreet($street){
        $this->street = $street;
    }
    public function getStreet(){
       return $this->street;
    }
    public function setCity($city){
        $this->city = $city;
    }
    public function getCity(){
       return $this->city;
    }
    public function setState($state){
        $this->state = $state;
    }
    public function getState(){
       return $this->state;
    }
    public function setPostalCode($postalCode){
        $this->postalCode = $postalCode;
    }
    public function getPostalCode(){
       return $this->postalCode;
    }
    public function setCountry($country){
        $this->country = $country;
    }
    public function getCountry(){
       return $this->country;
    }
}