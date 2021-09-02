<!-- classe genitore -->

<?php

require_once 'ScontoTutti.php';

class User {
  protected $name;
  protected $surname;
  protected $age;
  public $discount = 0;

  use ScontoTutti;
  
  function __construct($_name, $_surname){
    $this->name = $_name;
    $this->surname = $_surname;
  }

  public function setAge($_age){
    if(is_numeric($_age) && $_age > 0 && $_age < 120) {
        $this->age = $_age;
    } elseif(!is_numeric($_age)){
        throw new Exception('Non è un numero');
    } else {
        throw new Exception('Fuori range');
    }
   
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

