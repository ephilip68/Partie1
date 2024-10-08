<h1>Exercice 12</h1>

<?php 


// Tableau
$array = array( 

    // Clé et valeur
    "Mickaël" => "FRA", 
    "Virgile" => "ESP", 
    "Marie-Claire" => "ENG"
    
);

// Tri les élément du tableau de A à Z
ksort($array);

// Assignera les variables $name et $langue à la variable $array à chaque itération
foreach($array as $name => $langue){

    hello($name,$langue);
    
}

// function personnalisée "hello()" utilisant un swith afin de dire bonjour aux différents personnes dans leur langue respective
function hello($name, $langue) {

    switch($langue){
        case "FRA": 
            echo "Salut ". $name."<br>";
        break;
        case "ESP": 
            echo "Hola ". $name."<br>";
        break;
        case "ENG": 
            echo "Hello ". $name."<br>";
        break;
        default: 
            echo "Langue non gérée pour ".$name."<br>";
        break; 
    } 
     
}











