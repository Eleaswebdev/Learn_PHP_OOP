<?php

class Animal {
    public function makeSound() {
        echo "Animal makes a sound";
    }
}

class Dog extends Animal {
    public function makeSound() {
        echo "Dog barks";
    }
}

$animal = new Animal();
$animal->makeSound();  // Output: Animal makes a sound

$dog = new Dog();
$dog->makeSound();  // Output: Dog barks
