<!-- classe figlia (User) -->

<?php

require_once 'User.php';

class PremUser extends User {

  private $premium;

  function __construct($_name, $_surname, $_age, $_premium){
    parent::__construct($_name, $_surname, $_age);
    $this->premium = $_premium;
  }

  // funzione polimorfa
  public function setDiscount(){
    if($this->premium){
      if($this->age > 60){
        $this->discount = 40;
      } elseif ($this->age < 18) {
        $this->discount = 50;
      } else {
        $this->discount = 15;
      }
    }
  } 
}