<?php
declare(strict_types=1);

class Cat extends Animals {
     function __construct (string $name){
        parent::__construct($name); 
    }

    function getName(){
        return $this->name;
      }
    
    function makeSound(): void{
        echo "Miaooo" ;
    }
}