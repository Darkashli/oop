<?php 

  class NewClass {
    
    //Properties and Methods goes here
    public $data = "I am a property";

    public function setNewProperty($newdata) {
      $this->data = $newdata;
    }

    public function getProperty() {
      return $this->data;
    }
  }

