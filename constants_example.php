<?php

class Goodbye {
    const LEAVING_MESSAGE = "Thank you for visiting W3Schools.com!";
  }
  
echo Goodbye::LEAVING_MESSAGE;

class Goodbye2 {
    const LEAVING_MESSAGE = "Thank you for visiting W3Schools.com!";
    public function byebye() {
      echo self::LEAVING_MESSAGE;
    }
}
  
$goodbye = new Goodbye2();
$goodbye->byebye();