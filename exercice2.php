<?php
echo "                    ". "*******  Table de multiplication *******";
echo "\n";
$saisie = readline("\nEntrer le nombre pour lequel vous voulez la table de multiplication :". " \n");
$i= 0;
// Boucle qui calcule la table de multiplication jusque 10
while($i++ <10){
     $tmp = $i*$saisie;
    echo $saisie . " *" . " " . $i . " =" . " " . $tmp."\n";
}
echo "\n";
// Demande à l'utilisateur si il veux continuer
$choix = readline("Voulez-vous continuer ?". " ");
switch($choix){
    // Choix 1 : Oui et donc la boucle se relance et calcule le nouveau nombre
    case $choix =1 :
        $saisie = readline("\nEntrer le nombre pour lequel vous voulez la table de multiplication :". " ");
        $i= 0;
        while($i++ <10){
            $tmp = $i*$saisie;
            echo $saisie . " *" . " " . $i . " =" . " " . $tmp."\n";
        }
        $choix = readline("Voulez-vous continuer ?". " ");
        break;
    // Choix 2 : Non et donc le programme s'arrête
    case $choix =2 :
        break;
    
}


?>