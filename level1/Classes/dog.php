<?php
declare(strict_types=1);

class Dog extends Animals {
    function __construct(string $name) {
        parent::__construct($name); 
    }

    function getName(): string {
        return $this->name;
    }

    function makeSound(): void {
        echo "Bau Bau!";
    }
}