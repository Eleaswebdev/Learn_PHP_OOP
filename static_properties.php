<?php
/*
* Static properties can be called directly - without creating an instance of a class.
* Static properties are declared with the static keyword:
*/

class pi {
    public static $value = 3.14159;
  }
  
  // Get static property
echo pi::$value;

// A class can have both static and non-static properties. A static property can be accessed from a method in the same class using the self keyword and double colon (::):
class pi {
    public static $value=3.14159;
    public function staticValue() {
      return self::$value;
    }
  }
  
  $pi = new pi();
  echo $pi->staticValue();

  //To call a static property from a child class, use the parent keyword inside the child class:

  class pi {
    public static $value=3.14159;
  }
  
  class x extends pi {
    public function xStatic() {
      return parent::$value;
    }
  }
  
  // Get value of static property directly via child class
  echo x::$value;
  
  // or get value of static property via xStatic() method
  $x = new x();
  echo $x->xStatic();
