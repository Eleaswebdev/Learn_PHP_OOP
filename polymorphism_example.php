<?php

class Shape {
    public function draw() {
        echo "Drawing shape";
    }
}

class Circle extends Shape {
    public function draw() {
        echo "Drawing circle";
    }
}

$circle = new Circle();
$circle->draw(); // Output: Drawing circle

// Like mother thinks draw is a mother here, so it executes codes according to it's situation and condition.
// Since we call Circle class so it's executes "Drawing Circle"