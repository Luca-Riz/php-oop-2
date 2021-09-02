<!-- classe figlia (User) -->

<?php

require_once 'User.php';

class PremUser extends User {

  private $premium;

  function __construct($name, $surname, $age, $premium){
    parent::__construct($name, $surname, $age);
    this->premium = $_premium;
  }

  // funzione polimorfa
  public function setDiscount(){
    if($this->premium){
      if($age > 60){
        $this->discount = 40;
      } elseif ($age < 18) {
        $this->discount = 50;
      } else {
        $this->discount = 15;
      }
    }
  } 
}