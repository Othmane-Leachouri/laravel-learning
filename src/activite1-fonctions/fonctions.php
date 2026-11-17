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


// 1. Calculer le prix TTC
function calculerTTC(float $ht, float $tva = 20.0): float {
    return $ht + ($ht * $tva / 100);
}

// 2. Calculer le prix après remise
function calculerRemise(float $prix, float $pourcentage): float {
    $prixFinal = $prix - ($prix * $pourcentage / 100);

    return round($prixFinal, 2);
}

// 3. Calculer le montant total de la facture
function calculerFacture(
    float $prixUnitaire,
    int $quantite,
    float $remise = 0,
    float $tva = 20.0
): float {

    $totalHT = $prixUnitaire * $quantite;

    $totalApresRemise = calculerRemise($totalHT, $remise);

    return calculerTTC($totalApresRemise, $tva);
}

// 4. Affichage des résultats

$ht = 100;
$tva = 20;

$prixTTC = calculerTTC($ht, $tva);

echo "Prix TTC : " .
    number_format($prixTTC, 2, ",", " ") . " MAD";

echo "\nPrix après remise : " .
    number_format(calculerRemise(100, 10), 2, ",", " ") . " MAD";

$facture = calculerFacture(100, 10, 10, 20);

echo "\nTotal facture : " .
    number_format($facture, 2, ",", " ") . " MAD";


?>







