<?php
namespace App;


class Enclosure {
    private $animals = array();

    public function addAnimal(Animal $animal){
        $this->animals[] = $animal;
    }

    public function __toString(){
        $returnString ="";
        foreach ($this->animals as $animal){
            $returnString .= $animal->getName()." : ".$animal->noise()."\n";

        }
        return $returnString;

    }
}