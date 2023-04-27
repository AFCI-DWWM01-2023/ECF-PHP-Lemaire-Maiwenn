<?php
echo "        ******Tableau périodique des éléments chimiques******";
echo "\n";
// Création du tableau associatif 
$periodique =array(
    'H'=> 'Hydrogène',
    'He'=> 'Hélium',
    'P'=> 'Phosphore',
    'V'=> 'Vanadium',
    'Pb'=> 'Plomb',
    'I'=> 'Iode',
    'Kr'=> 'Krypton',
    'X'=> 'Xénon',
    'Rn'=> 'Radon',
    'Zr'=> 'Zirconium'
);
echo "\n";
// Affichage du tableau périodique des éléments chimiques
foreach($periodique as $abreviation => $value){
    echo $abreviation . " :". " ". "$value\n"; 
}
echo "\n";
echo "*****************************";
echo "\n";
echo "Tableau trié :";
// Tri les éléments du tableau par ordre alphabétique
asort($periodique);
echo "\n";
// Affichage du tableau 
foreach($periodique as $abreviation => $value){
    echo $abreviation. " :". " ". "$value\n"; 
}


?>