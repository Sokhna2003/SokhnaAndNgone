<?php
$addition = include 'addition.php'; 
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
  $choix = intval(readline("veuillez saisir votre choix:\n"));
   if ($choix >= 1 && $choix <= 5) {
      $a = intval(readline("Entrez le premier nombre : "));
      $b = intval(readline("Entrez le deuxième nombre : "));
  }
  switch ($choix){
    case 1:
    // PHP comprend qu'il doit chercher une fonction nommée "addition"
    echo "Résultat : " . calculer($a, $b, $addition); 
    break;

   
      
  }
}while($choix!=5);