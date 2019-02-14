<?php
/**
 * Created by PhpStorm.
 * User: Utilisateur
 * Date: 14/02/2019
 * Time: 13:30
 */

namespace App\Animals\Fish;


use App\Animals\Fish;

class ClownFish extends Fish
{
    protected function getNoise(): string
    {
        return "pouetBloupouetBlou";
    }
}