<?php
/**
 * Created by PhpStorm.
 * User: Utilisateur
 * Date: 14/02/2019
 * Time: 13:37
 */

namespace App\Animals;


use App\Animal;
use App\Interfaces\CanSwim;
use App\Interfaces\CanWalk;

class Zebra extends Animal implements CanWalk, CanSwim
{
    protected function getNoise(): string
    {
        return "Hiiiiiiiii";
    }
}