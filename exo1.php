<h1> Exercice 1</h1>

<p> Notre Formation DL commence aujourd'hui.</p>

<h2>Résultat</h2>

<?php

echo "<h3>Exercice 1</h3>";

$phrase = "Notre formation DL commence aujourd'hui";
$longueur = strlen ($phrase);
echo "La phrase << $phrase >> contient $longueur caractères<br>";
echo "La phrase << $phrase >> contient ". strlen($phrase). " caractères<br>";

echo "<h3>Exercice 2</h3>";

$nbMots = str_word_count($phrase);
echo "La phrase contient $nbMots mots<br>";

echo "<h3>Exercice 3</h3>";

echo $phrase. "<br>";
echo str_replace("aujourd'hui", "demain", $phrase);

echo "<h3>Exercice 4</h3>";



function Palindrome( string $text) {
    $text = str_replace(' ', '', $text);

    $text = preg_replace('/[^A-Za-z0-9\-]/', '', $text);

    $text = strtolower($text);
    //reverse the string
    $reverse = strrev($text);

    if ($text == $reverse) {
        echo "La phrase << $text >> est palindrome<br>";
    } 
    else {
        echo "La phrase << $text >> est pas palindrome";
    }
}

$text = "Engage le jeu que je le gagne";
Palindrome($text);

echo "<h3>Exercice 6</h3>";

$prixHT= 9.99; 
$nbArticles = 5;
$totalHT = $nbArticles * $prixHT;

$tauxTVA = 0.2;

$totalTTC = $nbArticles * $prixHT * (1 + $tauxTVA);

echo "Prix unitaire de l'article : $prixHT €<br>";
echo "Quantité : $nbArticles"."<br>";
echo "Taux de TVA : $tauxTVA"."<br>";
echo "Le montant de la facture à régler est de : $totalTTC €";

echo "<h3>Exercice 7</h3>";

$age = 11;

if(gettype($age)== "integer" || gettype($age) == "double" ) {
    if($age > 5 && $age < 8) {
        $resultat = "Poussin";
    } elseif($age > 7 && $age < 10) {
        $resultat = "Pupille";
    } elseif($age > 9 && $age < 12) {
        $resultat = "Minime";
    } else if($age >= 12 ) {
        $resultat = "Cadet";
    } else {
        $resultat = "Senior";
    }
    
    echo "La personne qui a $age ans est : $resultat<br>";
} else {
    echo "Pas de catégorie pour cette âge !<br>";
}


