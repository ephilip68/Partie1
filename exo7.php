<h1>Exercice 7</h1>

<?php

$age = 6;

    // Si âge entre 6 et 7, ils sont poussins
    if($age > 5 && $age < 8) {
        $resultat = "Poussin";

    // Sinon si âge entre 8 et 9, ils sont pupilles
    } elseif($age > 7 && $age < 10) {
        $resultat = "Pupille";

    // Sinon si âge entre 9 et 11, ils sont minimes
    } elseif($age > 9 && $age < 12) {
        $resultat = "Minime";

    // Sinon si âge entre 12 et 15, ils sont cadets
    } else if($age > 13 && $age < 16) {
        $resultat = "Cadet";

    // Sinon pas de catégorie
    } else{
        $resultat = "Pas de catégorie pour cette âge !<br>";
    }
   
    echo "La personne qui a $age ans est : $resultat <br>";