<h1>Exercice 11</h1>

<?php

// Tableau
$marques = ["Peugeot", "Renault", "BMW", "Mercedes"];

// compte le nombre de marque de voiture présent dans le tableau
$nbMarques = count($marques);

echo "Il y a $nbMarques marques de voitures dans le tableau : <br>";

echo "<ul>";

foreach ($marques as $valeur) {
    echo "<li>$valeur</li>";  
}

echo "</ul>";
// echo $marques [0]."<br>";
// echo $marques [1]."<br>";
// echo $marques [2]."<br>";
// echo $marques [3];
