<?php
function calculer (int $a , int $b, $resultat):int{
    return $resultat($a,$b);
};
// addition
$add = calculer (10, 5, function (int $a, int $b){
    return $a+$b;

});
echo "La somme est de : ". $add . "\n";
// soustraction
$sous = calculer(10,5, function(int $a ,int $b){
    return $a - $b;

});
echo "La difference est de : ".$sous . "\n";
// multiplication
$multi = calculer(10,5, function(int $a ,int $b){
    return $a * $b;

});
echo "Le produit est de : ". $multi . "\n";
// division
$div = calculer(10,5, function(int $a ,int $b){
    return $a / $b;

});
echo "Le quotient est de : ". $div . "\n";