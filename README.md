# Exos php 

## Exercice 1
* Créez une fonction PHP qui affiche une boîte d’alerte à partir de la fonction JavaScript
  dont la syntaxe est alert("chaine_de caractères") . Cette fonction peut être appelée avec
  comme paramètre le texte du message à afficher. Elle est particulièrement utile pour affi-
  cher des messages d’erreur de manière élégante, sans que ces derniers restent écrits dans
  la page.
  
## Exercice 2
* Écrivez une fonction dont le paramètre **passé par référence** est un tableau de chaînes de
 caractères et qui transforme chacun des éléments du tableau de manière que le premier
 caractère soit en majuscule et les autres en minuscules, quelle que soit la casse initiale
 des éléments, même si elle est mixte.
Le passage par référence c'est cela : http://php.net/manual/fr/language.references.pass.php

## Exercice 3
* **Petite Bataille Navale**
* A partir de l'image du tableau Exo_php.png :
* Construire le tableau associatif php, correspondants aux lignes et aux colonnes de l'image.

* Vous devez créez une fonction qui prend deux arguments;
 -le premier argument de type char
 -le second de type int (coordonnées horizontales et verticales du tableau).

* La fonction doit retourner trois valeurs différentes:
  
      Si les coordonnées correspondent à une case grise, alors la fonction affichera "Touché mon Capitaine!".
      Si les coordonnées correspondent à une case blanche, alors la fonction affichera "C'est rappé!".
      Si les coordonnées ne correspondent à aucune case, alors la fonction affichera hors-jeu.
