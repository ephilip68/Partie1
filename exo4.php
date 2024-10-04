<h1>Exercice 4</h1>

<?php

$text = "Engage le jeu que je le gagne";

function Palindrome( string $text) {

    // "preg_replace" enlève les caractères spéciaux
    $text = preg_replace('/[^A-Za-z0-9\-]/', '', $text);

    // "strlower" enlève les majuscule et les met en miniscule 
    $text = strtolower($text);

    // "strrev" inverse la phrase
    $reverse = strrev($text);

    // Si texte à la même valeur que le contenu stocké dans la variable "reverse" il est palindrome
    if ($text == $reverse) {
        echo "La phrase << $text >> est palindrome.<br>";
    } 

    // Sinon il nel'est pas
    else {
        echo "La phrase << $text >> est pas palindrome.";
    }
}

Palindrome($text);
