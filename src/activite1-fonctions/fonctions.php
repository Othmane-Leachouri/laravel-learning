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

//max 
function maximumAvecMax(float $a, float $b, float $c): float {
    return max($a, $b, $c);
}

// 4 Vérifier si un nombre est premier
function estPremier(int $n): bool {

    if ($n < 2) {
        return false;
    }

    for ($i = 2; $i <= floor(sqrt($n)); $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }

    return true;
}


// Tests des fonctions

echo "Est pair : ";
var_dump(estPair(8));

echo "Est positif : ";
var_dump(estPositif(5));

echo "Maximum sans max() : ";
echo maximum(10, 25, 15);

echo "\nMaximum avec max() : ";
echo maximumAvecMax(10, 25, 15);

echo "\nEst premier : ";
var_dump(estPremier(7));

?>







