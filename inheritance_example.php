<?php

class Animal {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
        echo $name;
    }

    public function sound() {

        echo "Animal sound";
    }
}

class Dog extends Animal {
    // public function sound() {
    //     echo "Bark";
    // }
}

$dog = new Dog("Buddy");
echo $dog->sound(); // Output: Bark
