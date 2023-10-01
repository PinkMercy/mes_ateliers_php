<?php

$a = 10;
$b = 5;

$result = $a <=> $b; 
echo $result;
switch ($result) {
    case -1:
        echo "$a est inférieur à $b";
        break;
    case 0:
        echo "$a est égal à $b";
        break;
    case 1:
        echo "$a est supérieur à $b";
        break;
    default:
        echo "Erreur de comparaison";
        break;
}


