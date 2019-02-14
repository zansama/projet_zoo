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

$fish = new Fish("Connard");
$bubbleFish = new BubbleFish( "Billy");
$catFish = new CatFish("Grosminet");
$clownFish = new ClownFish("Nemo");
$whale = new Whale("Johnny");
$zebra = new Zebra("Marcus");
$elephant = new Elephant("Dumbo");
$parrot = new Parrot("Coco");
$dove = new Dove("Client");

echo $fish->getName()." : ".$fish->noise();
echo "\n";
echo $bubbleFish->getName()." : ".$bubbleFish->noise();
echo "\n";
echo $catFish->getName()." : ".$catFish->noise();
echo "\n";
echo $clownFish->getName()." : ".$clownFish->noise();
echo "\n";
echo $whale->getName()." : ".$whale->noise();
echo "\n";
echo $zebra->getName()." : ".$zebra->noise();
echo "\n";
echo $elephant->getName()." : ".$elephant->noise();
echo "\n";
echo $parrot->getName()." : ".$parrot->noise();
echo "\n";
echo $dove->getName()." : ".$dove->noise();

