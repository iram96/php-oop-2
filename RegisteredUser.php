<?php 
require_once __DIR__ . '/Customer.php';
require_once __DIR__ . '/Address.php';

class RegisteredUser {
use Customer;
use Address;

    private $email;
    private $password;
    private $addresses;
    private $creditCard;
    private $orderHistory;
    public $cart;

    public function __construct(string $email, string $password, $addresses, $creditCard, $orderHistory, array $cart, string $country ) {

        $this->setEmail($email);
        $this->setPassword($password);
        $this->setAddresses($addresses);
        $this->setCreditCard($creditCard);
        $this->setOrderHistory($orderHistory);
        $this->cart = $cart;
        $this->setCountry($country);
        
       
        

    }
    public function setEmail($email){
        $this->email = $email;
    }
    public function getEmail(){
       return $this->email;
    }
   
    public function setPassword($password){
        $this->password = $password;
    }
    public function getPassword(){
       return $this->password;
    }
    public function setAddresses($addresses){
        $this->addresses = $addresses;
    }
    public function getAddresses(){
       return $this->addresses;
    }
    public function setCreditCard($creditCard){
        $this->creditCard = $creditCard;
    }
    public function getCreditCard(){
       return $this->creditCard;
    }
    public function setOrderHistory($orderHistory){
        $this->orderHistory = $orderHistory;
    }
    public function getOrderHistory(){
       return $this->orderHistory;
    }

    public function addToCart($item){
        return $this->cart[] = $item;
    }
}