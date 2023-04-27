<?php
echo "                    "."********************\n";
echo "                    "."CALCUL SUR LE CERCLE\n";
echo "                    "."********************\n";
echo "\n";
$saisie = readline("Quel est le rayon du cercle :". " ");
// Calcul de la circonférence d'un cerlce
$circonference = 2*3.14*$saisie;
// Calcul de la surface d'un cercle
$surface = ($saisie*$saisie)*3.14;
echo "\nSa circonférence est de :". " ". $circonference;
// Montre à l'utilisateur que 2 chiffres après la virgule
echo "\nSa surface est". "          :" . " ". ceil($surface*100)/100;
echo "\n";
$oui = 1;
$saisie1= readline("\nVoulez-vous faire un autre calcul (1/2) :"." ");
// Si l'utilisateur tape 1 alors il recommence le programme
if($saisie1 = $oui){
    echo $saisie = readline("\nQuel est le rayon du cercle :". " ");
    $circonference = 2*3.14*$saisie;
    $surface = ($saisie*$saisie)*3.14;
    echo "\nSa circonférence est de :". " ". $circonference;
    echo "\nSa surface est". "          :" . " ".  number_format($surface);ceil($surface*100)/100;
    echo "\n";
    $saisie1= readline("\nVoulez-vous faire un autre calcul (1/2) :"." ");
    // Si l'utilisateur tape 2 alors il arrête le programme
}else{
echo "\nAu revoir et à bientôt";
}


?>