<h1>Exercice 13</h1>

<?php

// tableau
$eleves = [
    "eleve" => [10, 12, 8, 19, 3, 16, 11, 13, 9]
];

function calculerMoyenne($notes) : float {
    //"count" utilisé pour compter le nombre de notes présent dans le tableau
    $nbNotes = count($notes);
    // array_sum renvoie la somme de toutes les valeurs du tableau
    $sommeNotes = array_sum($notes);
    // "round, 2" utilisé pour que la moyenne calculée si dessous soit arrondi à 2 chiffres après la virgule
    $moyenne = round ($sommeNotes / $nbNotes, 2);

    return $moyenne;
}


foreach($eleves as $eleve => $notes){
    echo "Les notes obtenues par l'élève sont : 10 12 8 19 3 16 11 13 9<br>";
    echo "Sa moyenne général est donc de : ".calculerMoyenne($notes)."<br>";
}



