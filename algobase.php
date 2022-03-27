<?php 

$tabl = ["Salim", "Hanane", "Bouchra"];
http://localhost:3000/?nb1=100&nb2=100


$total = $_GET["nb1"] + $_GET["nb2"];

echo "<p> Total : $total </p>";


$tabAssocs = [
    'Nom' => "Salim",
    'Prenom' => "Hanane",
    'Age' => 20
];

for($i = 0 ; $i < count($tabl);$i++){
    echo'la boucle for classique en php <br>';
}

echo '<pre>';
var_dump($tabl);
echo '</pre>';

echo '<pre>';
var_dump($tabAssocs);
echo '</pre>';

print_r($tabAssocs['Age'].'<br>');
print_r($tabl[2]);

foreach ($tabAssocs as $key => $tabAssoc){
    print_r('<br>'.$tabAssocs['Nom'].'<br>');
    print_r('<br>'.$key.'<br>');
}

if ($tabAssocs['Nom'] !== 'Salim'){
    print_r('<br>Nous rentrons dans le if 
    de la condition puisque le Nom est égale à salim');
}else{
    print_r('<br>Après avoir modifié le nom dans le tableau associatif nous rentrons maintenant dans le else de la condition tout simplement car le Nome du tableau associatif qui pourrait être comparé à un objet javascript est différent');
}

function testDesFunction ($nb1, $nb2){
    print_r('<br>Nous alons maintenant tester les fonctions en php qui sont très proche des fonctions en javascript');
    $somme = $nb1 + $nb2;
    print_r($somme);
    return $somme;
}

testDesFunction(10,20);

