<?php
/**
 * Created by PhpStorm.
 * User: Utilisateur
 * Date: 14/02/2019
 * Time: 13:37
 */

namespace App\Animals;


use App\Animal;
use App\Interfaces\CanFly;
use App\Interfaces\CanWalk;

class Dove extends Animal implements CanFly, CanWalk
{
    protected function getNoise(): string
    {
        return "Rou Rooooooou";
    }
}