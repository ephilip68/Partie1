<h1>Exercice 9</h1>

<?php

$age = 32;
$sexe = "Femme";

// Si le sexe est une femme entre 18 et 36 ans, elle est imposable
if ($sexe == "Femme" && $age > 17 && $age < 36){
    $resultat = "La personne est imposable";

// Sinon si le sexe est un homme qui à plus de 20 ans, il est imposable 
} else if($sexe == "Homme" && $age >= 20){
    $resultat = "La personne est imposable";
    
// Sinon ils sont pas imposable
}else {
    $resultat = "La personne est non imposable";
}

echo "Age : ". $age. "<br>";
echo "Sexe : ". $sexe. "<br>";
echo $resultat. "<br>";