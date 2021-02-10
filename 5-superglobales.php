<?php
 
   if(!empty($_GET["birth"])) {
       $_SESSION["birth"] = $_GET["birth"];
   }


   $errors = [];

   if(!empty(trim($_POST["email"]))) {
      if(!filter_var(trim($_POST["email"]), FILTER_VALIDATE_EMAIL)) {
         $errors[] = "Veuillez entrer un email valide";
      }
   }

 
   if (isset($_POST["quantite"])) {
      if($_POST["quantite"] < 0 || !is_numeric($_POST['quantite'])) {
           $errors[] = "Veuillez entrer une quantité valide";
      }
   } 


   if(isset($_POST["email"]) && isset($_POST["quantite"]) && empty($errors)) {
       $_SESSION["quantite"] = $_POST["quantite"];
       $_SESSION["email"] = $_POST["email"];
   }



   foreach($errors as $error) {
       echo $error . "<br>";
   }


?>

<form action="" method="post">
    <div>
        <label for="quantity">Quantité</label>
        <input type="number" id="quantity" name="quantite">
    </div>
    <div>
        <label for="email">Un champ email</label>
        <input type="email" id="email" name="email">
    </div>
</form>


<?php

