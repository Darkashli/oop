<?php 

  class NewClass {

    //Properties and Methods goes here
    public $data = "I am a property";
    //public $error = "This is the class called NewClass";
    public $error = "This is the class called ".__CLASS__."! ";
    public static $static = 0;
    public static $secondStatic = 1;


    public function __construct(){
      echo "This class has been instantiated ";
    }

    public function __toString(){
      echo "toString method: ";
      return $this->error;
    }

    public function setNewProperty($newdata) {
      $this->data = $newdata;
    }

    public function getProperty() {
      return $this->data;
    }

    public function __destruct(){
      echo "This is the end of the class!";
    }

    public static function staticMethod(){
      return self::$static;
      //Can also be increment by adding ++self
    }
    
    public static function secondStaticMethod(){
      return self::$secondStatic;
    }

  }
