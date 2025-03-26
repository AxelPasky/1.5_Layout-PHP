<?php
declare(strict_types=1);

class Dog extends Animals {

    protected string $name;

    function __construct (string $name){

        $this->name=$name;
    }

    function getName(){
        return $this->name;
      }
    
    function makeSound(): void{
        echo "Bau Bau!" . PHP_EOL;
    }
}