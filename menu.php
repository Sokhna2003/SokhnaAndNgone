<?php
$addition = include 'addition.php'; 
$soustraction = include 'soustraction.php'; 
$multiplication = include 'multiplication.php'; 
$division = include 'division.php'; 
include 'calculatrice.php'; 

// Vous pouvez maintenant utiliser addition() ici

function Menu() : void{
  echo "====== Menu ========\n";
  echo "1. Addition\n";
  echo "2. Soustraction\n";
  echo "3. Multiplication\n";
  echo "4. Division\n";
  echo "5. Quitter\n";
  echo "\n=================\n";
}
do{
  Menu();
  $choix = intval(readline("veuillez saisir votre choix:"));
   if ($choix >= 1 && $choix < 5) {
      $a = intval(readline("Entrez le premier nombre : "));
      $b = intval(readline("Entrez le deuxième nombre : "));
  }
  switch ($choix){
    case 1:
    // PHP comprend qu'il doit chercher une fonction nommée "addition"
    echo "Résultat : " . calculer($a, $b, $addition)."\n"; 
    break;
    case 2:
    // PHP comprend qu'il doit chercher une fonction nommée "soustraction"
    echo "Résultat : " . calculer($a, $b, $soustraction)."\n"; 
    break;
    case 3:
    // PHP comprend qu'il doit chercher une fonction nommée "multiplication"
    echo "Résultat : " . calculer($a, $b, $multiplication)."\n"; 
    break;
    case 4:
    // PHP comprend qu'il doit chercher une fonction nommée "division"
    echo "Résultat : " . calculer($a, $b, $division)."\n"; 
    break;
    case 5:
    // PHP comprend qu'il doit chercher une fonction nommée "addition"
    echo "Au revoir \n"; 
    break;
    default:
    echo "Choix invalide \n";
      
  }
}while($choix!=5);