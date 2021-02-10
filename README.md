# PHP procédural et Objet - Examens

[Récupérer et travailler sur ce projet en vidéo](https://www.loom.com/share/3e8d56bdced540df80d84439333b54a4)

Pour travailler sur ce projet : 
- **créer un fork** du projet (sur la page [https://github.com/Dreeckan/hb-php-exam2](https://github.com/Dreeckan/hb-php-exam2), cliquer sur le bouton `fork`, en haut à droite de la page)
- Cloner **votre** projet (commande `git clone` par exemple)
- Créer une branche pour faire tout l'exam
- À la fin de l'examen, vous **devez** envoyer un zip de votre code sur Moodle et vous **pouvez** faire une PR à destination du projet d'origine (afin de faciliter mes retours pour la correction)

**2 points bonus** peuvent être gagnés si tout votre code est valide PSR-12 et PSR-4 (3 erreurs autorisées au total).

La durée prévue est d'environ 2h. Des points peuvent être perdus pour le retard du rendu :
- 1 point si le rendu est fait après 19h
- 2 point si le rendu est fait après 21h

Liste des exercices
1. Utilisation des variables (1.5 point)
2. Conditions et boucles (1.5 point)
3. Fonctions (2 points)
4. PHP dans du html (4 points)
5. Superglobales (4 points)
6. Objets (5 points)
7. Cours et bogues (2 points)


## 1. Utilisation des variables

- Dans `1-variables.php` :
  - [ ] Déclarer un tableau nommé `objects`, contenant les valeurs suivantes : `un test`, `128`, `132.05`
  - [ ] Ajouter un élément (après la déclaration) : `ajout`
  - [ ] Ajouter un élément (après la déclaration) `ajout2` avec l'index `nouvelIndex`
  - [ ] Afficher, avec un `echo`, le contenu de l'index `nouvelIndex` dans le tableau
- [ ] Créer un commit avec vos changements
  
## 2. Conditions et boucles

- Dans `2-conditions.php` :
  - [ ] Utiliser `echo` et `foreach` pour afficher toutes les valeurs du tableau `$composers` (défini dans le fichier) et les séparer par des sauts de ligne (`<br />`)
  - [ ] Dans cette boucle, si l'index `country` vaut `France` ou `Italie`, ajouter un point d'exclamation (`!`) sur sa ligne
- [ ] Créer un commit avec vos changements
  
## 3. Fonctions

- Dans `3-fonctions.php` :
  - Créer une fonction `perimetreRectangle` qui 
    - [ ] prend deux nombres entiers `largeur` et `longueur` en paramètre
    - [ ] Retourne le résultat du calcul `2 * (longueur + largeur)`
  
  - [ ] Ajouter 3 appels de cette fonction et en afficher les résultats avec la fonction `var_dump()`

- [ ] Créer un commit avec vos changements
  
## 4. PHP dans du html

- Dans `4-html.php` :
  - [ ] Afficher le contenu du tableau PHP dans un tableau HTML (balise `<table>`). Pour cela, utiliser une boucle `foreach`.
  - Le tableau doit avoir 2 colonnes :
    - [ ] Nom du compositeur
    - [ ] Année de naissance (`birth`)
      - [ ] Pour les compositeurs dont l'année de naissance est inférieurs à `1800`, ajouter ` (Baroque !)`  
  - [ ] Dans la colonne du nom, ajouter un lien sur le texte, pointant vers `5-superglobales.php`, en ajoutant le paramètre `birth` avec pour valeur l'année de naissance du compositeur
- [ ] Créer un commit avec vos changements
  
## 5. Superglobales

- Dans `5-superglobales.php` :
  - [ ] Récupérer la valeur de `birth` contenu dans l'url.
  - [ ] Vérifier que `birth` n'est pas vide et la mettre dans l'index `birth` de la session.
  - le formulaire du fichier doit avoir 2 champs valides :
    - [ ] email (type email) : `email`
    - [ ] quantité (type nombre) : `quantity`
  - [ ] Vérifier que l'email entré est valide en utilisant la fonction `filter_var` ([dont la documentation est ici](https://www.php.net/manual/fr/function.filter-var))
    - [ ] Si ça n'est pas le cas, afficher un message d'erreur : "Veuillez entrer un email valide"
  - Si les deux champs sont valides, ajouter ces entrées dans la session
    - [ ] `quantity` qui va contenir la valeur du champ `quantity` du formulaire
    - [ ] `email` qui va contenir la valeur du champ `email` du formulaire
- [ ] Créer un commit avec vos changements

## 6. Objets

- Dans le dossier `classes/Music` ( /!\ le sous-dossier est important)
  - Créer une classe abstraite `AbstractMusic` dans son propre fichier avec les propriétés suivantes (définies en `protected`)
    - [ ] `instruments` de type `array`
    - [ ] `start` de type `int` (année de début)
  - [ ] Écrire / générer les getters et les setters de ces propriétés
  - [ ] En commentaire de la classe, expliquer avec vos mots ce qu'est une classe abstraite
  - [ ] Ajouter des annotations (commentaires) aux propriétés et aux méthodes
  - [ ] Créer une classe `ClassicalMusic` qui étend cette classe `AbstractMusic`
  - [ ] Créer une classe `ModernMusic` qui étend cette classe `AbstractMusic`

- Dans `6-objets.php` :
  - [ ] Instancier 2 objets de type `AbstractMusic` (un de type `ClassicalMusic` et un de type `ModernMusic`) avec des valeurs distinctes
  - [ ] en afficher les valeurs de leurs propriétés avec des `echo`
- [ ] Créer un commit avec vos changements

## 7. Cours et bogues

Pour chacune des questions, cocher **la** case qui correspond (il y a toujours une seule bonne réponse). Pour cocher une cas, remplacer le `[ ]` à côté de la réponse voulue par `[x]`.
Pour tous les exemples utilisant des objets, nous partons du principe qu'il y a un fichier chargé de l'autoload (appel automatique de `require_once` sur les fichiers de nos classes) et qu'il fonctionne à tous les coups.

### 7.1. Quelle est la bonne manière d'utiliser un trait ?

- [ ] Solution 1
```php
// Traits/HasTestTrait.php
namespace Traits;

trait HasTestTrait {}

// Test/UseTestTrait.php
namespace Test;

use Traits\HasTestTrait;

class UseTestTrait
{
    use HasTestTrait;
}
```

- [ ] Solution 2
```php
// Traits/HasTestTrait.php
trait HasTestTrait {}

// Test/UseTestTrait.php
namespace Test;

use Traits\HasTestTrait;

class UseTestTrait
{
    use HasTestTrait;
}
```
- [ ] Solution 3
```php
// Traits/HasTestTrait.php
namespace Traits;

trait HasTestTrait {}

// Test/UseTestTrait.php
namespace Test;

class UseTestTrait
{
    use Traits\HasTestTrait;
}
```

### 7.2. Ce code plante, pourquoi ?

```php
// fichier Interfaces/HasNameInterface.php
namespace Interfaces;

interface HasNameInterface
{
    public function getName();
}

// fichier Test.php
use Interfaces\HasNameInterface;

class Test implements HasNameInterface
{
}
```

- [ ] Il manque un namespace dans la classe `Test`
- [ ] Il manque un `use` dans la classe `Test`
- [ ] La classe `Test` n'a pas de méthode `getName()`
