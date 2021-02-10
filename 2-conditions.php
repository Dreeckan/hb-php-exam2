<?php

$composers = [
    [
        'name'    => 'Hildegard von Bingen',
        'birth'   => 1098,
        'country' => 'Allemagne',
    ],
    [
        'name'    => 'Philippe Verdelot',
        'birth'   => 1480,
        'country' => 'France',
    ],
    [
        'name'    => 'Martin Luther',
        'birth'   => 1483,
        'country' => 'Allemagne',
    ],
    [
        'name'    => 'Adriano Banchieri',
        'birth'   => 1568,
        'country' => 'Italie',
    ],
    [
        'name'    => 'Jean-Baptiste Lully',
        'birth'   => 1632,
        'country' => 'France',
    ],
];


foreach($composers as $composer) {
    echo $composer["name"] . " " . $composer["birth"] . " " . $composer["country"];
    if($composer["country"] == "France" || $composer["country"] == "Italie") {
        echo "!";
    }
    echo "<br>";
}


/**
 * Dans 2-conditions.php :
 Utiliser echo et foreach pour afficher toutes les valeurs du tableau $composers
  (défini dans le fichier) et les séparer par des sauts de ligne (<br />)
 Dans cette boucle, si l'index country vaut France ou Italie, ajouter un point d'exclamation (!) sur sa ligne
 Créer un commit avec vos changements
 * 
 * 
 */