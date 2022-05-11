<?php
//importo product.php
require_once __DIR__ . '/product.php';


class Food extends Product

{
    protected $quantità;
    protected $ingredienti;
    protected $tipo;

    public function __construct($name, $description, $price, $quantità, $ingredienti, $tipo)
    {
        parent::__construct($name, $description, $price);
        $this->quantità = $quantità;
        $this->ingredienti = $ingredienti;
        $this->tipo = $tipo;
    }

    //setter

    public function setQuantità($_quantità){
        $this->quantità = $_quantità;
    }
    public function setIngredienti($_ingredienti){
        $this->ingredienti = $_ingredienti;
    }
    public function setTipo($_tipo){
        $this->tipo = $_tipo;
    }
}
?>