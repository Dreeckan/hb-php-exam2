<?php


/**
 * @param int
 * @return int
 * 
 */

function perimetreRectangle($longueur, $largeur): int
{
   return 2 * ($longueur + $largeur);
}


var_dump(perimetreRectangle(2, 5));
var_dump(perimetreRectangle(7, 8));
var_dump(perimetreRectangle(4, 6));



