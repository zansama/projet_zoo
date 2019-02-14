<?php
require __DIR__ . '/vendor/autoload.php';
use \App\Animals\Fish;
use \App\Animals\Fish\BubbleFish;
use \App\Animals\Fish\CatFish;
use \App\Animals\Fish\ClownFish;
use \App\Animals\Whale;
use \App\Animals\Zebra;
use \App\Animals\Elephant;
use \App\Animals\Parrot;
use \App\Animals\Dove;
use App\Enclosure;

$newEnclosure = new Enclosure();
echo $newEnclosure;

$animals = [
    $fish = new Fish("Connard"),
    $fish = new Fish("Machin"),
    $fish = new Fish("Omegalul"),
    $fish = new Fish("Rambo"),
    $fish = new Fish("Mozart"),
    $bubbleFish = new BubbleFish( "Billy"),
    $bubbleFish = new BubbleFish( "Pablo"),
    $bubbleFish = new BubbleFish( "Jean-phi"),
    $catFish = new CatFish("Grosminet"),
    $catFish = new CatFish("Titi"),
    $clownFish = new ClownFish("Nemo"),
    $whale = new Whale("Johnny"),
    $zebra = new Zebra("Marcus"),
    $elephant = new Elephant("Dumbo"),
    $elephant = new Elephant("Ivory"),
    $parrot = new Parrot("Coco"),
    $parrot = new Parrot("Repeat"),
    $parrot = new Parrot("Naquneuil"),
    $parrot = new Parrot("Pirate"),
    $parrot = new Parrot("Rio"),
    $parrot = new Parrot("London"),
    $parrot = new Parrot("Paris"),
    $parrot = new Parrot("Random"),
    $parrot = new Parrot("Pigeon"),
    $parrot = new Parrot("Seeker"),
    $dove = new Dove("Client"),
    $dove = new Dove("Fournisseur"),
    ];
foreach ($animals as $animal){
    $newEnclosure->addAnimal($animal);
}
echo $newEnclosure;

// print_r($animals);
//for ($i = 0; $i < count($animals); $i++){
//    echo $animals[$i]->getName()." : ".$animals[$i]->noise();
//       echo "\n";
//}


//echo $fish->getName()." : ".$fish->noise();
//echo "\n";
//echo $bubbleFish->getName()." : ".$bubbleFish->noise();
//echo "\n";
//echo $catFish->getName()." : ".$catFish->noise();
//echo "\n";
//echo $clownFish->getName()." : ".$clownFish->noise();
//echo "\n";
//echo $whale->getName()." : ".$whale->noise();
//echo "\n";
//echo $zebra->getName()." : ".$zebra->noise();
//echo "\n";
//echo $elephant->getName()." : ".$elephant->noise();
//echo "\n";
//echo $parrot->getName()." : ".$parrot->noise();
//echo "\n";
//echo $dove->getName()." : ".$dove->noise();

