<?php

trait Customer{

    protected $firstName;
    protected $lastName;

    public function setLastName($lastName){
        $this->lastName = $lastName;
    }
    public function getLastName(){
       return $this->lastName;
    }
    public function setFirstName($firstName){
        $this->firstName = $firstName;
    }
    public function getFirstName(){
       return $this->firstName;
    }
}