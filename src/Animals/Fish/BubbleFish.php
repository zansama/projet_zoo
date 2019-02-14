<?php
/**
 * Created by PhpStorm.
 * User: Utilisateur
 * Date: 14/02/2019
 * Time: 13:07
 */

namespace App\Animals\Fish;

use App\Animals\Fish;

class BubbleFish extends Fish
{
    protected function getNoise(): string
    {
        return "bublebuuublbliuiu";
    }
}