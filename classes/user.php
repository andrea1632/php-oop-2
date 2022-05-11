<?php 
class User
{
    protected $name;
    protected $email;
    protected $signedIn;
    protected $expireDateCreditCard;
    protected $sconto;

    public function __construct($name, $email, $signedIn, $expireDateCreditCard)
    {
        $this->name = $name;
        $this->email = $email;
        $this->signedIn = $signedIn;
        $this->expireDateCreditCard = $expireDateCreditCard;
        $this->sconto = $this->setSconto();
    }
    //setter
    public function setName($_name){
        $this->name = $_name;
    }
    public function setEmail($_email){
        $this->email = $_email;
    }
    public function setSignedIn($_signedIn){
        $this->signedIn = $_signedIn;
    }
    public function setCard($_card){
        $this->expireDateCreditCard = $_card;
    }
    public function setSconto(){
        if($this->signedIn == true){
            return $this->sconto = '30%';
        } else{
            return $this->sconto = '0';
        }
    }
    //getter
    public function getName(){
        return $this->name;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getSignedIn(){
        return $this->signedIn;
    }
    public function getCard(){
        return $this->expireDateCreditCard;
    }
    public function getSconto(){
        return $this->sconto;
    }
}
?>