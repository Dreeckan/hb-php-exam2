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

