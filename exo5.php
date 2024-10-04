<h1>Exercice 5</h1>

<?php

$valeur = 100;
$tauxFr = 0.15244902;
$convert = $valeur * $tauxFr;

// "round" et ",2" à été utilisé pour qu'il y est 2 chiffres après la virgule
$resultat = round($convert, 2);

echo "Montan en francs : $valeur"."<br>";
echo  $valeur. " francs = ". $resultat ." €";