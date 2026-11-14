<?php
declare(strict_types=1);
// Les quatre opérations
function additionner(float $x,float $y):float{
return $x + $y ;
}
function soustraire(float $x,float $y):float {
return $x -$y;
}
function multiplier(float $x,float $y):float{
return $x * $y;
}
function diviser(float $x, float $y):float{
if($y == 0 ){
 throw new InvalidArgumentException("Division par zéro impossible");
}
return $x / $y ;
}
//Fonctions logiques
function estPair(int $n):bool{
if($n % 2 == 0){
return true;
}
return false;
}

function estPositif(float $n):bool{
if($n>0){
return true;
}
}

function maximum(float $a,float $b,float $c):float{
$max = $a;
if($b>$max ){
  $max = $b;
}
else if ($c>$max) {
 $max = $c;
}

return $max;
}
echo maximum(9.3,8,5);









