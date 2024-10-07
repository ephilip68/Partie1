<h1>Exercice 10</h1>

<?php

$price = 152;
$payment = 200;
$rest = $payment - $price;

$billets10 = 0;
$billets5 = 0;
$coins2 = 0;


// Tant que reste est supèrieur ou égale à 10
while($rest >= 10){

    // rest - 10 soustrait le rest par 10, soit "rest" 48€ qui sera alors incrémenté 4 fois avec "billets10++(billet de 10€)" donc il restera 8€
    $rest = $rest - 10; 
    $billets10++;
  
}

// Si reste est supèrieur ou égale à 5
if($rest >= 5){

    // rest - 5 soustrait le rest par 5, soit "rest" 8€ qui sera alors incrémenté 1 fois avec "billets5++(billet de 5€)" donc il restera 3€
    $rest = $rest - 5;
    $billets5++;
    
} 

// Tant que reste est supèrieur ou égale à 2
while($rest >= 2){

    // rest - 2 soustrait le rest par 2, soit "rest" 3€ qui sera alors incrémenté 1 fois avec "coins2(pièce de 2€)" donc il restera 1€
    $rest = $rest - 2;
    $coins2++;
    
}  

// Les 1€ restant se trouvera dans la vairable $rest

echo "Montant à payer : $price € <br>";
echo "Montant versé : $payment € <br>";
echo "Reste à payer : " .$payment - $price ." €" ."<br>";
echo "Rendu de monnaie : ".$billets10." billets de 10 € - ".$billets5." billet de 5 € - ".$coins2." pièce de 2€ - ".$rest." pièce de 1 €"; 




 


