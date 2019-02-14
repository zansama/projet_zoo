<?php
/**
 * Created by PhpStorm.
 * User: Utilisateur
 * Date: 14/02/2019
 * Time: 13:33
 */

namespace App\Animals;


use App\Animal;

class Whale extends Animal
{
    protected function getNoise(): string
    {
        return "Splash";
    }
}