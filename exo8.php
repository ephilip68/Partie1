<h1>Exercie 8</h1>

<?php


function displayMultiplicationTable() {

    $number = 8;

    echo "Table de $number :<br>";

    // Boucle utilisé pour que i soit 1, et que i soit infèrieur ou égal à 10, ++i incrémente la valeaur de 1 une fois l'opération terminée
    for ($i = 1; $i <= 10; ++$i) {
    
    $resultat = $number * $i."<br>";
    
    echo "$number x $i = " . $resultat;
    }
}

displayMultiplicationTable();