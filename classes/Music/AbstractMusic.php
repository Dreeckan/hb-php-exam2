<?php
namespace Music;

// Une classe abstraite est celle qu'on peut pas instancier
// A partir d'une classe abstraite on peut créer des class filles qu'on peut instancier

abstract class AbstractMusic {
    /*@var array */
   protected $instruments; 

    /*@var int */
   protected $start;

   /**@return self */

   public function getInstruments() {
       return $this->instruments;
   }
   

   /**@return self */
   public function getStart() {
    return $this->start;
}


public function setInstruments($instruments) {
    $this->instruments = $instruments;
    return $this;
}

public function setStart($start) {
    $this->start = $start;
    return $this;
}


}