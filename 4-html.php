<?php

$games = [
    [
        'name'  => 'Arcangelo Corelli',
        'birth' => 1653,
    ],
    [
        'name'  => 'Frédéric Chopin',
        'birth' => 1810,
    ],
    [
        'name'  => 'Franz Liszt',
        'birth' => 1811,
    ],
    [
        'name'  => 'Johann Pachelbel',
        'birth' => 1732,
    ],
];

?>

<table>
  <tr>
     <td>Nom du compositeur</td>
     <td>Année de naissance</td>
  </tr>
<?php
  foreach($games as $game) {
      ?>
      <tr>
     <td><a href="5-superglobales.php?birth=<?php $game["birth"] ?>"> <?php echo $game["name"] ?></a></td>
     <td> <?php echo $game["birth"];
       if($game["birth"] < 1800) {
           echo " (Baroque !)";
       }
     ?></td>
  </tr>
 <?php } ?>
  
</table>

<?php

/**
 * Afficher le contenu du tableau PHP dans un tableau HTML (balise <table>). Pour cela, utiliser une boucle foreach.
Le tableau doit avoir 2 colonnes :
 Nom du compositeur
 Année de naissance (birth)
 Pour les compositeurs dont l'année de naissance est inférieurs à 1800, ajouter (Baroque !)
 Dans la colonne du nom, ajouter un lien sur le texte, pointant vers 5-superglobales.php, en ajoutant le paramètre birth avec pour valeur l'année de naissance du compositeur
 Créer un commit avec vos changements
 * 
 */