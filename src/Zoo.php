<?php
/**
 * Created by PhpStorm.
 * User: Utilisateur
 * Date: 14/02/2019
 * Time: 15:30
 */

namespace App;


use App\Interfaces\CanFly;
use App\Interfaces\CanSwim;
use App\Interfaces\CanWalk;

class Zoo
{
    static private $aquarium = null;
    static private $aviary = null;
    static private $fence = null;

    static public function getAquarium() {
        return self::$aquarium;
    }

    static public function getAviary() {
        return self::$aviary;
    }

    static public function getFence() {
        return self::$fence;
    }


    static public function addAnimal(Animal $animal) {


        if($animal instanceof canFly){
            if (self::$aquarium == null){
                self::$aquarium = new Enclosure();
            }
            self::$aquarium->addAnimal($animal);

        }elseif($animal instanceof canWalk){
            if (self::$aviary == null){
                self::$aviary = new Enclosure();
            }
            self::$aviary->addAnimal($animal);


        }elseif($animal instanceof canSwim){
            if (self::$fence == null){
                self::$fence = new Enclosure();
            }
            self::$fence->addAnimal($animal);

        }





    }

    static function visitTheZoo() {
        echo "Dans mon aquarium il y a : \n" . self::$aquarium;
        echo "\n";
        echo "Dans ma volière il y a : \n" . self::$aviary;
        echo "\n";
        echo "Dans mon enclos il y a : \n" . self::$fence;
    }
}

