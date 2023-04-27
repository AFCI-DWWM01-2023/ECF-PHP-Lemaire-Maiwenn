<?php
echo "Racine de l'équation du 2nd degré";
echo "\n          ". "Y = ax² + bx + c";
echo "\n";
$a = readline("Quelle est la valeur de a :" . " ");
$b =  readline("Quelle est la valeur de b :" . " ");
$c =  readline("Quelle est la valeur de c :" . " ");
// Calcul le déterminant
$delta = ($b*$b)-4*$a*$c;
// Calcul de X1
$x1=(-$b +  sqrt($delta))/2*$a;
//  Calcul de x2
$x2=(-$b - sqrt($delta))/2*$a;
// Si le déterminant est inférieur à zero alors pas de racine réelle
if($delta < 0){
    echo "L'équation ne possède pas de racine réelle";
    echo "\nDelta =". " ".$delta;
    // Si le déterminant est supérieur à zero alors deux racines distinctes
}elseif($delta>0){
    echo "Léquation possède 2 racines distinctes :";
    echo "\nDelta =". " ".$delta;
    echo "\nL'équation s'annule pour :";
    echo "\nX1 =". " $x1";
    echo "\nX2 =". " $x2";
}

?>