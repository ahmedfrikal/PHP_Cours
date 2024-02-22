<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h3>Tableau clé valeur </h3>
<?php

//Remplissage de Tableau

$tableau=array(
        'maroc'=>'rabat',
    'palastine'=>'qods',
    'france'=>'paris'
);
//On peut changer array () par [] a partir de la version 5.2

//1- Afficher le tableau avec le key
foreach ($tableau as $t=>$v){
    echo "Pays :".$t." Capitale :".$v."</br>";
}

//2-Ajouter un element a la fin de tableau
//   dans les tableau associatif n'est pas authoriser d'utiliser array push $tableau['algerie'] = 'algerie';
$tableau['algerie']='algerie';
//array_push()

//3-rand =>donner un nombre aleratoire

// 4 - rechercher si element existe ou non
// in-array(element find,Tableau); return bolean

// 5 -le nombre de tableau
// count($Tableu);
?>
</body>
</html>