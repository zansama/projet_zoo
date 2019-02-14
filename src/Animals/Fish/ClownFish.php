<?php
/**
 * Created by PhpStorm.
 * User: Utilisateur
 * Date: 14/02/2019
 * Time: 13:30
 */

namespace App\Animals\Fish;


use App\Animals\Fish;
use App\Interfaces\CanSwim;

class ClownFish extends Fish implements CanSwim
{
    protected function getNoise(): string
    {
        return "pouetBloupouetBlou";
    }
}