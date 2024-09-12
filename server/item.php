<?php

class item {

    public $id;
    public  $title;
    public $brand;
    public $description;
    public $price;
    public $availability;

    public function __construct(){}


    function getId(){return $this->id;}
    function setId($id){$this->id=$id;}

    function getTitle(){return $this->title;}
    function setTitle($title){$this->title=$title;}

    function getBrand(){return $this->brand;}
    function setBrand($brand){$this->brand=$brand;}

    function getDescription(){return $this->description;}
    function setDescription($description){$this->description=$description;}

    function getPrice(){return $this->price;}
    function setPrice($price){$this->price=$price;}

    function getAvailability(){return $this->availability;}
    function setAvailability($availability){$this->availability=$availability;}






}


?>