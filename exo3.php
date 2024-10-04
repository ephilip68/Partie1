<h1>Exercice 3</h1>

<?php

$phrase = "Notre formation DL commence aujourd'hui";

echo $phrase. "<br>";

// "str_replace" à été utilisé pour remplacer le mot aujourd'hui par demain dans la phrase
echo str_replace("aujourd'hui", "demain", $phrase);