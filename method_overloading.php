<?php

/**
 * 
 * Method overloading allows a class to have multiple methods with the same name but different parameters or parameter types.
 * In PHP, unlike some other languages, method overloading is not directly supported. 
 * However, you can achieve similar behavior using variable-length argument lists 
 * or optional parameters.
 */

class Calculator {
    public function add($a, $b) {
        return $a + $b;
    }

    public function addThreeNumbers($a, $b, $c) {
        return $a + $b + $c;
    }
}

$calc = new Calculator();
echo $calc->add(2, 3);  // Output: 5
echo $calc->addThreeNumbers(2, 3, 4);  // Output: 9
