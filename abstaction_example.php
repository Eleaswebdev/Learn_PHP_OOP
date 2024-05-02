<?php

interface Animal {
    public function sound();
}

class Dog implements Animal {
    public function sound() {
        echo "Bark";
    }
}

class Cat implements Animal {
    public function sound() {
        echo "Meow";
    }
}

$dog = new Dog();
$dog->sound(); // Output: Bark

$cat = new Cat();
$cat->sound(); // Output: Meow
