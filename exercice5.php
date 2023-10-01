<?php
echo"<h1>Calcul sur les variables</h1>";
$TVA=0.2 ;
$PRIX=150 ;
$Nombre=10; 
$ht=$PRIX*$Nombre;
$ttc=($ht*$TVA)*$Nombre;
echo("Le prix HT est de $ht dt <br>");
echo("Le prix TTC est de $ttc dt <br>");