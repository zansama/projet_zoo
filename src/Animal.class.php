<?php
namespace App;

abstract class Animal
{
    private $name;

    protected abstract function getNoise(): string;

    public function noise(){
        return $this->getNoise();
    }

}