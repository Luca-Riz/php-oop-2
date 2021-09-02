<!-- classe genitore -->

<?php

class User {
  public $name;
  public $surname;
  public $age;
  public $discount;

  function __construct($name, $surname, $age){
    $this->name = $_name;
    $this->surname = $_surname;
    $this->age = $age;
  }

  public function getFullName(){
    return $this->name . ' ' . $this->surname;
  }

  public function setDiscount(){
    if($age > 60){
      $this->discount = 30;
    } elseif ($age < 18) {
      $this->discount = 40;
    }
  }

  public function getDiscount(){
    return $this->discount;
  }
}

