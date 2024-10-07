<h1>Exercice 12</h1>

<?php 




function hello() {
    $array = [
        "Mickaël" => "FRA", 
        "Virgile" => "ESP", 
        "Marie-Claire" => "ENG"
    ];

    foreach($array as $names => $langues){
    }

    $langues = 3;

    switch($langues){
        case 1: 
            $langues = "FRA";
            $names = "Mickaël";
            echo "Salut ". $names;
        break;
        case 2: 
            $langues = "ESP";
            $names = "Virgile";
            echo "Hola ". $names;
        break;
        case 3: 
            $langues = "ENG";
            $names = "Marie-Claire";
            echo "Hello ". $names;
        break;
        default: 
            echo "error";
        break; 
    } 
    
}

hello();










