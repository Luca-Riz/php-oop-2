<!-- classe genitore -->

<?php

class User {
  protected $name;
  protected $surname;
  protected $age;
  public $discount = 0;

  function __construct($_name, $_surname, $_age){
    $this->name = $_name;
    $this->surname = $_surname;
    $this->age = $_age;
  }

  public function getFullName(){
    return $this->name . ' ' . $this->surname;
  }

  public function setDiscount(){
    if($this->age > 60){
      $this->discount = 30;
    } elseif ($this->age < 18) {
      $this->discount = 40;
    }
  }

  public function getDiscount(){
    return $this->discount;
  }
}

