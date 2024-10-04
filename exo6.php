<h1>Exercice 6</h1>

<?php

$prixHT= 9.99; 
$nbArticles = 5;
$totalHT = $nbArticles * $prixHT;

$tauxTVA = 0.2;

$totalTTC = $nbArticles * $prixHT * (1 + $tauxTVA);

echo "Prix unitaire de l'article : $prixHT €<br>";
echo "Quantité : $nbArticles"."<br>";
echo "Taux de TVA : $tauxTVA"."<br>";
echo "Le montant de la facture à régler est de : $totalTTC €";