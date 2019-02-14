<?php
/**
 * Created by PhpStorm.
 * User: Utilisateur
 * Date: 14/02/2019
 * Time: 13:22
 */

namespace App\Animals\Fish;


use App\Animals\Fish;
use App\Interfaces\CanSwim;

class CatFish extends Fish implements CanSwim
{
    protected function getNoise(): string
    {
        return "miaoubloublou";
    }
}