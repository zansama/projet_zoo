<?php
/**
 * Created by PhpStorm.
 * User: Utilisateur
 * Date: 14/02/2019
 * Time: 13:37
 */

namespace App\Animals;


use App\Animal;

class Zebra extends Animal
{
    protected function getNoise(): string
    {
        return "Hiiiiiiiii";
    }
}