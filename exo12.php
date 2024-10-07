<h1>Exercice 12</h1>

<?php 




function hello() {
    $array = [
        "Mickaël" => "FRA", 
        "Virgile" => "ESP", 
        "Marie-Claire" => "ENG"
    ];

    foreach($array as $name => $langue){
    }

    // $langues = 3;

    switch($langue){
        case 1: 
            $langue = "FRA";
            $names = "Mickaël";
            echo "Salut ". $names;
        break;
        case 2: 
            $langue = "ESP";
            $names = "Virgile";
            echo "Hola ". $names;
        break;
        case 3: 
            $langue = "ENG";
            $names = "Marie-Claire";
            echo "Hello ". $names;
        break;
        default: 
            echo "error";
        break; 
    } 
    
}

hello();










