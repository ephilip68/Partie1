<h1> Exercice 1</h1>

<p> Notre Formation DL commence aujourd'hui.</p>

<h2>Résultat</h2>

<?php

$phrase = "Notre formation DL commence aujourd'hui";

// "strlen" à été utilisé pour renvoyer le nombre de caractère que contient la phrase
$longueur = strlen ($phrase);

echo "La phrase << $phrase >> contient $longueur caractères<br>";
echo "La phrase << $phrase >> contient ". strlen($phrase). " caractères<br>";
