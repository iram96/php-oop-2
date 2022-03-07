<?php 


class RegisteredUser {
    private $email;
    private $password;
    private $addresses;
    private $creditCard;
    private $orderHistory;
    public $cart;

    public function __construct(string $email, string $password, $addresses, $creditCard, $orderHistory, array $cart ) {

        $this->setEmail($email);
        $this->setPassword($password);
        $this->setAddresses($addresses);
        $this->setCreditCard($creditCard);
        $this->setOrderHistory($orderHistory);
        $this->cart = $cart;
        
       
        

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
        return $cart[] = $item;
    }
}