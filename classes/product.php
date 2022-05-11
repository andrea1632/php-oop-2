<?php

class Product
{
    protected $name;
    protected $description;
    protected $price;

    public function __construct($name, $description, $price)
    {
        $this -> name = $name;
        $this -> description = $description;
        $this -> price = $price;

        //setter
    }
        public function setName($_name){
            $this->name = $_name;
        }
        public function setDescription($_description){
            $this->description = $_description;
        }
        public function setPrice($_price){
            $this->price = $_price;
        }
        
        //getter

        public function getName(){
            return $this->name;
        }
        public function getDescription(){
            return $this->description;
        }
        public function getPrice(){
            return $this->price;
        }
    
}

?>