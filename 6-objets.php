<?php
spl_autoload_register(function ($class) {
    // Dé-commenter la ligne ci-dessous si vous utilisez un Mac avec MAMP
    // $class = str_replace($class, '\\', '/');
    require_once "classes/$class.php";
});

use Music\ClassicalMusic;
use Music\ModernMusic;

$clas_music = new ClassicalMusic();
$mod_music = new ModernMusic();

$clas_music->setInstruments(["piano", "Clarinette", "Piccolo"]);
$clas_music->setStart(1800);


$mod_music->setInstruments(["Hautbois", "guitare", "Flûte"]);
$mod_music->setStart(2000);

print_r($clas_music->getInstruments());
echo "<br>";
echo $clas_music->getStart();

echo "<br>";

print_r($mod_music->getInstruments());
echo "<br>";
echo $mod_music->getStart();




