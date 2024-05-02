<?php

// Define the Animal interface
interface Animal {
    public function sound();
}

// Implement the Dog class that implements the Animal interface
class Dog implements Animal {
    public function sound() {
        echo "Bark";
    }
}

// Implement the Cat class that implements the Animal interface
class Cat implements Animal {
    public function sound() {
        echo "Meow";
    }
}

// Create objects of the Dog and Cat classes
$dog = new Dog();
$cat = new Cat();

// Call the sound() method on each object
$dog->sound(); // Output: Bark
$cat->sound(); // Output: Meow
