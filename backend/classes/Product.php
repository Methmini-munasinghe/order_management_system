<?php

class Product{
    private $id;
    private $name;
    private $price;
    public function __construct($id, $name, $price){
        $this->id = (int)$id;
        $this->name = (string)$name;
        $this->price = (float)$price;

    }
    public function getId(){
        return $this->id;
    }
    public function getName(){
        return $this->name;
    }
    public function getPrice(){
        return $this->price;
    }

}