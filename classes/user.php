<?php 
class User
{
    protected $name;
    protected $email;
    protected $signedIn;
    protected $expireDateCreditCard;
    protected $sconto;
    protected $allowToBuy;

    public function __construct($name, $email, $signedIn, $expireDateCreditCard)
    {
        $this->name = $name;
        $this->email = $email;
        $this->signedIn = $signedIn;
        $this->expireDateCreditCard = $expireDateCreditCard;
        $this->sconto = $this->setSconto();
        $this->allowToBuy = $this->setAllow();
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
            return $this->sconto = '20%';
        } else{
            return $this->sconto = '0';
        }
    }
    public function setAllow(){
        if(date("Y/m/d") <= $this->expireDateCreditCard){
            return $this->allowToBuy = 'la tua carta non è scaduta, puoi comprare.';
        } else{
            return $this->allowToBuy = 'la tua carta è scaduta, non accettiamo contanti.';
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
    public function getAllow(){
        return $this->allowToBuy;
    }
}
?>